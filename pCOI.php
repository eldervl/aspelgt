<!--
ASPEL proyect, productos.php v1er
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
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
    include("parts/social.php");
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
                <img src="img/productos/logos-ext/coi.png" alt="none">
                <br>
                <br>
                <p>Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las diferentes especificaciones y funciones para el manejo de la  Contabilidad Electrónica 1.3. Proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización. Genera oportunamente las diferentes declaraciones fiscales como IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo. </p>
                <p>Consulta más información en el  <a href="https://www.aspel.com.mx/productos/coi/presentacion.html">Sitio oficial</a></p>
            </div>
            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-JMsk8onqkg?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de aspel COI</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Versión movil</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adquirir</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                    <!--
                        ÁREA DE INFORMACIÓN:
                        Información acerca del programa, caracteristicas, compatiblidad, requerimientos, entre otros
                    -->

                    <h2 class="font-weight-bold text-primary">aspel COI</h2>
                    <h4>Aspel COI 8.0 te ofrece el catálogo de cuentas más robusto y eficiente del mercado.</h4>
                    <p>-Ofrece 9 catálogos de cuentas predefinidos. <br>
                       -En cada cuenta puedes asociar los códigos agrupadores, así como el RFC del cliente o tercero. <br>
                        -Configura las cuentas para ver el detalle de la transacción y la captura de comprobantes para la Contabilidad Electrónica. <br>
                    - Elige el tipo de moneda para el registro de los movimientos.</p>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    <!--
                        VERSIÓN MOVIL (Si existe):
                        Información de la versión movil del software
                    -->

                    <h2 class="font-weight-bold text-primary"> Móvil</h2>
                  
                </div>
                
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    
                    <!--
                        ADQUISICION:
                        Precios, proceso de adquisicion
                    -->

                    <h2 class="font-weight-bold text-primary">Proceso de compra</h2>

                </div>
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
        $page = 2;
    </script> 
</html>