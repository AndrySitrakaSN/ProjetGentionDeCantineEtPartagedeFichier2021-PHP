<?php 
        include("../connexion.php");

        if(isset($_POST['go']))
        {
            $snrs =($_POST['num']); // echo($snrs);
            $daty =($_POST['daty']); //  echo($daty);
            $sakafo =$_POST['ttr']; //  echo($sakafo);
         

            $sql = "UPDATE andro SET daty='$daty', menu='$sakafo' WHERE id=$snrs";
        
        if ($conn->query($sql) === TRUE) {
            header("location: admin.php");
            exit();
        } else {
            echo("Misy tsy milamina ny code lehiroa");
        }
              
       
        }


?>

