<?php 
include("../connexion.php");
$isa = "";
$ttr = "";
$a = " ";
$tolal = "";

$sql ="SELECT  COUNT(*)  numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 1" ;
// $sql = " SELECT COUNT(*) numUt FROM utilisateur";
$result = $conn->query($sql);
$isa = mysqli_fetch_assoc($result);



$fafa = "SELECT *FROM utilisateur";
$query = mysqli_query($conn ,$fafa);
$tolal = mysqli_num_rows($query);

// echo $total ;

//$aaa = print_r( $isa ['numUt'] ) * 1900;
//echo $aaa ;


/*
$sql = "SELECT *FROM utulisateur";
$query = mysqli_query($conn ,$sql );
while($row =mysqli_fetch_assoc($query))
{
    $result[]= $row['numUt']);
}
echo implode(",",$result); */
 include('../connexion1.php');
 $requet = " SELECT *FROM utilisateur ";
$result = $bddPDO->query($requet);
if(!$result)
{
      echo("erreur");
}
else
{
    $nbre = $result->rowCount();
}

//echo($nbre);

$snrs = $nbre * 5;
 // echo $snrs ;

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
<body class="bg-dark ">
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
<a href="d1.php"class="btn btn-info text-warning">Cantine</a>
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
     <a href="d1.php" class="btn btn-primary">Lundi</a> 
     <a href="d2.php" class="btn btn-secondary">Mardi</a> 
     <a href="d3.php" class="btn btn-secondary">Mercredi</a>
     <a href="d4.php" class="btn btn-secondary">Jeudi</a> 
     <a href="d5.php" class="btn btn-secondary">Vendredi</a>
     <div class="btn btn-info"> 
        <div class="btn btn-dark"><?php print_r( $isa ['numUt'] );?></div><?php  echo " commande"; ?> </div>
     <a href="../pdf/lundi.php" > <img src="../image/pdf.png" alt=""></a>  

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

$sql ="SELECT prenom,direction,numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 1" ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr class="table-success ">
            <td> <?php echo ($row['prenom']); ?></td>
            <td> <?php echo ($row['direction']); ?>
            <th><center><a href= "supa.php?supp=<?php echo $row['numUt'];?>"><img src="../image/sip.png" alt="" width="30" height="30"> </a></center></th>
        </tr>
        </td> <?php }} ?>        
</table>
</div>
        


         
</body>
</html>