<?php
    require('../action.php');
    require('../sesion.php');

    if(isset($_POST['btnEnviarLogo'])){
  
        $conexion->query("TRUNCATE TABLE $tlogos");
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
        if ($_FILES['imagen']['tmp_name'] != null) {
            $conexion->query("INSERT INTO $tlogos (imagen) VALUES ('$imagen')");
            header("location:admin-datos.php");
        }else{
            echo('<script>alert("Es necesario cargar una imagen");</script>');
        }
          
    }


    if(isset($_POST['btnEliminarLogo'])){

        $conexion->query("TRUNCATE TABLE $tlogos");
        header("location:admin-datos.php");
    }  

    if(isset($_POST['btnEnviarContacto'])){

        $id  = $_POST['id'];
        $nombresede = $_POST['nombreempresa'];
        $direccion = $_POST['direccion'];
        $mapa = $_POST['urlmapa'];
        $email1 = $_POST['email1'];
        $email2 = $_POST['email2'];
        $email3 = $_POST['email3'];
        $email4 = $_POST['email4'];
        $email5 = $_POST['email5'];
        $telefono1 = $_POST['telefono1'];
        $telefono2 = $_POST['telefono2'];
        $telefono3 = $_POST['telefono3'];
        $telefono4 = $_POST['telefono4'];
        $telefono5 = $_POST['telefono5'];
        $wspnum1 = $_POST['whatsapp1'];
        $wspnum2 = $_POST['whatsapp2'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];
  
        $conexion->query("TRUNCATE TABLE $tdatoscontacto");
        $conexion->query("INSERT INTO $tdatoscontacto  VALUES ('$id','$nombresede','$direccion','$mapa','$email1','$email2','$email3','$email4','$email5','$telefono1','$telefono2','$telefono3','$telefono4','$telefono5','$wspnum1','$wspnum2','$facebook','$twitter','$instagram','$youtube');");

  
        header("location:admin-datos.php");
          
    }
      
?>

