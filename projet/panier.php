<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section>

        <!-- partie serveur -->
        <?php
        // if (isset($_POST['1'])) {
        //     $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
        //     $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
        //     $results = $bdd->query($sql);
        //     $produits = $results->fetchAll(PDO::FETCH_OBJ);
        //     $sql = "INSERT INTO panier(Id_id, Id_produit) VALUES( {$produits[0]->Id_id} ,  1) ";
        //     $req = $bdd->exec($sql);
        //     unset($bdd);
        // } elseif (isset($_POST['2'])) {
        //     $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
        //     $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
        //     $results = $bdd->query($sql);
        //     $produits = $results->fetchAll(PDO::FETCH_OBJ);
        //     $sql = "INSERT INTO panier(Id_id, Id_produit) VALUES( {$produits[0]->Id_id} ,  2) ";
        //     $req = $bdd->exec($sql);
        //     unset($bdd);
        // } elseif ($_POST['3']) {
        //     $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
        //     $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
        //     $results = $bdd->query($sql);
        //     $produits = $results->fetchAll(PDO::FETCH_OBJ);
        //     $sql = "INSERT INTO panier(Id_id, Id_produit) VALUES( {$produits[0]->Id_id} ,  3) ";
        //     $req = $bdd->exec($sql);
        //     unset($bdd);
        // } elseif ($_POST['4']) {
        //     $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
        //     $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
        //     $results = $bdd->query($sql);
        //     $produits = $results->fetchAll(PDO::FETCH_OBJ);
        //     $sql = "INSERT INTO panier(Id_id, Id_produit) VALUES( {$produits[0]->Id_id} ,  4) ";
        //     $req = $bdd->exec($sql);
        //     unset($bdd);
        // }

        // Quand un utilisateur à appuyer sur le bouton buy de n'importe quelle produit
        if (isset($_POST['AirPodMax'])) {
            $buy = $_POST['AirPodMax'];
        } elseif (isset($_POST['Airpods_2'])) {
            $buy = $_POST['Airpods_2'];
        } elseif (isset($_POST['Airpods_3'])) {
            $buy = $_POST['Airpods_3'];
        }


        if (isset($_SESSION['email'])) {

            // Recupére tout de l'utilisateur qui est connecté a la session
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
            $results = $bdd->query($sql);
            $produits = $results->fetchAll(PDO::FETCH_OBJ);
            $req = $bdd->exec($sql);

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
            $sql14 = "SELECT * FROM panier WHERE Id_id= '{$produits[0]->Id_id}' ";
            $results = $bdd->query($sql14);
            $num = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql14);
            unset($bdd);

            if (COUNT($num) == 1) {
                echo "congrat";
            } else {
                // Ajoute à la base de donnée les informations sur le produit choisi
                $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
                $sql1 = "INSERT INTO panier(Id_id, Id_produit) VALUES( '{$produits[0]->Id_id}', '$buy' )";
                $req1 = $bdd->exec($sql1);
                unset($bdd);
            };



            // recupere les produits pour avoir les détails
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM produit WHERE Id_produit= '$buy' ";
            $results = $bdd->query($sql);
            $rec_produit = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql);
            unset($bdd);

            // echo var_dump($rec_produit);

            // nombre de fois 



            //Aficher ce que l'utilisateur aurait acheter
            // foreach ($rec_produit as $rp) {
            //     echo "<li> $rp->nom_produit</li>";
            //     echo "<li> $rp->type_produit</li>";
            //     echo "<li> $rp->details</li>";
            //     echo "<li> $rp->prix   </li>";
            //     echo "<li>    </li>";
            // }
        };







        // foreach ($panier as $p) {
        //     echo "<li> $p->Id_id</li>";
        // }

        // echo $_POST['AirPodMax'];


        // 
        ?>





    </section>
    <?php require 'footer.php' ?>
</body>

</html>