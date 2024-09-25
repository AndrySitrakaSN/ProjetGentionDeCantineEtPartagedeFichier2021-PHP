<?php 
include("../connexion.php");
$b1= " ";
$b2 = " ";
$nom = " ";
$mdp = " ";

$req = mysqli_query($conn , "SELECT *FROM administrateur ");  // ito ny code sql
if(mysqli_num_rows($req)== 0)
{
  echo(" Base de donne vide ");
}
   else{
          while($row=mysqli_fetch_assoc($req)) // eto izy mijaka hoe raha asehoy aby izy rehetra
               {
                   $a1 =  $row['nomad']; 
                   $a2 = $row['passad'];
               }
        }

$nom = $a1 ;  //echo($nom);
$mdp = $a2 ; // echo($mdp);

if(isset($_POST['go']))
    {
          $b1 = $_POST['nom'] ;   //echo $b1;
          $b2 = $_POST['pss'] ; //echo $b2;

          $sql = "UPDATE administrateur SET nomad='$b1',passad='$b2' ";
if ($conn->query($sql) === TRUE) {
  header("location: actualiser1.php");
  exit();
                                 } 
else {
  echo("Misy tsy milamina ny code lehiroa");
     }
  
    }
    ?>    

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Changer le mots de pass</title>
</head>
<body class="">
 <br><br><br><br><br><br><br><br>   

<center>
<form action="actualiser2.php" method="POST">
        <a href="actualiser.php"><img src="../image/qw.png" alt=""></a> <br> <br>
        <input type="text" placeholder="Nom"  name="nom" value=" <?php echo$nom; ?>" class="form">  <br> <br>
        <input type="text" placeholder="Mots de pass" value="<?php echo $mdp;?>" name="pss"> <br> <br>
        <input type="submit" value="Modifier" class="btn btn-success" name="go">
 </form>
</center>


</body>
</html>