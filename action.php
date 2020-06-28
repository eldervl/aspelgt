<?php

    $host = "localhost";
    $dbname = "testing";
    $dbuser = "root";
    $dbpass = "";

    $admin_login = "admin_login";
    $tsliderimg = "sliderimg";
    $tsliderinfo = "sliderinfo";
    $tmodalimg = "modalimg";
    $tlogos = "logosimg";
    $tdatoscontacto = "datoscontacto";

    $conexion = new mysqli($host,$dbuser,$dbpass,$dbname);

    if($conexion->connect_errno){
        echo('<script>alert("Error de conexion con la base de datos");</script>');
        exit();
    } else {
    
    }
?>