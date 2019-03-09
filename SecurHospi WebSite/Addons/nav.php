<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
      <?php echo $SecurCode ;?>
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
        <?php echo $SecurCode ;?>
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
          <?php echo $SecurCode ;?>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="<?php 
              if ($_GET["code"]=="source") {
                  echo "https://github.com/MrMoutar/SecurHospi";
              }           
              else {
                echo "#";
              } 
              ?>" class="nav-link border border-light rounded waves-effect"
              <?php 
              if ($_GET["code"]=="source") {
                  echo "target='_blank'";
              }           
              ?>
                >
                <i class="fab fa-github mr-2"></i>Code Source
              </a>
            </li>
          </ul>
        </div>
        <?php echo $SecurCode ;?>
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
<?php echo $SecurCode ;?>
<br>
<div class="container">
  <img src="logo.png" alt="Secur|Hospi" class="image">
  <div class="overlay">
    <div class="text">Secur|Hospi</div>
  </div>
</div>
<br>
      <div class="list-group list-group-flush">
        <a href="index.php" class="<?php 
        if ($Page=="Dashboard") {
            echo "list-group-item active waves-effect";
        } else {
            echo "list-group-item list-group-item-action waves-effect";
        } ?>">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="Medecin.php" class="<?php 
        if ($Page=="Medecin") {
            echo "list-group-item active waves-effect";
        } else {
            echo "list-group-item list-group-item-action waves-effect";
        } ?>">
          <i class="fas fa-user mr-3"></i>Medecin <span class="badge badge-primary badge-pill pull-right"><?php echo $Medecin ; ?></span></a>
        <a href="Patient.php" class="<?php 
        if ($Page=="Patient") {
            echo "list-group-item active waves-effect";
        } else {
            echo "list-group-item list-group-item-action waves-effect";
        } ?>">
          <i class="fas fa-user mr-3"></i>Patient <span class="badge badge-primary badge-pill pull-right"><?php echo $Patient ; ?></span></a>
        <a href="Visiteur.php" class="<?php 
        if ($Page=="Visiteur") {
            echo "list-group-item active waves-effect";
        } else {
            echo "list-group-item list-group-item-action waves-effect";
        } ?>">
          <i class="fas fa-user mr-3"></i>Visiteur <span class="badge badge-primary badge-pill pull-right"><?php echo $Visiteur ; ?></span></a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Simulation</a>
      </div>

    </div>
    <?php echo $SecurCode ;?>
  </header>
  <!--Main Navigation-->