<!--
ASPEL proyect, base-capacitacion.php v1er
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

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-a1-tab" data-toggle="pill" href="#v-pills-a1" role="tab" aria-controls="v-pills-a1" aria-selected="true">Quienes somos</a>
                <a class="nav-link" id="v-pills-a2-tab" data-toggle="pill" href="#v-pills-a2" role="tab" aria-controls="v-pills-a2" aria-selected="false">Historias de exito</a>
                <a class="nav-link" id="v-pills-a3-tab" data-toggle="pill" href="#v-pills-a3" role="tab" aria-controls="v-pills-a3" aria-selected="false">Oficinas</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-a1" role="tabpanel" aria-labelledby="v-pills-a1-tab">
                    
                    <!--
                        ÁREA 1
                    -->

                    <h2 class="font-weight-bold text-primary">Quienes somos</h2>
                    <p>
                    </p>
                    <h2 class="font-weight-bold text-primary">Misión</h2>
                    <p>
                    </p>
                    <h2 class="font-weight-bold text-primary">Visión</h2>
                    <p>
                    </p>

                </div>

                <div class="tab-pane fade" id="v-pills-a2" role="tabpanel" aria-labelledby="v-pills-a2-tab">
                    
                    <!--
                        ÁREA 2
                    -->

                    <h2 class="font-weight-bold text-primary">Historias de exito</h2>
                    <p>
                    </p>

                </div>
                
                <div class="tab-pane fade" id="v-pills-a3" role="tabpanel" aria-labelledby="v-pills-a3-tab">
                    
                    <!--
                        ÁREA 3
                    -->

                    <h2 class="font-weight-bold text-primary">Oficinas</h2>
                    <p>
                        Encuentra esta información en la sección de <a href="contacto.php">contacto</a>
                    </p>

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
