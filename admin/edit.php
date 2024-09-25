
<?php
     include ("../connexion.php");
     
   if(isset($_GET['edit']))
     {
      
          $laharana = $_GET['edit'];
          $req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt=($laharana) ");
          if(mysqli_num_rows($req)== 0)
                     {
                         echo("Base de donne vide");
                     }
        else{
                  while($row=mysqli_fetch_assoc($req)) {  
                     $nom =$row['nom'];
                     $prenom = $row['prenom'];
                     $direction = $row['direction'];
                     $tel = $row['tel'];
                     $passy = $row['mdp'];
                     $valeur =  $row['valeur'];
                     $fady =  $row['fady'];
                     $a1 = $row['adrs'];
                     $a2 = $row['adrs_mail'];
                    
             
     }}
    
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
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
               <img src="../image/[036783].png" alt="" width="50" height="50" > &thinsp; Administrateur
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" 
       type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <form action="recherche.php" method="POST" class="btn-group ">
             <input type="text" name="eka1" class=" form-control custom" placeholder="numero ou prenom" >  &thinsp;
             <input type="submit" name="eka" class="btn btn-success" value="chercher"  >
            
       </form> 
 
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
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span class="text-primary">Utilisateur</span>
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
      <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp; <span > Fichier</span> 
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
      <img src="../image/d.jpg" alt="" width="20" height="20"> &thinsp; <span >Cantine</span> 
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
        <h1 class="h2">Modifier </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a href="index.php" class="btn btn-sm btn-secondary">
            <img src="../image/list.png" alt="" width="20" height="20">   
            Liste </a> &thinsp; &thinsp;
            <a href="indexx.php" class="btn btn-sm btn-secondary">
            <img src="../image/[034889].png" alt="" width="20" height="20">   
            Admin </a> &thinsp; &thinsp;
            <a href="fomulaireUtilisateur.php" class="btn btn-sm btn-secondary">
            <img src="../image/m.png" alt="" width="20" height="20">   
            Ajouter </a> &thinsp; &thinsp;
            <a href="../pdf/utilisateur.php" class="btn btn-sm btn-secondary"> 
            <img src="../image/pdf.png" alt="" width="20" height="20">  
            PDF </a>
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>
       

      <main class="form-signin w-100 m-auto">

<div class="row justify-content-center ">
   
      <form action="modif.php" method="POST" enctype="multipart/form-data" value=" "> <!-- manomboka eto ny for -->
                     
      
      <div class="form-groupe">  
            <input type="file" name="photos" class="form-control" placeholder="Nom ">
       </div>

                     <div class="form-inline">
                     <input type="hidden" name="ss20"  class="form-control" value="<?php echo($laharana);   ?>">     
                     </div> 
                     <div class="form-inline">
                     <input type="text" name="nom" class="form-control" value="<?php echo($nom);  ?>" placeholder="Nom">
                      </div> 
                     <div class="form-inline">
                      <input type="text" name="prenom"  class="form-control" value="<?php echo($prenom);   ?>" placeholder="Prenom">
                      </div> 
                      <div class="form-inline">
                      <input type="text" name="direction"  class="form-control" value="<?php echo($direction);   ?>" placeholder="Direction"> 
                      </div> 
                      <div class="form-inline">
                      <input type="text" name="tel"  class="form-control" value="<?php echo($tel);   ?>" placeholder="Telephone">
                      </div> 
                      
                      <div class="form-inline">
                      <input type="text" name="mdp"  class="form-control" value="<?php echo($passy);   ?>" placeholder="Mots de pass">
                      </div> 

                      <div class="form-group">
      <select name="valeur" id="" class="form-control">
                <option value="2">prix 3500 Ar</option>
                <option value="1">prix 1500 Ar</option>
      </select>
     </div> 

     <div class="form-group">
      <select name="fonction" id="" class="form-control">
                <option value="2">Fonction non Admin</option>
                <option value="1">Fonction Admin</option>
      </select>
     </div> 
                      
                      <div class="form-inline">
                      <input type="text" name="fady"  class="form-control" value="<?php echo($fady);   ?>" placeholder="fady ">
                      </div> 

                      <div class="form-inline">
                          <input type="text" name="adresse" class="form-control"value=" <?php echo($a1);?>" placeholder="Adresse" >
                      </div>

                      <div class="form-inline">
                          <input type="text" name="adresse_mail" class="form-control"value=" <?php echo($a2);?>" placeholder="Adresse_mail" >
                      </div><br>
                     
                      <div class="form-group">
                      <input type="submit" name="modif" class="btn btn-success custom" value="Modifier">
                      </div>    
      </form>
</div>
     </main>  
    
      
 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
