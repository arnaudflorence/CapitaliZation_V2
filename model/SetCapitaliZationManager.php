<?php

require_once('model/Manager.php');

function setCategorie($post)
{
    $command = "INSERT INTO CATEGORIE(".
      " NOM_CATEGORIE)" .
      " VALUES ('" .
      $post['NomCategorie'] . "')";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_CapitaliZation");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
    return "";
}
function setNewType($post)
{
    $command = "INSERT INTO TYPE(".
      " NOM_TYPE)" .
      " VALUES ('" .
      $post['NomType'] . "')";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_CapitaliZation");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
    return "";
}

function setNewOperation($post)
{
    $command = "INSERT INTO OPERATION(".
      " LIBELLE," .
      " ID_TYPE," .
      " ID_CATEGORIE," .
      " ID_COMPTE," .
      " OPERATION_FIXE, " .
      " DEBIT_OPERATION, " .
      " CREDIT_OPERATION, " .
      " DATE_OPERATION )" .
      " VALUES ('" .
      $post['Libelle'] . "', '" .
      $post['LienType'] . "', '" .
      $post['LienCategorie'] . "', '" .
      $post['Compte'] . "', '" .
      $post['operationFixe'] . "', '" .
      $post['operationDebit'] . "', '" .
      $post['operationCredit'] . "', '" .
      $post['dateOperation'] . "')";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_CapitaliZation");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
    return "";
}

?>
