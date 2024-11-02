<?php 

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "bookstoredb";


$mysql = new mysqli($servername, $username, $password, $dbname);


if($mysql ->connect_error){
    die("connection failed".$mysql ->connect_error);
}

?>