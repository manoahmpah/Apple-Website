<?php
if (isset($_POST['Se_connecter'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    require_once('sys/connexion.php');
    $sql = "SELECT * FROM identifiant WHERE email= $email ";
    $results = $bdd->query($sql);
    $results->execute();

    if ($results->rowCount() > 0) {
    } else {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $sql = "INSERT INTO identifiant(email, mdp) VALUES('$email', '$mdp') ";
        $req = $bdd->prepare($sql);
        $req->execute();
        echo 'Enregistrement effectuer';
    }
}
