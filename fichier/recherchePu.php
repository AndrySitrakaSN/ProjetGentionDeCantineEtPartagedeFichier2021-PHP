<?php 
session_start();

$numero = "";
include("../connexion.php");


$idko =$_SESSION['ok'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Page Principal</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="stylee.css">
    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body class="btn-dark ">
  <?php
      $req = mysqli_query($conn, "SELECT *FROM utilisateur where numUt = ('$idko') ");
      if (mysqli_num_rows($req) == 0) {
        echo ("Base de donne vide ");
      } else {
        while ($row = mysqli_fetch_assoc($req)) {

      ?> 
  <div class="btn-">
  <div class="btn btn-warning ">FID Gestion de fichier <span btn class="btn btn-dark"><?php echo ($row['nom'] . " " . $row['prenom']); }} ?></span></div>
  </div>

<br><br>

<center>
<div class="btn-group row">
<form action="andex.php" method="POST">
                  <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                  <input type="submit" name="ary" id="" value="Fichier public" class=" text-white btn btn-info custom">
                </form>

                <form action="nmessage.php" method="POST">
                  <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                  <input type="submit" name="ary" id="" value="Envoye de fichier" class=" text-white btn btn-outline-info  custom">
                </form>

                <form action="messageP.php" method="POST">
                   <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                   <input type="submit" name="ary" id="" value="Fichier privé " class=" text-white btn btn-outline-info  custom">
              </form>
            

            
                <form action="messageG.php" method="POST">
                   <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                   <input type="submit" name="ary" id="" value="Mon fichier privé" class=" text-white btn btn-outline-info  custom">
              </form>
            
      
        <form action="../compteCli/compte.php">
                <input type="hidden">
                <input type="hidden">
                <input type="submit" name="" id="" value=" Deconnexion " class=" text-white btn  btn-danger custom">
          </form>

</center>
</div>

  </div>     
  
    </nav> <br><br> 
<div class="btn-secondary form-inline">
<h3 class="text-dark" ><span class=" text-info">Ajout de fichier public</span>
        &thinsp; <a href="f1.php">
                                <img src="../image/m.png" alt="" width="20" height="20"></a>
      </h3> &thinsp;&thinsp;

      <form action="recherchePu.php" method="POST" >
            <input type="submit" class="btn btn-success" value="Recherche" name="eka1">
            <input type="text" class="form-control" placeholder="objet de fichier" name="eka">
      </form>

      <a href="liste _public.php" class="btn btn-danger">Supprimer des fichier public</a>
</div>
<?php 
        if(isset($_POST['eka1']))
                {
                    $tady = $_POST['eka']; echo $tady ;
                     
                    if($tady == NULL)
                    {
                        header("location:andex.php");
                    }

                    $req =mysqli_query($conn,  "SELECT nom ,prenom ,direction ,objett,fic,messagi 
                    FROM principal ,utilisateur
                       where (principal.id_ut=utilisateur.numUt) 
                       And objett = ($tady)");

                          if (mysqli_num_rows($req) == 0) {
                            echo ("Base de donne vide ");
                            header("location:andex.php");
                          } else {
                            while ($row = mysqli_fetch_assoc($req)) {
                                  $nom =   $row['nom'];            // echo  $nom ;
                                  $prenom =   $row['prenom'];      // echo $prenom;    
                                  $direction =  $row['direction'];  //echo $direction ; 
                                  $objet =  $row['objett'];        // echo $objet; 
                                  $mess =  $row['messagi'];        // echo $mess; 
                                  $fichier = $row['fic'];          // echo $fichier ; 
                            }}           
                    
                            
                }
?>
<br>
<center>
&thinsp;<div class=" btn-secondarytext-dark "> <div class="text-white"> <h4><?php echo $nom; ?>&thinsp;  <?php echo $prenom ; ?>
 <span class="btn btn-dark"> <?php echo $direction ; ?> </span>
</h4></div>
<h3> <span class=" btn btn-secondary text-white custom"><?php echo $objet ?></span></h3>
<h6 class="text-white"><?php echo $mess; ?> </h6> 
&thinsp; &thinsp;  <br>
</div><br>
<td> <a href="principal/<?php echo $fichier; ?>"> <img src="../image/[036931].jpg" alt="" width="70" height="70"></a></td>
</center>
                   
  </body>
</html>



  

                           