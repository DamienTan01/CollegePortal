<?php
$servername = 'localhost';
$dbname = 'school';
$username = 'root';
$password = 'root';
try{
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    return $con;
}catch (PDOException $e){
    exit($e->getMessage());
}
