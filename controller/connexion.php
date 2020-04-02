<?php

/**Liste des message d erreur : 
 * 1 = Utilisateur Créée
 * 2 = confirmation de mot de pass different du mot de pass
 * 3 = Utilisateur Inconnu
 * 4 = Formulaire incomplet
 * 5 = Erreur de connection a la BDD
 * 6 = Mot de passe incorrect
 * 7 = Utilisateur inconnu 
 */
session_start();

$dsn = 'mysql:host=localhost;dbname=projet_photo;charset=utf8';
$user='root';
$pass='';

try {
    $cnx = new PDO($dsn,$user,$pass);
    
} catch (PDOException $E) {
    die(header('Location: ../index.php?message=5'));
}

    if(!empty($_POST ['mail']) && !empty($_POST ['pass']))
    {
        $bdd_select = $cnx->prepare("SELECT * FROM user WHERE email=:mail");
        $bdd_select->execute(array("mail"=> htmlspecialchars($_POST['mail'])));
        
        $data = $bdd_select->fetch(PDO::FETCH_ASSOC);
        

        if ($data) //utilisateur trouvé
        {
           
           // Verification du mot de passe

            if(password_verify($_POST['pass'],$data['password'])) // mot de passe valide
            {
                $_SESSION["newsession"]=1;
                header ('Location: ../index.php');
            }

            else{ // mot de passe incorrect
                header('Location: ../views/login.php?message=6'); //Mot de passe incorrect
            }

            
        }

        else{  //Utilisateur inconnu
            header('Location: ../views/login.php?message=7');
        }
    }

    else{
        header('Location: ../views/login.php?message=4'); //Formulaire incomplet
    }




