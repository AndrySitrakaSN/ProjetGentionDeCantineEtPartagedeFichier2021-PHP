<?php 
include("../connexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Actualiser</title>
</head>
<body>
<body class="btn-dark">
<br><br><br><br><br>
<?php
                               $req = mysqli_query($conn , "SELECT *FROM administrateur where id = 1940 ");
                               if(mysqli_num_rows($req)== 0)
                                          {
                                              echo("Base de donne vide ");
                                          }
                             else{
                                       while($row=mysqli_fetch_assoc($req)) {

?>
   <div class="container">
    <div class="row">
        <article class="col-md-3">

        </article>
        <article class="col-md-6 btn-secondary">
            <br>
            <center><div class="btn-dark text-white"> <h3> Administrateur</h3> <span class="btn text-warning"><?php // echo ($row['nom']." ".$row['prenom']) ;  ?></span>
          <a href="actualiser.php" class="btn btn-danger">Retour</a> <br><br></div></center> <br>
<center>
<h3>
            Nom : <span class="text-info"><?php echo $row['nomad']; ?> </span><br>
            Mots de pass : <span class="text-info"><?php echo $row['passad'];  }}?> </span><br>  <br>
<div class="btn-danger text-white">Administrateur <a href="actualiser2.php" class="btn btn-dark" > Modifier </a></div>
          </h3>
</center>
        </article>
        <article class="col-md-3">

        </article>

    </div>

   </div>  
</body>
</html>