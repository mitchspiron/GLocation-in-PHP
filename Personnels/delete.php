<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM personnels WHERE id = '".$_GET['id']."'";

		$conn->query($sql);
	}

	header('location: home.php');
?>