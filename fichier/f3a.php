<!doctype html>
<html>

<head>

</head>

<body>



  <?php
  session_start();
  include("../connexion.php");
  $msg = " ";

  if (isset($_POST['go'])) {
    $id = ($_POST['id']); //echo $id ;
    $objet = ($_POST['objet']); //echo $objet ; 
    $fi = ($_FILES['ficc']['name']); // echo ($fi);
    $target = "perso/" . basename($_FILES['ficc']['name']);

    move_uploaded_file($_FILES['ficc']['tmp_name'], $target);
    $sql = "INSERT INTO perso (id_ut,objet,fiche) VALUES ('$id','$objet','$fi')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("location:messageG.php");
    }

    // ito ndray mandeha @page izay ao @Location

  }

  ?>

</body>

</html>