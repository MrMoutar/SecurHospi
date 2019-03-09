<?php 
include 'Config.php';
$Page="Patient";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include $Repo.'head.php';?>
</head>
<body class="grey lighten-3">
  <!--Main Navigation-->
    <!-- Navbar -->
    <?php include $Repo.'nav.php';?>
    <!-- /Navbar -->
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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, Nom, Prenom, Maladie, DateDeEntrer, DateDeSortie FROM `patient`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><th scope='row'>" . $row["id"]. "</th>" . "<td>" . $row["Nom"]. "</td><td>" . $row["Prenom"] . "</td><td>" . $row["Maladie"] ."</td><td>" . $row["DateDeEntrer"] ."</td><td>" . $row["DateDeSortie"] . "</td></tr>" ;
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
