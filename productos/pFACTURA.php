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
                <img src="../img/productos/logos-prod/factura.png" alt="none">
                <br>
                <br>
                <p>Genera comprobantes fiscales digitales por internet CFDI es ideal para emprendedores y profesionistas</p>
                <p>Consulta más información en el <a href="https://www.aspel.com.mx/productos/facture/presentacion/">Sitio oficial</a></p>
            </div>
            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/dh5Bv7n77a4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de Factura</a>
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

                    <h2 class="font-weight-bold text-primary">Información de Factura</h2>
                    <p>Aspel Facture es el facturador por excelencia que cumple con todas las obligaciones de la nueva Factura Electrónica.

                    Genera de forma segura y en segundos Comprobantes Fiscales Digitales por Internet 3.3 (CFDI) de acuerdo con las disposiciones fiscales vigentes, independientemente de tu profesión, giro comercial o si eres persona física o moral. Emite fácilmente facturas, notas de crédito, recibos de honorarios y de arrendamiento, así como otros comprobantes de ingreso y egreso, comprobantes con múltiples complementos fiscales y de retención e información de pagos
                    </p>
                    <br>
                      <h4 class="font-weight-bold text-primary" style="top:right">Cumple con la Facturación Electrónica 3.3</h4>
                  <p style="top:right">Genera con un solo clic el archivo XML del CFDI, la representación impresa en formato PDF y envíalos por correo electrónico a tus Clientes.</p>
                  <img src="../img/productos/prod/factura 1.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Variedad de complementos</h4>
                  <p style="top:right">Emite comprobantes con complementos fiscales como notarios, donatarias, pago en especie, compra-venta de divisas y leyendas fiscales.</p>
                  <img src="../img/productos/prod/factura.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Tablero de control</h4>
                  <p style="top:right">Consulta de forma inmediata información clave para tu negocio como el total de ingresos, gastos, pagos, retenciones y viáticos.
                </p>
                  <img src="../img/productos/prod/factura 3.0.png" width="170" height="100" alt="none">
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