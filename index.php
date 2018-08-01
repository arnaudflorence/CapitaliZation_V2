<?php

require_once 'controller/controller.php';

if (!ISSET($_GET['action']))
 {	// Display standard WebPage index.php
   doConnexion();
 }
else
  {	// Display Webpage related to index.php?action=[action]
//    if ($_GET['action'] == "viewAeroport") // action=viewSessionDetail
//      doAeroportID(ISSET($_GET['id']) ? $_GET['id'] : 1);
    if ($_GET['action'] == "viewInfoPerso") // action=viewSessionDetail
     doInfoClient();
    else if ($_GET['action'] == "viewAjoutOpe")
        doAjoutOperation(ISSET($_GET['id']) ? $_GET['id'] : 0);
    else if ($_GET['action'] == "viewCompte")
        doCompteByClient();
    else if ($_GET['action'] == "set") // action=set
      doSetForm(ISSET($_GET['id']) ? $_GET['id'] : 0);
    else
      echo "404 not found !"; // Error webpage
 }

