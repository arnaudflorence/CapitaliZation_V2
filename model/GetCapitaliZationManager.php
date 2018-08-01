<?php
require_once('model/Manager.php');

// Get categories and them id
function getCompteByClient()
{
  $command = "SELECT CONCAT(NOM_CLIENT,' ',PRENOM_CLIENT) AS nom_Prenom," .
    " NUMERO," .
    " NOM_COMPTE," .
    " DATE_OPERATION," .
    " CREDIT_OPERATION," .
    " DEBIT_OPERATION," .
    " NOM_TYPE," .
    " NOM_CATEGORIE," .
    " OPERATION_FIXE," .
    " LIBELLE" .
    " FROM CATEGORIE ca, CLIENT cl, COMPTE co, OPERATION o, TYPE t" .
    " WHERE ca.ID_CATEGORIE = o.ID_CATEGORIE" .
    " AND cl.ID_CLIENT = co.ID_CLIENT".
    " AND co.ID_COMPTE = o.ID_COMPTE".
    " AND t.ID_TYPE = o.ID_TYPE".
    " AND cl.ID_CLIENT = 1";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}

function getSolde()
{
  $command = "SELECT (SUM(CREDIT_OPERATION))-(SUM(DEBIT_OPERATION)) as Solde" .
    " FROM OPERATION";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}


function getNumCompte()
{
  $command = "SELECT CONCAT(NOM_CLIENT,' ',PRENOM_CLIENT) AS nom_Prenom,".
          " co.NUMERO,".
          " ID_COMPTE".
          " FROM CLIENT c, COMPTE co".
          " WHERE co.ID_CLIENT = c.ID_CLIENT".
          " AND c.ID_CLIENT = 1";
        $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}

function getInfoPerso()
{
  $command = "SELECT CONCAT(NOM_CLIENT,' ',PRENOM_CLIENT) AS nom_Prenom,".
          " SEXE,".
          " NOM_AGENCE,".
          " NOM_BANQUE,".
          " NUM_BANQUE,".
          " b.ADRESSE,".
          " b.DEPARTEMENT,".
          " NOM_COMPTE, ".
          " b.VILLE, ".
          " co.NUMERO".
          " FROM CLIENT c,BANQUE b,AGENCE a, COMPTE co".
          " WHERE a.ID_AGENCE = b.ID_AGENCE".
          " AND co.ID_BANQUE = b.ID_BANQUE".
          " AND co.ID_CLIENT = c.ID_CLIENT";
        $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}
function getAllType()
{
  $command = "SELECT ID_TYPE," .
          " NOM_TYPE".
          " FROM TYPE";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}
function getAllCategorie()
{
  $command = "SELECT ID_CATEGORIE," .
          " NOM_CATEGORIE".
          " FROM CATEGORIE";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_CapitaliZation");
  $answer = $elanDb->ask($command);
  return ($answer);
}
function getIdentifiant()
{
  $command = "SELECT ID_CATEGORIE," .
          " NOM_CATEGORIE".
    " FROM CATEGORIE";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_gestion_budget");
  $answer = $elanDb->ask($command);
  return ($answer);
}
?>
