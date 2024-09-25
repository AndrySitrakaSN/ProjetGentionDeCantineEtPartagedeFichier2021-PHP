<?php 
include("../connexion.php");
$b1= " ";
$b2 = " ";
$nom = " ";
$mdp = " ";

$req = mysqli_query($conn , "SELECT *FROM administrateur ");  // ito ny code sql
if(mysqli_num_rows($req)== 0)
{
  echo(" Base de donne vide ");
}
   else{
          while($row=mysqli_fetch_assoc($req)) // eto izy mijaka hoe raha asehoy aby izy rehetra
               {
                   $a1 =  $row['nomad']; 
                   $a2 = $row['passad'];
               }
        }

$nom = $a1 ;  //echo($nom);
$mdp = $a2 ; // echo($mdp);

if(isset($_POST['go']))
    {
          $b1 = $_POST['nom'] ;   //echo $b1;
          $b2 = $_POST['pss'] ; //echo $b2;

          $sql = "UPDATE administrateur SET nomad='$b1',passad='$b2' ";
if ($conn->query($sql) === TRUE) {
  header("location: index.php");
  exit();
                                 } 
else {
  echo("Misy tsy milamina ny code lehiroa");
     }
  
    }
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
    <title>Administrateur</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="../image/f.jpg" alt="" width="30" height="30" > &thinsp; Administrateur</a>

  <form action="recherche.php" method="POST" class="form-inline">
    <input type="text" name="eka1" class="  custom" placeholder="numero ou prenom" >
    &thinsp;<input type="submit" name="eka" class="btn btn-success" value="chercher"  >

                </form> 
 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
          <span class="  btn btn-secondary custom  ">Utilisateur 
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/[034770].png" alt="" width="20" height="20"> &thinsp;<span class="">Liste</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fomulaireUtilisateur.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <img src="../image/m.png" alt="" width="20" height="20"> &thinsp; Ajouter 
            </a>
          </li>
        </ul>

        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Fichier</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="fichier.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp; <span >Tous les fichier</span> 
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="fichier1.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/sup.png" alt="" width="20" height="20"> &thinsp;  <span>Supprimer </span>
    </a>
  </li>
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">cantine</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="d1.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/list.png" alt="" width="20" height="20"> &thinsp; <span >Liste & Programme</span> 
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="compte.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;  <span>Compte </span>
    </a>
  </li>
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Parametre</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="actualiser2.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[028989].png" alt="" width="20" height="20"> &thinsp; <span class="text-warning">Parametre General </span> 
    </a>
  </li>
</ul>

&thinsp; &thinsp; <a href="#" class="btn btn-sm btn-danger custom "> 
  <img src="../image/[028991].png" alt="" width="20" height="20">
Deconnexion 
  <img src="../image/[028991].png" alt="" width="20" height="20"> </a> 
</div>
</nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mots de pass</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="fomulaireUtilisateur.php" class="btn btn-sm btn-primary"> Ajouter </a>
            <a href="../pdf/utilisateur.php" class="btn btn-sm btn-danger"> PDF </a>
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>

      

<form action="actualiser2.php" method="POST">
       
        <input type="text" placeholder="Nom"  name="nom" value=" <?php echo$nom; ?>" class="form-control">  
        <input type="text" placeholder="Mots de pass" value="<?php echo $mdp;?>" name="pss" class="form-control" > <br> 
        <input type="submit" value="Modifier" class="btn btn-success " name="go">
 </form>

 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
