<?php
if (isset($_POST['Se_connecter'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', 'root');
    $sql = "SELECT * FROM identifiant WHERE email= ':email' ";
    $results = $bdd->prepare($sql);
    $results->execute(['email' => $email]);

    if ($results->rowCount() > 0) {

        $data = $results->fetchAll();
        if (password_verify($mdp, $data['0']["password"])) {
            echo "Connexion effectué";
            $_SESSION['email'] = $email;
        }
    } else {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $sql = "INSERT INTO identifiant(email, mdp) VALUES('email', 'mdp') ";
        $req = $bdd->prepare($sql);
        $req->execute(['email' => $email, 'mdp' => $mdp]);
        echo 'Enregistrement effectuer';
    }
}
