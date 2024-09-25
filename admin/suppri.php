<?php
           include("../connexion.php");


            if(isset ($_POST['oui']))
            { 

             $sql = "DELETE FROM commande";
             $snrs = mysqli_query($conn,$sql);
             if ($snrs) {
                header("location: d1.php");
                exit();
                                   }
             else
             {
                echo ("misy diso ijy jao lehiroa");
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
  <body class="bg-dark">
    <br><br><br><br><br><br><br><br><br><br>

<center>

<form class="supp.php" method="POST">
  <p class="text-white">Voulez vous vraiment Supprimer tous les demmandes?</p>
      <input type="submit" class="btn btn-danger " value="OUI" name="oui">
      <a href="d1.php" class="btn btn-primary">NON</a>


    </form> <br>


</center>
  </body>
  </html>

                                           