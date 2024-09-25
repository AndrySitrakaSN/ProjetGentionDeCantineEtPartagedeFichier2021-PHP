<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Administration</title>
</head>
<body class="btn-dark">
<nav class="fixed-top">
<img src="../image/f.jpg" alt="" width="40" height="40" >
<center>
<div id="titre">Administration</div>
</center>

<div></div>  
<div id="">
    <div class="container-fluid btn-lg">
         <div class="container-fluid">
            <div class="row">
                     
                      <article class="col-md-12">
                      
<center> 
<div class="btn-group btn-group-lg" role="group" aria-label="Large button group" >
<a href="admin.php" class="btn btn-info text-warning"> Programme</a>
<a href="Utilisateur.php" class="btn btn-info">Utilisateur</a>
<!-- <a href="../cree/affichage.php" class="btn btn-outline-dark"> Demande</a> -->
<a href="d1.php"class="btn btn-info">Effectif</a>
<a href="compte.php" class="btn btn-info">Compte</a>
<a href="actualiser.php" class="btn btn-info">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center>


                      </article >
      
                   
            </div>
        </div>
</div>
</div>
</div>
<h1 class="text-secondary">  &thinsp; &thinsp;Programme <a href="../pdf/programme.php" > <img src="../image/pdf.png" alt=""> </a></h1>
</nav>
<div class="container-fluid btn-lg" id="popo">
         <div class="container-fluid">
            <div class="row">
                     
                      <article class="col-md-12 text-dark">
                            
                             <table class="table table-borderless ">
                             <header>
                             <tr class="table-secondary" >
                                   
                                    <th><center>Jour</center></th>
                                    <th>Date</th>
                                    <th>Menu</th>
                                  <th><center>Modifier</center></th>
                                
                                </tr>
                             </header>

<?php
   include("../connexion.php");
  
   $req = mysqli_query($conn , "SELECT *FROM andro ");
   if(mysqli_num_rows($req)== 0)
   {
     echo("il n'y a pas d'emploie ajouter dans la base de donnee ");
   }
      else{
             while($row=mysqli_fetch_assoc($req)) {
?> 

                                <tr class="table-primary">
                                   
                                    <td><center><?php echo $row['jour']; ?></center></td>
                                    <td><?php echo $row['daty']; ?></td>
                                    <td><?php echo $row['menu']; ?></td>
                                     <center>
                                     <td> <center><a href="formulaireMenu.php?modif=<?php echo $row['id'];   ?>"  ><img src="../image/edit.png" alt="" id="food" width="30" height="30"></a></center></td>
                                     </center>
                                
                                </tr>
<?php                                               }
      }
?>                                      
                         </table>       

                      </article >
   
    
            </div>
        </div>
</div>
</div>

       
</body>
</html>