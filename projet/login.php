<?php
session_start();

if (isset($_POST['Se_connecter'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];


    $bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');
    $sql = "SELECT * FROM identifiant WHERE email= '$email' ";
    $results = $bdd->prepare($sql);
    $results->execute();

    if ($results->rowCount() > 0) {

        $data = $results->fetchAll();
        if (password_verify($mdp, $data[0]["password"])) {
            $_SESSION['email'] = $email;
            header("Location:index.php");
        }
    } else {
        // $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO identifiant(email, password) VALUES('$email', '$mdp') ";
        // $req = $bdd->prepare($sql);
        // $req->execute();
        // echo 'Enregistrement effectuer';
        header("Location:Account.php");
        exit;
    }
}
