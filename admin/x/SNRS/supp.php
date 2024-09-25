<?php
           include("../connexion.php");
              
           session_start();
          
           if(isset($_GET['supp']))
           {
             $id= $_GET['supp'];
            
           }

           if(isset ($_POST['oui']))
           { 
            $id = $_POST['ekaro'];
            echo($id);
            $sql = "DELETE FROM Utilisateur WHERE numUt= $id;";
            if ($conn->query($sql) === TRUE) {
               header("location: Utilisateur.php");
               exit();
                                  }
            }

            if(isset ($_POST['ga']))
            { 
             $id = $_POST['ge'];
             echo($id);
             $sql = "DELETE *FROM commande ";
             if ($conn->query($sql) === TRUE) {
                header("location: actualiser.php");
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

<form class="supp.php" method="POST">
      <h4 class="text-danger">Voulez vous vraiment Supprimer ?</h4> <br>
      <input type="hidden" name="ekaro" value="<?php echo ($id); ?> " >
      <input type="submit" class="btb btn-danger " value="OUI" name="oui">


    </form> <br>
    <a href="utilisateur.php" class="btn btn-primary">NON</a>

</center>
  </body>
  </html>

                                              }