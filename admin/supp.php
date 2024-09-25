<?php
           include("../connexion.php");
              
           session_start();
          $toy = " ";
           if(isset($_GET['supp']))
           {
             $id= $_GET['supp'];
            
           }



           if(isset ($_POST['oui']))
           { 
            $id = $_POST['ekaro'];
            //echo($id);
            $req = mysqli_query($conn , "SELECT  FROM utilisateur where numUt = $id  ");
            if(mysqli_num_rows($req)== 0)
            {
              echo("il n'y a pas d'emploie ajouter dans la base de donnee ");
            }
               else{
                      while($row=mysqli_fetch_assoc($req)) 
                      {
                            $toy= $row['photos']; 
                      }
            $lalana = "photos/$toy";
             unlink($lalana);
             
                    }


            $sql = "DELETE FROM Utilisateur WHERE numUt= $id;";
            if ($conn->query($sql) === TRUE) {
               header("location: index.php");
               exit();
                                  }
            }





            if(isset ($_POST['ga']))
            { 
             $id = $_POST['ge'];
             echo($id);
             $sql = "DELETE *FROM commande ";
             if ($conn->query($sql) === TRUE) {
                header("location: index.php");
                exit();
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
    <title>Supprimer</title>
  </head>
  <body class="bg-dark">
    <br><br><br><br><br><br><br><br><br>

<center>

<form class="supp.php" method="POST">
      <p class="text-white">Voulez vous vraiment Supprimer ?</p> <br>
      <input type="hidden" name="ekaro" value="<?php echo ($id); ?> " >
      <input type="submit" class="btn btn-danger " value="OUI" name="oui">
      <a href="index.php" class="btn btn-primary">NON</a>

    </form> <br>
   

</center>
  </body>
  </html>

                                              }