<?php
session_start();
//Connexion à la BD
require_once('sys/connexion.php');
//On stocke notre requête dans une variable sql
$sql = "SELECT nom_produit, details, prix
FROM panier 
JOIN produit 
ON panier.Id_produit=produit.Id_produit

-- WHERE email = '{$_SESSION['email']}'";
//On envoie la requête à la base de données et on stock les résultats dans $results
$results = $bdd->query($sql);
//On transforme les résultats en un tableau associatif compréhensible par PHP
$produits = $results->fetchAll(PDO::FETCH_OBJ);
//Déconnexion de la base de données
unset($bdd);

var_dump($produits);
