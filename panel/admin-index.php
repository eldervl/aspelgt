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
                <a class="nav-link active" href="admin-index.php">Página inicio</a>
                <a class="nav-link" href="admin-faqs.php">Preguntas frecuentes</a>
                <a class="nav-link" href="admin-datos.php">Información y contacto</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

            <h2 class="font-weight-bold text-primary">Página de inicio</h2>

                <!--Modal-->
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
                
                    <h4 class="float-left">Modal</h4>

                    <div style="display:block; width:100%; height:40px"></div>
                   
                    <div class="row w-100 mx-0">

                    <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM $tmodalimg");
                        $consulta = mysqli_fetch_array($resultados);
                    ?>

                    <?php
                        if(!empty($consulta['imagen'])){
                    ?>
                        <div class="col-xl-4 p-1">
                            <div class="card">
                                <div class="p-3">
                                    <form action="editor-index.php" method="POST">
                                        <div class="border rounded cont-imgcard mb-2">
                                            <img class="imgcard" src="data:image/jpg;base64,<?php echo base64_encode($consulta['imagen']);?>" alt="imagen">
                                        </div>
                                        <button onclick="location.href='editor-index.php'" class="text-danger p-0" style="border:none;background-color:transparent;" name="btnEliminarModal">Eliminar</button>
                                    </form>
                                    <button class="text-primary p-0 mr-2" style="border:none;background-color:transparent;" data-toggle="modal" data-target="#modal-imgmodal">Cambiar imagen</button>
                                </div>
                            </div>
                        </div>
                    <?php    
                    } else {
                    ?>
                        <!--<div class="col-xl-4 p-1">
                            <div class="card">
                                <div class="p-3">
                                    <div class="cont-imgcard mb-2">
                                        <img class="imgcard" src="../img/noimagen.png" alt="imagen">
                                    </div>
                                    <small class="d-block mb-2 text-center">No hay medios</small>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-xl-4 p-1">
                        <button class="btn w-100 border rounded bg-white" style="height:190px;" data-toggle="modal" data-target="#modal-imgmodal">
                            Añadir nueva imagen +
                        </button>
                    </div>
                    <?php    
                    }
                    ?>
                        
                    </div>
                </div>

                <!--Slider-->

                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
                
                    <h4 class="float-left">Carrousel</h4>

                    <div style="display:block; width:100%; height:40px"></div>

                    <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM $tsliderinfo");
                        $consulta = mysqli_fetch_array($resultados);
                    ?>
                   
                   <form action="editor-index.php" method="POST">
                        <div class="form-group">
                            <label for="titulo">Titulo principal</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $consulta['titulo']?>">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Breve descripcion</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" style="height: 100px;" maxlength="300" onkeyup="countChars(this);"><?php echo $consulta['descripcion']?></textarea>
                        </div>
                        <small id="charNum">300 caracteres restantes</small>
                        <div style="overflow:hidden;">
                            <button name="btnEnviarInfo" onclick="location.href='editor-index.php'" class="btn btn-primary float-right">Actualizar información</button>
                        </div> 
                    </form>

                    <script>
                        function countChars(obj){
                        var maxLength = 300;
                            var strLength = obj.value.length;
                            var charRemain = (maxLength - strLength);
                        
                            if(charRemain < 0){
                                document.getElementById("charNum").innerHTML = '<span style="color: red;">Se ha exedido el limite de '+maxLength+' caracteres</span>';
                            }else{
                                document.getElementById("charNum").innerHTML = charRemain+' caracteres restantes';
                            }
                        }   
                    </script> 
                    
                    <hr>

                    <label for="">Imagenes del carrousel</label>
                    

                    <div class="row w-100 mx-0">

                    <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM $tsliderimg");
                        while($consulta = mysqli_fetch_array($resultados))
                        {
                    ?>
                        <!--<div class="col-xl-4 p-1">
                            <div class="card" style="height:190px;">
                                <div class="p-3 mt-3">
                                    <div class="cont-imgcard">
                                        <img class="imgcard" src="../img/noimagen.png" alt="imagen">
                                    </div>
                                    <small class="d-block mb-2 text-center">No hay medios</small>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-xl-4 p-1">
                            <div class="card" style="height:190px;">
                                <div class="p-3">
                                    <form action="editor-index.php?id=<?php echo $consulta['id']?>" method="POST" enctype="multipart/form-data">
                                        <div class="border rounded cont-imgcard mb-2">
                                            <img class="imgcard" src="data:image/jpg;base64,<?php echo base64_encode($consulta['imagen']);?>" alt="imagen">
                                        </div>
                                        <small class="d-block mb-2">Identificador: <?php echo $consulta['id']?></small>
                                        <button onclick="location.href='editor-index.php?id=<?php echo $consulta['id'];?>'" class="text-danger p-0" style="border:none;background-color:transparent;" name="btnEliminarSlider">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php    
                    }
                    ?>
                    <div class="col-xl-4 p-1">
                        <button class="btn w-100 border rounded bg-white" style="height:190px;" data-toggle="modal" data-target="#modal-imgslider">
                            Añadir nueva imagen +
                        </button>
                    </div>
                        
                    </div>
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






<div class="modal fade" id="modal-imgslider" tabindex="-1" role="dialog" aria-labelledby="modal-imgsliderLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-imgslider-Label">Insertar imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="editor-index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="imagen" id="imagen" class="form-control h-auto py-5 pl-5"> 
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <div class="bg-light w-100 p-3 mt-2 text-center">
                    <img src="../img/infoimagen.png" class="d-inline mb-1" style="width:90px;" alt="">
                    <small id="descripcionhp" class="form-text text-muted">Se recomienda usar imagenes a la medida, el sobrante no sera visible</small>
                </div>
            </div>   
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Cancelar</button>
        <button onclick="location.href='editor-index.php'" class="btn btn-primary" name="btnEnviarSlider">Añadir imagen</button>
      </div>
      
      </form>
    </div>
  </div>
</div>





<div class="modal fade" id="modal-imgmodal" tabindex="-1" role="dialog" aria-labelledby="modal-imgmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-imgmodal-Label">Insertar imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="editor-index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="imagen" id="imagen" class="form-control h-auto py-5 pl-5"> 
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <div class="bg-light w-100 p-3 mt-2 text-center">
                    <img src="../img/infoimagen.png" class="d-inline mb-1" style="width:90px;" alt="">
                    <small id="descripcionhp" class="form-text text-muted">Se recomienda usar imagenes a la medida, el sobrante no sera visible</small>
                </div>
            </div>   
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Cancelar</button>
        <button onclick="location.href='editor-index.php'" class="btn btn-primary" name="btnEnviarModal">Añadir imagen</button>
      </div>
      
      </form>
    </div>
  </div>
</div>