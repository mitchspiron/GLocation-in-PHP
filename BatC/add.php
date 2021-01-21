<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$Nom = $_POST['Nom'];
		$Naissance = $_POST['Naissance'];
		$Tel = $_POST['Tel'];
		$Studio = $_POST['Studio'];
		$Univ = $_POST['Univ'];
		$sql = "INSERT INTO donnee3 (Nom, Naissance, Tel, Studio, Univ) VALUES ('$Nom', '$Naissance', '$Tel', '$Studio', '$Univ')";

		$conn->query($sql);
		}

	header('location: home.php');
?>