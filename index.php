<!--
ASPEL proyect, index.php v1ev
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApoyoAE</title>
    <link rel="icon" href="img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/libraries/superslides.css">
</head>
<body>

<?php
    include("parts/preloader.php");
    include("parts/header.php");
    //
?>



<!--AREA DE CONTENIDO=====================================================-->

<section class="slider">
    <div id="slides">
        <ul class="slides-container">
            <li>
            <img style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.550)" src="img/slider/slider1.jpg" alt="img">
            </li>
            <li>
            <img style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.550)" src="img/slider/slider2.jpg" alt="img">
            </li>
        </ul>
        <nav class="slides-navigation">
            <a href="#" class="next">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="48" height="48"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M79.6145,21.5v0c-9.5245,0 -15.2005,10.61383 -9.91867,18.54017l30.6375,45.95983l-30.6375,45.95983c-5.28183,7.92633 0.39417,18.54017 9.91867,18.54017v0c3.98467,0 7.71133,-1.99233 9.92583,-5.3105l34.15633,-51.24167c3.21067,-4.816 3.21067,-11.08683 0,-15.90283l-34.15633,-51.24167c-2.2145,-3.311 -5.934,-5.30333 -9.92583,-5.30333z"></path></g></g></svg>
            </a>
            <a href="#" class="prev">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="48" height="48"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M99.5665,150.5v0c9.5245,0 15.20767,-10.61383 9.92583,-18.54017l-30.6375,-45.95983l30.6375,-45.95983c5.28183,-7.92633 -0.40133,-18.54017 -9.92583,-18.54017v0c-3.98467,0 -7.71133,1.99233 -9.92583,5.3105l-34.15633,51.24167c-3.21067,4.816 -3.21067,11.08683 0,15.90283l34.15633,51.24167c2.2145,3.311 5.94117,5.30333 9.92583,5.30333z"></path></g></g></svg>
            </a>
        </nav>
        <div class="slider-cont animar delay1">
            <div class="contpartsslider">
                <h1 class="slidertitle" id="st1">Bienvenido a la experiencia de ApoyoAE</h1>
            </div>
            <div class="contpartsslider">
                <p class="sliderdesc" id="sd1">somos un equipo de profesionales  líder en la implementación y comercialización de software y hardware, soluciones empresariales diseñadas para ayudar en el ciclo de negocios empresa 100% guatemalteca líder en nuestro rama </p>
            </div>
            <div class="contpartsslider">
                <button class="btn btn-primary btn-slider m-1" onclick="location.href='nosotros.php'">Más sobre ApoyoAE</button>
            </div>
        </div>
        <div class="double-stuff my-5"></div>
    </div>
</section>

<section class="contenedor" id="seccion-programasindx">
    <div class="row">
        <div class="col-xl-6">
            <img src="img/general/programas.png" alt="" class="animar delay1">
        </div>
        <div class="col-xl-6">
            <h3 class="animar delay1">Nuestros Productos</h3>
            <p class="animar delay2">Contamos con una amplia gamade productos todo lo necesario para poder controlar, administra todas las operaciones de tu empresa tomando en cuenta que muchos de nuestros productos van a otros asociados para tener un mejor funcionamiento aumentando la eficacia de la empresa</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-3">
            <div class="animar delay1">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t1" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/SAE.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">SAE</h5>
                        <p class="card-text">Controla todo el ciclo de todas las operaciones de compra-venta de la empresa</p>
                        <small class="texto-inferior" id="ti1">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="animar delay2">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t2" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/CAJA.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">CAJA</h5>
                        <p class="card-text">Controla, administra y agiliza las operaciones de ventas, facturación e inventarios</p>
                        <small class="texto-inferior" id="ti2">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="animar delay3">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t3" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/COI.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">COI</h5>
                        <p class="card-text">Automatiza los procesos administrativos</p>
                        <small class="texto-inferior" id="ti3">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="animar delay4">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t4" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/NOI.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">NOI</h5>
                        <p class="card-text">Automatiza el control ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores</p>
                       <small class="texto-inferior" id="ti4">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="animar">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t5" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/BANCO.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">BANCO</h5>
                         <p class="card-text">Controla eficientemente los movimientos de cualquier cuenta bancaria</p>
                        <small class="texto-inferior" id="ti5">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="animar delay1">
                <div class="card mb-4 bg-white tarjeta tarjeta-index border" style="overflow:hidden; height:310px;" id="t6" >
                <div class="px-4 mt-5" style="height:100px;">                       
                    <img src="img/productos/logos-prod/PROD.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="d-none card-title">PROD</h5>
                        <p class="card-text">Es el Sistema que controla y administra los procesos de fabricación</p>
                        <small class="texto-inferior" id="ti6">Presiona para más información</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <br>
    <div class="text-center">
        <button class="btn btn-primary" onclick="location.href='servicios.php'">Ver todos los programas</button>
    </div>
</section>



<section class="contenedor">

    <h2 class="text-center animar">Empresas trabajadas</h2>

    <div class="contcolabs animar delay2">
        <div class="colab"><img src="img/empresas/universal.png" alt=""></div>
        <div class="colab"><img src="img/empresas/incep.png" alt=""></div>
        <div class="colab"><img src="img/empresas/grupo monge.jpg" alt=""></div>
    </div>

</section>


<!--======================================================================-->



<?php
    include("parts/footer.php")
?>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery.superslides.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script src="js/animaciones.js"></script>
    <script src="js/tarjeta tarjeta-index borders.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 1;
    </script> 
    <script>
        $( document ).ready(function() {
            $('#modal-login').modal('toggle')
        });
    </script>
</html>




<div class="modal mimodal" tabindex="-1" role="dialog" id="modal-login">
  <div class="modal-dialog  modal-dialog-centered" style="overflow: hidden;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body m-0">
        <img src="img/general/modal.jpeg" style="width:100%" alt="">
      </div>
    </div>
  </div>
</div>

