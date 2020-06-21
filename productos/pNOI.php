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
                <img src="../img/productos/logos-prod/noi.png" alt="none">
                <br>
                <br>
                <p>Automatiza el control de los aspectos mas importantes de la nomina<a href="https://www.aspel.com.mx/productos/noi/presentacion.html">Sitio oficial</a></p>
            </div>
            <div class="col-lg-6">
               <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/xWjyztj6dSU?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de aspel NOI</a>
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

                    <h2 class="font-weight-bold text-primary">aspel NOI</h2>
                    <p>administra el Capital Humano y genera Recibos de Nómina Electrónicos.Aspel NOI automatiza el control de la nómina. Ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo con las disposiciones fiscales y laborales vigentes. Genera Comprobantes Fiscales Digitales por Internet (CFDI 3.3) de los Recibos de Nómina y asimilables a salarios.

                    Ten la certeza de que no existan diferencias al realizar la conciliación entre los totales de pago de los comprobantes emitidos y los totales de la nómina actual Consulta indicadores gráficos como: trabajadores activos, total a pagar y recibos electrónicos de la nómina actual Selecciona múltiples nóminas y observa la información de los acumulados por nómina y CFDI, ya sea de forma general o a detalle.
                    </p>
                    <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Agilidad en tus procesos</h4>
                  <p style="top:right">Realiza en segundos el envío automático del XML al depósito de documentos, para asociarlos a la contabilidad.</p>
                  <img src="../img/productos/prod/noi.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Exacto cálculo de impuestos</h4>
                  <p style="top:right">Realiza un fácil, correcto y automatizado cálculo de los impuestos y aportaciones de seguridad social, tanto de los trabajadores, como de la empresa</p>
                  <img src="../img/productos/prod/noi 2.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Movimientos afiliatorios al IMSS</h4>
                  <p style="top:right">Establece comunicación directa con el IMSS para el envío de movimientos afiliatorios en línea.</p>
                  <img src="../img/productos/prod/noi 3.0.png" width="150" height="100" alt="none">
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
