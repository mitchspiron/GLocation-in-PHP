
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GLocation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>

		.modal-label{
			position:relative;
			top:7px
		}

		.jumbotron {
      		background-color: #99003d;
      		color: #fff;
      		height: 665px;
      		margin-top: -20px;
  		}

	</style>
</head>
<body>
<div class="containeur">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			    <a class="navbar-brand" href="#">GLocation</a>
			</div>
			<ul class="nav navbar-nav">
			    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Locataires <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="BatA/home.php">Bâtiment A</a></li>
			          <li><a href="BatB/home.php">Bâtiment B</a></li>
			          <li><a href="BatC/home.php">Bâtiment C</a></li>
			        </ul></li>
			    <li><a href="Attentes/home.php"><span class="glyphicon glyphicon-time"></span> Attentes</a></li>
			    <li><a href="Personnels/home.php"><span class="glyphicon glyphicon-user"></span> Personnels</a></li>
			    <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
			    <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> </span> About</a></li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron text-center">
  		<h1 style="margin-top: 60px;">GLocation</h1> 
  		<p style="margin-top: 60px;">Ceci est un site fait en php qui consiste à gérer la<br> location d'un box à plein temps ou à court terme et<br> qui permet aussi de gérer les réservations ainsi<br> que la liste des personnels qui y travaillent.</p> 
	 	<form class="form-inline" style="margin-top: 100px;">
	    	<input type="email" class="form-control" size="50" placeholder="Locataires, Attentes, Personnels à rechercher" required>
	    	<button type="button" class="btn btn-danger">Rechercher</button>
	  	</form>
	</div>
	<footer class="navbar navbar-inverse" style="margin-top: -35px;">
		<center><p style="margin-left: 60px;margin-top:15px;color: grey;cursor: pointer;"><span class="glyphicon glyphicon-phone"></span> 0329093441/Mitch_Spiron</p></center>
	</footer>

</html>
