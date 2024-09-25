
<?php

          require_once('process.php');
          if (isset($_POST['save']))
          {
            $nom = $_POST['nom'];    
            $prenom = $_POST['prenom'];  
            $direction = $_POST['direction'];
            $tel =$_POST['tel'];
            $fonc = $_POST['fonction'];
            $mdp= $_POST['mdp'];
            $fady = $_POST['fady']; 
            $valeur = $_POST['valeur'];
            $a1 = $_POST['a1'];
            $a2= $_POST['a2'];

            $fichier = ($_FILES['photos']['name']);  //echo ($fichier); 
            $target = "photos/".basename($_FILES['photos']['name']);
            move_uploaded_file( $_FILES['photos']['tmp_name'],$target);


          $sql = ("INSERT INTO utilisateur (photos,nom,prenom,direction,tel,fonc,mdp,valeur,fady,adrs,adrs_mail)
                   VALUE ('$fichier','$nom','$prenom','$direction','$tel','$fonc' ,'$mdp' , '$valeur' , '$fady','$a1','$a2') ");
          $result=mysqli_query($con ,$sql);
          if(!$result)
          {
               echo("Misy tsy mety lehiroa code nao");
                //header("location: index.php");
               //exit();
          }
          else
          {
               header("location: index.php");
               exit();
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
        <h1 class="h2">Ajout</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a href="index.php" class="btn btn-sm btn-secondary">
            <img src="../image/list.png" alt="" width="20" height="20">   
            Liste </a> &thinsp; &thinsp;
            <a href="indexx.php" class="btn btn-sm btn-secondary">
            <img src="../image/[034889].png" alt="" width="20" height="20">   
            Admin </a> &thinsp; &thinsp;
            <a href="fomulaireUtilisateur.php" class="btn btn-sm btn-dark">
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
      <form action="fomulaireUtilisateur.php" method="POST" enctype="multipart/form-data">
     <img class="mb-4" src="../image/qw.png" alt="" width="42" height="27">  
     
     <div class="form-groupe">  
            <input type="file" name="photos" class="form-control" placeholder="Nom ">
       </div>  
       <div class="form-groupe">  
            <input type="text" name="nom" class="form-control" placeholder="Nom ">
       </div> 
       <div class="form-group">       
            <input type="text" name="prenom"  class="form-control" placeholder="Prenom">
       </div>
       <div class="form-group">
            <input type="text" name="direction"  class="form-control" placeholder="Direction">
       </div>
       <div class="form-group">
            <input type="text" name="tel"  class="form-control" placeholder="tel">
        </div>
        <div class="form-group">
      <select name="fonction" id="" class="form-control">
                <option value="2">Fonction non Admin</option>
                <option value="1">Fonction Admin</option>
      </select>
     </div> 
      <div class="form-group">
      <input type="hidden" name="mdp"  class="form-control" placeholder="mdp" value="1234">
      </div>
      <div class="form-group">
      <input type="text" name="fady"  class="form-control" placeholder="fady">
      </div>
      <div class="form-group">
      <select name="valeur" id="" class="form-control">
                <option value="2">prix 3500 Ar</option>
                <option value="1">prix 1500 Ar</option>
      </select>
     </div> 
     <div class="form-groupe">  
            <input type="text" name="a1" class="form-control" placeholder="Adress ">
       </div> 
       <div class="form-groupe">  
            <input type="text" name="a2" class="form-control" placeholder="Adress Mail ">
       </div> 
       <div class="form-group"> <br>
          <button type="submit" name="save" class="btn btn-success custom " >Ajouter</button>
       </div>



      </form>
</div>
     </main>   


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


                          
             </article>
</div>  
 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
