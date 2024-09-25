<?php 
include("../connexion.php");
session_start();
$idko = " ";
if(isset($_POST['a1']))
{
    $idko = $_POST['id']; 
}

if(isset($_POST['ary']))
{
  $idko = $_POST['da'];
 // echo $idko;
}
$tsy = " ";


if(isset($_POST['save']))
{
  $num_d= ($_POST['num']); //echo $num_d ;
  $num_e = ($_POST['idko']); 
  $objet = ($_POST['objet']); //echo $objet ; 
  $mess = ($_POST['mess']); //echo $mess; 
  $fichier = ($_FILES['fic']['name']);  //echo ($fichier); 
  $target = "envoye/".basename($_FILES['fic']['name']);

  if ($num_d && $objet && $mess != NULL)
  {
    move_uploaded_file( $_FILES['fic']['tmp_name'],$target);
    $sql = "INSERT INTO messagy (num_exp,num_dst,objet,mess,fic)
              VALUES ('$num_e','$num_d','$objet','$mess','$fichier')";
    $result =mysqli_query($conn,$sql);
    //echo ("ok zandry");
    header("location:messageR.php");
  }
else
{
  $tsy= " impossible d'envoyer car la contenu est vide ! ";    
}
  

}




$idko = $_SESSION['ok'];

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
    
    <?php  $req = mysqli_query($conn, "SELECT *FROM utilisateur where numUt = ('$idko') ");
      if (mysqli_num_rows($req) == 0) {
        echo ("Base de donne vide ");
      } else {
        while ($row = mysqli_fetch_assoc($req)) {
?>
<img src="../admin/photos/<?php echo $row['photos'] ?>" alt="" width="50" height="50" >
<?php
 echo ($row['nom'] . " " . $row['prenom']); }} ?></a>



  <form action="nms.php" method="POST" class="form-inline">
    <input type="text" name="raha" class=" form-control " placeholder="Nom ou Prenom ou Numero" >
    &thinsp;<input type="submit" name="mitady" class="btn btn-success form-control " value="Chercher"  >
 </form> 
 


</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
         <br><br> <span class="  btn btn-secondary custom  ">Fichier public
       
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
              <img src="../image/[036880].png" alt="" width="20" height="20"> &thinsp; 
              <span class="text-primary">Reçue  </span> 
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
              <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp;  fichier
            </a>
            </li>
            <li class="nav-item">

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
        <h1 class="h2">Fichier Reçue </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a href=" messageP.php" class="btn btn-sm btn-secondary">
          <img src="../image/[036880].png" alt="" width="20" height="20">  
          Reçue </a>  &thinsp;  &thinsp; 
            <a href="nmessage.php" class="btn btn-sm btn-dark">
            <img src="../image/m.png" alt="" width="20" height="20">  
            Nouveau </a> &thinsp;  &thinsp; 

            <a href="messageR.php" class="btn btn-sm btn-secondary">
            <img src="../image/[029232].gif" alt="" width="20" height="20">  
            Fichier Envoyer </a>
          </div>

          <a href="../compteCli/validation.php" class="btn btn-sm btn-secondary"> Menu Principal</a>
        </div>
      </div>


<br>


      <center>  <div class="text-danger"> <?php echo $tsy ; ?></div></center>
    <div class="container-fluid">
      <div class="">
        <article class="">
        <div class="scrollbar">
            <table class="table  table-borderless">
                             <header>

                             </header>

                              <?php
                           
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur ");
                              if(mysqli_num_rows($req)== 0)
                                         {
                                             $aaa =("Base de donne vide ");
                                         }
                            else{
                                      while($row=mysqli_fetch_assoc($req)) {
                                 ?> 

                                <tr class="">
                                    <td><img src="../admin/photos/<?php echo $row['photos']; ?>" alt="" height="30" width="30"></td>
                                    <td><?php echo $row['numUt'];  ?></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['direction']; ?></td>
                                  
                                </tr> 
<?php                                               }
      }
?>           </table>
            </div>  <br>
        <form action="nmessage.php" method="POST" enctype="multipart/form-data">
                <p>
                <input type="hidden" class="form-control" name="idko" value="<?php echo $idko ; ?>">
                <input type="text" class="form-control custom" name="num" placeholder="Numero"> 
                <input type="text" class="form-control custom" name="objet"  placeholder="Objet">    
                <input type="text" class="form-control " name="mess" placeholder="Message">
               <input type="file"  class="form-control " name="fic"  > <br>
                <input type="submit" class=" btn btn-primary" value="Envoyer" name="save" >

            </form>
    
<script src="js/bundle.min.js"></script>

<script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html> 
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




