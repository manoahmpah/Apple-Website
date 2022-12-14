<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="inscription.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
	<title>Apple (France)</title>
</head>

<body>
	<?php require 'header.php' ?>

	</div>
	<!-- traitement du formulaire  -->
	<?php
	// if ($_POST['email'] == "mpahmanoah@apple.com" or $_POST['email'] == "therentylogan@apple.com") {
	// 	echo "vous ne pouvez pas utiliser cette adresse email";
	// } 
	if (isset($_POST['Inscription'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$pays = $_POST['pays'];
		$date_de_naissance = $_POST['date_de_naissance'];
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];
		$phone = $_POST['phone'];

		$bdd = new PDO('mysql:host=localhost;dbname=apple', 'root', '');

		$mdp = password_hash($mdp, PASSWORD_DEFAULT);
		$sql = "INSERT INTO identifiant(email, password, nom, prenom, pays, date, numero) VALUES('$email', '$mdp', '$nom', '$prenom', '$pays', '$date_de_naissance', '$phone') ";
		$req = $bdd->exec($sql);
		unset($bdd);

		header("Location:Account.php");
	} else {
	?>

		<div id="container_inscription">
			<legend>Créer votre identifiant Apple</legend>
			<!-- formullaire d'inscription -->
			<form method="POST" action="inscription.php">
				<p>
					<label for="nom">
						<input class="form-input_nom_prenom" type="text" name="nom" value="" placeholder="nom" required>
					</label>

					<label for="prenom">
						<input class="form-input_nom_prenom" id="prenom" type="text" name="prenom" value="" placeholder="prenom" required>
					</label>
				</p>

				<p>
					PAYS / RÉGION <br>
					<!--* Si il y a ajout ou suppression d'un pays il faut ajouter/supprimer la requete dans Account.php
						* ajouter ou supprimer les infos qui rendre dans le donuts (Grid:2) dans Account.php -->
					<select class="form-input" name="pays" required>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Allemagne">Allemagne</option>
						<option value="Angleterre">Angleterre</option>
						<option value="Belgique">Belgique</option>
						<option value="Brésil">Brésil</option>
						<option value="Bulgarie">Bulgarie</option>
						<option value="Canada">Canada</option>
						<option value="Colombie">Colombie</option>
						<option value="Croatie">Croatie</option>
						<option value="Danemark">Danemark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominique">Dominique</option>
						<option value="Egypte">Egypte</option>
						<option value="Equateur">Equateur</option>
						<option value="Espagne">Espagne</option>
						<option value="Fidji">Fidji</option>
						<option value="Finlande">Finlande</option>
						<option value="France" selected>France</option>
					</select>
				</p>

				<p>
					<label for="date_de_naissance">
						<input class="form-input" type="date" name="date_de_naissance" value="" required>
					</label>
				</p>

				<p>
					<label for="email">
						<input class="form-input" type="email" name="email" value="" placeholder="nom@example.com" required>
					</label>
				</p>

				<p>

					<label for="mdp">
						<input class="form-input" id="mdp" type="Password" name="mdp" value="" placeholder="mot de passe" required>
					</label>
				</p>

				<p>
					<label for="phone">
						<!-- format: 1234567890 -->
						<input type="tel" class="form-input" name="phone" placeholder="0123456789" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
					</label>

				</p>

				<br><input id="Button_inscription" type="submit" name="Inscription" value="Continuer">




			</form>
		<?php
	}
		?>

</body>

</html>