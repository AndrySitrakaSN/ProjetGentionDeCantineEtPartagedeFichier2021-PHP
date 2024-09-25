<?php

use Dompdf\Dompdf;
        require_once('../dompdf/autoload.inc.php');  // mampifandray azy @ dom PDF
 
        // instantiate and use the dompdf class
$pdf = new Dompdf();
$nom = "solonirina ";
$prenom = "Andry sitraka";
$numero =234;

include("../connexion.php");


ob_start() ;

?>

<center><h1 class="titre"><center>PROGRAMME</center></h1></center>
<table class="mytable">
        <tr>
                <th> <center>Jour  </center></th>
                <th><center>Date</center></th>
                <th>Menu</th>
        </tr>
      <?php  include("../connexion.php");
  
  $req = mysqli_query($conn , "SELECT *FROM andro ");
  if(mysqli_num_rows($req)== 0)
  {
    echo("il n'y a pas d'emploie ajouter dans la base de donnee ");
  }
     else{
            while($row=mysqli_fetch_assoc($req)) {
?> 

                                <tr >
 
                                    <td> <center><?php echo $row['jour']; ?> </center></td>
                                    <td> <center><?php echo $row['daty']; ?></center> </td>
                                    <td>  <?php echo $row['menu']; ?> </td>
                                   
                                
                                </tr>
<?php                                               }
      }
?>   
</table>
<style>
.mytable
{
        border-collapse: collapse;
        width: 100%;
}
.mytable th
{
        border: 1px solid #000;
        background-color: gray;
        font-weight: bolder;
}

.mytable td
{
        border: 1px solid #000;
}

.titre
{
        background-color: grey;
        color:white ;
        width: 300px;
}
</style>

</style>



<?php
  
$html= ob_get_clean();
$pdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream('programme.pdf' );

?>

         

