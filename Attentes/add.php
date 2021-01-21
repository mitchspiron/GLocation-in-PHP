<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$Nom = $_POST['Nom'];
		$Tel = $_POST['Tel'];
		$Univ = $_POST['Univ'];
		$sql = "INSERT INTO attentes (Nom, Tel, Univ) VALUES ('$Nom', '$Tel', '$Univ')";

		$conn->query($sql);
	}

	header('location: home.php');
?>