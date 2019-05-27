<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="../img/upzenith_favicon.png" />

  <title>Equips registrats</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/business-casual.min.css" rel="stylesheet">

  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">UPZENITH</span>
    <span class="site-heading-lower">EQUIPS REGISTRATS</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><img src="../img/logo_upzenith.png" width="64" height="48" alt=""> <font color="#3377CE">UPZENITH</font></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../index.html">Inici

            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../registro/registro.html">Registrarse</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../login/login.html">Iniciar sessió</a>
          </li>
          <!-- IMPORTANTE -->
          <!-- La creación de equipos i torneos sólo es visible para los usuarios logueados -->
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="crear_equip.html">Crear equip</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../crear_torneig/crear_torneig.html">Crear torneig</a>
          </li>

          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="equips_disponibles.php">Equips</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../crear_torneig/tornejos_disponibles.php">Tornejos</a>

          </li>
          <li class="nav-item px-lg-4 hide">
            <a class="nav-link text-uppercase text-expanded" href="../store.html">Logout</a>
          </li>
          <!-- Aqui acaban los lis ocultos -->
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <div class="container">



      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../img/2sides.jpg" alt="">





      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Selecció de competidors</span>
                <span class="section-heading-lower">Equips registrats</span>
              </h2>

              <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "dbUpzenith";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM `equipo` ORDER BY `equipo`.`id_equipo` ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table><tr><td><b>ID</b></td><td><b>Nom de l'equip</b></td><td><b>Descripció d'aquest</b></td></tr>"; // start a table tag in the HTML

                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id_equipo'] . "</td><td>" . $row['nombre_equipo'] . "</td><td>" . $row['descripcion'] . "</td></tr>";
                    }
                } else {
                    echo "0 results";
                }

                echo "</table>"; //Close the table in HTML

                $conn->close();
              ?>




            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">&copy; 2019 UPZENITH <img src="../img/twitter-logo.png" align="right" width="32" height="32" alt=""></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
