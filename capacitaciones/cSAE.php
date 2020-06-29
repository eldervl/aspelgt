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
  include 'global/config.php';
  include 'global/conexion.php';
?>
<?php
    include("../parts/preloader.php");
    include("../parts/header2.php");
    
?>

<!--SELECION DE LA TABLA-->
            <?php
              $sentencia=$pdo->prepare("SELECT * FROM `c_sae`");
              $sentencia->execute(); 
              $informacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>


<!--AREA DE CONTENIDO=====================================================-->
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        <div class="row">
            <div class="col-lg-6">
                <img src="../img/productos/logos-prod/sae.png" alt="none">
                <br>
                <br>
                
                <?php foreach($informacion as $datos){ ?>
                    <h2 class="font-weight-bold text-primary"><?php echo $datos['Titulo'];?></h2>
                    <p><?php echo $datos['Descripccion'];?></p>
                 <?php }?> 
                 
                <div class="">
                    <button class="btn btn-success d-block mx-auto">Cotizar esta capacitación</button>
                </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </section>

    <section class="contenedor noselect">
<!--======================   CONTENEDOR   ======================-->
      <div class="container">
            <!--TARJETAS/PRODUCTOS-->
            <center><h3>Niveles de capacitación</h3></center>
        
            

                  <?php foreach($informacion as $datos){ ?>
                    
                        <h5 class="form-group"><?php echo $datos['Nivel'];?></h5>
                        <p class="form-group"><?php echo $datos['Informacion'];?></p>

                  <?php }?>   
 
      </div>
    <!--======================   CONTENEDOR   ======================-->
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
        $page = 3;
    </script> 
</html>
