<?php
session_start();

//Connexion à la BD
require_once('sys/connexion.php');
//On stocke notre requête dans une variable sql
$sql = 'SELECT COUNT(*) FROM identifiant WHERE pays = "France"';
//On envoie la requête à la base de données et on stock les résultats dans $results
$results = $bdd->query($sql);
//On transforme les résultats en un tableau associatif compréhensible par PHP
$identifiant = $results->fetchAll(PDO::FETCH_OBJ);
//Déconnexion de la base de données
unset($bdd);
?>
<!DOCTYPE html>
<html lang="fr">

<head>


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="Account(0).css">
    <title>Apple (France)</title>
</head>

<body>

    <!-- si une session email est ouverte + le sys de deconnexion -->
    <?php
    if (isset($_SESSION['email'])) {
    ?>
        <?php require 'header.php' ?>
        <?php

        echo var_dump($identifiant);
        ?>
        <div id="nom-email-ifco">
            <!-- commme il y a une répétion du header on a préferé le mettre dans un ficher et ensuite l'appeler plusieurs fois -->





            <!-- si le compte admin est connecté, il aura acces à plein d'informations que des simples utilisateurs n'aurrons pas -->
            <?php
            if ($_SESSION['email'] == "mpahmanoah@apple.com") { ?>

                <div class="wrapper">
                    <div class="one">
                        <div>
                            <h2>Vous êtes connecté sur le compte administrateur : <?php echo $_SESSION['email'] ?></h2>
                        </div>
                    </div>
                    <div class="two">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>

                        <!-- Scripte qui permet de mettre un diagramme -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const labels = [

                            ];

                            const data = {
                                labels: [
                                    "Afghanistan",
                                    "Allemagne",
                                    "Angleterre",
                                    "Belgique",
                                    "Brésil",
                                    "Bulgarie",
                                    "Canada",
                                    "Colombie",
                                    "Croatie",
                                    "Danemark",
                                    "Djibouti",
                                    "Dominique",
                                    "Egypte",
                                    "Equateur",
                                    "Espagne",
                                    "Fidji",
                                    "Finlande",
                                    "France"
                                ],
                                datasets: [{
                                    label: 'My First Dataset',
                                    data: [300, 50, 100, 78, 52, 158, 20, 498, 367, 205, 24, 15, 24, 157, 3, 76, 95, 48],
                                    backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)'
                                    ],
                                    hoverOffset: 50
                                }]
                            };

                            const config = {
                                type: 'doughnut',
                                data: data,
                                options: {}
                            };
                        </script>
                        <script>
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>

                        <form action="Account.php" method="POST">
                            <input type="submit" value="Se déconnecter" name="Se_deconnecter">
                        </form>
                    </div>
                    <div class="three">Trois</div>
                </div>

            <?php } else { ?>
                <div>
                    <h2>vous êtes connecté sur le compte : <?php echo $_SESSION['email'] ?></h2>
                </div>
                <form action="Account.php" method="POST">
                    <input type="submit" value="Se déconnecter" name="Se_deconnecter">
                </form>
            <?php } ?>


        </div>

        <!-- sys de deconexion -->
        <?php
        if (isset($_POST['Se_deconnecter'])) {
            session_destroy();
            header("Location:Account.php");
        }

        ?>

        <!-- si il y a aucune session d'ouverte -->
    <?php } else {
    ?>

        <!-- commme il y a une répétion du header on a préferé le mettre dans un ficher et ensuite l'appeler plusieurs fois -->
        <?php require 'header.php' ?>

        <section id="fs">
            <div>
                <h1>Connectez-vous pour régler vos achats plus <br> rapidement.</h1>
            </div>

            <div id="container_Acount_input">
                <h2>Connectez-vous à l’Apple Store</h2>

                <!-- le formulaire pour se connecter si la personne à un compte -->
                <form method="POST" action="./login.php">
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="email">
                    </label><br>
                    <label for="mdp">
                        <input type="Password" name="mdp" id="mdp" placeholder="Mot de Passe">
                    </label>

                    <br><input type="submit" name="Se_connecter" value="Se connecter">
                </form>


                <p>Pas d’identifiant Apple ? <a href="./inscription.php">Créez le vôtre dès à présent. <img src="https://img.icons8.com/android/20/4169e1/circled-up-right-2.png" /></a></p>
            </div>
        </section>
</body>

<?php } ?>

</html>