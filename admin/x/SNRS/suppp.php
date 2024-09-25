<?php
session_start();
           include("../connexion.php");
              

            if(isset ($_POST['oui']))
            { 

             $sql = "DELETE *FROM commande ";
             if ($conn->query($sql) === TRUE) {
                $_SESSION['fafa'] = "  Modification  " ; 
                header("location: arctuliser.php");
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
    <title>Supprimer</title>
  </head>
  <body>
    <br><br><br><br><br><br><br>

<center>

<form class="suppp.php" method="POST">
      <h4 class="text-danger">Voulez vous vraiment Supprimer ?</h4> <br>
      <input type="submit" class="btb btn-danger " value="OUI" name="oui">


    </form> <br>
    <a href="actualiser.php" class="btn btn-primary">NON</a>

</center>
  </body>
  </html>

                                              }







                                              <?php
session_start();
           include("../connexion.php");
              

            if(isset ($_POST['oui']))
            { 

             $sql = "DELETE *FROM commande ";
             if ($conn->query($sql) === TRUE) {
                $_SESSION['fafa'] = "  Modification  " ; 
                header("location: arctuliser.php");
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
    <title>Supprimer</title>
  </head>
  <body>
    <br><br><br><br><br><br><br>

<center>

<form class="suppp.php" method="POST">
      <h4 class="text-danger">Voulez vous vraiment Supprimer ?</h4> <br>
      <input type="submit" class="btb btn-danger " value="OUI" name="oui">


    </form> <br>
    <a href="actualiser.php" class="btn btn-primary">NON</a>

</center>
  </body>
  </html>

                                              