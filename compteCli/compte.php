
  <?php
  session_start();
include('../connexion.php');
$aaa = " ";

if (isset($_POST['lasa'])){
     $nume = $_POST['num'];   
     $pass = $_POST['pass']; 

     $req = mysqli_query($conn , "SELECT *FROM  utilisateur where prenom='$nume' && mdp='$pass' ");
     if(mysqli_num_rows($req)== 0)
     {   
                 $aaa =" Compte Invalide!";  
     }
        else{
               while($row=mysqli_fetch_assoc($req))
                {

                   $snrs = $row['numUt']; 
                   $_SESSION['ok'] ="  $snrs " ; 
                   header("location: validation.php");
                   exit();
                }
 
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

<body>
<!--
<a href="../cree/index.php" class="btn btn-secondary text-white"> Cree un compte </a>
 -->

<br><br><br><br><br>

<div   class="text-center">
<main class="form-signin w-100 m-auto">

<div class="row justify-content-center "> 
    <form action="compte.php" method="POST">
          <a href="../index.php"><img class="mb-4" src="../image/sasa.png" alt="" width="72" height="57"></a>
             <h1 class="h3 mb-3 fw-normal">Utilisateur</h1>
                   <center><div class=" text-danger"> <?php echo($aaa); ?> </div></center>    
                    <input type="text" name="num" placeholder="Prenom" class=""> <br><br>
                    <input type="password" name="pass" placeholder="Mots de pass" class="">  <br><br>
                    <input type="submit" name="lasa" value="Se connecter" class="btn btn-primary">  <br>
    </form>

</div> <br>

<!-- 

<center>
<a href="../cree/liste.php" class="btn btn-warning text-white"> Demande en cours </a> 
<a href="../cree/dr.php" class="btn btn-danger text-white"> Demande Reffuser</a>
<a href="../cree/da.php" class="btn btn-success text-white"> Demande accepte </a>

</center>
-->
   </main>  
</div>
 

  
 
</body>
</html>