<?php
include("../connexion.php");
$aaa = '';
$raha = " ";
$nbr = 0 ;
if(isset($_POST['mitady']))
    {
        $raha = $_POST['raha']; 
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
      <form action="comptee.php" method="POST" class="btn-group ">
             <input type="text" name="raha" class=" form-control custom" placeholder="numero ou prenom" >  &thinsp;
             <input type="submit" name="mitady" class="btn btn-success" value="chercher"  >
            
       </form> 
 
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
         <br><br> <span class="  btn btn-secondary custom  ">Utilisateur 
       
          </span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="file" class="align-text-bottom"></span>
              <img src="../image/list.png" alt="" width="20" height="20"> &thinsp;<span class="">Utilisateur</span>
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
      <img src="../image/[028988].png" alt="" width="20" height="20"> &thinsp; <span >Fichier</span> 
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
      <img src="../image/[036756].png" alt="" width="20" height="20"> &thinsp;  <span class="text-primary">Compte </span>
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
        <h1 class="h2">Compte  utilisateur</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="#" class="btn btn-sm btn-dark">
            <img src="../image/list.png" alt="" width="20" height="20">  
            Liste </a>
            <a href="../pdf/#" class="btn btn-sm btn-secondary"> 
            <img src="../image/pdf.png" alt="" width="20" height="20">    
            PDF </a>
          </div>

          <a href="../index.php" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>

      <table class="table table-bordered">
    <header>
        <tr class="table-dark">
            <th><center>Photos</center></th>
            <th><center>Numero</center></th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Direction</th>
            <th><center>Prix</center></th>
<!-- 

            <th>Nom</th>
            <th>Prenom</th>
            <th>Direction</th>
            <th><center>Compte</center></th>

-->

        </tr>
    </header>
<?php 

$sql =" SELECT photos ,numUt , nom , prenom ,direction ,id_ut ,count(id_ut) as nbr,valeur  from utilisateur , commande 
        where nom = '$raha'|| numUt = '$raha' || prenom = '$raha'
        and utilisateur.numUt = commande.id_ut  " ;    
       


/*

$sql ="SELECT numUt, nom,prenom,direction  ,count(numUt) as nbr                             
        FROM  commande ,utilisateur,andro  
        where (utilisateur.numUt =commande.id_ut)
        AND(andro.id = commande.id_dat) " ;

                                   $req = mysqli_query($conn , $sql);
                          if(mysqli_num_rows($req)== 0)
                                     {
                                         $haha = (" Introuvable !");
                                     }
                        else{
                                  while($row=mysqli_fetch_assoc($req)) {
                             ?>  


                               $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
*/

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr >
          <td class="table-primary text-dark ">
          <center>
          <img src="photos/<?php echo ($row['photos']);?>" alt=""
            height="50" width="50"
            >
          </center>
          </td>
          <td class="table-primary text-dark "> <center><?php echo ($row['id_ut']); ?></center></td>
          <td class="table-primary text-dark "> <?php echo ($row['nom']); ?></td>
          <td class="table-primary text-dark "> <?php echo ($row['prenom']); ?></td>
          <td class="table-primary text-dark "> <?php echo ($row['direction']); ?></td>
          <td class="table-primary text-dark ">
                    <?php $nbr = ($row['nbr']); 
                           
                           $valeur= ($row['valeur']);
                          //$isa = $snrs * 1500 ;
                          //echo $isa ;
                          if($valeur == 1 )
                           {
                             $valeur = 1500 ;
                           }
                           elseif  ($valeur == 2)
                           {
                            $valeur = 3500 ;
                           }

                           else
                           {
                            $valeur = 0 ;
                            echo " valeur indisponible ";
                           }
                           $prix= $valeur * $nbr ; ?>
                          <center> <h5 class="text-secondary"><?php echo $prix ; ?> Ar</h5></center>
                     
          </td>
<!-- 
       
        <td class="table-primary text-dark "> <?php // echo ($row['nom']); ?></td>
            <td class="table-primary text-dark "> <?php //echo ($row['prenom']); ?></td>
            <td class="table-primary text-dark "> <?php // echo ($row['direction']); ?> </td>
            <td class="table-primary text-dark "><?php // echo ($row['nbr']); ?>   Ar </td>

  -->
       </tr>             
 <?php }}
        else {
            echo (" commande vide !");
            echo (" commande vide !");
            echo (" commande vide !");
           
        }
       
        ?>        
</table>

<div class="container-fluid">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS 01</p>

   <p>Administrateur</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
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








