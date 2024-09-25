
<?php
          require_once('process.php');
          if (isset($_POST['save']))
          {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $direction = $_POST['direction'];
            $tel =$_POST['tel'];
            $fady =$_POST['fady'];
            $mdp= $_POST['mdp'];
            $valeur = $_POST['valeur'];
              // echo ($nom);
             //  echo($prenom);
             // echo($direction);
             // echo($tel);
             //echo($fady);
             // echo($mdp);
             //echo($valeur);
          
          $sql = ("INSERT INTO utilisateur (nom,prenom,direction,tel,fady,mdp,valeur)
           VALUE ('$nom','$prenom','$direction','$tel' ,'$fady','$mdp','$valeur') ");
          $result=mysqli_query($con ,$sql);
          if(!$result)
          {
               echo("Misy tsy mety lehiroa code nao");
          }
          else
          {
               header("location: Utilisateur.php");
               exit();
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
<br><br>
<body class="text-center bg-dark text-white">
<main class="form-signin w-100 m-auto">
<div class="row justify-content-center ">
      <form action="fomulaireUtilisateur.php" method="POST">
      <a href="Utilisateur.php"><img class="mb-4" src="../image/qw.png" alt="" width="72" height="57"></a>
      <h1 class="h3 mb-3 fw-normal">Ajouter</h1>       
       <div class="form-groupe">  
            <input type="text" name="nom" class="form-control" placeholder="Nom ">
       </div> <br>
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
      <input type="text" name="fady"  class="form-control" placeholder="Fady">
      </div>
      <div class="form-group">
      <input type="text" name="mdp"  class="form-control" placeholder="mdp">
      </div>
      <div class="form-group">
      <select name="valeur" id="" class="form-control">
                <option value="2">prix 3500 Ar</option>
                <option value="1">prix 1500 Ar</option>
      </select>
     </div>  
       <div class="form-group">
          <center>  <button type="submit" name="save" class="btn btn-primary" >Envoyer</button></center>
       </div>



      </form>
</div>
     </main>  
     
     
     
</body>
</html>