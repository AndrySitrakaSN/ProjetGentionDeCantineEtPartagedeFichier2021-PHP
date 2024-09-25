<?php
include("../connexion.php");
if(isset($_POST['modif']))
{
    $num = $_POST['ss20'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $direction = $_POST['direction'];
    $tel = $_POST['tel'];
    $mdp =$_POST['mdp'];
    $valeur = $_POST['valeur'];
    $fady = $_POST['fady'];
    $adr =$_POST['adresse'];
    $adr_m =$_POST['adresse_mail'];


    $sql = "UPDATE utilisateur 
    SET nom='$nom',prenom='$prenom',direction='$direction',tel ='$tel',mdp='$mdp',valeur='$valeur',fady= '$fady' ,
    adrs ='$adr' ,adrs_mail='$adr_m'
    WHERE numUt=$num";

if ($conn->query($sql) === TRUE) {
    header("location: parametre.php");
  //  echo("ok");
    exit();
} else {
    echo("erreur");
}
}
?>

