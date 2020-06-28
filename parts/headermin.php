<?php   
    error_reporting(0);
?>  

<header>
    <div class="preheader pt-1 text-center">
    <span class="" style="font-size:12px;">Panel de control</span>
    </div>
    <div class="contheader">

    <?php
        $resultados = mysqli_query($conexion, "SELECT * FROM $tlogos");
        $consulta = mysqli_fetch_array($resultados);
        {
           echo"
           <img src=\"data:image/jpg;base64,".base64_encode($consulta['imagen'])."\" alt=\"LogotipoPrincipal\" class=\"logop\">
           ";
        }   
    ?>
    
            <button class="btnmenu  border" id="btnmenu" onclick="btnmenu()"><img src="https://img.icons8.com/ios-glyphs/24/000000/menu.png"></button>
            <nav class="principal openmenu " id="nav-principal">
                <ul class="">
                    <div class="menucontent p-1">
                        <a class="btnheader btn" id="hp1" href="../index.php">Regresar a Inicio</a>
                        <a class="btnheader btn text-danger" id="hp2" href="../desconexion.php">Cerrar sesión</a>
                    </div>
                </ul>
            </nav>
        </div>
</header>
<script>
    function btnmenu(){
        document.getElementById("nav-principal").classList.toggle("openmenu");
    }
</script>