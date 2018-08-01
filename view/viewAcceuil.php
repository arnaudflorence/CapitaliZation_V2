<?php

function viewConnexion($data )
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
        <link rel="stylesheet" href="CSS/styleAcceuil.css">
        
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
            <a class="nav-link" href="http://sites.elannet.info/stasta/arnaud/CapitaliZation_V2/index.php?action=viewInfoPerso">Connecxion</a>
          </li>  
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>
 </div>
   
<!-------------------------------------------------------------------------------------------------------------------------------------------------------- BODY------------------------------------------------------------------------------------------------------------------------------------------------------>        
<h1> Bienvenue sur CapitaliZation !</h1>
<h2> l'appli qui va faire déborder vos caisses de pognion !</h2>

<div class="bandeau">
 <p>
  <img src="IMG/fond.jpeg" alt="pensées de Giverny" />
 </p>
</div>
<p id='copiright'>  CapitaliZation © Arnaud Florence, celui qui deviendra riche comme Picsou </p>
</div>
</body>
</html>
<?php } ?>
 