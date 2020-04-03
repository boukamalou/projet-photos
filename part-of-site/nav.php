  
   
    
    <header class="container mb-5">
        <div class="d-flex flex-row justify-content-end">
            <?php if(empty($_SESSION))
            {
                echo ' <a class="btn btn-outline-dark m-1" href="../views/login.php">connexion</a>
                <a class="btn btn-outline-dark m-1" href="../views/register.php">Inscription</a>';
            }
            else
            {
                echo '<a class="btn btn-outline-dark m-1" href="../controller/deco.php">Deconnexion</a>';
            }
            
            ?>
            
        </div>
        <div class="container">
            <div class="col-sm-12">
            <h1 class="ml-5" style="font-family: 'Roboto Mono', monospace">A WORLD OF FACES</h1>

            </div>
            <div class="col-sm-12">
            <h3  style="font-family: 'Indie Flower',cursive;">plus qu'un voyage . . .</h3>
            </div>
        </div>
    </header>

   <nav class="navbar d-flex flex-row justify-content-around mb-5 border rounded" style="border-color:#DCDCDC">
        <a class="btn btn-outline-secondary" href="../index.php">ACCUEIL</a>
        <a class="btn btn-outline-secondary" href="../views/presentation.php">QUI SUIS JE</a>
        <a class="btn btn-outline-secondary" href="../views/store.php">STORE</a>
    </nav>

