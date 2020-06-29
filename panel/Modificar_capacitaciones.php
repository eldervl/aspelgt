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
    <link rel="icon" href="../img/favicon.ico" type="image/png"/>
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

<body>

<?php
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
                <a class="nav-link active" href="capacitaciones.php">Capacitaciones</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

            <h2 class="font-weight-bold text-primary">Página de Capacitaciones</h2>
            
                <!--AREA DE CAPACITACIONES-->
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
                <?php
                     
	                        $host = "localhost";    
	                        $basededatos = "u332268007_aspel";  
	                        $usuariodb = "u332268007_aspel";  
	                        $clavedb = "aspel";    

                            $tabla_db1 = "capacitaciones"; 	 
                            $id = $_REQUEST['id'];   
                            
                            $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
                            if ($conexion->connect_errno) {
                                echo "Nuestro sitio experimenta fallos....";
                                exit();
                            }

                            $query = ("SELECT * FROM $tabla_db1 WHERE id='$id'");
                            $resultado = $conexion->query($query);
                            $row = $resultado->fetch_assoc();
                        ?>




                <!--CONTENIDO CAPACITACIONES-->
                <form action="Modificar_capacitaciones2.php?id=<?php echo $row['ID'];?>" name="" method="POST">
                    <h4 class="float-left">Capacitaciones</h4>
                        <input class="form-control" type="text" name="Titulo" id="Titulo" placeholder="Introduce el Títilo Principal" value="<?php echo $row['Titulo']; ?>" ><br>
                       
                        <div class="form-group">
                            <input  class="form-control" name="Descripcion" id="Descripcion" rows="3" placeholder="Descripción Principal" value="<?php echo $row['Descripcion']; ?>" >
                        </div><br>

                        <label for="">Primer Nivel</label>
                        <input class="form-control" type="text" name="Nivel1" id="Nivel1" placeholder="Básico"value="<?php echo $row['Nivel1']; ?>" ><br>
                        <div class="form-group">
                            <input  class="form-control" name="Descripcion1" id="Descripcion1" rows="3" placeholder="Descripción del nivel básico" value="<?php echo $row['Descripcion1']; ?>">
                        </div><br>

                        <label for="">Segundo Nivel</label>
                        <input class="form-control" type="text" name="Nivel2" id="Nivel2" placeholder="Avanzado" value="<?php echo $row['Nivel2']; ?>"><br>
                        <div class="form-group">
                            <input class="form-control" name="Descripcion2" id="Descripcion2" rows="3" placeholder="Descripción del nivel Avanzado" value="<?php echo $row['Descripcion2']; ?>">
                        </div><br>
                        
                        
                        <button class="btn btn-primary float-right ml-1 mb-3" name="btn_actualizar">Guardar Cambios</button>
                    </form>
                </div>
                <!--Slider-->

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


