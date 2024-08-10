<?php 
$server = 'localhost'; 
$username = 'root';
$password = '';
$database = 'db_restaurantefjr';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} 

catch(PDOException $e) {
die ('connected failed: '.$e->getMessage());
}

?>