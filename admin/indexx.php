<?php 
include("../connexion.php");
$aaa = " ";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="stylesheet" href="../fichier/style.css">
    <title>Administrateur</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
  </head>
  
  <body>
    
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
               <img src="../image/[036783].png" alt="" width="50" height="50" > &thinsp; Administrateur
      </a>

      <button class="navbar-toggler position-absolute d-md-none collapsed" 
       type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <form action="recherche.php" method="POST" class="btn-group ">
             <input type="text" name="eka1" class=" form-control custom" placeholder="numero ou prenom" >  &thinsp;
             <input type="submit" name="eka" class="btn btn-success" value="chercher"  >
            
       </form> 
 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
         <br><br> <span class="  btn btn-secondary custom  align-text-bottom">Utilisateur 
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span class="text-primary">Utilisateur</span>
            </a>
          </li>
          <li class="nav-item">

          </li>
          </ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Fichier</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="fichier.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp; <span > Fichier</span> 
    </a>
  </li>
  <li class="nav-item">

  </li>
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">cantine</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="admin.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/d.jpg" alt="" width="20" height="20"> &thinsp; <span >Cantine</span> 
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="compte.php">
      <span data-feather="file-text" class="align-text-bottom"></span>
      <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;  <span>Compte </span>
    </a>
  </li>
</ul>
<br><br>
<center>
<img src="../image/1666847760493.jpg" alt="" width="100" height="100">
</center>


</div>
</nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Utilisateur</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a href="index.php" class="btn btn-sm btn-secondary">
            <img src="../image/list.png" alt="" width="20" height="20">   
            Liste </a> &thinsp; &thinsp;
            <a href="indexx.php" class="btn btn-sm btn-dark">
            <img src="../image/[034889].png" alt="" width="20" height="20">   
            Admin </a> &thinsp; &thinsp;
            <a href="fomulaireUtilisateur.php" class="btn btn-sm btn-secondary">
            <img src="../image/m.png" alt="" width="20" height="20">   
            Ajouter </a> &thinsp; &thinsp;
            <a href="../pdf/utilisateur.php" class="btn btn-sm btn-secondary"> 
            <img src="../image/pdf.png" alt="" width="20" height="20">  
            PDF </a>
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>

      



      <div id="popo" class="container-fluid">
       <div class="col-md-12"> 
             <article class="col-md-12">
             <table class="table table-secondary table-borderless">
                             <header>
                             <tr class="table-dark">
                                    <th>Photos</th>
                                    <th>Numero</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Direction</th>
                                    <th>Telephone</th>
                                   <!--  <th>Mots de pass</th> -->
                                   <th>Fonction</th>
                                    <th>Cantine</th>
                                   
                                    <th>Adress </th>
                                     <th>Adress Mail</th>
                                    <th>Modifier</th>
                                    <th> Supprimer</th>
                                  
                                
                                </tr>
                             </header>

                              <?php
                           
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur where fonc =   1 ");
                              if(mysqli_num_rows($req)== 0)
                                         {
                                             $aaa =("Admin vide ");
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
                                    <!--<td> <?php //echo $row['mdp']; ?></td> -->
                                    <td> <?php $fo = $row['fonc']; 
                                                                        if($fo == 1)
                                                                        {
                                                                         echo ("Admin");
                                                                        }
                                                                       else 
                                                                       {
                                                                         echo("Non Admin");
                                                                       }
                                    ?></td>
                                    <td>
                                       <?php  $val =$row['valeur'] ;
                                          if($val== 1)
                                            {
                                              echo("1500");
                                            }
                                          else
                                          {
                                            echo("3500");
                                          }
                                       ?> 
                                       
                                       Ar</td>
                                    
                                    <td> <?php echo $row['adrs']?></td>
                                    <td> <?php echo $row['adrs_mail']?> </td>
                                  
                                    <th><center><a href= "edit.php?edit=<?php echo $row['numUt'];?>">
                                    <img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>

                                    <th><center><a href="supp.php?supp=<?php echo $row['numUt']; ?>">
                                    <img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                                    
                                </tr> 
<?php                                               }
      }
?>                                      
                         </table> 
                         
                         <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS 01</p>

   <p>Administrateur</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div>


                          <center> <div class="btn-danger"> <?php echo ($aaa); ?></div> </center>
             </article>
</div>     
      
 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
 
    </body>
</html>








