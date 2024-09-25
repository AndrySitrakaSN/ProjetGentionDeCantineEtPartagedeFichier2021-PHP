<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

// eto no miconnecte azy @ base 
$conn = new mysqli($servername, $username, $password, $dbname);
// contition ndray ny ato raha tsy misy ny ao @base 
if ($conn->connect_error) {
    die("Base 0 ! " . $conn->connect_error);
}


?>