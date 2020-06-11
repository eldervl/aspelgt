<!--
ASPEL proyect, soporte.php v1js
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
<!--<body style="background: url('https://static.vecteezy.com/system/resources/previews/000/672/067/non_2x/vector-team-building-ui-design.jpg'); background-repeat:no-repeat;background-position:90% 20%;)">-->
<body>
    
<?php
    include("parts/header.php");
    include("parts/social.php");
?>


<!--AREA DE CONTENIDO=====================================================-->

<div class="precontenedor"></div>

<section class="contenedor">

    <div class="row">
        <div class="col-lg-2">
            <div class="card mb-4  border-0 tarjeta minitarjeta" style="overflow:hidden; height:300px;" >
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="300" height="300"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#007ebf"><path d="M86,14.33333c-31.57947,0 -57.33333,25.75386 -57.33333,57.33333v7.16667v6.4668c-4.11158,3.92065 -7.16667,8.96408 -7.16667,15.0332c0,8.90077 6.14578,15.50081 13.92741,18.72851c9.32408,22.28699 27.99929,38.60482 50.57259,38.60482h21.5v-14.33333h-21.5c-16.18555,0 -30.88147,-12.1869 -38.26888,-31.43815l-1.52572,-3.94726l-4.19922,-0.58789c-3.52956,-0.48559 -6.17285,-3.33499 -6.17285,-7.02669c0,-2.75911 1.39326,-4.92369 3.56934,-6.17285l3.59733,-2.05762v-6.10286v-7.16667c0,-4.04938 3.11728,-7.16667 7.16667,-7.16667h71.66667c4.04938,0 7.16667,3.11728 7.16667,7.16667v7.16667v28.66667h-29.29655c-1.51671,-4.28991 -5.56998,-7.16028 -10.12011,-7.16667c-5.93706,0 -10.75,4.81294 -10.75,10.75c0.00754,5.6328 4.3618,10.30462 9.98014,10.70801c0.25568,0.0278 0.51267,0.04182 0.76986,0.04199h46.58333h7.16667c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-14.33333c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333v-7.16667v-7.16667c0,-31.57947 -25.75386,-57.33333 -57.33333,-57.33333zM86,28.66667c19.03171,0 35.04946,12.23621 40.74642,29.29655c-1.58636,-0.37879 -3.21814,-0.62988 -4.91309,-0.62988h-71.66667c-1.69495,0 -3.32673,0.25109 -4.91309,0.62988c5.69696,-17.06034 21.71471,-29.29655 40.74642,-29.29655z"></path></g></g>
                </svg>
                <div class="card-body">
                    <h5 class="card-title">PROD</h5>
                </div>
            </div>
        </div>
    </div>


</section>

<!--======================================================================-->



<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 4;
    </script> 
</html>