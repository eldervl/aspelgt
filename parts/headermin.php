<!--
ASPEL proyect, parts/header.php v1ev
-->

<header>
    <img src="../img/logotipos/logo1.png" alt="LogotipoPrincipal" class="logop">
        <button class="btnmenu  border" id="btnmenu" onclick="btnmenu()"><img src="https://img.icons8.com/ios-glyphs/24/000000/menu.png"></button>
        <nav class="principal openmenu " id="nav-principal">
            <ul class="">
                <div class="menucontent">
                    <a class="rounded" id="hp1" href="../index.php">Regresar a Inicio</a>
                    <a class="rounded text-danger" id="hp2" href="../desconexion.php">Cerrar sesión</a>
                </div>
            </ul>
        </nav>
</header>
<script>
    function btnmenu(){
        document.getElementById("nav-principal").classList.toggle("openmenu");
    }
</script>