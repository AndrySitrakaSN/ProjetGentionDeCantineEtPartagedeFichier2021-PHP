<?php 
$user = 'root';
$pass='';

try {
    $db= new PDO ('mysql:host=localhost;dbname=food',$user,$pass);
  foreach ($db->query('SELECT * FROM fichier') as $row) {
    print_r($row);
  }
}
catch (PDOException $e)
{
    print "Erreur : " .$e->getMessage() . "<br/> ";
    die;
}

?>