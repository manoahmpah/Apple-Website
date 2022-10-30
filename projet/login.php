<!-- ficher qui va vérifier si le code de l'email saisit est correcte -->
<?php
session_start();

// verifie si le bouton Se_connecter existe
if (isset($_POST['Se_connecter'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // connexion a la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
    $sql = "SELECT * FROM identifiant WHERE email= '$email' ";
    $results = $bdd->prepare($sql);
    $results->execute();

    // 
    if ($results->rowCount() > 0) {

        $data = $results->fetchAll();
        if (password_verify($mdp, $data[0]["password"])) {
            $_SESSION['email'] = $email;
            header("Location:index.php");
        }
    } else {
        header("Location:Account.php");
        exit;
    }
}
