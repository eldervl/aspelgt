<?php
    require('../action.php');
    require('../sesion.php');
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
                <a class="nav-link" href="capacitaciones.php">Capacitaciones</a>
                <a class="nav-link active" href="admin-usuarios.php">Usuarios</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

            <h2 class="font-weight-bold text-primary">Administrar usuarios editores</h2>

                <!--Modal-->
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">

                <div class="w-100 overflow-hidden">
                    <h4 class="float-left">Tabla de usuarios</h4>
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-nuevouser">Nuevo usuario</button>
                </div>

                    <br>
                    <table class="table table-sm mt-4">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre de usuario</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $resultados = mysqli_query($conexion, "SELECT * FROM $admin_login");
                            while($consulta = mysqli_fetch_array($resultados))
                            {
                        ?>

                            <tr>
                                <th scope="row"><?php echo $consulta['admin_id']?></th>
                                <td><?php echo $consulta['admin_name']?></td>
                                <td>
                                    <!--<button class="text-primary p-0 mr-2" style="border:none;background-color:transparent;" data-toggle="modal" data-target="#modal-editaruser">Editar usuario</button>-->
                                    <button onclick="location.href='editor-usuarios.php?id=<?php echo $consulta['admin_id']?>'" class="text-danger p-0 mx-1" style="border:none;background-color:transparent;" name="btnEliminarUsuario">Eliminar</button>
                                </td>
                            </tr>

                        <?php    
                            }
                        ?>
                

                        </tbody>
                    </table>

                </div>

             </div>
        </div>
    </div>

</section>




<!--======================================================================-->



<?php
    include("../parts/footer2.php")
?>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/data.js"></script>
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




<div class="modal fade" id="modal-nuevouser" tabindex="-1" role="dialog" aria-labelledby="modal-nuevouserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-nuevouser-Label">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="editor-index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="nombreusuario">Nombre del usuario</label>
                <input class="form-control" type="text" name="nombreempresa" id="nombreempresa" maxlength="50">
            </div>
            <div class="form-group">
                <label class="form-label" for="contrausuario">Contraseña</label>
                <input class="form-control" type="text" name="nombreempresa" id="nombreempresa" maxlength="50">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Cancelar</button>
        <button onclick="location.href='editor-index.php'" class="btn btn-primary" name="btnEnviarUsuario">Añadir usuario</button>
      </div>
      
      </form>
    </div>
  </div>
</div>