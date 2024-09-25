<?php
include("../connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Validation formulaire Admin</title>
</head>
<body>
     <?php 
           if(isset($_POST['go']))
               {
                 $numko = $_POST ['numero'];  
                 $passy = $_POST['passA'];
                 $req = mysqli_query($conn , "SELECT *FROM administrateur where  id= ($numko) ");
                  if(mysqli_num_rows($req)== 0)
                              {
                                   ?>               <br> <br><br><br><br><br><br><br><br> 
                        <center>
                        <a href="pre.php" class="btn btn-danger">    <?php  echo(" Numero incorrecte "); ?> </a>
                        </center>    <?php
                              }
              elseif($passy == $row['passad']){
                        ?>               <br> <br><br><br><br><br><br><br><br> 
                     <center>
                      <a href="pre.php" class="btn btn-danger">    <?php  echo(" modts de pass incorrecte "); ?> </a>
                     </center>    <?php 

                        }
               else{
                    header("location: admin.php");
                    exit();
                  }    
             }
  ?>
</body>
</html>