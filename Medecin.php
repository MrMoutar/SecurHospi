<?php 
include 'Config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Secur|Hospi <?php echo $Version ;?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
      function ffalse()
                {
                  return false;
                }
                function ftrue()
                {
                  return true;
                }
                document.onselectstart = new Function ("return false");
                if(window.sidebar)
                {
                   document.onmousedown = ffalse;
                   document.onclick = ftrue;
                }
        //-->
    </script>
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#" target="_blank">
          <strong class="blue-text">Neurologie
            <span class="black-text">/ Aile B</span></strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="index.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#" target="_blank">Sécurité</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#" target="_blank">Logiciel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#" target="_blank">Mobile</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="#" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-codepen mr-2"></i>Style|CSS
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/MrMoutar/SecurHospi" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>Code|Source
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
    <style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 150%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container:hover .overlay {
  width: 150%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
<br>
<div class="container">
  <img src="logo.png" alt="Secur|Hospi" class="image">
  <div class="overlay">
    <div class="text">Secur|Hospi</div>
  </div>
</div>
<br>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action  waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="Medecin.php" class="list-group-item active waves-effect">
          <i class="fas fa-user mr-3"></i>Medecin <span class="badge badge-primary badge-pill pull-right"><?php echo $Medecin ; ?></span></a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Patient <span class="badge badge-primary badge-pill pull-right"><?php echo $Patient ; ?></span></a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Visiteur <span class="badge badge-primary badge-pill pull-right"><?php echo $Visiteur ; ?></span></a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Simulation</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
    <div class="col-md-12 mb-4">

<!--Card-->
<div class="card">

  <!--Card content-->
  <div class="card-body">

    <!-- Table  -->
    <table class="table table-hover">
      <!-- Table head -->
      <thead class="blue lighten-4">
        <tr>
          <th>id</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Metier</th>
          <th>Dernier entrer</th>
          <th>Dernier sortie</th>
        </tr>
      </thead>
      <!-- Table head -->

      <!-- Table body -->
      <tbody>
      <?php
$servername = "localhost";
$username = "stidd";
$password = "stidd59";
$dbname = "securhospi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Nom, Prenom, Metier, entrer, sortie FROM `login`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><th scope='row'>" . $row["id"]. "</th>" . "<td>" . $row["Nom"]. "</td><td>" . $row["Prenom"] . "</td><td>" . $row["Metier"] ."</td><td>" . $row["entrer"] ."</td><td>" . $row["sortie"] . "</td></tr>" ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
      </tbody>
      <!-- Table body -->
    </table>
    <!-- Table  -->

  </div>

</div>
<!--/.Card-->

</div>
<!--Grid column-->

</div>
      <!--Grid row-->
        <div class="row wow fadeIn">
        </div>
</main>
   

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
   
  </script>
</body>

</html>
