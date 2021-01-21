<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Nom = $_POST['Nom'];
		$Tel = $_POST['Tel'];
		$Univ = $_POST['Univ'];
		$sql = "UPDATE attentes SET Nom = '$Nom', Tel = '$Tel', Univ = '$Univ' WHERE id = '$id'";

		$conn->query($sql);
	}
	header('location: home.php');

?>
