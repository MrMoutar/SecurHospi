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
  <?php include $Repo.'nav.php';?>
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