<?php
session_start();
include_once("../connexion.php");
$idko =  $_SESSION['ok']; //  echo $idko;

if(isset($_POST['go']))
{


     $tel = $_POST['tel'];  // echo $tel ;
     $mdp = $_POST['mdp'];  //echo $mdp ;
     $fady =  $_POST['fady'];  //echo $fady ;
     $adrs =  $_POST['adr'];  //echo $adrs ;
     $adrs_m =  $_POST['adr_m'];// echo $adrs_m ;

 
     $sql = "UPDATE Utilisateur 
              SET tel ='$tel',mdp='$mdp',fady= '$fady' adrs='$adrs' , adrs_mail = '$adrs_m'
             WHERE numUt='$idko' ";
 
 if ($conn->query($sql) === TRUE) {
    header("location: parametre.php");
     //exit();
 } else {
    
     echo("erreur");
 }


}


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
                <?php
$req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$idko') ");
if(mysqli_num_rows($req)== 0)
           {  header("location:vide.php");
?>               <br> <br><br><br><br><br><br><br><br> 

                  <?php
           }
else{
        while($row=mysqli_fetch_assoc($req)) {
                ?>
                                <h3 class="text-secondary">
                <img src="../image/mod.png" alt="" width="40" height="40">  
                Modifier les Information</h3> <br>
                <img src="../admin/photos/<?php  echo $row['photos'] ?>" alt="" width="300" height="300" class="img-rounded">
                <br> <br>
                <a href="parametre.php" class="btn btn-danger">
                
                  Retour
                </a>  &thinsp;  &thinsp; 
                <a href="validation.php" class="btn btn-secondary custom">
                <img src="../image/[034295].png" alt="" width="20" height="20">  
                        Menu Principal</a> <?php  
                }}                                          
?> 
              </center>
        </article>
        <article class="col-md-4">

             <br><br>
<?php

$req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt=($idko) ");
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
?>




<form action="pa.php" method="POST"> <!-- manomboka eto ny for -->
                     
<p>Modifier mes Information :</p>
                     <div class="">
                     <input type="hidden" name="ss20"  class="form-control custom" value="<?php echo($idko);   ?>">     
                     </div> 
                     <div class="">
                    <center> <input type="hidden" name="nom" class="form-control" value="<?php echo($nom);  ?>" placeholder="Nom"></center>
                      </div> 
                     <div class="">
                      <input type="hidden" name="prenom"  class="form-control" value="<?php echo($prenom);   ?>" placeholder="Prenom">
                      </div> 
                      <div class="form-inline">
                      <input type="hidden" name="direction"  class="form-control" value="<?php echo($direction);   ?>" placeholder="Direction"> 
                      </div> 
                      <div class="form-inline">
                      <input type="text" name="tel"  class="form-control custom" value="<?php echo($tel);   ?>" placeholder="Telephone">
                      </div>  <br>
                      
                      <div class="form-inline">
                      <input type="text" name="mdp"  class="form-control custom" value="<?php echo($passy);   ?>" placeholder="Mots de pass">
                      </div> <br>
                      
                      <div class="form-inline">
                      <input type="hidden" name="valeur"  class="form-control" value="<?php echo($valeur);   ?>" placeholder="valeur si 1 = 1500 Ar et 2 = 3500 Ar">
                      </div> 
                      
                      <div class="form-inline">
                      <input type="text" name="fady"  class="form-control custom"value="<?php echo($fady);   ?>" placeholder="fady ">
                      </div><br>

                      <div class="form-inline">
                          <input type="text" name="adresse" class="form-control custom" value=" <?php echo($a1);?>" placeholder="Adresse" >
                      </div> <br>

                      <div class="form-inline">
                          <input type="text" name="adresse_mail" class="form-control custom" value=" <?php echo($a2);?>" placeholder="Adresse_mail" >
                      </div><br>
                     
                      <div class="form-group">
                      <input type="submit" name="modif" class="btn btn-success custom" value="Modifier">
                      </div>    
      </form>



         
        </article  >



      </div>



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
