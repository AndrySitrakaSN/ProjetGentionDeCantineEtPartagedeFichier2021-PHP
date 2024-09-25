<?php
session_start();
include_once("../connexion.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Validation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    

    

<link href="../css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body class="bg-">
 
  <center>
    <img src="../image/1666847760493.jpg" alt=""> <br>
    <p></p>
  
</center>


<div class="container">
        <div class="row">
               <article class="col-md-4">


               <center>
<img src="../image/d.jpg" alt="" width="80"  height="60"><br> <br>
<span class="">

<form action="../comptecli/a.php" method="POST">
 <input type="hidden" name="snrs" value=" <?php echo $_SESSION['ok']; ?> ">
 <input type="submit" class="btn btn-secondary  custom " value=" Gestion de cantine " name="soo">
 </form>
</span>  &thinsp; &thinsp; &thinsp; 
</center>

               </article>


               <article class="col-md-4">


<center>
<img src="../image/[028988].png" alt="">
<span class="">
<form action="../fichier/andex.php" method="POST">
 <input type="hidden" name="snrs" value=" <?php echo $_SESSION['ok']; ?> ">
 <input type="submit" class="btn btn-secondary  custom" value=" Gestion de fichier " name="soo">
 </form>
</span>  &thinsp; &thinsp; &thinsp; 
</center>
               </article>


               <article class="col-md-4">

<center>
<img src="../image/[028989].png" alt="">
<span class="">
<form action="parametre.php" method="POST">
 <input type="hidden" name="snrs" value=" <?php echo $_SESSION['ok']; ?> ">
 <input type="submit" class="btn btn-secondary  custom" value=" Parametre " name="soo">
 </form>
</span>  &thinsp; &thinsp; &thinsp; 
</center>


               </article>

        </div>
</div>
<center><br><br>
<a href="../index.php" class="btn btn-danger custom">Deconnexion</a>
</center>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 nov SNRS</p>

   <p>Menu Principal</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="validation.php" class="nav-link px-2 text-muted">Menu_Principal</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Apropos</a></li>
    </ul>
  </footer>
</div>      
  </body>
</html>
