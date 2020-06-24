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

    <section class="contenedor noselect" id="seccion-infosoporte">
    
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2 class="animar">Soporte</h2>
                <p class="animar delay1">Nos preocupamos por mantenerte informado y de resolver tus dudas. Consulta las opciones de soporte que tenemos para ti</p>
            </div>
            <div class="col-sm-6">
                <img src="" alt="">
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

        <div class="row">
            <div class="col-lg-4 animar">
                <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >                  
                    <div class="rounded" style="max-height:185px; overflow:hidden;">
                        <img src="img/soporte/2.jpg" class="card-img-top" style="margin-top:-10%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Preguntas Frecuentes</h5>
                        <p class="card-text">Aquí podras resolver tus dudas acerca de nuestros servicios que tenemos para ti, contactanos</p>
                        <a href="faqs.php" class="btn btn-primary" style="position:absolute;bottom:20px;width:calc(100% - 40px);">Preguntas frecuentes</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 animar delay1">
                <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                    <div class="rounded" style="max-height:185px; overflow:hidden;">
                        <img src="img/soporte/3.jpg" class="card-img-top"  style="margin-top:-10%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <p class="card-text">Comunicate con nuestro directemente para obtener mayor información sobre nuestros servicios</p>
                        <a href="Contacto.php?frmcontacto=true" class="btn btn-primary" style="position:absolute;bottom:20px;width:calc(100% - 40px);">Formulario de contacto</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 animar delay2">
                <div class="card mb-4 bg-white tarjeta" style="overflow:hidden; height:420px;" >
                    <div class="rounded" style="max-height:185px; overflow:hidden;">
                        <img src="img/soporte/5.jpg" class="card-img-top" style="margin-top:-10%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Suegerencias al soporte técnico</h5>
                        <p class="card-text">Ayudanos a mejorar nuestros servicios, manda tus sugerencias y con gusto las atenderemos</p>
                        <a href="contacto.php" class="btn btn-primary" style="position:absolute;bottom:20px;width:calc(100% - 40px);">Enviar sugerencia</a>
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
    <script src="js/animaciones.js"></script>
    <script src="js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 4;
    </script> 
</html>
