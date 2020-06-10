<!--
ASPEL proyect, soporte.php v1js
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body style="background: url('https://static.vecteezy.com/system/resources/previews/000/672/067/non_2x/vector-team-building-ui-design.jpg'); background-repeat:no-repeat;background-position:90% 20%;)">
    
<?php
    include("parts/header.php");
    include("parts/social.php");
?>


<!--AREA DE CONTENIDO=====================================================-->

<div class="contenedor ">

<br>
<br>
<br>
<br>
<br>
<h1>Pronto estará listo</h1>
<p>Mientras, ¿Porque no revisas resto?</p>
<button class="btn border bg-light" onclick="location.href='index.php'">Ir al inicio</button>

<div style="margin-bottom:400px;"></div>

<!--
  <h3>Soporte</h3>
  <div class=""> 
          <div class="row">
          
            <div class="col-3">
              <center><img src="img/aspel-BANCO.png" class="imgp" alt="imgp1"></center>
              <h5><center>Asesoria Aspel</center></h5>
              <h6><center>Presencial Capital</center></h6>
              <p><center>Le brindamos asesoria especializada con nuestros mejores programadores asi como un soporte tecnico en todo momento que usted lo necesite y confirmacion de cada uno de esos procesos que lleve a cabo como lo que seria base de datos y programacion.</center></p>
            </div>
            <div class="col-3">
              <center><img src="img/aspel-CAJA.png" class="imgp" alt="imgp1"></center>
              <h5><center>Asesoria Aspel</center></h5>
              <h6><center>Factura Electronica</center></h6>
              <p><center>A la hora de brindar la factura electronica nos ayuda tanto a usted como a la empresa, ya que para entregar el producto que usted solicito o el servicio que adquirio..</center></p>
            </div>
            <div class="col-3">
              <center><img src="img/aspel-coi2.png" class="imgp" alt="imgp1"></center>
              <h5><center>Asesoria Aspel</center></h5>
              <h6><center>Remota</center></h6>
              <p><center>Se enfoca en en la instalacion de los equipos y verificar que todo marche bien, se encarga de modificar las bases de datos especifica, y la eliminacion de documentos que son incesarios para la empresa, lo asesoramos por medio de Skype.</center></p>
            </div>
            <div class="col-3">
              <center><img src="img/aspel-FACTURE.png" class="imgp" alt="imgp1"></center>
              <h5><center>Asesoria Aspel</center></h5>
              <h6><center>Oficinas</center></h6>
              <p><center>oficinas de primera en donde puede tener la confianza que nuestro personal lo atendera como se debe, brindandoles la ayuda que usted necesita con nuestro personal recomendado cada una de nuestros servicios.</center> </p>
            </div>
          </div>
        </div>





-->

</div>

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