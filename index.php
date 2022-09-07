<?php

require_once("globals.php");
require_once("db.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviStar</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
    <!-- BOOSTRAP CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.css" integrity="sha512-h1rwF0uB6r2IuEZcyjPrR53bBKN9Wb4yL+w3Rdlzmc3CkBF1gMSFvQIIstnu4bEtYDaKca5ke5S8UBAACRImyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="/" class="navbar-brand">
                <img src="img/logo.svg" alt="" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">
                <i class="fas fa-search"></i>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid" id="main-container">
        <h1>CORPO DO SITE</h1>
    </div>
    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-links-container">
            <ul>
                <li><a href="">Adicionar Filme</a></li>
                <li><a href="">Adicionar Crítica</a></li>
                <li><a href="">Entrar / Registrar</a></li>
            </ul>
        </div>
        <p>&copy; 2022 KadimusTech</p>

    </footer>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.js" integrity="sha512-39Q5Yw4jtWPVkYu5Dry3HiRh6DWG4FDODb/rHF+X2Xp0kzhg9VgTyYV209uQ/EsqPDP/4dDvwm1rb8JgnAkHNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>