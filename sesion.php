
<?php

    require("action.php");
    
    if(empty($_SESSION["usuario"])){
        $estadosesion = false;
    } else {
        $estadosesion = true;
        $nusuario = $_SESSION["usuario"];
    }
?>