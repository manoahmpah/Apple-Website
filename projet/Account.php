<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="Account.css">
    <title>Apple (France)</title>
</head>

<body>

    <!-- si une session email est ouverte -->
    <?php
    if (isset($_SESSION['email'])) {
    ?>
        <?php require 'header.php' ?>


        <!-- si il y a aucune session d'ouverte -->
    <?php } else {
    ?>


        <?php require 'header.php' ?>

        <section id="fs">
            <div>
                <h1>Connectez-vous pour régler vos achats plus <br> rapidement.</h1>
            </div>

            <div id="container_Acount_input">
                <h2>Connectez-vous à l’Apple Store</h2>
                <form method="POST" action="./login.php">
                    <label for="email">
                        <input type="email" name="email" id="email">
                    </label><br>
                    <label for="mdp">
                        <input type="Password" name="mdp" id="mdp">
                    </label>

                    <br><input type="submit" name="Se_connecter" value="Se connecter">
                </form>

                <p>Pas d’identifiant Apple ? <a href="">Créez le vôtre dès à présent. <img src="https://img.icons8.com/android/20/4169e1/circled-up-right-2.png" /></a></p>
            </div>
        </section>
</body>

<?php } ?>

</html>