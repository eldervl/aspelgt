<?php
    //destruye sesión activa
    session_start();
    session_destroy();
    header("location:index.php");
    exit();
    //cierra la conexion
    mysql_close($conexion);
?>