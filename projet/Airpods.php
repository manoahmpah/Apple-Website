<?php
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
    <!-- icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons8-mac-os-30.png">

    <!-- css -->
    <link rel="stylesheet" href="Airpods(1).css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <title>AirPods</title>
</head>

<body>
    <?php require 'header.php' ?>
    <section>
        <div class="intro">
            <canvas id="hero-lightpass"></canvas>
        </div>
    </section>
    <section id="hello_world">
        <div class="grid">
            <div class="one">
                <img src="./img/AirPods2/MV7N2_AV1.jpg" alt="">
            </div>
            <div class="two">
                <h1>
                    <!-- Voir le var_dump($produits) -->
                    <?php echo $produits[0]->nom_produit ?>
                </h1>

                <p>
                    <?php echo $produits[0]->details ?>
                </p>
            </div>
        </div>
        <div class="grid">
            <div class="two" class="img_dd">
                <img src="./img/AirPods2/MV7N2_AV2.jpg" alt="">
            </div>
            <div class="one">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus voluptas nesciunt facilis corrupti esse illum distinctio sapiente animi! Tenetur veritatis delectus fugit cumque. Consequuntur iure, praesentium culpa ea minus iusto!
                    Sequi dignissimos nam nostrum nulla, ab aliquid cum modi. Quis excepturi in beatae, aliquid sapiente quaerat numquam hic quod odit, voluptas eius consequuntur non ullam fugit tempore vitae. Perspiciatis, voluptatem.</p>
            </div>
        </div>
    </section>


    <script src="./app.js"></script>
</body>

</html>