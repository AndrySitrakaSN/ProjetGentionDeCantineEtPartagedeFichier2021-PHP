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
 $sql = "DELETE FROM commande WHERE id_ut= $id and id_dat=5";
 if ($conn->query($sql) === TRUE) {
    header("location: d5.php");
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
               <body class="bg-dark">
                 <br><br><br><br><br><br><br><br><br><br>
             
             <center>
             
             <form class="supp.php" method="POST">
                   <p class="text-white">Voulez vous vraiment Supprimer ?</p>
                   <input type="hidden" name="ekaro" value="<?php  echo ($id); ?> " >
                   <input type="submit" class="btn btn-danger " value="OUI" name="oui">
                   <a href="d5.php" class="btn btn-primary">NON</a>
             
                 </form> <br>
                 
             
             </center>
               </body>
               </html>