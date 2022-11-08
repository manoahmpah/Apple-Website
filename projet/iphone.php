<?php

session_start();

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- logo Apple -->
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons8-mac-os-30.png">

    <!-- css -->
    <link rel="stylesheet" href="iphone.css">
    <title>Apple (France)</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- la partie navbar -->
    <?php require 'header.php' ?>


    <section id="container_new_iphone">

        <!-- texte -->
        <div id="new_iphone_title_and_information">
            <h5>New</h5>
            <?php echo $produits[4]->nom_produit ?>
            <h2>Big and bigger.</h2>
            <!-- <?php echo var_dump($produits) ?> -->
            <p>From $<?php echo $produits[4]->prix ?></p>
            <div class="link_iphone14pro_frontpage">
                <a href="">Learn more <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
                <a href="">Buy <img src="https://img.icons8.com/material-outlined/24/4169e1/forward.png" /></a>
            </div>


            <!-- image -->
            <div>
                <img src="https://www.apple.com/v/iphone/home/bk/images/overview/hero/iphone_14_hero__ceub5xriecgi_large.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="section_iphone_pro_remplace_by_iphone14">
        <div>
            <div>
                <h5>New</h5>
                <?php echo $produits[4]->nom_produit ?>
                <h2>Pro. Beyond.</h2>
            </div>
            <div>
                <img src="https://www.apple.com/v/iphone/home/bk/images/overview/hero/iphone_14_pro_hero__e4ivycyx40k2_large.jpg" alt="">
            </div>
        </div>

    </section>
</body>

</html>