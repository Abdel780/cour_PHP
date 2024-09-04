<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP <?php echo $myPage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <h1>Page base</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-dark">
            <img src="public/img/logo_poleS.png" alt="logo" width="100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex">
                        <?php
                        if($myPage !== 'Accueil'){
                            echo '<a class="nav-link text-light" href="/">Accueil</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les bases'){
                            echo '<a class="nav-link text-light" href="base.php">Les bases</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les variables'){
                            echo '<a class="nav-link text-light" href="variable.php">Les variables</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les constantes'){
                            echo '<a class="nav-link text-light" href="constante.php">Les constantes</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les concatenations'){
                            echo '<a class="nav-link text-light" href="concatenation.php">Les concatenations</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les arithmetique'){
                            echo '<a class="nav-link active text-light" aria-current="page" href="/arithmetique.php">Les arithmetique</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les conditions'){
                            echo '<a class="nav-link text-light" href="condition.php">Les conditions</a>';
                        }
                        ?>
                        <?php
                        if($myPage !== 'Les tableaux'){
                            echo '<a class="nav-link text-light" href="tableaux.php">Les tableaux</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>