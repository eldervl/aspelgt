<?php
	require('../action.php');
?>

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
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/paneles.css">
    <link rel="stylesheet" href="../css/libraries/superslides.css">
</head>

<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include("../parts/preloader.php");
    include("../parts/headermin.php");
    //
?>



<!--AREA DE CONTENIDO=====================================================-->

<div class="precontenedor"></div>
<section class="contenedor" id="seccion-panel">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills">
                <!--<a class="nav-link" href="admin-general.php">General</a>-->
                <a class="nav-link" href="admin-index.php">Página inicio</a>
                <a class="nav-link active" href="admin-faqs.php">Preguntas frecuentes</a>
                <a class="nav-link" href="admin-contacto.php">Contacto</a>
                <a class="nav-link" href="capacitaciones.php">Capacitaciones</a>
                <a class="nav-link" href="capacitaciones.php">Capacitaciones</a>
                <a class="nav-link" href="admin-usuarios.php">Usuarios</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

            <h2 class="font-weight-bold text-primary">Preguntas frecuentes</h2>
            <!--SELECCION-->
            <?php
              $sentencia=$pdo->prepare("SELECT * FROM `faqs`");
              $sentencia->execute(); 
              $preguntas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4" >
                
                    <h4 class="float-left">Preguntas</h4>
                    
                    <input type="submit" value="Control de Preguntas" class="btn btn-primary float-right mb-3"  onclick="location.href='editor-faqs.php'">
                    <input class="form-control" type="text" name="" placeholder="Buscar Pregunta"><br>
                    
                    
                       
                            <div  class="row row-cols" style=" overflow: auto; 	height: 480px; ">
                             <?php foreach($preguntas as $datos){ ?>
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mt-2 text-primary"><?php echo $datos['Titulo'];?></h5>
                                            <p class="card-text"><?php echo $datos['Info'];?></p>
                                        </div>
                                    </div>
                                </div><br>
                              <?php }?>  
                              </div>
               





                </div>
             </div>
        </div>
    </div>

</section>




<!--======================================================================-->



<?php
    include("../parts/footer.php")
?>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/jquery.superslides.js"></script>
    <script src="../js/jquery.scrollUp.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/tarjetas.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
</html>


