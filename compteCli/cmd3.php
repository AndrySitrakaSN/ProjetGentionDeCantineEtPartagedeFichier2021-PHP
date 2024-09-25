<?php 
session_start();
include("../connexion.php");
$numko = " ";
$jlundi = " ";

if(isset($_POST['lundi']))
{
    $numko = $_POST['idlundi']; // echo $numko ;
    $jlundi = $_POST['jlundi']; // echo $jlundi ;
    $req = mysqli_query($conn , "SELECT *FROM commande where id_dat= $jlundi and id_ut = $numko ");
    if(mysqli_num_rows($req)== 1)
    {
       // $_SESSION['aaa'] = (" Commande dejat Envoyer");
         header("location: a.php");
    }


}

if(isset($_POST['a1']))
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
        header("localisation:a.php");
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
<body class="bg-dark text-white">
<br><br><br><br><br><br><br><br><br><br>
<form action="cmd.php" method="POST" class="text-center">
                    <label for=""> Volez vouz vraiment commander ?</label><br><br>
                    <input type="hidden" value="<?php echo $numko ; ?>" name="idlundi">
                    <input type="hidden" value="<?php echo $jlundi ; ?>" name="jlundi">
                    <input type="submit" value="OUI" name="a1" class="btn btn-success"> &thinsp;
                    <a href="a.php" class="btn btn-danger">NON</a>
              </form>

</body>
</html>