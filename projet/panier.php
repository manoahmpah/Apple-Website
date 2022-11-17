<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- css -->
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="panier_panier(1).css">


    <title>Apple (France)</title>
</head>

<body>
    <?php require 'header.php' ?>
    <section>

        <!-- partie serveur -->
        <?php


        // Quand un utilisateur à appuyer sur le bouton buy de n'importe quelle produit
        // Airpods
        if (isset($_POST['AirPodMax'])) {
            $buy = $_POST['AirPodMax'];
        } elseif (isset($_POST['Airpods_2'])) {
            $buy = $_POST['Airpods_2'];
        } elseif (isset($_POST['Airpods_3'])) {
            $buy = $_POST['Airpods_3'];
        }
        // iphone
        elseif (isset($_POST['Iphone_SE'])) {
            $buy = $_POST['Iphone_SE'];
        } elseif (isset($_POST['Iphone_14'])) {
            $buy = $_POST['Iphone_14'];
        }
        // on peut ajouter les autre ici


        if (isset($_SESSION['email'])) {

            // Recupére tout de l'utilisateur qui est connecté a la session
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
            $results = $bdd->query($sql);
            $produits = $results->fetchAll(PDO::FETCH_OBJ);
            $req = $bdd->exec($sql);


            // dans cette page produit sera le cli


            // on recupere l'Id de l'utilisateur
            $Id_utilisateur = $produits[0]->Id_id;

            // Recupére tout de ce que l'utilisateur aurait ajouter dans son panier
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM panier WHERE Id_id= '{$produits[0]->Id_id}' ";
            $results = $bdd->query($sql);
            $panier = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql);
            unset($bdd);



            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql14 = "SELECT * FROM panier WHERE Id_id= '{$produits[0]->Id_id}' AND Id_produit = $buy";
            $results = $bdd->query($sql14);
            $num = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql14);
            unset($bdd);

            // echo var_dump($num);



            // si le produit et deja dans le panier de l'utilisateur 

            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql14 = "SELECT total FROM panier WHERE Id_id= '{$produits[0]->Id_id}' AND Id_produit = $buy ";
            $results = $bdd->query($sql14);
            $total = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql14);
            unset($bdd);

            // echo var_dump($total);


            if (COUNT($num) == 1) {
                // ajouter au total 1 quand le produit et dans le panier du user 
                $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
                $sql1 = "UPDATE panier SET total = {$total[0]->total}+1 WHERE Id_id= {$produits[0]->Id_id} AND Id_produit=$buy";
                $req1 = $bdd->exec($sql1);
                unset($bdd);
            } else {
                // Ajoute à la base de donnée les informations sur le produit choisi
                $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
                $sql1 = "INSERT INTO panier(total, Id_id, Id_produit) VALUES( 1,'{$produits[0]->Id_id}', '$buy' )";
                $req1 = $bdd->exec($sql1);
                unset($bdd);
            };

            // echo var_dump($total);

            // recupere les produits pour avoir les détails
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM produit WHERE Id_produit= '$buy' ";
            $results = $bdd->query($sql);
            $rec_produit = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql);
            unset($bdd);
        };







        if (isset($_SESSION['email'])) {
            // Recupére tout de l'utilisateur qui est connecté a la session
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
            $results = $bdd->query($sql);
            $produits = $results->fetchAll(PDO::FETCH_OBJ);
            $req = $bdd->exec($sql);
            unset($bdd);



            require_once('sys/connexion.php');
            //On stocke notre requête dans une variable sql
            $sql = "SELECT nom_produit, details, prix, total FROM panier JOIN produit ON panier.Id_produit=produit.Id_produit WHERE Id_id = {$produits[0]->Id_id} ";
            //On envoie la requête à la base de données et on stock les résultats dans $results
            $results = $bdd->query($sql);
            //On transforme les résultats en un tableau associatif compréhensible par PHP
            $produit = $results->fetchAll(PDO::FETCH_OBJ);
            //Déconnexion de la base de données
            unset($bdd); ?>


            <section class="grid">
                <div>
                    <?php

                    foreach ($produit as $p) {
                    ?>
                        <div id="paniercli">
                            <b>
                                <img src="" alt="">
                            </b>
                            <b>
                                <h2>
                                    <?php echo $p->nom_produit ?>
                                </h2>
                            </b>
                            <b>
                                <p id="owerflow_texte">
                                    <?php echo $p->details ?>
                                </p>
                            </b>

                            <b>
                                <p>
                                    $ <?php echo $p->prix ?>
                                </p>
                            </b>

                            <b>
                                <p>
                                    <?php echo $p->total ?>
                                </p>
                            </b>
                        </div>

                    <?php
                    }
                    ?>
                    <div>
                        <h1>prize</h1>
                    </div>
                <?php
            } else { ?>
                    <section>
                        <h1>Vous n'est pas connecter à un compte, <br> cela signifie que nous ne pouvons pas enregistre votre panier</h1>
                        <a href="./Account.php">Connexion</a>
                    </section>
                <?php
            } ?>







            </section>
            <?php require 'footer.php' ?>
</body>

</html>