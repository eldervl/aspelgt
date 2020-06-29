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
     $query = ("DELETE FROM $tabla_db1 WHERE id='$id'");
     $resultado = $conexion->query($query);
    if($resultado)
    {
        header("Location: capacitaciones.php");
    }
    else
    {
        echo "Error al eliminar";
    }
    


?>