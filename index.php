<!doctype html>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- GoogleFont -->
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <body class="container d-flex flex-column justify-content-center">
      
    <header class="container mb-5">
        <div class="d-flex flex-row justify-content-end">
            <a class="btn btn-outline-dark m-1" href="views/login.php">connexion</a>
            <a class="btn btn-outline-dark m-1" href="views/register.php">Inscription</a>
            
        </div>
        <h1 class="ml-5" style="font-family: 'Roboto Mono', monospace">A WORLD OF FACES</h1>
        <h3  style="font-family: 'Indie Flower',cursive;margin-left: 15em">plus qu'un voyage . . .</h3>
    </header>

   <nav class="navbar d-flex flex-row justify-content-around mb-5 border rounded" style="border-color:#DCDCDC">
        <a class="btn btn-outline-secondary" href="index.php">ACCUEIL</a>
        <a class="btn btn-outline-secondary" href="views/presentation.php">QUI SUIS JE</a>
        <a class="btn btn-outline-secondary" href="views/store.php">STORE</a>
    </nav>
  
    
    
    <!-- CAROUSEL-->
 
    <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <img class="d-block w-100" src="src/imageC2" data-src="holder.js/900x400?theme=social" alt="First slide">
        </div>
        
        <div class="carousel-item">
        <img class="d-block w-100" src="src/imageC1" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="src/imageC3" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
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

   <!-- BlOC TEXTE-->
        <div class="m-5 border p-5">
            <p class="text-center" style="font-size: 1.5em;font-family: 'Roboto Mono', monospace">La créativité sans stratégie, cela s'appelle de l'Art. La créativité avec de la stratégie, cela s'appelle de la "Publicité".</p>
            <p class="text-right font-italic" style="font-size: 1em;font-size: 1.1em;font-family: 'Roboto Mono', monospace">Jef Richards</p>
        </div>

        <div class="container">
            <div class="row">
                
                    <p class="border p-2 text-center align-items-center col-sm-8 mr-2"  aria-hidden="true" style="line-height: 8em">PARAGRAPHE COMMERCIAL POUR VENTE PHOTO ET DROIS</p>
                
               
                    <img src="src/photo" alt="Appareil photo" style="width: 25%">
                
            </div>

            <div class="d-flex flex-column justify-content-center m-5 border p-2">
                <p class="text-center">Mes dernieres photos</p>
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="src/image6" alt="derniere photos" style="width: 90%">
                        </div>
                        <div class="col-md-3">
                            <img src="src/image8" alt="derniere photos" style="width: 90%">
                        </div>
                        <div class="col-md-3">
                            <img src="src/image11" alt="derniere photos" style="width: 90%">
                        </div>
                        <div class="col-md-3">
                            <img src="src/image7" alt="derniere photos" style="width: 90%">
                        </div>
                    </div>
            </div>
           
        </div>
    
    
    <footer class="bg-light text-right" style="line-height: 5em">
        <p class="mr-3">&copy; A World of faces All rights reserved ---- 2020 </p>
    </footer>
  



    </body>
</html>