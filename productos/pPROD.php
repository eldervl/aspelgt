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
                <img src="../img/productos/logos-prod/prod.png" alt="none">
                <br>
                <br>
                <p>planea y controla los procesos de fabricacion, asegurando una optima administracion de inventarios y costos</p>
                <div class="">
                    <button class="btn btn-success d-block mx-auto">Cotizar este producto</button>
                </div>
                
            </div>
            <div class="col-lg-6">
               <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/QkGFDvL3GM0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Acerca de PROD</a>
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

                    <h2 class="font-weight-bold text-primary">Información de PROD</h2>
                    <p>Aspel PROD es el Sistema que controla y administra los procesos de fabricación, desde materias primas hasta productos terminados.Aspel PROD 4.0 permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos. Proporciona, además, un eficiente seguimiento a las órdenes de producción, mejorando los tiempos de entrega.Calcula el costo de los productos terminados y sub-ensambles de manera eficiente, real y óptima Conoce los componentes que requieres para fabricar uno o más productos de tu elección, así como los productos que es posible fabricar a partir de los disponibles en ese momento</p>

                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Interfaz con Aspel SAE</h4>
                  <p style="top:right">obtiene la materia prima y sub-ensambles para realizar los procesos de fabricación una vez que se tiene el producto terminado, el sistema registra su entrada en el inventario. En todo momento la información de movimientos al inventario está actualizada.</p>
                  <img src="../img/productos/prod/prod 1.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Práctico tablero de órdenes</h4>
                  <p style="top:right">Visualiza información gráfica del seguimiento de las órdenes, como prioridad, estado de avance, consumos por componente y más.</p>
                  <img src="../img/productos/prod/prod 2.0.png" width="150" height="100" alt="none">
                  <br>
                  <br>
                  <h4 class="font-weight-bold text-primary" style="top:right">Fabricación de productos eficiente</h4>
                  <p style="top:right">Conoce los componentes que requieres para fabricar uno o más productos de tu elección, así como los productos que es posible fabricar a partir de los disponibles en ese momento: materia prima, insumos, sub-ensambles</p>
                  <img src="../img/productos/prod/prod 3.0.png" width="200" height="150" alt="none">


                  <p>Consulta más información en el <a href="https://www.aspel.com.mx/productos/prod/presentacion.html">Sitio oficial</a></p>
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