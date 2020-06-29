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
                <a class="nav-link" href="admin-index.php">Página inicio</a>
                <a class="nav-link" href="admin-faqs.php">Preguntas frecuentes</a>
                <a class="nav-link" href="admin-datos.php">Información y contacto</a>
                <a class="nav-link active" href="capacitaciones.php">Capacitaciones</a>
                <a class="nav-link" href="admin-usuarios.php">Usuarios</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

            <h2 class="font-weight-bold text-primary">Página de Capacitaciones</h2>
            
                <!--AREA DE CAPACITACIONES-->
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
                
                <!--CONTENIDO CAPACITACIONES-->
                <table>
                        <tbody>
                            <tr>    
                                <th scope="col" width="5%">ID</th>
                                <th scope="col" width="10%">Titulo</th>
                                <th scope="col" width="5%">Descripcion</th>
                                <th scope="col" width="10%">Nivel1</th>
                                <th scope="col" width="30%">Descripcion1</th>
                                <th scope="col" width="10%">Nivel2</th>
                                <th scope="col" width="30%">Descripcion2</th>
                                <th colspam="2">Modificar</th>
                            </tr>
                            <?php
                                 $host = "localhost";    
                                 $basededatos = "u332268007_aspel";  
                                 $usuariodb = "u332268007_aspel";  
                                 $clavedb = "aspel";    
     
                                 $tabla_db1 = "capacitaciones"; 	   
                                 
                                 $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
                                 $query = ("SELECT * FROM $tabla_db1");
                                 $resultado = $conexion->query($query);
     
                                 if ($conexion->connect_errno) {
                                     echo "Nuestro sitio experimenta fallos....";
                                     exit();
                                 }
                                 while($row = $resultado->fetch_assoc())
                                 {
                            ?>
                                <tr>
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['Titulo'];?></td>
                                    <td><?php echo $row['Descripcion'];?></td>
                                    <td><?php echo $row['Nivel1'];?></td>
                                    <td><?php echo $row['Descripcion1'];?></td>
                                    <td><?php echo $row['Nivel2'];?></td>
                                    <td><?php echo $row['Descripcion2'];?></td>
                                    <td><a class="btn btn-primary" href="Modificar_capacitaciones.php?id=<?php echo $row['ID'];?>">Editar</a></td><br>
                                    <td><a href="Eliminar_capacitaciones.php?id=<?php echo $row['ID'];?>">Eliminar</a></td>
                                </tr>
                                <?php
                                 }
                                ?>
                        </tbody>

                </table>
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


