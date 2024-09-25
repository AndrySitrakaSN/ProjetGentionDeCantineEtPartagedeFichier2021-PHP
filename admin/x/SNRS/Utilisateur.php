
<?php 
    include("../connexion.php");
 $aaa = " ";
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
 

<nav class="fixed-top bg-dark" >
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
                     <center> 
<div class="btn-group btn-group-lg" role="group" aria-label="Large button group" >
<a href="admin.php" class="btn btn-info "> Programme</a>
<a href="Utilisateur.php" class="btn btn-info text-warning">Utilisateur</a>
<!-- <a href="../cree/affichage.php" class="btn btn-outline-dark"> Demande</a> -->
<a href="d1.php"class="btn btn-info">Cantine</a>
<a href="compte.php" class="btn btn-info">Compte</a>
<a href="actualiser.php" class="btn btn-info">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center>
</center> <br>

       <!-- ito ny recherche -->  
                
                    <form action="recherche.php" method="POST" class="form-inline">
                    <input type="submit" name="eka" class="btn" value="chercher"  >
                    <input type="text" name="eka1" class="form-control" placeholder="numero ou prenom">
                
                                 
                                </form>
                    </article >       
                </div>
            </div>
       </div>
    </div> 
</div>


<div class="container-fluid btn-lg">
         <div class="container-fluid">
            <div class="row">
                     
                    
                             <h1 class="text-white">Utiliateur <a href="fomulaireUtilisateur.php">
                                <img src="../image/m.png" alt="" width="40" height="40"></a> 
                             <a href="../pdf/utilisateur.php" > <img src="../image/pdf.png" alt=""> </a>

                            </h1>
</nav>    <!-- fin vu varbar -->
</div> <br><br><br>


<div id="popo" class="container-fluid">
       <div class="col-md-12"> 
             <article class="col-md-12">
             <table class="table table-secondary table-borderless">
                             <header>
                             <tr class="table-secondary">
                                    <th>Numero</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Direction</th>
                                    <th>Telephone</th>
                                    <th>Fady</th>
                                    <th>Mots de pass</th>
                                    <th>Valeur</th>
                                    <th>Modifier</th>
                                    <th> Supprimer</th>
                                
                                </tr>
                             </header>

                              <?php
                           
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur ");
                              if(mysqli_num_rows($req)== 0)
                                         {
                                             $aaa =("Base de donne vide ");
                                         }
                            else{
                                      while($row=mysqli_fetch_assoc($req)) {
                                 ?> 

                                <tr class="table-primary">
                                    <td><?php echo $row['numUt'];  ?></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['direction']; ?></td>
                                    <td><?php echo $row['tel']; ?></td>
                                    <td><?php echo $row['fady']; ?></td>
                                    <td><?php echo $row['mdp']; ?></td>
                                    <td><?php echo $row['valeur']; ?></td>
                                    <th><center><a href= "edit.php?edit=<?php echo $row['numUt'];?>"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                                    <th><center><a href="supp.php?supp=<?php echo $row['numUt']; ?>"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                                
                                </tr> 
<?php                                               }
      }
?>                                      
                         </table> 
                          <center> <div class="btn-danger"> <?php echo ($aaa); ?></div> </center>
             </article>
</div>     

                      </article >
   
    
            </div>
        </div>
</div>
</div>
</div>
       
</body>
</html>