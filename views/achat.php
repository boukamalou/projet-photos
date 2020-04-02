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

     <!-- GoogleFont -->
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
        <body class="container"> 
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
            <?php include "../part-of-site/nav.php" ?>
            
            
            <!-- CAROUSEL-->
        
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

           
                <div class="d-flex  justify-content-center m-5 flex-row align-content-center">
                    <h3 class="m-5">Merci pour votre achat</h3>
                   

                    <img src="../src/imagePhotographe" alt="Olivier Pain" style="width: 25%">
                </div>
            
            <footer class="bg-light text-right" style="line-height: 5em">
                 <p class="mr-3">&copy; A World of faces All rights reserved ---- 2020 </p>
            </footer>
  
        </body>
    </html>