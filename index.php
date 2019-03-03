<?php 
$Version="0.1";
$HeureMedecin="1,2,8,5,6,4,3,2,1,5,4,3,5,4,5,8,4,6,2,4,3,3,2,3,6,4,6,5,6,3,2";
$HeurePatient="12,12,12,12,12,12,10,8,8,7,6,5,3,3,4,5,6,6,7,8,9,8,9,9,10,12,12";
$HeureVisiteur="2,8,4,6,7,10,2,5,6,4,3,9,8,7,8,5,6,5,8,4,6,8,4,8,6,2,6,4,6,4";
$Visiteur="10";
$Patient="8";
$Medecin="4";
$ColorVisiteur="0,188,108";
$ColorVisiteurHex="#00BC6C";
$ColorVisiteurHex2="#66B266";
$ColorPatient="219,0,19";
$ColorPatientHex="#DB0013";
$ColorPatientHex2="#B41C3A";
$ColorMedecin="0,102,204";
$ColorMedecinHex="#0066CC";
$ColorMedecinHex2="#4C8CB5";
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
              <a href="https://twitter.com/MrMoutar" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-codepen mr-2"></i>Style|CSS
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MrMoutar" class="nav-link border border-light rounded waves-effect"
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
        <a href="#" class="list-group-item list-group-item-action waves-effect">
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
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["1h", "2h", "3h", "4h", "5h", "6h", "7h", "8h", "9h", "10h", "11h", "12h", "13h", "14h", "15h", "16h", "17h", "18h", "19h", "20h", "21h", "22h", "23h", "00h"],
        datasets: [{
          label: 'Patient',
          data: [<?php echo $HeurePatient ; ?>],
          backgroundColor: [
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)',
            'rgba(<?php echo $ColorPatient ;?>, 0.2)'

          ],
          borderColor: [
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)',
            'rgba(<?php echo $ColorPatient ;?>, 1)'
          ],
          borderWidth: 1
        },
        {
          label: 'Visiteur',
          data: [<?php echo $HeureVisiteur ; ?>],
          backgroundColor: [
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)',
            'rgba(<?php echo $ColorVisiteur ;?>, 0.2)'
          ],
          borderColor: [
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)',
            'rgba(<?php echo $ColorVisiteur ;?>, 1)'
          ],
          borderWidth: 1
        },
        {
          label: 'Medecin',
          data: [<?php echo $HeureMedecin ; ?>],
          backgroundColor: [
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)',
            'rgba(<?php echo $ColorMedecin ;?>, 0.2)'
          ],
          borderColor: [
            'rgba(<?php echo $ColorMedecin ;?>,1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>,1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>,1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>,1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)',
            'rgba(<?php echo $ColorMedecin ;?>, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Medecin", "Visiteur", "Patient"],
        datasets: [{
          data: [<?php echo $Medecin ; ?>, <?php echo $Visiteur ; ?>, <?php echo $Patient ; ?>],
          backgroundColor: ["<?php echo $ColorMedecinHex ; ?>", "<?php echo $ColorVisiteurHex ; ?>", "<?php echo $ColorPatientHex ; ?>"],
          hoverBackgroundColor: ["<?php echo $ColorMedecinHex2 ; ?>", "<?php echo $ColorVisiteurHex2 ; ?>", "<?php echo $ColorPatientHex2 ; ?>"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        datasets: [{
            label: "Patient",
            backgroundColor: [
              'rgba(<?php echo $ColorPatient ;?>, .2)',
            ],
            borderColor: [
              'rgba(<?php echo $ColorPatient ;?>, .7)',
            ],
            borderWidth: 2,
            data: [<?php echo $LundiPatient ; ?>, <?php echo $MardiPatient ; ?>, <?php echo $MercrediPatient ; ?>, <?php echo $JeudiPatient ; ?>, <?php echo $VendrediPatient ; ?>, <?php echo $SamediPatient ; ?>, <?php echo $DimanchePatient ; ?>]
          },
          {
            label: "Visiteur",
            backgroundColor: [
              'rgba(<?php echo $ColorVisiteur ;?>, .2)',
            ],
            borderColor: [
              'rgba(<?php echo $ColorVisiteur ;?>, .7)',
            ],
            borderWidth: 2,
            data: [<?php echo $LundiVisiteur ; ?>, <?php echo $MardiVisiteur ; ?>, <?php echo $MercrediVisiteur ; ?>, <?php echo $JeudiVisiteur ; ?>, <?php echo $VendrediVisiteur ; ?>, <?php echo $SamediVisiteur ; ?>, <?php echo $DimancheVisiteur ; ?>]
          },
          {
            label: "Medecin",
            backgroundColor: [
              'rgba(<?php echo $ColorMedecin ;?>, .2)',
            ],
            borderColor: [
              'rgba(<?php echo $ColorMedecin ;?>, .7)',
            ],
            borderWidth: 2,
            data: [<?php echo $LundiMedecin ; ?>, <?php echo $MardiMedecin; ?>, <?php echo $MercrediMedecin ; ?>, <?php echo $JeudiMedecin ; ?>, <?php echo $VendrediMedecin ; ?>, <?php echo $SamediMedecin ; ?>, <?php echo $DimancheMedecin ; ?>]
          }
        ]
      },
      options: {
        responsive: true
      }
    });   
  </script>
</body>

</html>
