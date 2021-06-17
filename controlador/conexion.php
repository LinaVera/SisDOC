<?php
    $conexion = new mysqli("localhost","sisdoc_user", "sisdoc1234", "sisdoc_db");
    if (mysqli_connect_errno($conexion)) {
        echo "fallo al conectar a la base de datos  " .mysqli_connect_error();
    }
?>