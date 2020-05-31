<!--
ASPEL proyect, index.php v1ev
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/libraries/superslides.css">
</head>
<body>

<?php
    include("parts/header.php");
    //include("parts/social.php");;
?>



<!--AREA DE CONTENIDO=====================================================-->

<section class="slider">
    <div id="slides">
        <ul class="slides-container">
            <li>
            <div class="slider-cont">

                <h1 class="slidertitle" id="st1">Bienvenido a la experiencia aspel</h1>
                <p class="sliderdesc" id="sd1">ASPEL cuentan con un servicio de capacitaciones, productos, un sistema de pólizas para la conveniencia de los clientes además de otros tipos de servicios</p>

            </div>
            <img style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.550)" src="img/index/hero.jpg" alt="img">
            </li>
            <li>
            <div class="slider-cont">

                <h1 class="slidertitle" id="st2">Expertos en administración</h1>
                <p class="sliderdesc" id="sd2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus nesciunt placeat saepe quae tenetur totam at sed nulla repellendus aspernatur eius ut harum laboriosam ab dolor ducimus sit accusantium!</p>

            </div>
            <img style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.550)" src="img/index/portfolio-02.jpg" alt="img">
            </li>
            <li>
            <div class="slider-cont">

                <h1 class="slidertitle" id="st3">Otro titulo</h1>
                <p class="sliderdesc" id="sd3">prueba slider 3</p>

            </div>
            <img style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.550)" src="img/index/xd.jpg" alt="img">
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
        <button class="btn position-absolute mx-auto text-white" style="top:80%; width:120px; left: calc(50% - 60px); z-index: 5;" onclick="location.href='#sector1'"><u>Vamos!</u></button>
    </div>
</section>



<section class="sector" id="sector1">
    <h3>¿Quienes somos?</h3>
    <p>Bienvenidos a la experiencia en tecnología más revolucionaria ASPEL cuentan con un servicio de capacitaciones, productos, un sistema de pólizas para la conveniencia de los clientes además de otros tipos de servicios
    Estamos capacitados para ofrecerles una experiencia adecuada con nuestras soluciones de desarrollo a la media además de que garantizamos nuestro trabajo con personal certificado por aspel </p>
    <button class="btn border" onclick="location.href='nosotros.php'">Más sobre nosotros</button>
</section>
<section class="sector" id="sector2">
    <div class="seccion" style="float:left">
        <img src="img/index/programas.png" alt="">
    </div>
    <div class="seccion" style="float:right">
        <br>
        <h3>Nuestros servicios</h3>
        <p>contamos con una amplia gama de servicios como nuestras capacitaciones desde los niveles basicos y avanzados ademas de nuestro
        soporte tecnico ,nuestras polizas y nuestras soluciones de desarrollo a la medida .</p>
    </div>
    <div class="seccion" style="width:100%">
    <br>
    <br>
    <br>
    <div class="row" style="padding:0 50px">
            <div class="col-lg-4">
                <div class="card mb-4 bg-light border-0 tarjeta" style="overflow:hidden; height:420px;border:none;" >
                    <img src="img/SAE.JPG" class="card-img-top" alt="..." style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title">SAE</h5>
                        <p class="card-text">Este curso tiene como principal objetivo la capacitación del Participante para obtener los conocimientos Y herramientas que le permitan administrar el sistema</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 bg-light border-0 tarjeta" style="overflow:hidden; height:420px;border:none;" >
                    <img src="img/COI.JPG" class="card-img-top" alt="..." style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title">COI</h5>
                        <p class="card-text">el usuario tendrá los conocimientos y herramientas que le permitirán administrar la información modificación y eliminación de los datos en los catálogos del sistema</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 bg-light border-0 tarjeta" style="overflow:hidden; height:420px;border:none;" >
                    <img src="img/NOI.JPG" class="card-img-top" alt="..." style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title">NOI</h5>
                        <p class="card-text">Implementación de Aspel-NOI, desde la instalación y Configuración, la captura de la información de los trabajadores e incidencias de un período de nómina,para facilitar la toma de decisiones en las empresas</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <button class="btn btn-primary" onclick="location.href='servicios.php'">Todos nuestros servicios</button>
        </div>
    </div>
</section>
<section class="sector" id="sector3">

</section>



<!--======================================================================-->



<?php
    include("parts/footer.php")
?>

</body>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/jquery.superslides.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
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
            $('#modal-inicio').modal('toggle')
        });
    </script>
</html>




<div class="modal" tabindex="-1" role="dialog" id="modal-inicio">
  <div class="modal-dialog  modal-dialog-centered" style="overflow: hidden;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/slider/modal.jpeg" style="width:100%" alt="">
      </div>
    </div>
  </div>
</div>