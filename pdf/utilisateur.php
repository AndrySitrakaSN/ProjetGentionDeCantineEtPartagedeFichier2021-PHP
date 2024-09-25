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





<center><h1 class="titre">Utilisateur</h1></center>
<table class="mytable">
        <tr>
                                    <th>Numero </th>
                                    <th>Nom</th> 
                                    <th>Prenom</th>
                                    <th>Direction</th>
                                    <th>Telephone</th>
                                    <th>Mots de pass</th>
                                     <th>Valeur</th>
                                     <th>Fady</th>
                                     <th>Adresse</th>
                                     <th>Adresse_mail</th>
        </tr>
        <?php

                           
                           $req = mysqli_query($conn , "SELECT *FROM utilisateur ");
                          if(mysqli_num_rows($req)== 0)
                                     {
                                         echo("Base de donne vide ");
                                     }
                        else{
                                  while($row=mysqli_fetch_assoc($req)) {
                             ?> 

                            <tr class="table-primary">

                                <td><?php echo $row['numUt']; ?></td>
                                <td><?php echo $row['nom']; ?></td>
                                <td><?php echo $row['prenom']; ?></td>
                                <td><?php echo $row['direction']; ?></td>
                                <td><?php echo $row['tel']; ?></td>
                                <td><?php echo $row['mdp']; ?></td>
                                <td> <?php echo $row['valeur'];?></td>
                                <td> <?php echo $row['fady'];?></td>
                                <td> <?php echo $row['adrs'];?></td>
                                <td> <?php echo $row['adrs_mail'];?></td>
                                
                            
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




<?php
  
$html= ob_get_clean();
$pdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream('utilisateur.pdf' );

?>

         

