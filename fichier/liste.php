<?php
session_start();
$idko = $_SESSION['ok'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Liste de mes fichier public</title>
</head>
<body class="btn-dark">
    <a href="messageP.php" class="btn btn-danger"> Retour</a>

    <div class="container">
         <div class="row">
              <article class="col-md-3">

              </article>

              <article class="col-md-6">
                  <table class="table table-bordered  ">
                       <tr class="table-dark text-dark">
                            <th><center>Nom </center></th>
                            <th><center>Prenom</center></th>
                            <th><center>Direction</center></th>
                            <th><center>Objet</center></th>
                            <th><center>Message</center></th>
                     
                       </tr>
                           <?php
                           include ("../connexion.php");
                           $sql = "SELECT nom ,prenom ,direction ,objet,fic,mess,numko FROM messagy ,utilisateur 
                            where (messagy.id_olo =utilisateur.numUt) And numko = $idko";
                           $req = mysqli_query($conn , $sql);
                          if(mysqli_num_rows($req)== 0)
                                     {
                                         $aaa =("Base de donne vide ");
                                     }
                        else{
                                  while($row=mysqli_fetch_assoc($req)) {
                             ?> 
                          <tr>
                              <td><center><?php echo $row['nom']; ?> </center> </td>
                              <td><center><?php echo $row['prenom']; ?> </center> </td>
                              <td><center><?php echo $row['direction']; ?> </center> </td>
                              <td><center><?php echo $row['objet']; ?> </center> </td>
                              <td><center><?php echo $row['mess']; ?> </center> </td>

                          </tr>
                          <?php }} ?>
                  </table>

              </article>
              <article class="col-md-3">

              </article>
         </div>
    </div>
</body>
</html>