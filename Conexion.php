<?php

    $host = "localhost";  
    $user = "root";  
    $pass = "";

    $db = 'subirimagenes';

    $con = mysqli_connect($host, $user,$pass,$db);

    if (!$con ) {
        echo 'Conexion fallida';
        exit();
    }
