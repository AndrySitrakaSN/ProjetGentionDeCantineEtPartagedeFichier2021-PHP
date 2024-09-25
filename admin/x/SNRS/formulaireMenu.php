 <?php
             include("../connexion.php");


             if(isset($_GET['modif']))
             {
              
                  $laharana = $_GET['modif'];
                  $req = mysqli_query($conn , "SELECT *FROM andro where id=($laharana) ");
                  if(mysqli_num_rows($req)== 0)
                             {
                                 echo("il n'y a pas d'emploie ajouter dans la base de donnee ");
                             }
                else{
                          while($row=mysqli_fetch_assoc($req)) {  
                             $idka =$row['id'];
                             $daty = $row['daty'];
                             $menu = $row['menu'];
                          
                     
             }}}
        

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="signin.css" rel="stylesheet">
    <title>formulaire</title>
</head>
<body >
<br><br><br><br><br><br>


<center> <a href="admin.php"><img class="mb-4" src="../image/mod.png" alt="" width="40" height="50"></a></center>
<center> <h1 class="h3 mb-3 fw-normal">Modifier</h1></center>
<div class="row justify-content-center ">
</div>
<body class="text-center">
<main class="form-signin w-100 m-auto">
<div class="row justify-content-center "> 
<center>
    <form action="modifmenu.php" method="POST">
           <input type="hidden" name="num" value="<?php echo($idka);?>"  >
           <input type="date" name="daty" value=" <?php  echo($daty); ?> " class="form-control">   <br> 
           <input type="text" name="ttr" value=" <?php  echo($menu); ?> " class="form-control">   <br>    
           <center><input type="submit" name="go" value="Modifier" class="btn btn-success"></center>
</form>
</center>
</div>
</main>  
</body>     
</html>



