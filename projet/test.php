<?php
session_start();
//Connexion à la BD
require_once('sys/connexion.php');
//On stocke notre requête dans une variable sql
$sql = "SELECT ajouter.Id_produit, panier.Id_panier, nom_produit, identifiant.Id_id, email
FROM ajouter 
RIGHT JOIN produit 
ON ajouter.Id_produit=produit.Id_produit
RIGHT JOIN panier
ON ajouter.Id_panier=panier.Id_panier
RIGHT JOIN identifiant
ON panier.Id_id=identifiant.Id_id

WHERE email = '{$_SESSION['email']}'";
//On envoie la requête à la base de données et on stock les résultats dans $results
$results = $bdd->query($sql);
//On transforme les résultats en un tableau associatif compréhensible par PHP
$produits = $results->fetchAll(PDO::FETCH_OBJ);
//Déconnexion de la base de données
unset($bdd);

var_dump($produits);
