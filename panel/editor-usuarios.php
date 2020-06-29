<?php
    require('../action.php');
    require('../sesion.php');

    if(isset($_POST['btnEnviarUsuario'])){
  
        $id = NULL;
        $nombreusuario = $_POST['nombreusuario'];
        $contrausuario = $_POST['contrausuario'];
  
        if (empty($_POST['nombreusuario']) || empty($_POST['contrausuario'])) {
            echo('<script>alert("Es necesario Ingresar los datos");</script>');
        }else{
            $conexion->query("INSERT INTO $admin_login VALUES ('$id','$nombreusuario','$contrausuario')");
            header("location:admin-usuarios.php");
        }
          
      }
    
    if(isset($_POST['btnEliminarUsuario'])){

        $id_activa = $_REQUEST['id'];
        
        $query = "DELETE FROM $admin_login WHERE id = '$id_activa'";
        $resultado = $conexion->query($query);
        header("location:admin-usuarios.php");
    }   
      
?>

