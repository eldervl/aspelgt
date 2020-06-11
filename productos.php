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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/header.php");
    include("parts/social.php");
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infoprods">
        
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2>Productos</h2>
                <p>Descripcion sobre productos</p>
            </div>
            <div class="col-sm-6">
                <img src="img/general/programas2.png" alt="">
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

            <nav id="navbar-areasprogramas" class="navbar navbar-light bg-light">
                <ul class="nav nav-pills">
                    <li class="nav-item" onclick="verComercial();">
                      <a class="nav-link" id="linkComercial" >Área Comercial</a>
                    </li>
                    <li class="nav-item" onclick="verAdmin();">
                      <a class="nav-link" id="linkAdmin" >Área Administrativa</a>
                    </li>
                    <li class="nav-item" onclick="verProduccion();">
                      <a class="nav-link" id="linkProduccion" >Área Producción</a>
                    </li>
                    <li class="nav-item" onclick="verOtros();">
                      <a class="nav-link" id="linkOtros" >Otros Productos</a>
                    </li>
                    <li class="nav-item" onclick="verNube();">
                      <a class="nav-link" id="linkNube" >Servicios en la nube</a>
                    </li>
                    <li class="nav-item" onclick="verCompatibilidad();">
                      <a class="nav-link" id="linkCompatibilidad" >Compatibilidad</a>
                    </li>
                   </ul>
            </nav>

            <br>
            <br>


            <div class="cont-area" id="areaComercial">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/SAE.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SAE</h5>
                                <p class="card-text">Controla todo el ciclo de todas las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos</p>
                                <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/CAJA.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CAJA</h5>
                                <p class="card-text">Controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets tu negocio es más eficiente y productivo, ahora puedes emitir Facturas Electrónicas 3.3 en tu punto de venta.</p>
                                <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <div>FACTURE?</div>
                </div>

            </div>

            <div class="cont-area" id="areaAdmin">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/COI.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">COI</h5>
                                <p class="card-text">Automatiza los procesos administrativos de tu empresa sin elevar los costos.Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable.</p>
                                <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/NOI.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">NOI</h5>
                                <p class="card-text">Automatiza el control de la nómina. Ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo con las disposiciones fiscales y laborales vigentes.Genera y entrega a tus trabajadores los Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de nómina y cumple en segundos con la Reforma Fiscal vigente.</p>
                               <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/BANCO.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BANCO</h5>
                                 <p class="card-text">Controla eficientemente los movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera Todos los movimientos bancarios se contabilizan automáticamente a través de su interfaz permite la afectación simultánea de las cuentas por cobrar y/o por pagar al registrar los movimientos bancarios</p>
                                <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cont-area" id="areaProduccion">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                            <img src="img/productos/PROD.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PROD</h5>
                                <p class="card-text">Es el Sistema que controla y administra los procesos de fabricación, desde materias primas hasta productos terminados permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos y, posteriormente, actualizar el inventario con los productos terminados</p>
                                <a href="#ventana1" class="btn btn-primary btn-tarjeta" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cont-area" id="areaOtros">

                <div class="row">

                    <div>PENDIENTE</div>

                </div>
            
            </div>

            <div class="cont-area" id="areaNube">

                <div class="row">

                    <div>NOI ASISTENTE?</div>
                    <br>
                    <div>SERVICIOS NUBE?</div>
                    <br>
                    <div>ADM MMOVIL?</div>
                    <br>
                    <div>CONTA ASISTENTE?</div>
                    <br>
                    <div>ESPACIO?</div>
                    <br>
                    <div>DFDI?</div>
                    <br>
                    <div>ADM TIENDA?</div>
                    <br>
                    
                </div>

            </div>

            <div class="cont-area" id="areaCompatibilidad">

                <div>PENDIENTE</div>

            </div>

    </section>

                          
  
        

<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
