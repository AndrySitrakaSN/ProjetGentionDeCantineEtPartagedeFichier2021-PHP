s<?php
include("../connexion.php");

if(isset($_GET['supp']))
{
  $id= $_GET['supp'];
 
}

if(isset ($_POST['oui']))
{ 
 $id = $_POST['ekaro'];
 echo($id);
 $sql = "DELETE FROM commande WHERE id_ut= $id and id_dat=4;";
 if ($conn->query($sql) === TRUE) {
    header("location: d4.php");
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
                   <input type="hidden" name="ekaro" value="<?php  echo ($id); ?> " >
                   <input type="submit" class="btb btn-danger " value="OUI" name="oui">
             
             
                 </form> <br>
                 <a href="d4.php" class="btn btn-primary">NON</a>
             
             </center>
               </body>
               </html>