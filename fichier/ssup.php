
   

<?php    session_start();
           include("../connexion.php");
              
       
          
           if(isset($_GET['sup']))
           {
             $id= $_GET['sup'];

             $req = mysqli_query($conn , "SELECT fic FROM messagy where id = $id  ");
             if(mysqli_num_rows($req)== 0)
             {
               echo(" vide");
             }
                else{
                       while($row=mysqli_fetch_assoc($req)) 
                       {
                             $toy= $row['fic']; 
                       }
            } 

            
           }

           if(isset ($_POST['oui']))
           { 
            include("../connexion.php");
            $id = $_POST['ekaro'];
            //$toy = $_POST['ekaroa'];

            $req = mysqli_query($conn , "SELECT fic FROM messagy where id = $id  ");
            if(mysqli_num_rows($req)== 0)
            {
              echo("il n'y a pas d'emploie ajouter dans la base de donnee ");
            }
               else{
                      while($row=mysqli_fetch_assoc($req)) 
                      {
                            $toy= $row['fic']; 
                      }
            $lalana = "envoye/$toy";
            $fafa = unlink($lalana);

              
                $sql = "DELETE FROM messagy WHERE id = $id;";
                if ($conn->query($sql) === TRUE) {
                                                      //  echo("voafafa");
                                                      header("location:messageR.php");
                                                 }
            

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
    <br><br><br><br><br><br><br><br><br><br>  

<center>

<form class="supp.php" method="POST">
      <p class="text-white">Voulez vous vraiment Supprimer ?</p> 
      <input type="hidden" name="ekaro" value="<?php echo ($id); ?> " >
      <input type="submit" class="btn btn-danger " value="OUI" name="oui">
      <a href="messageR.php" class="btn btn-primary">NON</a>

    </form> <br>


</center>
  </body>
  </html>

