<?php

    $host = "localhost";    
     $basededatos = "u332268007_aspel";  
     $usuariodb = "u332268007_aspel";  
     $clavedb = "aspel";    
    
     $tabla_db1 = "capacitaciones";
     $id = $_REQUEST['id'];   
     
     $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
     if ($conexion->connect_errno) {
        echo "Nuestro sitio experimenta fallos....";
        exit();
    }
    $Titulo    = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $Nivel1   = $_POST['Nivel1'];
    $Descripcion1 = $_POST['Descripcion1'];
    $Nivel2 = $_POST['Nivel2'];
    $Descripcion2 = $_POST['Descripcion2'];

     $query = ("UPDATE $tabla_db1 SET Titulo='$Titulo', Descripcion='$Descripcion', Nivel1='$Nivel1', Descripcion1='$Descripcion1', Nivel2='$Nivel2', Descripcion2='$Descripcion2'  WHERE id='$id'");
     $resultado = $conexion->query($query);
    if($resultado)
    {
        header("Location: capacitaciones.php");
    }
    else
    {
        echo "Error al actualizar";
    }



?>