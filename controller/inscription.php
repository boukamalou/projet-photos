<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=projet_photo;charset=utf8';
$user='root';
$pass='';

try {
    $cnx = new PDO($dsn,$user,$pass);
    echo 'connexion a la BDD reussi<br><br>';
} catch (PDOException $E) {
    die(header('Location: ../index.php'));
}

if(!empty($_POST['mail'])&&!empty($_POST['pass'])&&!empty($_POST['passConf']))
{
    $Email = $_POST['mail'];
    $Pass = $_POST['pass'];
    $PassConf = $_POST['passConf'];

    if($_POST['pass']!=$_POST['passConf'])
    {
        header('Location: ../views/register.php?erreur=2');
    }

    else
    {
        
    }

}

else{

    header('Location: ../views/register.php?erreur=1');
}



var_dump($_SESSION) ;