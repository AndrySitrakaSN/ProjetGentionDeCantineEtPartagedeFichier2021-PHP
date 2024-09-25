
<?php
session_start();
$idko = " ";
$idko =$_SESSION['ok']; 
include("../connexion.php");

if(isset($_POST['ary']))
{
  $idko = $_POST['da'];
  
 // echo $idko;
}

$isa = " ";
$sql ="SELECT  COUNT(*) numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 1" ;
// $sql = " SELECT COUNT(*) numUt FROM utilisateur";
$result = $conn->query($sql);
$isa = mysqli_fetch_assoc($result);


/*

//mandefa commande 
if(isset($_POST['progre']))
{
  $plundi= $_POST['op1'];
 $plundi1 = $_POST['op11'];     // lundi


 $pmardi = $_POST['op2'];
 $pmardi1 = $_POST['op22'];   // mardi


 $pmercredi= $_POST['op3'];
 $pmercredi1= $_POST['op33'];   //  mercredi


 $pjeudi = $_POST['op4'];
 $pjeudi1 = $_POST['op44'];    // jeudi


 $pvendredi =$_POST['op5'];
 $pvendredi1 =$_POST['op55'];     // vendredi

 $num =$_POST['num'];
 $passy =$_POST['passy'];   // mots de pass et code

}


*/
$aaa =" ";
if(isset($_POST['a1']))
{
    $idko = $_POST['id']; 
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
    <title>Liste lundi</title>
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/dashboard.css" rel="stylesheet">
  </head>
  
  <body>
    
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
                <?php
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$idko') ");
                               if(mysqli_num_rows($req)== 0)
                                          {
                                              echo("Base de donne vide ");
                                          }
                             else{
                                       while($row=mysqli_fetch_assoc($req)) {
                                        ?><img src="../admin/photos/<?php echo $row['photos'] ?>" alt="" width="50" height="50"  > <?php
echo ($row['nom']." ".$row['prenom']) ; }} ?>
      </a>

     <!--

      <form action="recherche.php" method="POST" class="btn-group ">
             <input type="text" name="eka1" class=" form-control custom" placeholder="numero ou prenom" >  &thinsp;
             <input type="submit" name="eka" class="btn btn-success" value="chercher"  >
            
       </form> 

     -->
 
 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
          <br><br><span class="  btn btn-secondary custom  ">Programme
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="a.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/Logo calendar with a check mark. Vector image. Flat design. Stock vector illustration.jpg" 
              alt="" width="20" height="20"> &thinsp;<span>Programme</span>
            </a>
          </li>
          </ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Liste commandes</span>
</h5>

<ul class="nav flex-column mb-2">
<li class="nav-item">
            <a class="nav-link" href="a1.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span  class="text-primary">Liste commandes</span>
            </a>
          </li>
 
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Compte</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
  
  </li>
  <li class="nav-item">
            <a class="nav-link" href="compte1.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;<span class="">Compte</span>
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
        <h1 class="h2">Liste</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="a1.php" class="btn btn-sm btn-dark"> 
            <img src="../image/p.png" alt=""  width="20" height="20" >    
            Lundi</a>
            <a href="../pdf/lundi.php"" class="btn btn-sm btn-secondary">
            <img src="../image/pdf.png" alt=""  width="20" height="20" >  
            PDF </a>
          </div>

          <a href="validation.php" class="btn btn-sm btn-secondary"> 
          <img src="../image/[034295].png" alt=""  width="20" height="20" >    
          Menu Principal</a>
        </div>
      </div>

      



      <div id="popo" class="container-fluid">
       <div class="col-md-12"> 
             <article class="col-md-12">


 <div class="btn-group">
<a href="a1.php" class="btn btn-dark text-white">Lundi</a> 
     <a href="a2.php" class="btn btn-secondary">Mardi</a> 
     <a href="a3.php" class="btn btn-secondary">Mercredi</a>
     <a href="a4.php" class="btn btn-secondary">Jeudi</a> 
     <a href="a5.php" class="btn btn-secondary">Vendredi</a>
</div>
&thinsp;
<?php  echo " commande"; ?><div class="btn "><div class="btn btn-dark"><?php print_r( $isa ['numUt'] );?></div> </div></div>

</h1>  
         

<br>
<div class="container">
        <div class="row">
        <article >
            
        </article>
            <article class="col-md-12   ">
            <table class="table table-bordered">
        <header>
            <tr class="table-dark text-white">
              <th><Center>Photos</Center></th>
                <th><center>Nom</center></th>
                <th><Center>Prenom</Center></th>
                <th><center>Proffetion</center></th>
    
            </tr>
        </header>
    <?php 
    
    $sql ="SELECT nom ,prenom,direction ,photos FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
    (andro.id = commande.id_dat) And id_dat= 1" ;
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { 
    ?>
            <tr class="table-secondary text-dark ">
              <th><center><img src="../admin/photos/<?php echo $row['photos'];?>" alt="" height="50" width="50"></center></th>
              <td><center><?php echo ($row['nom']);?></center></td>
              <td> <center><?php echo ($row['prenom']); ?></center></td>
                <td> <center><?php echo ($row['direction']); ?></center> </td>
                           
     <?php }}
            else {
                $aaa = (" commande vide !");
            }
            
            ?>        
    </table>
    <div class="btn-danger">
    <p> <center class="text-danger"><?php  echo($aaa); ?></center> </p>              
    </div>
    </article>
    <article >
                
                </article>

</div>     
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS</p>

   <p>Food fid Programme</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="validation.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
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












