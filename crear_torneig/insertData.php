<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "dbUpzenith");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$nom_torneig = mysqli_real_escape_string($link, $_REQUEST['nom_torneig']);
$anfitrio_torneig = mysqli_real_escape_string($link, $_REQUEST['anfitrio_torneig']);
$descripcio_torneig = mysqli_real_escape_string($link, $_REQUEST['descripcio_torneig']);

// Attempt insert query execution
$sql = "INSERT INTO torneo (nombre_torneo, descripcion_torneo, anfitrion) VALUES ('$nom_torneig', '$descripcio_torneig', '$anfitrio_torneig')";
if(mysqli_query($link, $sql)){
    header("Location: http://localhost:8888/M15/CREDIT_SINTESI/CODE/codigo/crear_torneig/torneig_confirmat.html");
} else{
    echo "ERROR: No s'han pogut insertar les dades per la seguent rao: $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
