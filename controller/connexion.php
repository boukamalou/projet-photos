<?php
/*
MESSAGE :
0 = ''
1 = Utilisateur Créée
2 = confirmation de mot de pass different du mot de pass
3 = Utilisateur Inconnu
4 = Formulaire incomplet
5 = Erreur de connection a la BDD 
6 = Mot de passe incorrect
7 = Utilisateur inconnu
*/
session_start();

$dsn = 'mysql:host=localhost;dbname=projet_photo;charset=utf8';
$user='root';
$pass='';

try {
    $cnx = new PDO($dsn,$user,$pass);
    echo 'connexion a la BDD reussi<br><br>';
} catch (PDOException $E) {
    die(header('Location: ../index.php?message=5'));
}