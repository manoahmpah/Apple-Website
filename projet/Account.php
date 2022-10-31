<?php
session_start();

require_once('sys/connexion.php');
// Pour savoir le nombre d'utilisateurs
$sql78 = 'SELECT * FROM identifiant';
$results = $bdd->query($sql78);
$identifiant78 = $results->fetchAll(PDO::FETCH_OBJ);

// donnée pour la France
$sql = 'SELECT COUNT(*) AS FRANCE FROM identifiant WHERE pays = "France"';
$results = $bdd->query($sql);
$identifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donnée pour Afghanistan
$sql1 = 'SELECT COUNT(*) AS Afghanistan FROM identifiant WHERE pays = "Afghanistan"';
$results = $bdd->query($sql1);
$AFidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour Allemagne
$sql2 = 'SELECT COUNT(*) AS Allemagne FROM identifiant WHERE pays = "Allemagne"';
$results = $bdd->query($sql2);
$ALidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donné pour Angleterre
$sql3 = 'SELECT COUNT(*) AS Angleterre FROM identifiant WHERE pays = "Angleterre"';
$results = $bdd->query($sql3);
$ANidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Belgique
$sql4 = 'SELECT COUNT(*) AS Belgique FROM identifiant WHERE pays = "Belgique"';
$results = $bdd->query($sql4);
$BEidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Brésil
$sql5 = 'SELECT COUNT(*) AS Brésil FROM identifiant WHERE pays = "Brésil"';
$results = $bdd->query($sql5);
$BRidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Bulgarie
$sql6 = 'SELECT COUNT(*) AS Bulgarie FROM identifiant WHERE pays = "Bulgarie"';
$results = $bdd->query($sql6);
$BUidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Canada
$sql7 = 'SELECT COUNT(*) AS Canada FROM identifiant WHERE pays = "Canada"';
$results = $bdd->query($sql7);
$CAidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Colombie
$sql8 = 'SELECT COUNT(*) AS Colombie FROM identifiant WHERE pays = "Colombie"';
$results = $bdd->query($sql8);
$COidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Croatie
$sql9 = 'SELECT COUNT(*) AS Croatie FROM identifiant WHERE pays = "Croatie"';
$results = $bdd->query($sql9);
$CRidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Danemark
$sql10 = 'SELECT COUNT(*) AS Danemark FROM identifiant WHERE pays = "Danemark"';
$results = $bdd->query($sql10);
$DAidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Djibouti
$sql11 = 'SELECT COUNT(*) AS Djibouti FROM identifiant WHERE pays = "Djibouti"';
$results = $bdd->query($sql11);
$DJidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Dominique
$sql12 = 'SELECT COUNT(*) AS Dominique FROM identifiant WHERE pays = "Dominique"';
$results = $bdd->query($sql12);
$DOidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Egypte
$sql13 = 'SELECT COUNT(*) AS Egypte FROM identifiant WHERE pays = "Egypte"';
$results = $bdd->query($sql13);
$EGidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Equateur
$sql14 = 'SELECT COUNT(*) AS Equateur FROM identifiant WHERE pays = "Equateur"';
$results = $bdd->query($sql14);
$EQidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Espagne
$sql15 = 'SELECT COUNT(*) AS Espagne FROM identifiant WHERE pays = "Espagne"';
$results = $bdd->query($sql15);
$ESidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Fidji
$sql16 = 'SELECT COUNT(*) AS Fidji FROM identifiant WHERE pays = "Fidji"';
$results = $bdd->query($sql16);
$FIDidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

// donée pour la Finlande
$sql17 = 'SELECT COUNT(*) AS Finlande FROM identifiant WHERE pays = "Finlande"';
$results = $bdd->query($sql17);
$FINidentifiant = $results->fetchAll(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="Account.css">
    <title>Apple (France)</title>
</head>

<body>

    <!-- si une session email est ouverte + le sys de deconnexion -->
    <?php
    if (isset($_SESSION['email'])) {
    ?>
        <?php require 'header.php'; ?>
        <div id="nom-email-ifco">
            <!-- commme il y a une répétion du header on a préferé le mettre dans un ficher et ensuite l'appeler plusieurs fois -->





            <!-- si le compte admin est connecté, il aura acces à plein d'informations que des simples utilisateurs n'aurrons pas -->
            <?php
            if ($_SESSION['email'] == "mpahmanoah@apple.com") { ?>

                <div class="wrapper">

                    <!-- Grid en haut a gauche -->
                    <div class="one">
                        <div>
                            <h2>Vous êtes connecté sur le compte administrateur : <?php echo $_SESSION['email'] ?></h2>
                        </div>
                    </div>

                    <!-- Grid a droite -->
                    <div class="two">
                        <div>
                            <p id="nbr_utilisateur">En tout il y a <?php echo COUNT($identifiant78) ?> utilisateur(s)</p>
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
                                    data: [<?php echo $AFidentifiant[0]['Afghanistan']; ?>,
                                        <?php echo $ALidentifiant[0]['Allemagne']; ?>,
                                        <?php echo $ANidentifiant[0]['Angleterre']; ?>,
                                        <?php echo $BEidentifiant[0]['Belgique']; ?>,
                                        <?php echo $BRidentifiant[0]['Brésil']; ?>,
                                        <?php echo $BUidentifiant[0]['Bulgarie']; ?>,
                                        <?php echo $CAidentifiant[0]['Canada']; ?>,
                                        <?php echo $COidentifiant[0]['Colombie']; ?>,
                                        <?php echo $CRidentifiant[0]['Croatie']; ?>,
                                        <?php echo $DAidentifiant[0]['Danemark']; ?>,
                                        <?php echo $DJidentifiant[0]['Djibouti']; ?>,
                                        <?php echo $DOidentifiant[0]['Dominique']; ?>,
                                        <?php echo $EGidentifiant[0]['Egypte']; ?>,
                                        <?php echo $EQidentifiant[0]['Equateur']; ?>,
                                        <?php echo $ESidentifiant[0]['Espagne']; ?>,
                                        <?php echo $FIDidentifiant[0]['Fidji']; ?>,
                                        <?php echo $FINidentifiant[0]['Finlande']; ?>,
                                        <?php echo $identifiant[0]['FRANCE']; ?>, ,
                                    ],

                                    backgroundColor: [
                                        '#FA2400',
                                        '#C80BD6',
                                        '#1F18ED',
                                        '#0BB4D6',
                                        '#0CFA48',
                                        '#FA9300',
                                        '#D60B59',
                                        '#0BD6A5',
                                        '#B9FA0C',
                                        '#FAE300',
                                        '#0BD672',
                                        '#D60E0B',
                                        '#FAC10C',
                                        '#C5FA00',
                                        '#0BD6A0',
                                        '#D60B51',
                                        '#FA9601',
                                        '#FA7800',
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

                    </div>

                    <!-- Grid en bas a gauche -->
                    <div class="three">
                        <form action="Account.php" method="POST">
                            <input type="submit" value="Se déconnecter" name="Se_deconnecter">
                        </form>
                    </div>
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
            header("Location:index.php");
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

                    <br><input id="boutton_Se_connecter" type="submit" name="Se_connecter" value="✅">
                </form>


                <p>Pas d’identifiant Apple ? <a href="./inscription.php">Créez le vôtre dès à présent. <img src="https://img.icons8.com/android/20/4169e1/circled-up-right-2.png" /></a></p>
            </div>
        </section>
</body>

<?php } ?>

</html>