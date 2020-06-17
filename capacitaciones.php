<!--
ASPEL proyect, capacitaciones.php v1er
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
    <link rel="icon" href="img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/preloader.php");
    include("parts/header.php");
    include("parts/social.php");
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infocaps">
    
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2>Capacitaciones</h2>
                <p>Descripcion sobre productos</p>
            </div>
            <div class="col-sm-6">
                <img src="img/general/videos.png" alt="">
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="../img/productos/PROD.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la capacitacionxd</h5>
                        <p class="card-text">Breve resumen de la capacitacion</p>
                        <a href="base-capacitacion.php" class="btn btn-primary btn-tarjeta" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
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
    <script src="js/animaciones.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
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
