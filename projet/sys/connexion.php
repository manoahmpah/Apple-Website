<?php
	//fichier de connexion à la base de données
	$host = 'localhost';
	$dbname = 'apple';
	$user = 'root';
	$pass = '';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	
	try {
		$bdd = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass, $options);
	} catch(Exception $e) {
		die('Connexion a la base de donnees impossible !');
	}
