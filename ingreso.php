<?php
    session_start();
    require("action.php");
    require("sesion.php");

    if(isset($_POST['btnIngreso'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo('<script>alert("Es necesario ingresar todos los campos");</script>');
        } else {
            $id = NULL;
            $usuario = $_POST['username'];
            $password = $_POST['password'];
            $compare = "SELECT COUNT(*) AS contar FROM $admin_login WHERE admin_name ='$usuario' AND admin_password = '$password'";
            $cons = mysqli_query($conexion,$compare) or die($conexion->error);
            $array = mysqli_fetch_array($cons);
            if($array['contar']==1){
                $_SESSION['usuario'] = $usuario;
                header('Location:index.php');
            } else {
                echo('<script>alert("El usuario o la contraseña no son correctos");</script>');
            }
        }
    }
?>
