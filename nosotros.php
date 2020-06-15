<!--
ASPEL proyect, nosotros.php v1xx
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

<div class="contenedor ">

    <h3>Nosotros</h3>
    <section class="sector" id="sector1">
    <h3>¿Quienes somos?</h3>
    <p>somos una empresa dedicada ala revolucion en tecnologua ASPEL cuenta con una amplia gama de servicios somos los representantes de estos en guatemala con un personal altamente capacitado dispuesto a responder las preguntas sobre nuetra forma de trabajo</p>
</section>
<section class="sector" id="sector2">
    <div class="seccion" style="float:left">
        <img src="img/index/programas.png" alt="">
    </div>
    <h3>Nuestro objetivo</h3>
    <p>tenemos como objetivo principal brindar nuestro conocimiento adquirido y certificado atraves de las capacitaciones y otros tipos de servicios los cuales estan en la pagina ademas de un servicio de ventas he infomacion capacitado para atenderles </p>
    </section>
    <section class="sector" id="sector1">
    <h3>Sobre la empresa</h3>
    <p>esta empresa es muy dedicada a lo que hace ademas de que contamos con socios tales como lo es ADTEC nuestro proposito es poder expandirnos y darnos a conocer como uno de los representantes de ASPEL en guatemala mas capacitado para ofrecer nuestros servicios </p>
    </section>

</div>

<!--======================================================================-->


<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 5;
    </script> 
</html>