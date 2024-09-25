<?php 
/*
include("../connexion.php");
$aaa =" ";
$eka = " ";

$nom2 = " ";
$pass2 = " ";


$nom = " ";
$pass = " ";

 //$nom = "snrs";
 // $pass = "ada333";
  $he = 1940 ; //echo $he ;
  
      
  
if (isset($_POST['lasa']))
{
 $nom = $_POST['a1'];   // echo $nom ;
 $pass = $_POST['a2'];  //echo $pass ;





  $req = mysqli_query($conn , "SELECT *FROM administrateur where id = '$he' ");
  if(mysqli_num_rows($req)== 0)
             {
                 $aaa =("Base de donne vide ");
             }
else{
          while($row=mysqli_fetch_assoc($req))
           {
                 $nom2 = $row['nomad'] ;
                 $pass2 = $row['passad'] ;
           }
    }
     


    if ($nom2 == $nom )
        {    
            if($pass2 == $pass )
            {
                echo "marina";
                header("location:index.php");
            }
            else
            {
              $aaa = "Mots de pass incorect ";
            }
            
        }
    else
     {
        $aaa = "Mots de pass incorect ";
     }
    }
    */
?>

<!-- 
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
      <center><div class="text-danger"> <?php // echo($aaa); ?> </div></center>
              
       <div class="form-groupe">
              
            <input type="text"  name="a1" class="form custom   " placeholder="Nom">
       </div> <br>

       <div class="form-group">
      
            <input type="password" name="a2"  class=" custom  " placeholder="Mots de pass">
       </div> <br>
       
       <div class="form-group">
          <center>  <button type="submit" name="lasa" class="btn btn-primary" >Se connecter</button></center>
        
       </div> 
      </form>
      
</div>

     </main>  

    
     
</body>
</html>
-->

<?php
 // session_start();
include('../connexion.php');
$aaa = " ";

if (isset($_POST['lasa'])){
     $num = $_POST['num'];   
     $pass = $_POST['pass']; 
     $a = 1 ;
     $req = mysqli_query($conn , "SELECT *FROM  utilisateur where prenom ='$num' && mdp='$pass' && fonc = '$a'
     
     ");
     if(mysqli_num_rows($req)== 0)
     {   
                 $aaa =" Compte Invalide!";  
     }
        else{
               while($row=mysqli_fetch_assoc($req))
                {

                   $snrs = $row['numUt']; 
                  // $_SESSION['ok'] ="  $snrs " ; 
                   header("location: index.php");
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
    <form action="pre.php" method="POST">
          <a href="../index.php"><img class="mb-4" src="../image/ad.jpg" alt="" width="72" height="57"></a>
             <h1 class="h3 mb-3 fw-normal">Administrateur</h1>
                   <center> <span class=" text-danger"><?php echo($aaa); ?> </span> </center>    
                    <input type="text" name="num" placeholder="Prenom" class=""> <br> <br>
                    <input type="password" name="pass" placeholder="Mots de pass" class=" ">  <br><br>
                    <input type="submit" name="lasa" value="Se connecter" class="btn btn-primary">  
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