<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Nom = $_POST['Nom'];
		$Naissance = $_POST['Naissance'];
		$Tel = $_POST['Tel'];
		$Adresse = $_POST['Adresse'];
		$Poste = $_POST['Poste'];
		$sql = "UPDATE donnee3 SET Nom = '$Nom', Naissance = '$Naissance', Tel = '$Tel', Adresse = '$Adresse', Poste = '$Poste' WHERE id = '$id'";

		$conn->query($sql);
	}
	header('location: home.php');

?>
