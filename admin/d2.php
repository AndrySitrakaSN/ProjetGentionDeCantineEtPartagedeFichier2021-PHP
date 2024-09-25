<?php
include("../connexion.php");
$isa = "";
$ttr = "";
$a = " ";

$sql ="SELECT  COUNT(*) numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 2" ;
// $sql = " SELECT COUNT(*) numUt FROM utilisateur";
$result = $conn->query($sql);
$isa = mysqli_fetch_assoc($result);
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
        <h1 class="h2">Liste Mardi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            
         

             <a href="admin.php" class=" btn btn-sm btn-secondary"> 
             <img src="../image/Logo calendar with a check mark. Vector image. Flat design. Stock vector illustration.jpg" 
                    alt="" width="20" height="20">

             Programme</a> &thinsp; &thinsp; 
             <a href="" class=" btn btn-sm btn-dark">
             <img src="../image/p.png" alt="" width="20" height="20"> 
             Mardi</a> &thinsp;
             <a href="../pdf/mardi.php" class="btn btn-sm btn-secondary"> 
             <img src="../image/pdf.png" alt="" width="20" height="20"> 
              
             PDF </a> &thinsp;
             &thinsp;

<a href="suppri.php" class="btn btn-sm btn-secondary"> 
<img src="../image/[036746].png" alt=" " width="20" height="20"> 
Actualiser </a> 
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>

      <h1> <span class="text-white"></span>
<div class="btn-group">
<a href="d1.php" class="btn btn-secondary">Lundi</a> 
     <a href="d2.php" class="btn btn-dark txt-white">Mardi</a> 
     <a href="d3.php" class="btn btn-secondary">Mercredi</a>
     <a href="d4.php" class="btn btn-secondary">Jeudi</a> 
     <a href="d5.php" class="btn btn-secondary">Vendredi</a>
</div>
     <div class="btn "> 
     <?php  echo " commande"; ?> <div class="btn btn-dark"><?php print_r( $isa ['numUt'] );?></div> 
   
    
</h1>  



<div class="container-fluid">
<table class="table table-bordered">
    <header>
        <tr class="table-dark">
            <th>Photos</th>
            <th>Nom</th>
            <th>Proffetion</th>
             <th><center>Supprimer</center></th>
        </tr>
    </header>
<?php 
include("../connexion.php");
$sql ="SELECT prenom,direction ,numUt ,photos FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 2" ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr class="table-secondary ">
            <td> <img src="../admin/photos/<?php echo $row['photos']; ?>" alt="" width="40" height="40" > </td>
            <td> <?php echo ($row['prenom']); ?></td>
            <td> <?php echo ($row['direction']); ?>
            <th><center><a href= "supa2.php?supp=<?php echo $row['numUt'];?>"><img src="../image/sip.png" alt="" width="30" height="30"> </a></center></th>
        </tr>
        </td> <?php }} ?>        
</table>
</div>
    
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
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
