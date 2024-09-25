<?php 
        include("../connexion.php");

        if (isset($_POST['eka']))
        {
           $numero = $_POST['eka1'];

        }


        $req = mysqli_query($conn , "SELECT *FROM utilisateur where numUt = ('$numero') || prenom = ('$numero')  ");
        if(mysqli_num_rows($req)== 0)
                   {  header("location:vide.php");
     ?>               <br> <br><br><br><br><br><br><br><br> 
    
                          <?php
                   }
      else{
                while($row=mysqli_fetch_assoc($req)) {
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Recherche</title>
</head>
<body >
<nav class="fixed-top bg-white" >
     <div class="sitraka" class="p-3 mb-2 bg-secondary text-white">  
          <div class="container-fluid">
             <div class="container">
                <div class="row">
                    <article class="col-md-2">
                        <a href="../index.php" data-toggle="tooltip" title="Retour"><img src="../image/f.jpg" alt="image fid" id="fid"></a>
                    </article >
                    <article >
                            <p id="titre">Administration  </p> 
                    </article>
                </div>
            </div>
    </div>


    <div id="">
        <div class="container-fluid btn-lg">
             <div class="container-fluid">
                <div class="row"> 
                    <article class="col-md-12">
                    <center> 
<div class="btn-group btn-group-lg" role="group" aria-label="Large button group" >
<a href="admin.php" class="btn btn-info "> Programme</a>
<a href="Utilisateur.php" class="btn btn-info text-warning">Utilisateur</a>
<!-- <a href="../cree/affichage.php" class="btn btn-outline-dark"> Demande</a> -->
<a href="d1.php"class="btn btn-info ">Effectif</a>
<a href="compte.php" class="btn btn-info">Compte</a>
<a href="actualiser.php" class="btn btn-info">Actualiser</a>
<a href="../index.php" class="btn btn-danger">Deconnexion</a>
</div>
</center> <br>

       <!-- ito ny recherche -->  
                
                    <form action="recherche.php" method="POST" class="form-inline">
                    <input type="submit" name="eka" class="btn" value="chercher"  >
                    <input type="text" name="eka1" class="form-control" placeholder="entrer le numero ici">
                
                                 
                                </form>
                    </article >       
                </div>
            </div>
       </div>
    </div> 
</div>


<div class="container-fluid btn-lg">
         <div class="container-fluid">
            <div class="row">
                     
                    
                             <h1>Utiliateur <a href="fomulaireUtilisateur.php">
                                <img src="../image/m.png" alt="" width="40" height="40"></a> 
                             
                             <a href="../pdf/utilisateur.php" > <img src="../image/pdf.png" alt=""> </a>
                              
                             <span class="text-warning">Numero :</span> <?php echo( $row['numUt']);?>

                            </h1>
</nav>    <!-- fin vu varbar -->

<br><br>
<div id="popo" class="container-fluid">
<table class="table table-borderless ">
     <header>
        <tr class="table-secondary">
              <th>Nom</th>
             <th>Prenom</th>
             <th>Direction</th>
             <th>Telephone</th>
              <th>Fady</th>
              <th>mots de pass</th>
              <th>Valeur</th>
              <th>Modifier</th>
              <th>Supprimer</th>
        </tr>
     </header>
      <tr class="table-primary">
          <td>  <?php echo $row['nom']; ?> </p> </td>
          <td><?php echo $row['prenom']; ?></td>
          <td> <?php echo $row['direction']; ?></td>
          <td><?php echo $row['tel']; ?></td>
          <td><?php echo $row['fady']; ?></td>
          <td>  <?php echo $row['mdp']; ?></td>
          <td> <?php echo $row['valeur']; ?> </td>
          <th> <a href= "edit.php?edit=<?php echo $row['numUt'];?>"><img src="../image/edit.png" alt="" width="30" height="30"> </a></th>
          <th> <a href="supp.php?supp=<?php echo $row['numUt']; ?>"><img src="../image/sip.png" alt="" width="30" height="30"></a></th>
      </tr>
</table>

</div>
</body>
</html>
<?php  
                }}                                          
?> 