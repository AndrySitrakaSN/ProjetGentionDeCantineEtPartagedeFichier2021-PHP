<?php
session_start();

include_once("../connexion.php");

$l1 = " ";
$l2 = " ";
$l3 = " ";
$l4 = " ";
$l5 = " ";
$idko= "";


if(isset($_POST['lasa']))
{
    $idko = $_POST['numero'];
    echo ($idko);
}
$idko =  $_SESSION['ok'];
// code mampiseho ny Lundi
$sql = "SELECT *FROM andro where (id)= 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $row['menu'];
        $lundi =  $row['menu'];

                                         }
                            } 

// code mampiseho ny Mardi 
$sql = "SELECT *FROM andro where (id)= 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $row['menu'];
        $mardi = $row['menu'];
                                         }
                            }  
                            
// code mampiseho ny Mercredi  
$sql = "SELECT *FROM andro where (id)= 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row['menu'];
        $mercredi = $row['menu'];
                                         }
                            }   
                            
 // code mampiseh ny Jeudi                           
$sql = "SELECT *FROM andro where (id)= 4";
  $result = $conn->query($sql);
                            
 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     $row['menu'];
     $jeudi = $row['menu'];
                                          }
                                 } 

 // code mampiseho ny Vendredi
 $sql = "SELECT *FROM andro where (id)= 5";
  $result = $conn->query($sql);
                            
 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     $row['menu'];
     $vendredi = $row['menu'];
                                        }     
                               }

if(isset($_POST['soo']))
{
    $idko = $_POST['snrs'];
}



if(isset($_POST['ga']))
{
    // $anarako = $_POST['prenom1'];
     $idko = $_POST['po'];
}


   // affichage de validation Lundi

   $sql ="SELECT prenom,direction  FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) 
   AND (andro.id = commande.id_dat) 
   And  id_dat=1 " ;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
       $row['prenom']  ;
       $l1 = ("OK") ;
       $l11 = ("Vous avez dejat Commander ! ");

     }
  }
  


  $sql ="SELECT prenom,direction FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
  (andro.id = commande.id_dat) And id_dat= 2" ;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) 
      {
         $row['prenom']  ;
         $l2 = ("OK");
  
       }
    }



    $sql ="SELECT prenom,direction FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
    (andro.id = commande.id_dat) And id_dat= 3" ;
      $result = $conn->query($sql);
    
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
           $row['prenom']  ;
           $l3 = ("OK");
    
         }
      }


      $sql ="SELECT prenom,direction FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
      (andro.id = commande.id_dat) And id_dat= 4" ;
        $result = $conn->query($sql);
      
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) 
          {
             $row['prenom']  ;
             $l4 = ("OK");
      
           }
        }


        $sql ="SELECT prenom,direction FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
        (andro.id = commande.id_dat) And id_dat= 5" ;
          $result = $conn->query($sql);
        
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
               $row['prenom']  ;
               $l5 = ("OK");
        
             }
          }

if(isset($_POST['ary']))
{
  $idko = $_POST['da'];
 // echo $idko;
}

//$idko =  $_SESSION['idko'];

$manaiky = "p1.png";
$manda = "p.png";
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
    <title>Programme</title>
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/dashboard.css" rel="stylesheet">
  </head>
  
  <body>
    
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
               <?php
                               $req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$idko') ");
                               if(mysqli_num_rows($req)== 0)
                                          {
                                              echo("Base de donne vide ");
                                          }
                             else{
                                       while($row=mysqli_fetch_assoc($req)) {

?><img src="../admin/photos/<?php echo $row['photos'] ?>" alt="" width="50" height="50" > <?php
echo ($row['nom']."  ".$row['prenom']) ; }} ?>
      </a>

 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
        <br><br> <span class="  btn btn-secondary custom  ">Programme
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="a.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/Logo calendar with a check mark. Vector image. Flat design. Stock vector illustration.jpg" 
              alt="" width="20" height="20"> &thinsp;<span class="text-primary">Programme</span>
            </a>
          </li>
          </ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Liste commandes</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">

  </li>
  <li class="nav-item">
            <a class="nav-link" href="a1.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span class="">Liste commandes</span>
            </a>
          </li>
 
</ul>

<h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
  <span class="  btn btn-secondary custom  ">Compte</span>
</h5>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
  
  </li>
  <li class="nav-item">
            <a class="nav-link" href="compte1.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;<span class="">Compte</span>
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
            <a href="a.php" class="btn btn-sm btn-dark"> 
            <img src="../image/Logo calendar with a check mark. Vector image. Flat design. Stock vector illustration.jpg" 
               width="20" height="20" alt="">  
            Programme </a>
            <a href="../pdf/programme.php" class="btn btn-sm btn-secondary">
            <img src="../image/pdf.png" alt=""  width="20" height="20" >  
            PDF </a>
          </div>

          <a href="validation.php" class="btn btn-sm btn-secondary">
          <img src="../image/[034295].png" alt=""  width="20" height="20" >    
          Menu Principal</a>
        </div>
      </div>

      



      <div id="popo" class="container-fluid">
       <div class="col-md-12"> 


                <article class="col-md-6">



                
            
                 </article>  



                          <center> <div class="btn-danger"> <?php echo ($aaa); ?></div> </center>
             </article>
</div>     
<table class=" table">
                  <tr class="table-dark">
                       <th> Jour</th>
                       <th >Menu</th>
                       <th class="text-center">Commande</th>
                       <th><center>Validation </center></th>
                  </tr>
                  
                  <tr class="table-success">
                        <th class="table-"> Lundi</th>
                        <td class="table-"> <?php  echo($lundi);?></td>
                        <td class="text-center table-success ">
                              <form action="cmd.php" method="POST">
                                          <input type="hidden" name="idlundi" value="<?php echo("$idko") ?> " >
                                          <input type="hidden" name="jlundi" value="1">
                                          <input type="submit" name="lundi"class="btn btn-secondary" value=" commander ">
                              </form>
                        </td>
                        <td class="text-center table-success">
                           <?php
                                 include('../connexion1.php');
                                   $requet ="SELECT prenom,direction,numUt 
                                              FROM utilisateur , andro ,commande
                                              where (utilisateur.numUt =commande.id_ut) 
                                              AND (andro.id = commande.id_dat)
                                              And id_ut= $idko
                                              and (andro.id = 1 )";
                                              $result = $bddPDO->query($requet);

                                              $nbre = $result->rowCount();
                                              //echo $nbre ;

                                              if($nbre < 1 )
                                              {
                                               ?>
                                                   <center><img src="../image/p1.png" alt="" height="30" width="30" ></center>
                                               <?php
                                              }  
                                            else
                                            {
                                             ?>
                                                   <center><img src="../image/p.png" alt="" height="30" width="30"></center>
                                             <?php
                                            }  

                                              

                           ?>
                        </td>
                  </tr>

                  <tr class="table-success">
                        <th class="table-"> Mardi</th>
                        <td class="table-"><?php  echo($mardi);?></td>
                        <td class="text-center table-success">
                              <form action="cmd.php" method="POST">
                                          <input type="hidden" name="idlundi" value="<?php echo("$idko") ?> " >
                                          <input type="hidden" name="jlundi" value="2">
                                          <input type="submit" name="lundi"class="btn btn-secondary" value=" commander ">
                              </form>
                        </td>
                        <td class="text-center table-success">
                           <?php
                                 include('../connexion1.php');
                                   $requet ="SELECT prenom,direction,numUt 
                                              FROM utilisateur , andro ,commande
                                              where (utilisateur.numUt =commande.id_ut) 
                                              AND (andro.id = commande.id_dat)
                                              And id_ut= $idko
                                              and (andro.id = 2 )";
                                              $result = $bddPDO->query($requet);

                                              $nbre = $result->rowCount();
                                              //echo $nbre ;

                                              if($nbre < 1 )
                                              {
                                               ?>
                                                   <center><img src="../image/p1.png" alt="" height="30" width="30" ></center>
                                               <?php
                                              }  
                                            else
                                            {
                                             ?>
                                                   <center><img src="../image/p.png" alt="" height="30" width="30"></center>
                                             <?php
                                            }  

                                              

                           ?>
                        </td>
                  </tr>

                  <tr  class="table-success">
                        <th class=""> Mercredi</th >
                        <td  class=""><?php  echo($mercredi);?></td >
                        <td class="text-center table-success">
                              <form action="cmd.php" method="POST">
                                          <input type="hidden" name="idlundi" value="<?php echo("$idko") ?> " >
                                          <input type="hidden" name="jlundi" value="3">
                                          <input type="submit" name="lundi"class="btn btn-secondary" value=" commander ">
                              </form>
                              <td class="text-center table-success">
                           <?php
                                 include('../connexion1.php');
                                   $requet ="SELECT prenom,direction,numUt 
                                              FROM utilisateur , andro ,commande
                                              where (utilisateur.numUt =commande.id_ut) 
                                              AND (andro.id = commande.id_dat)
                                              And id_ut= $idko
                                              and (andro.id = 3 )";
                                              $result = $bddPDO->query($requet);

                                              $nbre = $result->rowCount();
                                              //echo $nbre ;

                                              if($nbre < 1 )
                                              {
                                               ?>
                                                   <center><img src="../image/p1.png" alt="" height="30" width="30" ></center>
                                               <?php
                                              }  
                                            else
                                            {
                                             ?>
                                                   <center><img src="../image/p.png" alt="" height="30" width="30"></center>
                                             <?php
                                            }  

                                              

                           ?>
                        </td>
                  </tr>

                  <tr  class="table-success">
                        <th  class=""> Jeudi</th >
                        <td class=""><?php  echo($jeudi);?></td>
                        <td class="text-center table-success">
                              <form action="cmd.php" method="POST">
                                          <input type="hidden" name="idlundi" value="<?php echo("$idko") ?> " >
                                          <input type="hidden" name="jlundi" value="4">
                                          <input type="submit" name="lundi"class="btn btn-secondary" value=" commander ">
                              </form>
                        </td>
                        <td class="text-center table-success">
                           <?php
                                 include('../connexion1.php');
                                   $requet ="SELECT prenom,direction,numUt 
                                              FROM utilisateur , andro ,commande
                                              where (utilisateur.numUt =commande.id_ut) 
                                              AND (andro.id = commande.id_dat)
                                              And id_ut= $idko
                                              and (andro.id = 4 )";
                                              $result = $bddPDO->query($requet);

                                              $nbre = $result->rowCount();
                                              //echo $nbre ;

                                              if($nbre < 1 )
                                              {
                                               ?>
                                                   <center><img src="../image/p1.png" alt="" height="30" width="30" ></center>
                                               <?php
                                              }  
                                            else
                                            {
                                             ?>
                                                   <center><img src="../image/p.png" alt="" height="30" width="30"></center>
                                             <?php
                                            }  

                                              

                           ?>
                        </td>
                  </tr>

                  <tr class="table-success">
                        <th  class=""> Vendredi</th >
                        <td  class=""><?php  echo($vendredi);?></td>
                        <td class="text-center table-success ">
                              <form action="cmd.php" method="POST">
                                          <input type="hidden" name="idlundi" value="<?php echo("$idko") ?> " >
                                          <input type="hidden" name="jlundi" value="5">
                                          <input type="submit" name="lundi"class="btn btn-secondary" value=" commander ">
                              </form>
                        </td>
                        <td class="text-center table-success">
                           <?php
                                 include('../connexion1.php');
                                   $requet ="SELECT prenom,direction,numUt 
                                              FROM utilisateur , andro ,commande
                                              where (utilisateur.numUt =commande.id_ut) 
                                              AND (andro.id = commande.id_dat)
                                              And id_ut= $idko
                                              and (andro.id = 5 )";
                                              $result = $bddPDO->query($requet);

                                              $nbre = $result->rowCount();
                                              //echo $nbre ;

                                              if($nbre < 1 )
                                              {
                                               ?>
                                                   <center><img src="../image/p1.png" alt="" height="30" width="30" ></center>
                                               <?php
                                              }  
                                            else
                                            {
                                             ?>
                                                   <center><img src="../image/p.png" alt="" height="30" width="30"></center>
                                             <?php
                                            }  

                                              

                           ?>
                        </td>
                  </tr>


                </table>   
                <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS</p>

   <p>Food fid Programme</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="validation.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div>
 
  </div>
</div>


    <script src="js/bundle.min.js"></script>

      <script src="js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
 
    </body>
</html>












