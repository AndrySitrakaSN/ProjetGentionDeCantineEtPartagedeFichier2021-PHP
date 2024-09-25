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
  $idolo = ($_POST['idolo']); echo $idolo ;
  $idko = ($_POST['idko']); echo $idko ;
  $objet = ($_POST['objet']); echo $objet ; 
  $mess = ($_POST['mess']); echo $mess; 
 // $mss = ($_POST['fic']); echo $mss; 
  $fichier = ($_FILES['fic']['name']);  echo ($fichier); 
  $target = "mess/".basename($_FILES['fic']['name']);



  // ito ndray mandeha @page izay ao @Location

}
;
?> 

  </body>
</html>

<?php /*
  move_uploaded_file( $_FILES['ficc']['tmp_name'],$target);
  $sql = "INSERT INTO mess (id_ko,id_olo,objet,messagee,fic) VALUES ('$idko','$idolo','$objet','$mess','$fichier')";
  $result =mysqli_query($conn,$sql);

*/
?>