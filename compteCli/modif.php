<?php
session_start();

include("../connexion.php");
if(isset($_POST['modif']))
{
    
    $num = $_POST['ss20'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $direction = $_POST['direction'];
    $tel = $_POST['tel'];
    $fady = $_POST['fady'];
    $mdp =$_POST['mdp'];
    $valeur = $_POST['valeur'];
 
    $sql = "UPDATE utilisateur SET nom='$nom',prenom='$prenom',direction='$direction',tel ='$tel', fady='$fady',mdp='$mdp', valeur= '$valeur' 
    WHERE numUt=$num";
      $_SESSION['idko']=$num;  echo $ $_SESSION['idko'];
if ($conn->query($sql) === TRUE) {
    header("location: a.php");
    exit();
} else {
    echo("Misy tsy milamina ny code lehiroa");
}
    
   
 
}


?>

