<?php
session_start();
include_once("../connexion.php");
$idko =  $_SESSION['ok'];  // echo $idko;

$req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$idko') ");
if(mysqli_num_rows($req)== 0)
           {  header("location:vide.php");
?>               <br> <br><br><br><br><br><br><br><br> 

                  <?php
           }
else{
        while($row=mysqli_fetch_assoc($req)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="stylesheet" href="../fichier/style.css">
    <title>Parametre</title>
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/dashboard.css" rel="stylesheet">
  </head>
</head>
<body class="bg-dark text-white">
  <br><br><br>
<div class="row ">
        <article class="col-md-8">
              <center>
                
                <h3 class="text-secondary">
                <img src="../image/x.png" alt="" width="40" height="40">  
                Information personnel</h3> <br>
                <img src="../admin/photos/<?php  echo $row['photos'] ?>" alt="" width="300" height="300" class="img-rounded">
                <br> <br>

                <a href="validation.php" class="btn btn-secondary custom">
                <img src="../image/[034295].png" alt="" width="20" height="20">   
                Menu Principal</a>
              </center>
        </article>
        <article class="col-md-4">
          <br>
          <p> <span >Numero :</span> <?php echo( $row['numUt']);?></p> 
         <p><span>Nom :</span> <?php echo $row['nom']; ?></p>    
         <p><span>Prenom :</span> <?php echo $row['prenom']; ?></p>  
         <p><span>Direction :</span> <?php echo $row['direction']; ?> </p>  
         <p><span>Telephone :</span> <?php echo $row['tel']; ?></p>  
         <p><span>Mots de pass :</span>  <?php echo $row['mdp']; ?></p> 
        <!--  <p><span>Valeur :</span> <?php  //echo $row['valeur'] ?> </p> -->
         <p><span>Fady :</span>  <?php  echo $row['fady'] ?></p> 
         <p><span>Adress :</span>  <?php  echo $row['adrs'] ?> </p> 
         <p><span>Adress mail :</span> <?php  echo $row['adrs_mail'] ?></p>  <br>
         <a href="parametre2.php" class="btn btn-secondary custom">
         <img src="../image/edit.png" alt="" width="20" height="20">
         Modification</a>
        </article  >


       
      </div>


<?php  
                }}                                          
?> 
   <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS</p>

   <p>Parametre</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="validation.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div>     
</body>
</html>