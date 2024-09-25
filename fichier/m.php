<?php
session_start();
include("../connexion.php");
$idko = " ";
$idko = $_SESSION['idko'];

if(isset($_POST['go']))
{
  $id = ($_POST['id']); //echo $id ;
  $objet = ($_POST['objet']); //echo $objet ; 
  $mess = ($_POST['message']); //echo $mess; 
  $fichier = ($_FILES['ficc']['name']);  //echo ($fichier); 
  $target = "principal/".basename($_FILES['ficc']['name']);

  move_uploaded_file( $_FILES['ficc']['tmp_name'],$target);
  $sql = "INSERT INTO principal (id_ut,objett,fic,messagi) VALUES ('$id','$objet','$fichier','$mess')";
  $result =mysqli_query($conn,$sql);
}
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

<body class="btn-dark">
<div class="btn btn-warning">FID Madagascar</div>
<?php
      $req = mysqli_query($conn, "SELECT *FROM utilisateur where numUt = ('$idko') ");
      if (mysqli_num_rows($req) == 0) {
        echo ("Base de donne vide ");
      } else {
        while ($row = mysqli_fetch_assoc($req)) {

      ?>
           <center>         <h1 class="">
                <div class="btn btn-dark">Ajout de fichier public</div>
                <br>
                <div><?php echo ($row['nom'] . " " . $row['prenom']);
                    }
                  } ?></div>
              </h1>
</center>
<center>
<div class="btn-group">

<form action="andex.php" method="POST">
               <input type="hidden" name="da" value="<?php echo ($idko); ?>">
               <input type="submit" name="ary" id="" value="Fichier public" class=" text-white btn btn-outline-info custom">
          </form>
          
<form action="nmessage.php" method="POST">
                 <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                <input type="submit" name="ary" id="" value="Envoye de fichier" class=" text-white btn btn-info custom">
          </form>
      
      
      
              <form action="messageP.php" method="POST">
                   <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                   <input type="submit" name="ary" id="" value="Fichier privé " class=" text-white btn btn-outline-info custom">
              </form> 
            

            
              <form action="messageG.php" method="POST">
                   <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                   <input type="submit" name="ary" id="" value="Mon fichier privé " " class=" text-white btn btn-outline-info  custom">
              </form>
            
      
        <form action="../compteCli/compte.php">
                <input type="hidden">
                <input type="hidden">
                <input type="submit" name="" id="" value=" Deconnexion " class=" text-white btn  btn-danger custom">
          </form>

</div>
</center>
            <h1 class="form-inline"> Ajout &thinsp;             <form action="andex.php" method="POST">
                  <input type="hidden" name="da" value="<?php echo ($idko); ?>">
                  <input type="submit" name="ary" id="" value=" Retour" class=" text-white btn btn-danger ">
                </form> </h1>
<br>       

<div class="container-fluid">
     <div class="row">

     
     <article class="col-md-4">
     <form action="f1.php" method="POST" enctype="multipart/form-data">
                <p>
                <input type="hidden" class="form-control custom" name="id" value="<?php echo $idko ; ?>" placeholder="Objet"> 
                <input type="text" class="form-control custom" name="objet" placeholder="Objet"> 
                <input type="text" class="form-control hehe" name="message" placeholder="Message">
            <input type="file"  class="form-control " name="ficc"  > <br>
                <input type="submit" class=" btn btn-primary" value="Enregistrer" name="go" >

            </form>
     </article>
     <article class="col-md-8">
          
      <div class="containe">
        <div class="row">
  
  
                                        <div class="scrollbar">
                                             
                                                     <table class="table table-striped ">
                                                    <tr>
                                                        <div class=" table-success ">
                                                               <th class="table-primary text-dark">Nom</th>
                                                               <th  class="table-primary text-dark">Prenom</th>
                                                               <th  class="table-primary text-dark">Direction</th> 
                                                               <th  class="table-primary text-dark">Numero</th>  
                                                        </div>
                                                       </tr>
                                            <?php                         
                                                 $req = mysqli_query($conn , "SELECT *FROM utilisateur ");
                                                if(mysqli_num_rows($req)== 0)
                                                  {
                                                  echo("Base de donne vide ");
                                                  }
                                                else{
                                                while($row=mysqli_fetch_assoc($req)) {
                                            ?>               
                                                  <tr>
                                                 <td><?php echo $row['nom']; ?></td>
                                                 <td><?php echo $row['prenom']; ?></td>
                                                 <td><?php echo $row['direction'];  ?></td>
                                                 <td><?php echo $row['numUt']; }}  ?></td>

                                                 </tr>
                                             </table>
                    

     </article>
     </div>
</div>

</body>

</html>