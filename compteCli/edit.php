
<?php
session_start();
$idko = " ";
$idko =$_SESSION['ok']; 
     include ("../connexion.php");
     $laharana = " ";
     
   if(isset($_POST['modif']))
     {
      
          $laharana = $_POST['id'];  //echo $laharana ;
          
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
                     $fady = $row['fady'];
                     $passy = $row['mdp'];
                     $valeur = $row['valeur'];
             
     }}}


     

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
   
      <form action="modif.php" method="POST"> <!-- manomboka eto ny for -->
                     <a href="a.php"><img class="mb-4" src="../image/qw.png" alt="" width="72" height="57"></a>
                     <h1 class="h3 mb-3 fw-normal">Modifier</h1>
                     <div class="form-inline">
                     <input type="hidden" name="ss20"  class="form-control" value="<?php echo($laharana);   ?>" placeholder="numero">     
                     </div> 
                     <div class="form-inline">
                     <input type="hidden" name="nom" class="form-control" value="<?php echo($nom);  ?>" placeholder="NOm">
                      </div> 
                     <div class="form-inline">
                      <input type="hidden" name="prenom"  class="form-control" value="<?php echo($prenom);   ?>" placeholder="Prenom">
                      </div> <br>
                      <div class="form-inline">
                      <input type="hidden" name="direction"  class="form-control" value="<?php echo($direction);   ?>" placeholder="Direction"> 
                      </div> 
                      <div class="form-inline">
                      <input type="hidden" name="tel"  class="form-control" value="<?php echo($tel);   ?>" placeholder="Telephone">
                      </div> 
                      <div class="form-inline">
                      <input type="text" name="fady"  class="form-control" value="<?php echo($fady);   ?>" placeholder="Fady"> 
                      </div> <br>
                      <div class="form-inline">
                      <input type="text" name="mdp"  class="form-control" value="<?php echo($passy);   ?>" placeholder="mots de pass">
                      </div> <br>
                      <div class="form-inline">
                      <input type="hidden" name="valeur"  class="form-control" value="<?php echo($valeur);   ?>" placeholder="Valeur 1 ou 2">
                      </div>    
                      <div class="form-group">
                      <center> <input type="submit" name="modif" class="btn btn-primary" value="Modifier"></center>
                      </div>    
      </form>
</div>
     </main>  
     
     
     
</body>
</html>