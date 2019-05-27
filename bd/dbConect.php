<?php
$cnx = new mysqli("localhost","root","root","dbUpzenith");

if ($cnx->connect_errno)
    echo "Fallo al conectar a MySQL: (" . $cnx->connect_errno . ") " . $cnx->connect_error;

?>
