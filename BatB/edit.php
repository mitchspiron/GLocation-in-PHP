<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Nom = $_POST['Nom'];
		$Naissance = $_POST['Naissance'];
		$Tel = $_POST['Tel'];
		$Studio = $_POST['Studio'];
		$Univ = $_POST['Univ'];
		$sql = "UPDATE donnee2 SET Nom = '$Nom', Naissance = '$Naissance', Tel = '$Tel', Studio = '$Studio', Univ = '$Univ' WHERE id = '$id'";

		$conn->query($sql);
	}
	header('location: home.php');

?>
