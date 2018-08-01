<?php

function viewAjout( $data, $data1, $data2)
{
?>
<!DOCTYPE html>

<html>
<!------------------------------------------------------------------------------------------------------------------------------------------------------- Header --------------------------------------------------------------------------------------------------------------------------------------------------->
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/styleAjoutOpe.css">
        
    </head>   
<body >

<div id="main_wrapper">
    <!----------------------------------------------------------------------------------------------------------------------------------------------------- Barre de nav --------------------------------------------------------------------------------------------------------------------------------------------------->
<div id=navbar>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php">CapitaliZation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="#">Deconnecxion</a>
          </li>
            <div class="dropdown">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Menu
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item"  type="button"><a id="boutonMenu" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewCompte">Opérations</a></button>
                <button class="dropdown-item" type="button"><a  id="boutonMenu" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewInfoPerso">MonCompte</a></button>
                <button class="dropdown-item" type="button"><a  id="boutonMenu" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewAjoutOpe">Formulaires</a></button>
             </div>
           </div>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>
 </div>
   
<!-------------------------------------------------------------------------------------------------------------------------------------------------------- FORM 1 ------------------------------------------------------------------------------------------------------------------------------------------------------>        
<div id="form1"> 
<h1>Ajouter une opération : </h1>  
<!--------------------------------------------    DEBUT FORM---------------------------------------------------->
<form action="index.php?action=set&id=1" method="post"> 
 <!---------------------- Liste déroulante CHOIX COMPTE ------------------------>   
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Compte :</label>
      </div>
      <select class="form-control" id="type" name="Compte">
            <!-- Récupère les données de chaque TYPE sous forme d'une liste déroulante -->
            <?php $i = 0;          
            while ($i < count($data2[$i]['NUMERO'])){ ?>
                <option value="<?= $data2[$i]['ID_COMPTE'] ?>"><?= $data2[$i]['NUMERO'] ?></option>
            <?php $i++;} ?>
        </select>
    </div>
  <!---------------------- Liste déroulante CHOIX CATEGORIE ------------------------>    
    <div class="input-group mb-3">
      <select name="LienCategorie" class="custom-select" id="inputGroupSelect02"required>
          <option selected><strong>Choose...</strong></option>
        <?php
                   $i = 0;            
                   while ($i < count($data1)){
                         echo " <option value=".($i+1).">". $data1[$i]['NOM_CATEGORIE']."</option>";
                   $i++;}
                ?>
      </select>
      <div class="input-group-append">
        <label class="input-group-text" for="inputGroupSelect02">Catégorie de dépense</label>
      </div>
    </div>
  <!---------------------- Liste déroulante CHOIX TYPE------------------------>  
  
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Type de paiement :</label>
      </div>
      <select name="LienType" class="custom-select" id="inputGroupSelect01" required>
        <option selected><strong>Choose...</strong></option>
              <?php
                   $i = 0;            
                   while ($i < count($data)){
                         echo " <option value=".($i+1).">". $data[$i]['NOM_TYPE']."</option>";
                   $i++;}
                ?>
      </select>
    </div>
 <!---------------------- Libellé ------------------------>  

<div class="input-group mb-3">
    <span class="input-group-text">Libellé</span><input name="Libelle" type="text" class="form-control" placeholder="" >
</div>


 <!---------------------- Liste déroulante MONTANT ------------------------>  

<div class="input-group mb-3">
    <span class="input-group-text">Debit</span><input value="0" name="operationDebit" type="text" class="form-control" placeholder="Débit" ><span class="input-group-text">€</span>
    </div>
 <div class="input-group mb-3">
    <span class="input-group-text">Credit</span><input value="0" name="operationCredit" type="text" class="form-control" placeholder="Crédit" ><span class="input-group-text">€</span>
</div>
 
 
<!---------------------- Liste déroulante CHOIX DEPENSE FIXE ------------------------>  
<div class="form-group form-check">
    <input type="hidden" class="form-check-input" id="exampleCheck1" name="operationFixe" value="0">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="operationFixe" value="1">
    <label class="form-check-label" for="exampleCheck1">Dépense Fixe :</label>
</div>

<!------------------------- Liste déroulante CHOIX DATE ----------------------------->  

    <fieldset>
        <legend id="legend">Date D'oprération :</legend>
        <div>
            <input id="input" type="date" id="start" name="dateOperation"
                   value="2018-08-08"
                   min="2018-01-01" max="2018-12-31"  required/>
        </div>   
    </fieldset>  
    
    <button id="submit" type="submit" class="btn btn-primary my-1">Submit</button>       
     
  </form>  
</div>
        
<!--------------------------------------------------------------------------------------------------------------------------------------------------------- FORM 2 --------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="form2"> 
<h1>Nouvelle catégoie : </h1>
  <form action="index.php?action=set&id=2" method="post">       
         <span class="input-group-text">Nouvelle Categorie :</span><input name="NomCategorie" type="text" class="form-control" placeholder="" >
    <button id="submit" type="submit" class="btn btn-primary my-1">Submit</button>            
  </form>  
 </div> 

<!-------------------------------------------------------------------------------------------------------------------------------------------------------- FORM 3 ---------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="form3">
<h1>Nouveaux type : </h1>
  <form action="index.php?action=set&id=3" method="post">       
      <span class="input-group-text">Nouveaux Type :</span><input name="NomType" type="text" class="form-control" placeholder="" >
    <button id="submit" type="submit" class="btn btn-primary my-1">Submit</button>      
  </form>  



</div>  
</div>
</body>
</html>
<?php } ?>
 