<!--
ASPEL proyect, parts/header.php v1ev
-->

<header>
    <img src="img/logotipos/logo1.png" alt="LogotipoPrincipal" class="logop">
        <button class="btnmenu  border" id="btnmenu" onclick="btnmenu()"><img src="https://img.icons8.com/ios-glyphs/24/000000/menu.png"></button>
        <nav class="principal openmenu " id="nav-principal">
            <ul class="">
                <div class="menucontent">
                    <a class="rounded" id="hp1" href="index.php">Inicio</a>
                    <a class="rounded" id="hp2" href="productos.php">Productos</a>
                    <a class="rounded" id="hp3" href="capacitacion.php">Capacitación</a>
                    <a class="rounded" id="hp4" href="soporte.php">Soporte y descargas</a>
                    <a class="rounded" id="hp5" href="nosotros.php">Nosotros</a>
                    <a class="rounded" id="hp6" href="contacto.php">Contacto</a>
                </div>
            </ul>
        </nav>
</header>
<script>
    function btnmenu(){
        document.getElementById("nav-principal").classList.toggle("openmenu");
    }
</script>