<?php

session_start();
//Connexion à la BD
require_once('sys/connexion.php');
//On stocke notre requête dans une variable sql
$sql = 'SELECT * FROM produit';
//On envoie la requête à la base de données et on stock les résultats dans $results
$results = $bdd->query($sql);
//On transforme les résultats en un tableau associatif compréhensible par PHP
$produits = $results->fetchAll(PDO::FETCH_OBJ);
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

    <!-- la partie navbar -->
    <header id="header">
        <a href="">
            <img src="https://img.icons8.com/material-rounded/24/f5f5f7/mac-os.png" />
        </a>

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

        <a href="./Account.php">
            <img id="account_icone" src="https://img.icons8.com/fluency-systems-regular/24/FFFFFF/user.png" />
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

    <!-- la premiere section -->
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

            <!-- le popup pour la video -->
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


    <!-- boucle sur un ficher d'image  -->
    <!-- <?php
            $scandir = scandir("./img/AirPods2");

            // voir les arrays 
            // var_dump($scandir);
            // var_dump($produits);

            foreach ($scandir as $ficher) {
                // boucler sur les 6 tab
                // foreach (array(0, 1, 2, 3, 4, 5) as $boucle) {
                echo "<img src='" . $produits[0]->Chemin . "/" . $ficher . "' alt=''><br/>";
                // }
            }
            ?> -->


    <!-- deuxieme section -->
    <section class="iphone14_frontpage">
        <a href="">

            <!-- on va chercher les nom des produits dans la base de données -->
            <h2 id="nomiphone14">
                <?php echo $produits[4]->nom_produit ?>
            </h2>

            <p>Pro. Beyond.</p>

            <div id="link_iphone14pro_frontpage">
                <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
            </div>

            <div id="iphone14Pro_container">
                <img src="https://www.apple.com/v/iphone-14-pro/a/images/overview/hero/hero_iphone_14_pro__kzr001ge0262_large.jpg" alt="">
            </div>
        </a>
    </section>

    <section>
        <a href="">
            <h2>
                <?php echo $produits[4]->nom_produit ?>
            </h2>
            <div id="link_iphone14pro_frontpage">
                <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
            </div>

        </a>
    </section>
</body>
<script src="app.js"></script>




</html>