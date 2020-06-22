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
                <img src="../img/productos/logos-prod/banco.png" alt="none">
                <br>
                <br>
                <p>Control eficiente de los ingresos y egresos de cuentas bancarias, ofreciendo informacion precisa en todo momento</p>
                <div class="">
                    <button class="btn btn-success d-block mx-auto">Cotizar este producto</button>
                </div>
            </div>
            <div class="col-lg-6">
               <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/gzqTYDCduqQ?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de BANCO</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                    <!--
                        ÁREA DE INFORMACIÓN:
                        Información acerca del programa, caracteristicas, compatiblidad, requerimientos, entre otros
                    -->

                    <h2 class="font-weight-bold text-primary">Información de BANCO</h2>
                    <p>Con Aspel BANCO 5.0 maneja tus cuentas bancarias al más alto nivel.
                    Controla eficientemente los movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera. Ofrece información financiera en todo momento como estados de cuenta, diarios de bancos y flujo de efectivo. Todos los movimientos bancarios se contabilizan automáticamente a través de su interfaz atendiendo los requisitos de la Contabilidad Electrónica. 

                    Para una mayor eficiencia administrativa e integridad de la información permite la afectación simultánea de las cuentas por cobrar y/o por pagar al registrar los movimientos bancarios , y posibilita la generación automática de los cheques para el pago de nómina.</p>
                    <br>
                     <h4 class="font-weight-bold text-primary" style="top:right">Contabilidad Electrónica</h4>
                  <p style="top:right">Contabiliza en línea operaciones bancarias atendiendo los requisitos de la Contabilidad Electrónica. Administra la información de la forma de pago y asociación automática de folios fiscales, en el caso de movimientos con interfaz Aspel SAE.</p>
                  <img src="../img/productos/prod/banco 1.0.png" width="200" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Control de las cuentas y flujo de efectivo</h4>
                  <p style="top:right">Ofrece información financiera precisa del estado de cuenta y diario de bancos en cualquier momento</p>
                  <img src="../img/productos/prod/banco 2.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Práctico tablero de control</h4>
                  <p style="top:right">Consulta información gráfica que permite visualizar los saldos reales y disponibles de cada cuenta.
                </p>
                  <img src="../img/productos/prod/banco.png" width="100" height="100" alt="none">


                  <p>Consulta más información en el <a href="https://www.aspel.com.mx/productos/banco/presentacion.html">Sitio oficial</a></p>
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
