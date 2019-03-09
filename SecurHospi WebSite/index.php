<?php 
include 'Config.php';
$Page="Dashboard";
echo $SecurCode ;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include $Repo.'head.php';?>
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
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
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
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="Medecin.php" class="list-group-item list-group-item-action waves-effect">
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
      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-12 mb-4">
          <!--Card-->
          <div class="card">
            <!--Card content-->
            <div class="card-body">
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <!--/.Card-->
        </div>
        <div class="col-md-9 mb-4">
          <!--Card-->
          <div class="card">
            <!--Card content-->
            <div class="card-body">
              <canvas id="lineChart"></canvas>
            </div>
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <!--Card-->
          <div class="card mb-4">
           <!-- Card header -->
            <div class="card-header text-center">
            Personne
            </div>
            <!--Card content-->
            <div class="card-body">
              <canvas id="pieChart"></canvas>
            </div>
            <!--Card content-->
            <div class="card-body">
              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Visiteur
                  <span class="badge badge-success badge-pill pull-right"><?php echo $Visiteur ;?> <i class="fas fa-arrow-up ml-1"></i></span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Medecin
                  <span class="badge badge-success badge-pill pull-right"><?php echo $Medecin ;?> <i class="fas fa-arrow-up ml-1"></i></span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Patient
                  <span class="badge badge-primary badge-pill pull-right"><?php echo $Patient ; ?></span>
                </a>
              </div>
              <!-- List group links -->
            </div>
            </div>
          <!--/.Card-->
          </div>
          </div>
          </div>
</main>
  <!-- SCRIPTS -->
  <?php include $Repo.'script.php';?>
</body>
</html>