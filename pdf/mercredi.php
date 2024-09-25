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

$sql ="SELECT  COUNT(*) numUt FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 3" ;
// $sql = " SELECT COUNT(*) numUt FROM utilisateur";
$result = $conn->query($sql);
$isa = mysqli_fetch_assoc($result); ?>

<center><h1 class="titre">Liste Mercredi :<?php print_r( $isa ['numUt'] );?></h1></center>
<table class="mytable">
        <tr>
                <th><center>Nom </center></th>
                <th><center>Proffetion</center></th>
                <th><center>Presence</center></th>
                <th><center>Signature</center></th>
        </tr>
<?php 
$sql ="SELECT prenom,direction,fady FROM utilisateur , andro ,commande where (utilisateur.numUt =commande.id_ut) AND
(andro.id = commande.id_dat) And id_dat= 3" ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
        <tr >
            <td><center> <?php echo ($row['prenom']); ?></center></td>
            <td> <center><?php echo ($row['direction']); ?></center> </td>
            <td>   </td>
            <td> </td>
            <center><?php echo ($row['fady']); ?></center> 
        </td> <?php }} ?>        
</table> 
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




<?php
  
$html= ob_get_clean();
$pdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream('listeMercredi.pdf' );

?>

         

