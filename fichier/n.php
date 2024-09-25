<?php
session_start();
include("../connexion.php");
$idko = " ";
$idko = $_SESSION['idko'];
$idko = $_SESSION['ok'];
if(isset($_POST['save']))
{
  $id_olo = ($_POST['num']); 
  $objet = ($_POST['objet']); //echo $objet ; 
  $nom = ($_POST['nom']); 
  $mess = ($_POST['mess']); //echo $mess; 
  $fichier = ($_FILES['fic']['name']);  //echo ($fichier); 
  $target = "envoye/".basename($_FILES['fic']['name']);

  move_uploaded_file( $_FILES['fic']['tmp_name'],$target);
 $sql = "INSERT INTO messagy (id_olo,objet,nom_ko,mess,fic) VALUES ('$id_olo','$objet','$nom','$mess','$fichier')";
 $result =mysqli_query($conn,$sql);
 if($result)
 {
   header("location:nmessage.php");
 }
  

}
$idko = $_SESSION['ok'];
?>