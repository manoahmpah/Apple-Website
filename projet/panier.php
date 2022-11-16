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

        if (isset($_POST['AirPodMax'])) {
            $buy = $_POST['AirPodMax'];
        } elseif (isset($_POST['Airpods_2'])) {
            $buy = $_POST['Airpods_2'];
        } elseif (isset($_POST['Airpods_3'])) {
            $buy = $_POST['Airpods_3'];
        }


        if (isset($_SESSION['email'])) {
            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM identifiant WHERE email= '{$_SESSION['email']}' ";
            $results = $bdd->query($sql);
            $produits = $results->fetchAll(PDO::FETCH_OBJ);
            $req = $bdd->exec($sql);
            echo $produits[0]->Id_id;


            $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
            $sql = "SELECT * FROM panier WHERE Id_id= '{$produits[0]->Id_id}' ";
            $results = $bdd->query($sql);
            $panier = $results->fetchAll(PDO::FETCH_OBJ);
            $req2 = $bdd->exec($sql);

            $sql1 = "INSERT INTO panier(Id_id, Id_produit) VALUES( '{$produits[0]->Id_id}', '$buy' )";
            $req1 = $bdd->exec($sql1);
            unset($bdd);
        };





        // foreach ($panier as $p) {
        //     echo "<li> $p->Id_id</li>";
        // }

        // echo $_POST['AirPodMax'];


        ?>





    </section>

</body>

</html>