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
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/contenido.css">
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
                <img src="../img/productos/logos-prod/caja.png" alt="none">
                <br>
                <br>
                <p>Control de todas las operaciones de un punto de venta, con solo ingresar el inventario</p>
                <p>Consulta más información en el <a href="https://www.aspel.com.mx/productos/caja/presentacion.html">Sitio oficial</a></p>
            </div>
            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/FQKVX53dcOs?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de CAJA</a>
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

                    <h2 class="font-weight-bold text-primary">Información de CAJA</h2>
                    <p>Con Aspel CAJA tu negocio es más eficiente y productivo, ahora puedes emitir Facturas Electrónicas 3.3 en tu punto de ventacontrola, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets, cajones de dinero, básculas, lectores ópticos de código de barras, lectores de tarjetas de crédito y pantallas táctiles.
                        
                    te ayuda a validar si tu comprobante tiene documentos enlazados o requiere aceptación del receptor para cancelar el comprobante. Te permite enviar vía correo electrónico el acuse de Solicitud de la Cancelación a tus Clientes
                    </p>
                   <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Conoce el saldo de tus clientes</h4>
                  <p style="top:right">Obtén información oportuna de tus clientes. En cualquier momento puedes conocer el saldo de tus clientes y tomar las mejores decisiones</p>
                  <img src="../img/productos/prod/caja 1.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Reportes y estadísticas oportunos</h4>
                  <p style="top:right">Genera múltiples reportes y estadísticas, ya sea en general o por sucursal, con lo que podrás tener un amplio conocimiento de la operación tan detalladamente como lo necesites</p>
                  <img src="../img/productos/prod/caja 2.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Control de ingresos y existencias</h4>
                  <p style="top:right">La productividad de tu tienda o comercio está asegurada, porque tienes el control total de tus ingresos y existencias en las tiendas y cajas</p>
                  <img src="../img/productos/prod/caja 3.0.png" width="150" height="100" alt="none">
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    

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
