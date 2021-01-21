<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$Nom = $_POST['Nom'];
		$Naissance = $_POST['Naissance'];
		$Tel = $_POST['Tel'];
		$Adresse = $_POST['Adresse'];
		$Poste = $_POST['Poste'];
		$sql = "INSERT INTO personnels (Nom, Naissance, Tel, Adresse, Poste) VALUES ('$Nom', '$Naissance', '$Tel', '$Adresse', '$Poste')";

		$conn->query($sql);
	}

	header('location: home.php');
?>