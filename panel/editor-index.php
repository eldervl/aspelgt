<?php
    require('../action.php');
    require('../sesion.php');

    if(isset($_POST['btnEnviarSlider'])){
  
        $id = NULL;
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
        if ($_FILES['imagen']['tmp_name'] != null) {
            $conexion->query("INSERT INTO $tsliderimg (id,imagen) VALUES ('$id','$imagen')");
            header("location:admin-index.php");
        }else{
            echo('<script>alert("Es necesario cargar una imagen");</script>');
        }
          
      }
    
    if(isset($_POST['btnEliminarSlider'])){

        $id_activa = $_REQUEST['id'];
        
        $query = "DELETE FROM $tsliderimg WHERE id = '$id_activa'";
        $resultado = $conexion->query($query);
        header("location:admin-index.php");
    }   


    if(isset($_POST['btnEnviarInfo'])){
  
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $conexion->query("INSERT INTO $tsliderinfo (titulo,descripcion) VALUES ('$titulo','$descripcion')");

        header("location:admin-index.php");

          
      }

    if(isset($_POST['btnEnviarModal'])){
  
        $conexion->query("TRUNCATE TABLE $tmodalimg");
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
        if ($_FILES['imagen']['tmp_name'] != null) {
            $conexion->query("INSERT INTO $tmodalimg (imagen) VALUES ('$imagen')");
            header("location:admin-index.php");
        } else {
            echo('<script>alert("Es necesario cargar una imagen");</script>');
            header("location:admin-index.php");
        }
          
    }


    if(isset($_POST['btnEliminarModal'])){

        $conexion->query("TRUNCATE TABLE $tmodalimg");
        header("location:admin-index.php");
    }  
      
?>

