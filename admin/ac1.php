<?php 
include("../connexion.php");

if(isset($_POST['lo']))
{
   $no =$_POST['no'];
   $pa =$_POST['pa'];
    

       $sql = "UPDATE administrateur SET nomad='$no', passad='$pa' WHERE id=1940";
   
   if ($conn->query($sql) === TRUE) {
       $sus= " modification ok";
       header("location: ac.php");
       exit();
   } else {
       $err =("modification ko");
   }
         
  
   }
?>