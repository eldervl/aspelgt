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

    <section class="contenedor noselect" id="seccion-infoprods">
        
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2 class="animar">Productos</h2>
                <p class="animar delay1">Contamos con una amplia gamade productos todo lo necesario para poder controlar, administra todas las operaciones de tu empresa tomando en cuenta que muchos de nuestros productos van a otros asociados para tener un mejor funcionamiento aumentando la eficacia de la empresa</p>
            </div>
            <div class="col-sm-6">
                <img src="img/general/programas2.png" alt="">
            </div>
        </div>
        

    </section>

    <section class="contenedor noselect">

            <nav id="navbar-areasprogramas" class="navbar navbar-light bg-light">
                <ul class="nav nav-pills">
                    <li class="nav-item" onclick="verarea1();">
                        <a class="nav-link" id="linkarea1" >Productos ASPEL</a>
                    </li>
                    <li class="nav-item" onclick="verarea2();">
                        <a class="nav-link" id="linkarea2" >Productos de ApoyoAE</a>
                    </li>
                </ul>
            </nav>

            <br>
            <br>


            <div class="cont-area" id="area1">

               
                <h3 class="animar my-4">Aspel Comercial</h3>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="animar delay1">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/SAE.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">SAE</h5>
                                    <p class="card-text">Controla todo el ciclo de todas las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos</p>
                                    <a href="productos/pSAE.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
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
                                    <p class="card-text">Controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets tu negocio es más eficiente y productivo </p>
                                    <a href="productos/pCAJA.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="animar delay3">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/FACTURE.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">FACTURE</h5>
                                    <p class="card-text">Genera de forma segura y en segundos Comprobantes Fiscales Digitales por Internet de acuerdo con las disposiciones fiscales vigentes, independientemente de tu profesión, giro comercial o si eres persona física o moral.</p>
                                    <a href="productos/pFACTURA.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <h3 class="animar my-4">Aspel Administrativo</h3>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="animar delay1">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/COI.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">COI</h5>
                                    <p class="card-text">Automatiza los procesos administrativos de tu empresa sin elevar los costos.Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable.</p>
                                    <a href="productos/pCOI.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="animar delay2">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/NOI.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">NOI</h5>
                                    <p class="card-text">Automatiza el control Ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo con las disposiciones fiscales y laborales.Genera y entrega a tus trabajadores los Comprobantes Fiscales Digitales  de los recibos de nómina  </p>
                                   <a href="productos/pNOI.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
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
                                     <p class="card-text">Controla eficientemente los movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera Todos los movimientos bancarios se contabilizan automáticamente a través de su interfaz permite la afectación simultánea de las cuentas por cobrar o pagar</p>
                                    <a href="productos/pBANCO.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <h3 class="animar my-4">Aspel Producción</h3>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="animar delay1">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/PROD.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PROD</h5>
                                    <p class="card-text">Es el Sistema que controla y administra los procesos de fabricación, desde materias primas hasta productos terminados permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos </p>
                                    <a href="productos/pPROD.PHP" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <h3 class="animar my-4">Aspel Nube</h3>
            
            </div>

            <div class="cont-area" id="area2">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="animar delay1">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/logos-ext/NONE.pNg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Backups </h5>
                                    <p class="card-text">Copia de seguridad de bases de datos MySQL, MariaDB Microsoft SQL Server y servidores Exchange.Se pueden programar copias de seguridad múltiples y paralelas de servidores de bases de datos locales, en red y remotos, sin ninguna interrupción de los servicios </p>
                                    <a href="productos/pBACKUP.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       
                        <div class="animar delay2">
                            <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                                <img src="img/productos/logos-ext/NONE.pNg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Servidores en la nube</h5>
                                    <p class="card-text">Nuestros servidores físicos en donde se almacenará el software y bases de datos.Todos los servidores e infraestructura trabajan con redundancia de componentes Nuestro centro de datos está físicamente instalado </p>
                                   <a href="productos/pNUBE.php" class="btn btn-primary btn-tarjeta"  style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                                </div>
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
        $page = 2;
    </script> 
</html>
