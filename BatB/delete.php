<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM donnee2 WHERE id = '".$_GET['id']."'";

		$conn->query($sql);
	}

	header('location: home.php');
?>