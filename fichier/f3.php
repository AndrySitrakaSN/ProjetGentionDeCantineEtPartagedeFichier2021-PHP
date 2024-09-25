<?php
session_start();
$ttr = " ";
include("../connexion.php");
$idko = " ";
$idko = $_SESSION['idko'];
$tsy = "";



if (isset($_POST['go'])) {
  $id = ($_POST['id']); //echo $id ;
  $objet = ($_POST['objet']); //echo $objet ; 
  $fi = ($_FILES['ficc']['name']); // echo ($fi);
  $target = "perso/" . basename($_FILES['ficc']['name']);
  if ($objet && $fi != NULL)
  {
      move_uploaded_file($_FILES['ficc']['tmp_name'], $target);
    $sql = "INSERT INTO perso (id_ut,objet,fiche) VALUES ('$id','$objet','$fi')";
    $result = mysqli_query($conn, $sql);
    header("location:messageG.php");
  }
  else{
      $tsy = "impossible d'envoyer car la contenu est vide !";
  }



}


$idko =$_SESSION['ok'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="stylesheet" href="../fichier/style.css">
    <title>fichier</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
  
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"> <?php
      $req = mysqli_query($conn, "SELECT *FROM utilisateur where numUt = ('$idko') ");
      if (mysqli_num_rows($req) == 0) {
        echo ("Base de donne vide ");
      } else {
        while ($row = mysqli_fetch_assoc($req)) {
          ?> <img src="../admin/photos/<?php echo $row['photos']; ?>" alt="" width="50" height="50"> <?php
 echo ($row['nom'] . " " . $row['prenom']); }} ?></a>

<form action="x1.php" method="POST" class="form-inline">
    <input type="text" name="objet" class=" form-control " placeholder="Objet" >
    &thinsp;<input type="submit" name="go" class="btn btn-success form-control" value="Chercher"  >
                </form>
 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
         <br><br><span class="  btn btn-secondary custom  ">Fichier public
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="andex.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/ad.png" alt="" width="20" height="20"> &thinsp;<span class="">Publication</span>
            </a>
          </li>
        
        </ul>

        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span class="  btn btn-secondary custom  ">Envoie de Fichier</span>
        </h5>
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="messageP.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <img src="../image/[036880].png" alt="" width="20" height="20"> &thinsp; Reçue
            </a>
          </li>

        
        </ul>

        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span class="  btn btn-secondary custom  ">stockage</span>
        </h5>

        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="messageG.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp;  <span class="text-primary">fichier</span>
            </a>
            </li>

        </ul>
        <br><br>
<center>
<img src="../image/1666847760493.jpg" alt="" width="100" height="100">
</center>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fichier Privé</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="messageG.php" class="btn btn-sm btn-secondary">
            <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp;
            Mes fichier</a> &thinsp; &thinsp;
            <a href="f3.php" class="btn btn-sm btn-dark">  
            <img src="../image/m.png" alt="" width="20" height="20"> &thinsp; Nouveau </a>
          </div>

          <a href="../compteCli/validation.php" class="btn btn-sm btn-secondary"> Menu Principal</a>
        </div>
      </div>
      <form action="f3.php" method="POST" enctype="multipart/form-data">
                <p>
                <input type="hidden" class="form-control custom" name="id" value="<?php echo $idko ; ?>" placeholder="Objet"> 
                <input type="text" class="form-control custom" name="objet" placeholder="Objet">
            <input type="file"  class="form-control " name="ficc"  > <br>
                <input type="submit" class=" btn btn-primary" value="Enregistrer" name="go" >

            </form>

            <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS</p>

   <p>Gestion de fichier du FID</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="andex.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div> 
  </div>
</div>
</html>
