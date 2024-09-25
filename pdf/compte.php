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
<?php 
       $ddr = "SELECT *from andro where id = 1 ";

       $result = $conn->query($ddr);
       if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        $lundi =($row['daty']); // echo $lundi ;
       }}



       $ddr1 = "SELECT *from andro where id = 5 ";

       $result = $conn->query($ddr1);
       if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        $vendredi =($row['daty']);  //echo $vendredi ;
       }}

?>
<center><h1 class="titre"><center>COMPTE</center></h1></center>
<p>Semaine du Lundi <span class="da"><?php echo $lundi; ?></span> 
        au Vendredi <span class="da"><?php echo $vendredi; ?> </span></p>
<table class="mytable">
        <tr>    
                <th>Numero</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Direction</th>
                <th>Compte</th>
                <th>Signature</th>

        </tr>
      <?php  include("../connexion.php");
  
  $sql =" SELECT numUt , nom , prenom ,direction ,id_ut ,count(id_ut) as nbr,valeur  from utilisateur , 
  commande  where utilisateur.numUt = commande.id_ut group by id_ut " ;    
         
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) { 
?> 

                                <tr >
                                <td class="table-primary text-dark "> <center><?php echo ($row['id_ut']); ?></center></td>
          <td class="table-primary text-dark "> <center><?php echo ($row['nom']); ?> </center></td>
          <td class="table-primary text-dark "> <center><?php echo ($row['prenom']); ?></center> </td>
          <td class="table-primary text-dark "> <center><?php echo ($row['direction']); ?></center> </td>
          <td class="table-primary text-dark ">
                    <?php $nbr = ($row['nbr']); 
                           
                           $valeur= ($row['valeur']);
                          //$isa = $snrs * 1500 ;
                          //echo $isa ;
                          if($valeur == 1 )
                           {
                             $valeur = 1500 ;
                           }
                           elseif  ($valeur == 2)
                           {
                            $valeur = 3500 ;
                           }

                           else
                           {
                            $valeur = 0 ;
                            echo " valeur indisponible ";
                           }
                           $prix= $valeur * $nbr ; ?>
                          <center> <h5 class="text-secondary"><?php echo $prix ; ?> Ar</h5></center>
                     
          </td>             <td> </td>
                                   
                                
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

.da
{
        text-decoration: underline;
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
$pdf->stream('compte.php' );

?>

         

