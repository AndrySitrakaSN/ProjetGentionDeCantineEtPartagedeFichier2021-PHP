<!doctype html>
<html>
    <head>

    </head>
    <body>
        


    <?php
session_start();
include("../connexion.php");
$msg =" ";

if(isset($_POST['go']))
{
  $id = ($_POST['id']); echo $id ;
  $objet = ($_POST['objet']); echo $objet ; 
  $mess = ($_POST['message']); echo $mess; 
  $fichier = ($_FILES['ficc']['name']);  echo ($fichier); 
  $target = "principal/".basename($_FILES['ficc']['name']);

  move_uploaded_file( $_FILES['ficc']['tmp_name'],$target);
  $sql = "INSERT INTO principal (id_ut,objett,fic,messagi) VALUES ('$id','$objet','$fichier','$mess')";
  $result =mysqli_query($conn,$sql);

  // ito ndray mandeha @page izay ao @Location

}
header('Location: ./f1.php');
?> 

  </body>
</html>