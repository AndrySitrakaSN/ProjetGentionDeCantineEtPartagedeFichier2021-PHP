<?php
             include("../connexion.php");


     
        

    
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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  
  <body>
    
 
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
               <img src="../image/[036783].png" alt="" width="50" height="50" > &thinsp; Administrateur
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" 
       type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
         <br><br> <span class="  btn btn-secondary custom  ">Utilisateur 
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span class="">Utilisateur</span>
            </a>
          </li>
          <li class="nav-item">

          </li>
          </ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Fichier</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="fichier.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp; <span >Fichier</span> 
    </a>
  </li>
  <li class="nav-item">

  </li>
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">cantine</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="admin.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/d.jpg" alt="" width="20" height="20"> &thinsp; <span class="text-primary">Cantine</span> 
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="compte.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;  <span>Compte </span>
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
        <h1 class="h2">Programme</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            
             <a href="admin.php" class="btn ">

              </a> &thinsp;  &thinsp;  
              <a href="admin.php" class="btn btn-sm btn-dark"> 
              <img src="../image/Logo calendar with a check mark. Vector image. Flat design. Stock vector illustration.jpg" 
                    alt="" width="20" height="20">
              Programme </a> &thinsp;&thinsp;

              <a href="d1.php" class="btn btn-sm btn-secondary"> 
              <img src="../image/list.png" alt="" width="20" height="20">  
              Liste </a>  &thinsp;&thinsp;
             <a href="../pdf/programme.php" class="btn btn-sm btn-secondary"> 
             <img src="../image/pdf.png" alt=" " width="20" height="20"> 
             PDF </a>  &thinsp;&thinsp;

             <a href="suppri.php" class="btn btn-sm btn-secondary"> 
             <img src="../image/[036746].png" alt=" " width="20" height="20"> 
             Actualiser </a>
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>
    </nav>

<p class="text-danger"><center>  <span class="text-danger">champ incomplet ! <br> Veillez essayer s'il vous plais. </span> <br> 
<span class=""> <a href="admin.php"> 
    <img src="../image/R.png" alt="" width="30" height="30">
</a> </span> </center></p>


<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS 01</p>

   <p>Administrateur</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div>
</div>

</main>  
    
      
 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>



