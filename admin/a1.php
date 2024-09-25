<?php 
include("../connexion.php");
$aaa = " ";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="stylesheet" href="../fichier/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Essais </title>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
               <img src="../image/f.jpg" alt="" width="30" height="30" > &thinsp; Administrateur
      </a>
      <form action="recherche.php" method="POST" class="form-inline ">
             <input type="text" name="eka1" class="  custom" placeholder="numero ou prenom" >  &thinsp;
             <input type="submit" name="eka" class="btn btn-success" value="chercher"  >
             <a href="actualiser2.php"><img src="../image/[028989].png" width="30" height="30"   alt=""></a> 
       </form> 
 
</header>

<center>
        <div class="container-fluid">
            <div class="row">

                <article class="col-md-2 bg-light"><br>
                    <span class="  btn btn-secondary custom  ">Utilisateur </span>
                    <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/[034770].png" alt="" width="20" height="20"> &thinsp;<span >Liste</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fomulaireUtilisateur.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <img src="../image/m.png" alt="" width="20" height="20"> &thinsp; Ajouter 
            </a>
          </li>
          </ul>
       
       
                </article>
 
                <article class="col-md-9"><br><br>
                <table class="table table-secondary table-borderless">
                             <header>
                             <tr class="table-dark">
                                    <th>Photos</th>
                                    <th>Numero</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Direction</th>
                                    <th>Telephone</th>
                                    <th>Mots de pass</th>
                                    <th>Valeur</th>
                                    <th>Fady</th>
                                    <th>Adress </th>
                                     <th>Adress Mail</th>
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

                                <tr class="table-secondary">
                                    <td> <img src="photos/<?php echo $row['photos']; ?>" alt="" width="60" height="60"> </td>
                                    <td> <center><?php echo $row['numUt'];  ?> </center></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['direction']; ?></td>
                                    <td><?php echo $row['tel']; ?></td>                          
                                    <td><?php echo $row['mdp']; ?></td>
                                    <td> <?php echo $row['valeur']?> </td>
                                    <td> <?php echo $row['fady']?> </td>
                                    <td> <?php echo $row['adrs']?></td>
                                    <td> <?php echo $row['adrs_mail']?> </td>
                                  
                                    <th><center><a href= "edit.php?edit=<?php echo $row['numUt'];?>"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                                    <th><center><a href="supp.php?supp=<?php echo $row['numUt']; ?>"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                                    
                                </tr> 
<?php                                               }
      }
?>                                      
                         </table> 
                </article>
           </div>
        </div>
</center>
</body>
</html>