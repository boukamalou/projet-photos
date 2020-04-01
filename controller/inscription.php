<?php
/*
MESSAGE :
0 = Erreur de connection a la BDD 
1 = Utilisateur Créée
2 = confirmation de mot de pass different du mot de pass
3 = Utilisateur incomplet
4 = Formulaire incomplet
*/
session_start();

$dsn = 'mysql:host=localhost;dbname=projet_photo;charset=utf8';
$user='root';
$pass='';

try {
    $cnx = new PDO($dsn,$user,$pass);
    echo 'connexion a la BDD reussi<br><br>';
} catch (PDOException $E) {
    die(header('Location: ../index.php?message=0'));
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
                header('Location: ../views/register.php?message=2');
            }
    
            else // insertion de l utilisateur en base de donnée
            {
                $bdd_create = $cnx->prepare("INSERT INTO `user`(`email`, `password`) VALUES (:mail , :pass)");
                $bdd_create->execute(array('mail'=> $Email, 'pass'=> password_hash($Pass,PASSWORD_DEFAULT) ));
                header('Location: ../views/register.php?message=1');
                
            }
        } 

        else{
            header('Location: ../views/register.php?message=3');
        }
    


}

else // erreur dans les entrée formulaire
{ 

        header('Location: ../views/register.php?erreur=4');
}



