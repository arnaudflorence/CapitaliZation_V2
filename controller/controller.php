<?php

require_once('model/GetCapitaliZationManager.php');
require_once('model/SetCapitaliZationManager.php');
require_once('view/viewCompte.php');
require_once('view/viewInfoPerso.php');
require_once('view/viewAjoutOpe.php');
require_once('view/viewAcceuil.php');
require_once('view/viewResultformValide.php');
function doCompteByClient()
{
    $data = getCompteByClient();
    $data1 = getSolde();
    viewCompteClient( $data ,$data1);
}
function doInfoClient()
{
    $data = getInfoPerso();
    $data1 = getSolde();
    viewInfo( $data,$data1);
}
function doAjoutOperation($id)
{
    $data = getAllType();
    $data1 = getAllCategorie();
    $data2 = getNumCompte();
    viewAjout( $data, $data1, $data2);
}
function doSetForm($id)
{
  if ($id == 1)
    setNewOperation($_POST) == viewResultForm();
  else if ($id == 2)
    setCategorie($_POST) == viewResultForm();
  else if ($id == 3) 
    setNewType($_POST) == viewResultForm();
}
function doConnexion()
{
    $data = getIdentifiant();
    viewConnexion( $data );
}

