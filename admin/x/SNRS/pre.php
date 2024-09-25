
  <?php

include("../connexion.php");
$aaa =" ";
$eka = " ";


$req = mysqli_query($conn , "SELECT *FROM administrateur ");
if(mysqli_num_rows($req)== 0)
{
     echo(" erreur de base de donne ");
}
else{
          while($row=mysqli_fetch_assoc($req)) 
          {
                 $row['id'];
               $snrs=  $row['nomad'];  // echo($snrs);
               $snrs1=  $row['passad']; // echo($snrs1);
          }
}

     if (isset($_POST['go'])){
      $nom = $_POST['nom'];   
      $pass = $_POST['passa']; 
      if(($nom == $snrs) && ($pass == $snrs1)) 
      {
         header("location: admin.php");
         exit();
      }
      else {
              $aaa = " Compte invalide !";
              $eka = " Erreur";
          }
                               }  
 
?>                                      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="signin.css" rel="stylesheet">
    <title>Administration</title>
</head>

<body class="text-center">
  <br><br><br><br><br>

<main class="form-signin w-100 m-auto">

<div class="row justify-content-center ">
   
      <form action="pre.php" method="POST">
      <a href="../index.php"><img class="mb-4" src="../image/ad.png" alt="" width="72" height="57"></a>
      <h1 class="h3 mb-3 fw-normal">Admin</h1>
      <center><div class="text-SECONDARY btn-danger"> <?php echo($aaa); ?> </div></center>
              
       <div class="form-groupe">
              
            <input type="text"  name="nom" class="form-control" placeholder="Nom">
       </div> <br>

       <div class="form-group">
      
            <input type="password" name="passa"  class="form-control" placeholder="Mots de pass">
       </div>
       
       <div class="form-group">
          <center>  <button type="submit" name="go" class="btn btn-primary" >Se connecter</button></center>
        
       </div>

<center><h1><a href="admin.php">snrs</a></h1></center> 
      </form>
      
</div>

     </main>  

    
     
</body>
</html>