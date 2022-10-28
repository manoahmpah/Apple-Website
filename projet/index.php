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
    <link rel="stylesheet" href="style(1).css">

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
    <?php require 'header.php' ?>
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
            <h2 id="nomiphone14" class="nomiphone14">
                <?php echo $produits[4]->nom_produit ?>
            </h2>

            <p>Pro. Beyond.</p>

            <div class="link_iphone14pro_frontpage">
                <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
            </div>

            <div id="iphone14Pro_container">
                <img src="https://www.apple.com/v/iphone-14-pro/a/images/overview/hero/hero_iphone_14_pro__kzr001ge0262_large.jpg" alt="">
            </div>
        </a>
    </section>

    <section class="iphone14_frontpage" class="secondsection">
        <div id="grid" class="secondsection">
            <div>
                <a href="">
                    <h2 id="nomiphone14-2s" class="nomiphone14">
                        <?php echo $produits[4]->nom_produit ?>
                    </h2>
                    <div class="link_iphone14pro_frontpage">
                        <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                        <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                    </div>
                    <div id="iphone14-s2-div1-div2">
                        <img src="https://www.apple.com/v/home/au/images/promos/iphone-14/promo_iphone14__b9mz75yhy02u_large.jpg" alt="">
                    </div>

                </a>
            </div>
            <div id="color-s2-div2">
                <img id="centerimg-s2" src="https://www.apple.com/v/home/au/images/logos/apple-tv-4k/promo_tv4k_logo__5m5umvk10duu_large.png" alt="">
                <h4 class="nomiphone14" id="smalltitle-s2">The Apple experience. <br> Cinematic in every sense.</h4>
                <div class="link_iphone14pro_frontpage">
                    <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                    <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                </div>
                <div id="AppleTV_img">
                    <img src="./img/AppleTV.png" alt="">
                </div>
            </div>
        </div>


    </section>
</body>
<script src="app.js"></script>




</html>