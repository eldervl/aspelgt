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
    <link rel="icon" href="../img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/contenido.css">
    <link rel="stylesheet" href="../css/animaciones.css">
</head>
<body>
    
<?php
    include("../parts/preloader.php");
    include("../parts/header2.php");
    include("../parts/social.php");
?>  

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
                <img src="../img/productos/logos-prod/coi.png" alt="none">
                <br>
                <br>
                <p>Cumple con la contabilidad electronica y mantiene actualizada la informacion contable y fiscal de la empresa de forma segura</p>
                <div class="">
                    <button class="btn btn-success d-block mx-auto">Cotizar este producto</button>
                </div>
                
            </div>
            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-JMsk8onqkg?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de aspel COI</a>
                
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adquirir</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                    <!--
                        ÁREA DE INFORMACIÓN:
                        Información acerca del programa, caracteristicas, compatiblidad, requerimientos, entre otros
                    -->

                    <h2 class="font-weight-bold text-primary">aspel COI</h2>
                    <p>Cumple con los requerimientos de la Contabilidad Electrónica  de manera fácil, eficiente y oportuna de acuerdo con las disposiciones fiscales vigentes.

                    Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las diferentes especificaciones y funciones para el manejo de la  Contabilidad Electrónica, de acuerdo con las disposiciones fiscales vigentes. Además, proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización. Genera oportunamente las diferentes declaraciones fiscales como las correspondientes a IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo.
                    </p>
                    <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Contabilidad Electrónica 1.3</h4>
                  <p style="top:right">Cumple con las disposiciones fiscales para el manejo de la Contabilidad Electrónica de la manera más simple.

                  Relaciona automáticamente el folio fiscal de los Comprobantes Fiscales Digitales por Internet (CFDI) a los asientos contables. Además genera los archivos XML requeridos por la autoridad con un solo clic.</p>
                  <img src="../img/productos/prod/coi 1.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Estatus financiero en tiempo real</h4>
                  <p style="top:right">Conoce en cualquier momento la situación financiera de tu empresa por medio de las diferentes consultas y reportes que el Sistema ofrece automáticamente.</p>
                  <img src="../img/productos/prod/coi 2.0.png" width="200" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Integración de los procesos de la empresa</h4>
                  <p style="top:right">Intercambia información con la interfaz de los Sistemas: Aspel NOI, Aspel CAJA y Aspel BANCO.
                </p>
                  <img src="../img/productos/prod/coi 3.0.png" width="100" height="100" alt="none">
                  <p>Consulta más información en el  <a href="https://www.aspel.com.mx/productos/coi/presentacion.html">Sitio oficial</a></p>
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
    include("../parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/jquery.scrollUp.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 2;
    </script> 
</html>
