<!--
ASPEL proyect, parts/header.php v1ev
-->

<header>
        <div class="contlogo margenes-g">
            <img src="img/logo1.png" alt="LogotipoPrincipal" class="logop">
        </div>
        <button class="btnmenu margenes-g border" id="btnmenu" onclick="btnmenu()"><img src="https://img.icons8.com/ios-glyphs/24/000000/menu.png"></button>
        <nav class="principal openmenu margenes-g" id="nav-principal">
            <ul class="">
                <div class="menucontent">
                    <a class="rounded" id="hp1" href="index.php">Inicio</a>
                    <a class="rounded" id="hp2" href="servicios.php">Productos y Servicios</a>
                    <a class="rounded" id="hp3" href="nosotros.php">Nosotros</a>
                    <a class="rounded" id="hp4" href="soporte.php">Soporte</a>
                    <a class="rounded" id="hp5" href="contacto.php">Contacto</a>
                </div>
            </ul>
        </nav>
</header>
<script>
    function btnmenu(){
        document.getElementById("nav-principal").classList.toggle("openmenu");
    }
</script>