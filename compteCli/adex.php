<?php 
session_start();
$idko = " ";
$idko =$_SESSION['ok']; 

$vola = " ";
$aloa = " ";
$nbr = " " ;
//echo $idko;
include('../connexion1.php');

$requet ="SELECT prenom,direction,numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_ut= $idko" ;
$result = $bddPDO->query($requet);
if(!$result)
{
      echo("erreur");
}
else
{
    $nbre = $result->rowCount();
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Compte</title>
</head>
<body class="btn-dark">
<br><br><br><br><br>
<?php 
include("../connexion.php");
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$idko') ");
                               if(mysqli_num_rows($req)== 0)
                                          {
                                              echo("Base de donne vide ");
                                          }
                             else{
                                       while($row=mysqli_fetch_assoc($req)) {
                                         $valeur =  $row['valeur'];// echo $valeur ;
                                         $nom = $row['nom'];
                                         $prenom = $row['prenom'];
                                         $direction= $row['direction'];
                                         $mod = $row['mdp'];  }}


?>
   <div class="container">
    <div class="row">
        <article class="col-md-3">

        </article>
        <article class="col-md-6 btn-secondary border border-warning rounded ">
            <br>
            <center><div class="btn btn-dark text-white">Mon compte <br> <span class="btn text-warning"><?php echo ($row['nom']." ".$row['prenom']) ;  ?></span>
         <br> <a href="a.php" class="btn btn-danger custom">Retour</a></div></center> <br>
          <h3>
            Nom : <span class="text-dark"><?php echo $nom; ?> </span><br>
            Prenom : <span class="text-dark"><?php echo $prenom; ?> </span><br>
            Direction : <span class="text-dark"><?php echo $direction; ?> </span><br>
            Mots de pass : <span class="text-dark"><?php echo $mod ;?> </span><br>
<div class="form-inline">
Modifier les information :   &thinsp;                   <form action="edit.php" method="POST">
                  <input type="hidden" value=" <?php  echo($idko); ?>" name="id">
                <input type="submit" class="btn btn-dark custom" value="Modifier" name="modif" >
                  </form>
</div> 
<?php 
$vola ;
       if($valeur <1 ) 
       {
         $vola = 0 ;
       }
       elseif($valeur == 1  )
       {
        $vola = 1500 ;
       }
       elseif($valeur == 2)
       {
        $vola = 3500 ;
       }
    $aloa = $vola * $nbre ;
    
   

?>

            Montant a Payer : <span class="btn btn-warning text-dark"><?php  echo $aloa ;  ?> Ar</span><br>
          </h3>
        </article>
        <article class="col-md-3">

        </article>

    </div>

   </div> 
</body>
</html>
<?php // echo($nbre); ?>