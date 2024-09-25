<?php
include("../connexion.php");
$isa = "";
$ttr = "";
$a = " ";

$sql ="SELECT  COUNT(*) numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 2" ;
// $sql = " SELECT COUNT(*) numUt FROM utilisateur";
$result = $conn->query($sql);
$isa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Administration</title>
</head>
<body class="bg-dark">
<img src="../image/f.jpg" alt="" width="40" height="40" >
<center>
<div id="titre" class="text-white">Administration</div>
</center>

    <div class="container-fluid btn-lg">
         <div class="container-fluid">
            <div class="row">
                     
                      <article class="col-md-12">
                      <center> 
<div class="btn-group btn-group-lg" role="group" aria-label="Large button group" >
<a href="admin.php" class="btn btn-info "> Programme</a>
<a href="Utilisateur.php" class="btn btn-info">Utilisateur</a>
<!-- <a href="../cree/affichage.php" class="btn btn-outline-dark"> Demande</a> -->
<a href="d1.php"class="btn btn-info text-warning">Effectif</a>
<a href="compte.php" class="btn btn-info">Compte</a>
<a href="actualiser.php" class="btn btn-info">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center>
                      </article >
      
                   
            </div>
        </div>
</div>
<h1> <span class="text-white">Liste</span>
     <a href="d1.php" class="btn btn-secondary">Lundi</a> 
     <a href="d2.php" class="btn btn-primary">Mardi</a> 
     <a href="d3.php" class="btn btn-secondary">Mercredi</a>
     <a href="d4.php" class="btn btn-secondary">Jeudi</a> 
     <a href="d5.php" class="btn btn-secondary">Vendredi</a>
     <div class="btn btn-info"> 
        <div class="btn btn-dark"><?php print_r( $isa ['numUt'] );?></div><?php  echo " commande"; ?> </div>
     <a href="../pdf/mardi.php" > <img src="../image/pdf.png" alt=""> </a>
</h1>  
<br><br>
<div class="container-fluid">
<table class="table table-bordered">
    <header>
        <tr class="table-secondary">
            <th>Nom</th>
            <th>Proffetion</th>
             <th><center>Supprimer</center></th>
        </tr>
    </header>
<?php 
include("../connexion.php");
$sql ="SELECT prenom,direction ,numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 2" ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr class="table-success ">
            <td> <?php echo ($row['prenom']); ?></td>
            <td> <?php echo ($row['direction']); ?>
            <th><center><a href= "supa2.php?supp=<?php echo $row['numUt'];?>"><img src="../image/sip.png" alt="" width="30" height="30"> </a></center></th>
        </tr>
        </td> <?php }} ?>        
</table>
</div>
        


         
</body>
</html>