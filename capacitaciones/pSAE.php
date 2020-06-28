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
    
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
                <img src="../img/productos/logos-prod/sae.png" alt="none">
                <br>
                <br>
                <h2 class="font-weight-bold text-primary">Capacitación Aspel SAE</h2>
                <p>El curso tiene como objetivo principal registrar todos los documentos de ventas y compras, los movimientos de cuentas por cobrar y por pagar.</p>
                <div class="">
                    <button class="btn btn-success d-block mx-auto">Cotizar esta capacitación</button>
                </div>
                
            </div>
            <div class="col-lg-6">
               
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Aspel SEA</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Básico</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Avanzado</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                    <!--
                        ÁREA DE INFORMACIÓN:
                        Información acerca del programa, caracteristicas, compatiblidad, requerimientos, entre otros
                    -->

                    
                    <p> te ayuda a emitir Comprobantes Fiscales Digitales por Internet Controla todo el ciclo de todas las operaciones de compra-venta de la empresa,i como nventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos. Ofrece movilidad a las empresas conectando las sucursales remotamente y por medio de dispositivos móviles; permite el acceso a la información comercial y administrativa, brindando una integración total.

                    Relacionar los folios fiscales de los Comprobantes Fiscales Digitales a las pólizas, de acuerdo con los requerimientos de la Contabilidad Electrónica
                    </p>
                     <br>

                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    <!--
                        VERSIÓN MOVIL (Si existe):
                        Información de la versión movil del software
                    -->

                    <h2 class="font-weight-bold text-primary">Básico</h2>
                    <p>Al término de este curso el asistente obtendrá los conocimientos y herramientas que le permitan administrar el sistema, esto es, configurarlo para adaptarlo a las necesidades de la empresa, así como lograr un uso eficiente de las diversas funciones que el sistema provee. Se revisará la forma de dar de alta información en los diferentes catálogos del sistema como Zonas, Vendedores, Clientes, Proveedores, Inventarios, etc., registrar todos los documentos de ventas y compras, los movimientos de cuentas por cobrar y por pagar. 

                    De esta manera, se inicia el trabajo con el sistema con las bases que aseguran la correcta operación y uso del mismo. 

                    Es importante mencionar que el curso es Básico, para lo cual contamos con planes de soporte que te brinda tantos beneficios respaldando la compra de tu Sistema Aspel. Por ello pone a tu disposición el mejor programa de Servicio y Asesoría con el apoyo de tu distribuidor integra y soporte Certificado Apoyo Administrativo Empresarial.

                    </p>

                   
                </div>
                
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    
                    <!--
                        ADQUISICION:
                        Precios, proceso de adquisicion
                    -->

                    <h2 class="font-weight-bold text-primary">Avanzado</h2>
                     <p>Este curso tiene como principal objetivo la capacitación del participante para conocer a detalle los cálculos que realiza el sistema, tales como el manejo de los diferentes tipos de costeo de acuerdo a la legislación vigente, el prorrateo de gastos indirectos y las operaciones en general con moneda extranjera, cuya importancia radica en conocer la pérdida o ganancia por el tipo de cambio utilizado.</p>

                </div>
            </div>
        </div>
    </div>

    </section>

                          
  
        

<?php
    include("../parts/footer2.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/data.js"></script>
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
        $page = 3;
    </script> 
</html>
