<?php 
    session_start();
    ?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container">
    
 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    <?php include "../part-of-site/nav.php" ?>

    <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <img class="d-block w-100" src="../src/imageC2" data-src="holder.js/900x400?theme=social" alt="First slide">
        </div>

        <div class="carousel-item">
        <img class="d-block w-100" src="../src/imageC1" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../src/imageC3" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div class="container d-flex flex-column justify-content-center align-items-center flex-wrap"> <!-- Container du formulaire -->
      <div class="p-4 text-center w-50">
          <?php // Gestion de l affichage des messages
            if(!empty($_GET['message'])){

              switch ($_GET['message']) {
                  case 0:
                      echo'';
                    break;

                  case 1:
                      echo'<div class="alert-success p-2" role="alert"><strong>Utilisateur Créée</strong></div>';
                    break;

                  case 2:
                      echo'<div class="alert-danger p-2" role="alert"><strong>Vos mots de pass sont different</strong></div>';
                    break;

                  case 3:
                      echo'<div class="alert-danger p-2" role="alert"><strong>Utilisateur déja enregistré</strong></div>';
                    break;

                  case 4:
                      echo'<div class="alert-danger p-2" role="alert"><strong>Formulaire incomplet</strong></div>';
                    break;

                  case 5:
                        echo'<div class="alert-danger p-2" role="alert"><strong>Erreur de connection a la BDD</strong></div>';
                      break;

                  case 6:
                      echo'<div class="alert-danger p-2" role="alert"><strong>Mot de passe incorrect</strong></div>';
                      break;
                      
                  case 7:
                        echo'<div class="alert-danger p-2" role="alert"><strong>Utilisateur inconnu</strong></div>';
                      break;
              
                    
                    default:
                      
                      break;
                  }
              }
          ?>
      </div>
      
      <div class="row col-sm-12  d-flex flex-column justify-content-center align-items-center flex-wrap">
        <form action="../controller/connexion.php" method="post" class=" w-50">

          <div class="form-group">
            <label for="email">Adresse email :</label>
            <input type="email" class="form-control" name="mail" id="email" placeholder="Entrer votre adresse email">
          </div>

          <div class="form-group">
            <label for="pass">Votre mot de passe</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Entrer votre mot de passe">
          </div>

         <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2">Connection</button>
          </div>

        </form>
      </div>
    </div>
   
  </body>
</html>