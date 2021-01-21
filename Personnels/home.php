

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../w3.css">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.content {height: 450px}
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 650px;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">GLocation</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
            <li><span style="margin-top: 18px;margin-right: -45px;margin-left: 10px;color: white;" class="glyphicon glyphicon-search"></span></li>
            <li style="margin-top: 10px;margin-left: 30px;margin-right: 50px;"><form method="POST"><input type="text" class="form-control input-sm" name="search" id="inputsm" size="100" placeholder="Rechercher un résident"></form></li>
            <li style="margin-left: -45px;margin-right: 20px;margin-top: 10px;"><input type="button" class="btn btn-default btn-sm" value="Rechercher" name="search" style="background-color: #cccccc;"></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Locataires <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../BatA/home.php">Bâtiment A</a></li>
                <li><a href="../BatB/home.php">Bâtiment B</a></li>
                <li><a href="../BatC/home.php">Bâtiment C</a></li>
              </ul>
            </li>
            <li><a href="../Attentes/home.php"><span class="glyphicon glyphicon-time"></span> Attentes</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Personnels</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> </span> About</a></li>
          </ul>
        </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="background: #99003d;">
    </div>
    <div class="col-sm-8" style="background: #e0e0eb;height: 650px;"> 

      <a href="#addnew" data-toggle="modal" class="btn btn-primary" style="position: absolute;margin-top: 40px;margin-left: 450px;"><span class="glyphicon glyphicon-plus"></span>Adhésion
      </a>

<div class="contain">
        <table>
          <tr>
            <th>ID</th>
            <th>Nom et prénom</th>
            <th>Date de naissance</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Poste</th>
            <th>Action</th>
          </tr>
          <tr>
            <?php
              include_once('connection.php');
              if(isset($_POST['search'])){
                $searchkey = $_POST['search'];
                $sql = "SELECT * FROM personnels WHERE Nom LIKE '%$searchkey%' OR Adresse LIKE '%$searchkey%' OR Poste LIKE '%$searchkey%'";
              }else{
              $sql = "SELECT * FROM personnels";
              }
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['Nom']."</td>
                  <td>".$row['Naissance']."</td>
                  <td>".$row['Tel']."</td>
                  <td>".$row['Adresse']."</td>
                  <td>".$row['Poste']."</td>
                  <td>
                    <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
                    <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
                  </td>
                </tr>";
                include('edit_delete_modal.php');
              }

            ?>
          </tr>
        </table>
      </div>
    </div>
    <?php include('add_modal.php') ?>

    <div class="col-sm-2 sidenav" style="background: #99003d;">
    </div>
  </div>
</div>

<footer class="navbar navbar-inverse" style="margin-top: -20px;">
    <center><p style="margin-left: 60px;margin-top:15px;color: grey;cursor: pointer;"> Liste des personnels</p></center>
</footer>

</body>
</html>
