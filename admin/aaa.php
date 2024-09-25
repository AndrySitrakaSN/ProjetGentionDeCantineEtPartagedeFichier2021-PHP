<?php 
session_start();
 $_SESSION['tik'] =  ' ';

include("../connexion.php");
$passt = " ";
$passt = " ";
$aaa = " ";
$ok = " ";
$ko = " ";

$req = mysqli_query($conn , "SELECT *FROM administrateur where id=1940 ");
if(mysqli_num_rows($req)== 0)
{
     echo(" base de donnee vide ");
}
else{
          while($row=mysqli_fetch_assoc($req)) 
          {
                 $row['id'];
               // echo($snrs);
               $snrs1=  $row['passad']; // echo($snrs1);
          }
}

if(isset($_POST['modif']) )
{
    $passT = $_POST['passT'];  // echo $passT ;
   // $passa= $_POST['passV']; echo $passV ;
    $passV = $_POST['passV']; // echo $passV ;
    $passVv = $_POST['passVv'];  //echo $passVv ;

    $rev =  ($passT != $snrs1);
    $riv = ($passV != $passVv);
    $rav = ($passV && $passVv != NULL);
     if ($rev)
       {
         $aaa = "mots de pass incorect !";

       }
    if(!$rev)
    {
              if($rav)
              {
                 if(!$riv)
                 {
                  $sql = "UPDATE asdministrateur SET passad='$passVv';
                  WHERE id=1940";
                 // $conn->query($sql);
                  $ok = " changement de mots de pass avec success";
                  header("actualiser.php");
                 
                }
                else
                {
                  $aaa = " nouveaux mots de pass incorect";
               
                }
              }
              else
              {
               $aaa = " mots de pass vide ";
              }
    }


   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Actualiser</title>
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
<a href="compte.php" class="btn btn-info">Compte</a>
<a href="actualiser.php" class="btn btn-info text-warning">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center>

                      </article >
      
                   
            </div>
        </div>
</div>
<h1 class="form-inline text-white" > Parametre
<a href="actualiser1.php" class="btn btn-info">Compte</a> </h1>

<div class="container">
      <div class="row">
             <article class="col-md-6">
             <div class="row justify-content-center">
   
   <form action="actualiser.php" method="POST">
  <center> <a href="../index.php"><img class="mb-4" src="../image/[036785].png" alt="" width="72" height="57"></a></center>
   <h1 class="h3 mb-3 fw-normal">Compte Admin </h1>
   
           
    <div class="form-groupe">
    <p class="btn-success"> <center class="btn-info"><?php echo $ok ; ?>  </center></p>  
<p class="btn-danger"> <center class="btn-danger"><?php echo $aaa ;  ; ?>  </center> </p>  
         <input type="text"  name="passT" class="form-control" placeholder="Ancien mots de pass">
    </div> <br>

    <div class="form-group">
   
         <input type="text" name="passV"  class="form-control" placeholder="Nouveau mots de pass">
    </div>

    <div class="form-group">
   
   <input type="text" name="passVv"  class="form-control" placeholder="Confirmer le nouveau mots de pass">
</div>
    
    <div class="form-group">
       <center>  <button type="submit" name="modif" class="btn btn-success" >Modifier</button></center>
     
    </div>
   
     

   </form>
   
</div>
             </article>
             <article class="col-md-6">
                      <center>
                         <br><br><br>
                        
                         <br>
                      <a href="suppri.php"><img src="../image/sup1.png" alt=""></a>
                       <h6 class="text-danger">Supprimer tous les commandes du semaine</h6>
                      </center>

             </article>
      </div>
</div>

          
</body>
</html>

