<?php
session_start();
        include("../connexion.php");



        if(isset($_POST['lundi']))
        {
            $numko = $_POST['idlundi']; // echo $numko ;
            $jlundi = $_POST['jlundi']; // echo $jlundi ;

            $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
            if(mysqli_num_rows($req)== 1)
            {
                $_SESSION['aaa'] = (" Commande dejat Envoyer");
                 header("location: a.php");
            }
            else
            {
                $sql = ("INSERT INTO commande (id_ut , id_dat) VALUE ('$numko','$jlundi')");
                $result=mysqli_query($conn ,$sql);
                $_SESSION['aaa'] = (" Commande  Envoyer");    
            }

        } 




        if(isset($_POST['mardi']))
        {
            $numko = $_POST['idmardi']; 
            $jlundi = $_POST['jmardi'];  


            $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
            if(mysqli_num_rows($req)== 1)
            {
                $_SESSION['aaa'] = (" Commande dejat Envoyer");
                 header("location: a.php");
            }
            else
            {
                $sql = ("INSERT INTO commande (id_ut , id_dat) VALUE ('$numko','$jlundi')");
                $result=mysqli_query($conn ,$sql);
                $_SESSION['aaa'] = (" Commande  Envoyer");    
            }



        }

        if(isset($_POST['mercredi']))
        {
            $numko = $_POST['idmercredi']; 
            $jlundi = $_POST['jmercredi'];  

            $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
            if(mysqli_num_rows($req)== 1)
            {
                $_SESSION['aaa'] = (" Commande dejat Envoyer");
                 header("location: a.php");
            }
            else
            {
                $sql = ("INSERT INTO commande (id_ut , id_dat) VALUE ('$numko','$jlundi')");
                $result=mysqli_query($conn ,$sql);
                $_SESSION['aaa'] = (" Commande  Envoyer");    
            }
        }
        
        


        if(isset($_POST['jeudi']))
        {
            $numko = $_POST['idjeudi']; 
            $jlundi = $_POST['jjeudi'];  

            $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
            if(mysqli_num_rows($req)== 1)
            {
                $_SESSION['aaa'] = (" Commande dejat Envoyer");
                 header("location: a.php");
            }
            else
            {
                $sql = ("INSERT INTO commande (id_ut , id_dat) VALUE ('$numko','$jlundi')");
                $result=mysqli_query($conn ,$sql);
                $_SESSION['aaa'] = (" Commande  Envoyer");    
            }
        }
        



        if(isset($_POST['vendredi']))
        {
            $numko = $_POST['idvendredi']; 
            $jlundi = $_POST['jvendredi'];  

            $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
            if(mysqli_num_rows($req)== 1)
            {
                $_SESSION['aaa'] = (" Ok ");
                 header("location: a.php");
            }
            else
            {
                $sql = ("INSERT INTO commande (id_ut , id_dat) VALUE ('$numko','$jlundi')");
                $result=mysqli_query($conn ,$sql);
                $_SESSION['aaa'] = (" Commande  Envoyer");    
            }
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=dev
    ice-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>validation commande</title>
</head>
<body>
                <br><br><br><br><br><br><br><br> <br><br><br>
<center>
<form action="a.php" method="POST">

<input type="hidden" name="po" value="<?php echo($numko); ?>"  >
<input type="submit" name="ga" value="Votre commande est envoyer !" class="btn btn-success">
</form>
</center>
</body>
</html>