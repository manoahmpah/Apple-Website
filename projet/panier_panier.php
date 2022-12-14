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
    <link rel="stylesheet" href="panier_panier(1).css">

    <title>Apple (France)</title>
</head>

<body>


    <?php require 'header.php' ?>


    <?php
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
                                quantite : <?php echo $p->total ?>
                            </p>
                        </b>
                    </div>

                <?php
                }
                ?>
                <div>

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