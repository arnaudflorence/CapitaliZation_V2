<?php

function viewInfo( $data, $data1)
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
        <link rel="stylesheet" href="CSS/styleInfoPerso.css">--
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
                    <h2> <?php echo $data[0]['SEXE'];  ?></h2>

                    <table class="table table-hover table-responsive-md table-fixed">
                        <thead>
                            <h3><strong>Banque : </strong><?php echo $data[0]['NOM_AGENCE'],"  ".$data[0]['NOM_BANQUE'];  ?></h3>

                        
                       <?php
                      
                                echo "<p id='info'><strong>Numéro de téléphone : </strong>".$data[0]['NUM_BANQUE']."</p>";                             
                                echo "<p id='info'><strong>Adresse : </strong><br>".$data[0]['ADRESSE']."<br>".$data[0]['DEPARTEMENT']."<br>".$data[0]['VILLE']."</p>";     
                        ?>
                        
                                
                           
                            <tr>
                                <th id='titre-table'>Numéro de Compte</th>
                                <th id='titre-table'>Denomination</th>
                                <th id='titre-table'>Solde</th>
                                <th id='titre-table'>Historique</th>
                            </tr>
                       
                        </thead>
                        <tbody>
                        <?php
                        $i = 0; 
                        $result = (int)$data1[0]['Solde'];
                        while ($i < count($data[$i]['NUMERO'])){
                                echo "<tr><th scope='row'>".$data[$i]['NUMERO']."</th>";
                                echo "<td>". $data[$i]['NOM_COMPTE'] ."</td>";
                                if ($result >= 0){
                                    echo "<td id='SoldePositif'><i>+ </i>". $result ."</td>";}
                                else{
                                    echo "<td id='SoldeNegatif'>- ". $result ."</td>";}
                                echo "<td><a href='http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewCompte'>Détails</a></td></tr></tbody>";      
                             $i++;            
                        }
                      ?>
                      </tbody>
                            </table>
                </div>
            </div>
        </div>

</div>
</body>
</html>

<?php } ?>
 