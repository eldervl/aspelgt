<!--
ASPEL proyect, productos.php v1er
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
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/preloader.php");
    include("parts/header.php");
    
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion1">
        
        <div class="row">
            <div class="col-sm-6">
                <h2>¿Quienes somos?</h2>
                <p>En Sistemas Administrativos de Computo, S.A. (Apoyo Administrativo Empresaria, ApoyoAE),  somos un equipo de profesionales  líder en la implementación y comercialización de software y hardware, soluciones empresariales 
                diseñadas para ayudar en el ciclo de negocios.

                Es por lo anterior, que desde nuestra fundación en 2002, estamos comprometidos con nuestros clientes, que en su mayoría son empresas que enfrentan los retos de la nueva economía y competencia global, ofreciéndoles soluciones que generan valor, contando con el apoyo 
                incondicional y certificación de los fabricantes líderes en el ramo (Sistemas Administrativos de cómputo ASPEL).Somos una empresa 100% guatemalteca líder en nuestro ramo
                </p>
            </div>
            <div class="col-sm-6">
                <img src="img/capacitacion/12.jpg" class="rounded d-block mx-auto" style="width:80%;" alt="">
            </div>
        </div>

        <br>
        <hr>
        <br>
        <br>

        <nav id="navbar-areasprogramas" class="navbar navbar-light">
            <ul class="nav nav-pills mx-auto">
                <li class="nav-item" onclick="verarea1();">
                  <a class="nav-link" id="linkarea1" >Vision y Mision</a>
                </li>
                <li class="nav-item" onclick="verarea2();">
                  <a class="nav-link" id="linkarea2" >Acerca de ApoyoAE</a>
                </li>
                <li class="nav-item" onclick="verarea3();">
                  <a class="nav-link" id="linkarea3" >Actividades de ApoyoAE</a>
                </li>
                <li class="nav-item" onclick="verarea4();">
                  <a class="nav-link" id="linkarea4" >Socios</a>
                </li>
                
               </ul>
        </nav>

        <!---->
        <div class="cont-area mt-5" id="area1">

            <div class="row">
                <div class="col-xl-6">
                    <h3>VISION</h3>
                    <p>Queremos ser una empresa en constante innovación y que este a la vanguardia de la tecnología, para solucionar de forma eficaz las necesidades de nuestros clientes; siendo siempre el apoyo que ellos requieren en el área tecnológica por medio de nuestro capital humano.  Abarcaremos los servicios que el mercado necesite según la evolución de la tecnología</p>
                </div>
                <div class="col-xl-6">
                    <h3>MISION</h3>
                    <p>Somos una empresa de servicios dedicada a la comercialización, implementación,  mantenimiento y servicios de Sistemas Administrativos de Cómputo y Hardware, actualizándonos constantemente para estar siempre a la vanguardia. Con nuestra misión buscamos facilitar la toma de decisiones administrativas a nuestros clientes</p>
                    </div>
                </div>
             </div>

        <!---->
        <div class="cont-area mt-5" id="area2">

            <div class="row">
                <div class="col-xl-6">
                    <h3>Sobre la Empresa</h3>
                    <p>En Sistemas Administrativos de Cómputo. S.A. Apoyo Administrativo Empresaria, fue fundada el 09 de septiembre del 2008 (ApoyoAE), somos un equipo de profesionales en la implementación de soluciones Administrativo Contables que tenemos una misión muy clara: "engrandecer a Guatemala aumentando la competitividad de las empresas al integrar la tecnología y software en su estrategia de negociosDesde nuestro inicio comenzamos los trámites de certificación y desde junio de      2002 nos certificamos como Centro de Soporte Autorizado y Distribuidor Integral,Certificación que siempre hemos mantenido año con año.
                    <p>Con la experiencia de Aspel de México con más de 35 años en el desarrollo del software y más de 850,000 instalaciones de los sistemas, decidimos emprender un camino que nos abre muchas puertas para desarrollarnos en nuestro campo</p>
                    </p>
                </div>
                <div class="col-xl-6">
                    <img src="img/capacitacion/cap2.png" alt="">
                    <p>En 2003 lanzamos nuestras pólizas de mantenimiento, modelo de servicio que garantiza la continuidad de operación de los negocios de nuestros clientes (con su respectiva evolución).En la actualidad seguimos innovando nuestros diferentes servicios para ser competitivos en el mercado. 2013 alianza estratégica con nuestro socio de negocios y área de desarrollos especializados Adtec, S.A</p>
                    <p>La imagen de Aspel es uno de los principales activos de la empresa ya que representa la garantía y respaldo del software que distribuimos con 45 años de desarrollo, los cuales al permitir el uso nos presenta ante México, Centro y Sur América como Distribuidores Integrales Certificados</p>
                </div>
            </div>

        </div>

        <!---->
        <div class="cont-area mt-5" id="area3">

            <div class="row">
                <div class="col-xl-6">
                  <h3>Actividades a Realizar de la Empresa</h3>
                   <ul>
                      <li><i class="ri-check-double-line"></i>Venta y actualizaciones Sistemas Aspel</li>
                      <li><i class="ri-check-double-line"></i>Consultorías a cargo de personal certificado</li>
                      <li><i class="ri-check-double-line"></i>Planes de Mantenimiento Preventivo Hardware</li>
                      <li><i class="ri-check-double-line"></i>Pólizas Soporte Aspel e ITSe</li>
                      <li><i class="ri-check-double-line"></i>Venta y actualizaciones Sistemas Invention Tech</li>
                      <li><i class="ri-check-double-line"></i>Diseño de Reportes Especiales</li>
                      <li><i class="ri-check-double-line"></i>Servidores locales y en la nube</li>
                      <li><i class="ri-check-double-line"></i>Software Inteligencia de Negocios</li>
                      <li><i class="ri-check-double-line"></i>Venta y Actualizaciones Software Adtec</li>
                    </ul>
                </div>
                <div class="col-xl-6">
                 <ul>
                      <li><i class="ri-check-double-line"></i>Procesos Administrativos de Re-implementación</li>
                      <li><i class="ri-check-double-line"></i>Venta y actualizaciones Sistemas Invention Tech</li>
                      <li><i class="ri-check-double-line"></i>Soporte e Implementación</li>
                      <li><i class="ri-check-double-line"></i>Software para la Mediana y Gran Empresa</li>
                      <li><i class="ri-check-double-line"></i>Antivirus,Suministros y Equipo </li>
                      <li><i class="ri-check-double-line"></i>Alianzas y analisis estratégicos</li>
                    </ul>
                    <img src="img/capacitacion/cap4.jpg" alt="">
                </div>
            </div>
            
        </div>

    </section>


                          
  
        

<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script src="js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 5;
    </script> 
</html>
