<?php
session_start();

if(empty($_SESSION['utilisateur']))
{
    header("location:connexion.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

<style>

*{
    font-family: 'Roboto Condensed';
    color: black;
}
.film-modif{
    color: black;
}
.film-modif:hover{
    color: black;
}
.film-suppr{
    color: black;
}
.film-suppr:hover{
    color: black;
}
a:hover{
    text-decoration: none;
    background-color: none;
}
body{
    background-color: #707070;
}
.nav-link{
    font-family: 'Bangers', cursive;

}
strong{
    font-family: 'Bangers', cursive;
    color: white;

}
h1{
    font-family: 'Bangers', cursive;
    color: white;

}
.centrer{
    position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}
.form-control::placeholder {
  color: black;
}
input{
    color: black;
}
i{
    color: red;
}
i:hover{
    animation: fa-spin 2s infinite linear;
}
.dropdown-menu{
    background-color: #212121 !important;
}
.btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus{
  background-color: #212121 !important;
}
.btn-primary.dropdown-toggle{
  background-color: #212121 !important;
}
.btn-primary:hover{
  background-color: #212121 !important;
}
.btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active, .show>.btn-primary.dropdown-toggle{
  background-color: #212121 !important;
}
.btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus{
  background-color: #212121 !important;
}
.dropdown .dropdown-menu .dropdown-item:hover, .dropdown .dropdown-menu .dropdown-item:active, .dropup .dropdown-menu .dropdown-item:hover, .dropup .dropdown-menu .dropdown-item:active, .dropleft .dropdown-menu .dropdown-item:hover, .dropleft .dropdown-menu .dropdown-item:active, .dropright .dropdown-menu .dropdown-item:hover, .dropright .dropdown-menu .dropdown-item:active{
  background-color: #212121 !important;
}
.naplok{
    font-family: 'Bangers', cursive;
    color: white;
  
}
.waves-input-wrapper{
  width: 100%;
}




</style>
    <title>Document</title>
</head>
<body >

<!--Main Navigation-->
<header class="bg-dark">

  <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark pink scrolling-navbar">
    <a class="navbar-brand" href="index.php"><strong>PauHem</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Clients
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout.php">Ajouter un client</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_client.php">Liste clients</a></button>
    
  </div>
</div>
<li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Localisation
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
  <button class="dropdown-item"  type="button"><a class="nav-link" href="commune.php">Ajouter une commune</a></button>
  <button class="dropdown-item"  type="button"><a class="nav-link" href="quartier.php">Ajouter un quartier</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_localisation.php">Liste localisation</a></button>
    
  </div>
</div>
        </li>
        </li>
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Logement
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
  <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_type.php">Ajouter un type</a></button>
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_logement.php">Ajouter un logement</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_logement.php">Liste des logements</a></button>
  </div>
</div>
        </li>
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Location
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_location.php">Ajouter une location</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_location.php">Liste location</a></button>
    
  </div>
</div>
        </li>
       
      </ul>

      <a href="logout.php" title="Deconnexion"><i class="fas fa-times fa-2x"></i></a>
      
  </nav>

</header>
<!--Main Navigation-->


<div class="container mt-5">
<?php




    $bdd = new PDO('mysql:host=localhost:3308;dbname=pauhem', 'root', '');


echo "<form id='form-toast' class='centrer d-flex flex-column justify-content-center' action='' method='post'>";
echo "<h1 class='mb-3'>Saisir une commune :</h1>";
echo "<div class='md-form'>";
echo "<input type='text' id='form1' placeholder='Commune' class='form-control' name='commune'><br>";
echo "<input type='number' id='form1' placeholder='Habitants' class='form-control' name='habitants'><br>";
echo "<input type='number' id='form1' placeholder='Distance' class='form-control' name='distance'><br>";

echo "<input type='submit' id='btn-toast' class='btn btn-dark btn-lg btn-block w-100' value='Ajouter'>";
?>

<script>

let form = document.getElementById('form-toast');
form.addEventListener('submit', function(event){
  event.preventDefault();
  toastr.success('Votre commune a bien été ajoutée !');
  setTimeout(() => {
    form.submit();
  }, 2000);
  
})




</script>


<?php


echo "</div>";	

if(isset($_POST['commune']) AND isset($_POST['habitants']) AND isset($_POST['distance'])){
    
    $commune = $_POST['commune'];
    $habitants = $_POST['habitants'];
    $distance = $_POST['distance'];

    $ajout_commune = "INSERT INTO commune (nom, habitants, distance) VALUES('$commune', '$habitants', '$distance')";
    $req_commune = $bdd->query($ajout_commune);


}
echo "</form>";
}




?>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
</html>