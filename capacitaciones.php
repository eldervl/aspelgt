<!--
ASPEL proyect, capacitaciones.php v1er
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
</head>
<body>
    
<?php
    include("parts/preloader.php");
    include("parts/header.php");
    
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infocaps">
    
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2 class="animar">Capacitaciones</h2>
                <p class="animar delay1">Todos nuestros cursos corresponden a las últimas versiones liberadas por ASPEL de México y nuestros asesores cuentas con la certificación que respaldan su inversión en su capital humano</p>
            </div>>
        </div>

    </section>

    <section class="contenedor noselect">

                    <div class="row">
                    <div class="col-lg-4">
                        <div class="animar delay1">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/SAE.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">SAE</h5>
                                    <p class="card-text">Obtendrá los conocimientos y herramientas que le permitan administrar el sistema, esto es, configurarlo para adaptarlo a las necesidades de la empresa, así como lograr un uso eficiente de las diversas funciones que el sistema provee Se revisará la forma de dar de alta información en los diferentes catálogos del sistema.</p>
                                    <a href="capacitaciones/pSAE.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="animar delay2">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/CAJA.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">CAJA</h5>
                                    <p class="card-text">El manejo de los procesos de captura de datos, como: tiendas, cajas, usuarios, políticas de oferta, inventarios, formas de pago, líneas, departamentos, impuestos, configuración de dispositivos así como emisión de documentos de venta digitales e impresos.</p>
                                    <a href="capacitaciones/pCAJA.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="animar delay3">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/BANCO.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">BANCO</h5>
                                     <p class="card-text">Obtendrá los conocimientos para realizar la configuración de Aspel-BANCO; conocerá la estructura general del sistema, comenzando por sus catálogos (cuentas bancarias, conceptos, monedas, beneficiarios y formas de pago) para posteriormente registrar los tipos de movimientos</p>
                                    <a href="capacitaciones/pBANCO.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
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
    <script src="js/data.js"></script>
    <script src="js/animaciones.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script src="js/animaciones.js"></script>
    <script src="js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 3;
    </script> 
</html>
