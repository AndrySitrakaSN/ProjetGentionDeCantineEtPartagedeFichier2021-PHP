<?php
include("../connexion.php");
$aaa = '';
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

<div id="">
    <div class="container-fluid btn-lg">
         <div class="container-fluid">
            <div class="row">
                     
                      <article class="col-md-12">
                         
                      <center> 
<div class="btn-group btn-group-lg" role="group" aria-label="Large button group" >
<a href="admin.php" class="btn btn-info "> Programme</a>
<a href="Utilisateur.php" class="btn btn-info">Utilisateur</a>
<!-- <a href="../cree/affichage.php" class="btn btn-outline-dark"> Demande</a> -->
<a href="d1.php"class="btn btn-info ">Effectif</a>
<a href="compte.php" class="btn btn-info text-warning">Compte</a>
<a href="actualiser.php" class="btn btn-info">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center>
                      </article >
      
                   
            </div>
        </div>
</div>
</div>
       <!-- ito ny recherche -->  
                
       <form action="recherche.php" method="POST" class="form-inline">
                    <input type="submit" name="eka" class="btn" value="chercher"  >
                    <input type="text" name="eka1" class="form-control" placeholder="numero ou prenom">
                
                                 
                                </form>
<h1><span class="text-white">Compte</span>
<a href="fomulaireUtilisateur.php">
           
                             <a href="../pdf/utilisateur.php" > <img src="../image/pdf.png" alt=""> </a>
</h1>
<br>
<div class="container-fluid">
<table class="table table-bordered">
    <header>
        <tr class="table-secondary text-dark">
            <th><center>Nom</center></th>
            <th><center>Proffetion</center></th>
            <th><center>Compte</center></th>

        </tr>
    </header>
<?php 

$sql ="SELECT prenom,direction FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) " ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr >
            <td class="table-primary text-dark "> <center><?php echo ($row['prenom']); ?></center></td>
            <td class="table-primary text-dark "><center> <?php echo ($row['direction']); ?> </center></td>
            <td class="table-primary text-dark "> <center></center>               </td>
       </tr>             
 <?php }}
        else {
            $aaa = (" commande vide !");
        }
        
        ?>        
</table>
<div class="btn-danger">
    <center><p><?php  echo($aaa); ?> </p></center>          
</div>
</div>

         
</body>
</html>