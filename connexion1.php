<?php

use LDAP\Result;

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bddPDO = new PDO("mysql:host=$servername;dbname=food", $username, $password);
    // set the PDO error mode to exception
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $a = "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


/*

$requet = " SELECT *FROM utilisateur ORDER BY numUt ASC";
$result = $bddPDO->query($requet);
if(!$result)
{
      echo("erreur");
}
else
{
    $nbre = $result->rowCount();
}

echo($nbre);

$snrs = $nbre * 5;
 echo $snrs ;

*/




?>


