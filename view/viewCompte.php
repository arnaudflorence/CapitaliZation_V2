<?php

function viewCompteClient( $data,$data1)
{
?>
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/styleCompte.css">--
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
   
<!-------------------------------------------------------------------------------------------------------------------------------------------------------- BODY ------------------------------------------------------------------------------------------------------------------------------------------------------>    
   
        <div id="wrapper_table" action="index.php?action=set&id=1" method="post">
            <div class="card">
                <div class="card-body">
                    
                    <h1><?php echo $data[0]['nom_Prenom'];  ?></h1>
                    <h2>Numéro de compte : <?php echo $data[0]['NUMERO'];  ?></h2>
                    <?php 
                    $result = (int)$data1[0]['Solde'];
                    if ($result >= 0){
                    echo "<h3 id='SoldePositif'>SOLDE : ". $result ."</h3>"; }
                    else{
                    echo "<h3 id='SoldePNegatif'>SOLDE : ". $result ."</h3>"; }
                    ?>
                    <!--Table-->
                    <table class="table table-hover table-responsive-md table-fixed">
                        <!--Table head-->
                        <thead>
                           
                            <tr>
                                <th id='titre-table'>Date</th>
                                <th id='titre-table'>Libellé</th>
                                <th id='titre-table'>Type</th>
                                <th id='titre-table'>Categorie</th>
                                <th id='titre-table'>Débit</th>
                                <th id='titre-table'>Crédit</th>
                            </tr>
                       
                        </thead>
                        
                       <?php
                        $i = 0;            
                        while ($i < count($data)){
                             if ($data[$i]['OPERATION_FIXE'] == 0) {
                                echo "<tbody><tr><th scope='row'>".$data[$i]['DATE_OPERATION']."</th>";
                                echo "<td>".$data[$i]['LIBELLE']."</td>";
                                echo "<td>".$data[$i]['NOM_TYPE']."</td>";
                                echo "<td>".$data[$i]['NOM_CATEGORIE']."</td>";
                                if ($data[$i]['DEBIT_OPERATION'] == 0) {
                                    echo "<td id='debit'></td>";}
                                else{
                                    echo "<td id='debit'> <i>-</i> ".$data[$i]['DEBIT_OPERATION']."</td>";}                             
                                if ($data[$i]['CREDIT_OPERATION'] == 0) {
                                    echo "<td id='credit'></td></tr></tbody>"; }
                                else{
                                    echo "<td id='credit'><i>+</i> ".$data[$i]['CREDIT_OPERATION']."</td></tr></tbody>"; }}                                                       
                              else{
                                echo "<tbody id='fixe' ><tr><th scope='row'>".$data[$i]['DATE_OPERATION']."</th>";
                                echo "<td>".$data[$i]['LIBELLE']."</td>";
                                echo "<td>".$data[$i]['NOM_TYPE']."</td>";
                                echo "<td>".$data[$i]['NOM_CATEGORIE']."</td>";
                                if ($data[$i]['DEBIT_OPERATION'] == 0) {
                                    echo "<td id='debit'></td>";}
                                else{
                                    echo "<td id='debit'> <i>-</i> ".$data[$i]['DEBIT_OPERATION']."</td>";}                             
                                if ($data[$i]['CREDIT_OPERATION'] == 0) {
                                    echo "<td id='credit'></td></tr></tbody>"; }
                                else{
                                    echo "<td id='credit'> <i>+ </i>".$data[$i]['CREDIT_OPERATION']."</td></tr></tbody>"; }}
                                
                                
                                $i++;
                        }
                      ?>
                </table>
                </div>
            </div>
        </div>
        <a id="bouton" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewAjoutOpe"><img src="IMG/plusVert.png" alt="Ajout"/> Ajouter une opération  </a>
    </div>
        <p id='fixe'>dépense(s) fixe</p>   

</body>
</html>

<?php } ?>
 