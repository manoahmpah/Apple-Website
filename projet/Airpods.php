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
    <link rel="stylesheet" href="Airpods.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>AirPods</title>
</head>

<body>
    <?php require 'header.php' ?>
    <section id="AirPods_lumiere">
        <div class="intro">
            <canvas id="hero-lightpass"></canvas>
        </div>
    </section>


    <section class="hello_world">
        <div class="container_AirPods3">
            <div>
                <h1>
                    <!-- Voir le var_dump($produits) -->
                    <?php echo $produits[1]->nom_produit ?>
                    <p class="prix_produit">
                        From $<?php echo $produits[1]->prix ?>
                    </p>
                </h1>
                <img src="https://www.apple.com/v/airpods/s/images/overview/airpods_3rd_gen__dhy5bknhvtqq_large.jpg" alt="">
                <div class="position_the_boutton">
                    <form action="./panier.php" method="post">
                        <a href=""><input class="Bouton_buy" name="achat_AirPods3" type="submit" value="Buy"></a>
                        <a class="Learn_more_btn" href="">Learn more </a>
                    </form>

                </div>

            </div>
        </div>
    </section>
    <section class="hello_world">
        <div class="container_AirPods2">
            <div>
                <h1>
                    <!-- Voir le var_dump($produits) -->
                    <?php echo $produits[0]->nom_produit ?>
                    <p class="prix_produit">
                        $<?php echo $produits[0]->prix ?>
                    </p>
                </h1>

                <div id="container_AirPods2">
                    <img id="AirPods2" src="./img/AirPods2/MV7N2_AV1.jpg" alt="">
                    <div class="position_the_boutton_AirPods2">
                        <form action="./panier.php" method="post">
                            <a href=""><input class="Bouton_buy" name="achat_AirPods3" type="submit" value="Buy"></a>
                            <a class="Learn_more_btn" href="">Learn more </a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="./app.js"></script>
</body>

</html>