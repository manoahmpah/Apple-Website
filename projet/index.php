<?php
//Connexion à la BD
require_once('sys/connexion.php');
//On stocke notre requête dans une variable sql
$sql = 'SELECT * FROM produit';
//On envoie la requête à la base de données et on stock les résultats dans $results
$results = $bdd->query($sql);
//On transforme les résultats en un tableau associatif compréhensible par PHP
$personnes = $results->fetchAll(PDO::FETCH_OBJ);
//Déconnexion de la base de données
unset($bdd);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style -->
    <link rel="stylesheet" href="style.css">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>Apple (France)</title>
</head>

<body>
    <header id="header">

        <img src="https://img.icons8.com/material-rounded/24/f5f5f7/mac-os.png" />

        <a href="">
            Mac
        </a>

        <a href="">
            iPad
        </a>

        <a href="">
            iPhone
        </a>

        <a href="">
            AirPods
        </a>

        <a href="">
            <img src="https://img.icons8.com/fluency-systems-regular/24/FFFFFF/shopping-bag--v1.png" />
        </a>

        <a href="">
            <img src="https://img.icons8.com/fluency-systems-regular/24/FFFFFF/user.png" />
        </a>


    </header>
    <!-- <nav id="navbar">
        <ul id="menu">
            <li>
                <h2>iPad</h2>
            </li>
            <li>
                <a href="">overview</a>
            </li>
            <li>
                <a href="">Why iPad</a>
            </li>
            <li>
                <a href="">Tech Specs</a>
            </li>
            <li>
                <a href="">Order now</a>
            </li>
        </ul>
    </nav> -->


    <section id="fisrt_page">
        <div id="container">
            <div>
                <img id="image_ipad" src="https://www.apple.com/v/ipad-10.9/a/images/overview/hero/hero__ecv967jz1y82_large.jpg" alt="">
            </div>
            <div id="container_text_1st_page">
                <p>

                    <span>iPad</span> <br>

                    Lovable.

                    Drawable.

                    Magical.
                </p>
                <a href="#popup" class="film">Watch the film <img src="https://img.icons8.com/external-inkubators-detailed-outline-inkubators/18/2b60de/external-play-music-inkubators-detailed-outline-inkubators.png" /></a>


            </div>
            <div id="popup" class="overlay">
                <div class="popup">
                    <div>
                        <a href="#" id="cross">&times;</a>
                        <video controls height="60%" width="60%">
                            <source src="./vid/film_ipad.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </div>

        </div>

    </section>

    <?php

    ?>
</body>
<script src="app.js"></script>


<?php '<img src="__DIR__ . "\img\AirPods2\MV7N2_AV1.jpg" alt="">' ?>


</html>