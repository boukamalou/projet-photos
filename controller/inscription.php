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

if(!empty($_POST['mail'])&&!empty($_POST['pass'])&&!empty($_POST['passConf'])) //Controle si tous les champs formulaire on était rempli
{
    $Email = htmlspecialchars($_POST['mail']) ;
    $Pass = htmlspecialchars($_POST['pass']) ;
    $PassConf = htmlspecialchars( $_POST['passConf']);

    $bdd_select = $cnx->prepare("SELECT email FROM user WHERE email=:mail"); // recupération des utilisateur en Base de donnée
    $bdd_select->execute(array('mail'=> $Email));
    $bdd_select->fetch(PDO::FETCH_OBJ);
        
    if($bdd_select->rowCount()==0) // Controle Si l utilisateur n existe pas
        {
                
            if($_POST['pass']!=$_POST['passConf']) // controle si les champs mot de passe sont identique
            {
                header('Location: ../views/register.php?erreur=2');
            }
    
            else // insertion de l utilisateur en base de donnée
            {
                $bdd_create = $cnx->prepare("INSERT INTO `user`(`email`, `password`) VALUES (:mail , :pass)");
                $bdd_create->execute(array('mail'=> $Email, 'pass'=> $Pass ));
                echo 'utilisateur '.$Email .' créer';
                var_dump($bdd_select);
            }
        } 

        else{
            echo 'Utilisateur déja enregistré';
        }
    

    


    

}

else{

    header('Location: ../views/register.php?erreur=1');
}



