<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=projet_photo;charset=utf8';
$user='root';
$pass='';

try {
    $cnx = new PDO($dsn,$user,$pass);
    echo 'connexion a la BDD reussi';
} catch (PDOException $E) {
    die(header('Location: ../index.php'));
}


var_dump($_SESSION) ;