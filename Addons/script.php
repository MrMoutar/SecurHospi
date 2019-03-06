<?php echo $SecurCode ;?>
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
  <?php echo $SecurCode ;?>