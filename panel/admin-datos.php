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
                <a class="nav-link active" href="admin-datos.php">Información y contacto</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">

                <h2 class="font-weight-bold text-primary">Página de inicio</h2>

                <!--Logo-->
                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">

                    <h4 class="float-left">Logotipo</h4>

                    <div style="display:block; width:100%; height:40px"></div>

                    <div class="row w-100 mx-0">

                    <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM $tlogos");
                        $consulta = mysqli_fetch_array($resultados);
                    ?>

                    <?php
                        if(!empty($consulta['imagen'])){
                    ?>
                        <div class="col-xl-4 p-1">
                            <div class="card">
                                <div class="p-3">
                                    <form action="editor-datos.php" method="POST">
                                        <div class="border rounded cont-imgcard mb-2">
                                            <img class="imgcard" src="data:image/jpg;base64,<?php echo base64_encode($consulta['imagen']);?>" alt="imagen">
                                        </div>
                                        <button onclick="location.href='editor-datos.php'" class="text-danger p-0" style="border:none;background-color:transparent;" name="btnEliminarLogo">Eliminar</button>
                                    </form>
                                    <button class="text-primary p-0" style="border:none;background-color:transparent;" data-toggle="modal" data-target="#modal-imglogo">Cambiar imagen</button>
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
                        <button class="btn w-100 border rounded bg-white" style="height:190px;" data-toggle="modal" data-target="#modal-imglogo">
                            Añadir nueva imagen +
                        </button>
                    </div>
                    <?php    
                    }
                    ?>

                    </div>
                </div>

                <!--Info contacto-->


                <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
                
                    <h4 class="float-left">Oficinas e información de contacto</h4>
                    <button class="btn btn-primary float-right mb-3 disabled" style="overflow:hidden;">Añadir oficina</button>

                    <div style="display:block; width:100%; height:40px"></div>
                   
                    <div class="row w-100 mx-0">

                        <div class="w-100">
                            <div class="card mb-4">
                                <div class="card-body">

                                    <div class="rounded border p-3 mb-3">

                                    <?php

                                    $resultados = mysqli_query($conexion, "SELECT * FROM $tdatoscontacto");
                                    $consulta = mysqli_fetch_array($resultados);

                                    $nosede=    0;
                                    $direccion= 0;
                                    $correos=   0;
                                    $telefonos= 0;
                                    $whatsapps= 0;
                                    $social=    0;

                                    ?>

                                    <?php if(!empty($consulta['nombresede'])){ ?> <h5 class="text-primary mb-3" style="font-weight:bold;"><?php echo $consulta['nombresede']?></h5> <?php $nosede=$nosede+1; } else {  }?>
                                    <?php if($nosede == 0) { ?> <h5 class="text-primary mb-3" style="font-weight:bold;">Sede desconocida</h5> <?php } else { } ?>

                                    <div class="border rounded bg-light3 p-3 mb-2">
                                    <div class="my-1"> 
                                        <img src="https://img.icons8.com/material/17/000000/worldwide-location--v1.png"/> <span><b>Dirección:</b></span><br>
                                        <?php if(!empty($consulta['direccion'])){ ?> <?php echo $consulta['direccion']?></span> <?php $direccion=$direccion+1; } else {  }?>
                                        <?php if($direccion == 0) { ?> <small>No hay dirección disponible</small> <?php } else { } ?>
                                    </div>
                                    <div class="my-1">
                                        <img src="https://img.icons8.com/material/17/000000/email--v1.png"/> <span><b>Correos Electrónicos:</b></span><br>
                                        <?php if(!empty($consulta['email1'])){ ?> <span><a href="mailto:<?php echo $consulta['email1']?>" target="_blank"><?php echo $consulta['email1']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
                                        <?php if(!empty($consulta['email2'])){ ?> <span><a href="mailto:<?php echo $consulta['email2']?>" target="_blank"><?php echo $consulta['email2']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
                                        <?php if(!empty($consulta['email3'])){ ?> <span><a href="mailto:<?php echo $consulta['email3']?>" target="_blank"><?php echo $consulta['email3']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
                                        <?php if(!empty($consulta['email4'])){ ?> <span><a href="mailto:<?php echo $consulta['email4']?>" target="_blank"><?php echo $consulta['email4']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
                                        <?php if(!empty($consulta['email5'])){ ?> <span><a href="mailto:<?php echo $consulta['email5']?>" target="_blank"><?php echo $consulta['email5']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
                                        <?php if($correos == 0) { ?> <small>No hay direcciones de correo electrónico disponibles</small> <?php } else { } ?>
                                    </div>
                                    <div class="my-1">
                                        <img src="https://img.icons8.com/material/17/000000/phone--v1.png"/> <span><b>Teléfonos:</b></span><br>
                                        <?php if(!empty($consulta['telefono1'])){ ?> <span><?php echo $consulta['telefono1']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
                                        <?php if(!empty($consulta['telefono2'])){ ?> <span><?php echo $consulta['telefono2']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
                                        <?php if(!empty($consulta['telefono3'])){ ?> <span><?php echo $consulta['telefono3']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
                                        <?php if(!empty($consulta['telefono4'])){ ?> <span><?php echo $consulta['telefono4']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
                                        <?php if(!empty($consulta['telefono5'])){ ?> <span><?php echo $consulta['telefono5']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
                                        <?php if($telefonos == 0) { ?> <small>No hay números de teléfono disponibles</small> <?php } else { } ?>
                                    </div>
                                    <div class="my-1">
                                        <img src="https://img.icons8.com/material-outlined/17/000000/whatsapp.png"/> <span><b>Whatsapp:</b></span><br>
                                        <?php if(!empty($consulta['wspnum1'])){ ?> <span><a href="https://wa.me/502<?php echo $consulta['wspnum1']?>" target="_blank">+502<?php echo $consulta['wspnum1']?></a></span> <?php $whatsapps=$whatsapps+1; } else {  }?>
                                        <?php if(!empty($consulta['wspnum2'])){ ?> <span><a href="https://wa.me/502<?php echo $consulta['wspnum2']?>" target="_blank">+502<?php echo $consulta['wspnum3']?></a></span> <?php $whatsapps=$whatsapps+1; } else {  }?>
                                        <?php if($whatsapps == 0) { ?> <small>No hay números de whatsapp disponibles</small> <?php } else { } ?>
                                    </div>
                                    <div class="mt-1">
                                        <div class="d-inline mr-1">
                                            <img src="https://img.icons8.com/material-outlined/17/000000/geography.png"/> <span><b>Redes sociales:</b></span><br>
                                            <?php if(!empty($consulta['facebook'])) { ?> <span><img class="header-icon" src="https://img.icons8.com/material/17/000000/facebook-new.png"/> <a href="<?php echo $consulta['facebook']?>">Facebook</a></span><br>             <?php $social=$social+1; } else {  }?>
                                            <?php if(!empty($consulta['twitter']))  { ?> <span><img class="header-icon" src="https://img.icons8.com/material-sharp/17/000000/twitter-squared.png"/> <a href="<?php echo $consulta['twitter']?>">Twitter</a></span><br>      <?php $social=$social+1; } else {  }?>
                                            <?php if(!empty($consulta['instagram'])){ ?> <span><img class="header-icon" src="https://img.icons8.com/material-outlined/17/000000/instagram-new.png"/> <a href="<?php echo $consulta['instagram']?>">Instagram</a></span><br> <?php $social=$social+1; } else {  }?>
                                            <?php if(!empty($consulta['youtube']))  { ?> <span><img class="header-icon" src="https://img.icons8.com/material-rounded/17/000000/youtube-play.png"/> <a href="<?php echo $consulta['youtube']?>">Youtube</a></span><br>       <?php $social=$social+1; } else {  }?>
                                            <?php if($social == 0) { ?> <small>No hay números de whatsapp disponibles</small> <?php } else { } ?>
                                        </div>
                                    </div>
                                </div>
                                    <button class="text-primary p-0 mr-2" style="border:none;background-color:transparent;" data-toggle="modal" data-target="#modal-datoscontacto">Editar información</button>

                                </div>
                            </div>
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






<div class="modal fade" id="modal-imglogo" tabindex="-1" role="dialog" aria-labelledby="modal-imglogoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-imglogo-Label">Insertar imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="editor-datos.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="imagen" id="imagen" class="form-control h-auto py-5 pl-5"> 
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            </div>   
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Cancelar</button>
        <button onclick="location.href='editor-datos.php'" class="btn btn-primary" name="btnEnviarLogo">Añadir imagen</button>
      </div>
      
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="modal-datoscontacto" tabindex="-1" role="dialog" aria-labelledby="modal-datosconactoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-datoscontacto-Label">Ingresar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <form action="editor-datos.php" method="POST">

        <div class="row">
            <div class="col-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true">Datos generales</a>
                    <a class="nav-link" id="v-pills-direccion-tab" data-toggle="pill" href="#v-pills-direccion" role="tab" aria-controls="v-pills-direccion" aria-selected="false">Dirección y ubicación</a>
                    <a class="nav-link" id="v-pills-correos-tab" data-toggle="pill" href="#v-pills-correos" role="tab" aria-controls="v-pills-correos" aria-selected="false">Correos electrónicos</a>
                    <a class="nav-link" id="v-pills-numeros-tab" data-toggle="pill" href="#v-pills-numeros" role="tab" aria-controls="v-pills-numeros" aria-selected="false">Números de contacto</a>
                    <a class="nav-link" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="false">Redes sociales</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                        
                        <h5 class="text-primary mb-3" style="font-weight:bold;">Datos generales</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="nombreempresa">Nombre de la empresa:</label>
                                <input class="form-control" type="text" name="nombreempresa" id="nombreempresa" maxlength="50" value="<?php echo $consulta['nombresede']?>">
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-direccion" role="tabpanel" aria-labelledby="v-pills-direccion-tab">

                        <h5 class="text-primary mb-3" style="font-weight:bold;">Dirección y ubicación</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="direccion">Dirección:</label>
                                <input class="form-control" type="text" name="direccion" id="direccion" maxlength="150" value="<?php echo $consulta['direccion']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="urlmapa">Ubicación en google maps</label>
                                <input class="form-control" type="text" name="urlmapa" id="urlmapa" maxlength="500" value="<?php echo $consulta['mapa']?>">
                                <small><p class="mt-1" style="line-height:1.3;">Es necesario insertar un iframe de Google Maps, más información en la <a style="line-height:5px;" href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=es">Página de soporte de Google Maps</a></p></small>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-correos" role="tabpanel" aria-labelledby="v-pills-correos-tab">
                        
                        <h5 class="text-primary mb-3" style="font-weight:bold;">Correos electrónicos</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="email1">Correo electronico 1 (Principal)</label>
                                <input class="form-control" type="text" name="email1" id="email1" maxlength="40" value="<?php echo $consulta['email1']?>">
                                <small><p class="mt-1" style="line-height:1.3;">Esta es la dirección de correo electrónico predeterminada para el formulario de contacto, y es el que aparece en la parte superior de la página.</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email2">Correo electronico 2</label>
                                <input class="form-control" type="text" name="email2" id="email2" maxlength="40" value="<?php echo $consulta['email2']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email3">Correo electronico 3</label>
                                <input class="form-control" type="text" name="email3" id="email3" maxlength="40" value="<?php echo $consulta['email3']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email4">Correo electronico 4</label>
                                <input class="form-control" type="text" name="email4" id="email4" maxlength="40" value="<?php echo $consulta['email4']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email5">Correo electronico 5</label>
                                <input class="form-control" type="text" name="email5" id="email5" maxlength="40" value="<?php echo $consulta['email5']?>">
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-numeros" role="tabpanel" aria-labelledby="v-pills-numeros-tab">

                        <h5 class="text-primary mb-3" style="font-weight:bold;">Números de teléfono</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="telefono1">Teléfono 1</label>
                                <input class="form-control" type="text" name="telefono1" id="telefono1" maxlength="8"  value="<?php echo $consulta['telefono1']?>">
                                <small><p class="mt-1" style="line-height:1.3;">Esta es el número de telefono predeterminada, aparece en la parte superior de la página.</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telefono2">Teléfono 2</label>
                                <input class="form-control" type="text" name="telefono2" id="telefono2" maxlength="8"  value="<?php echo $consulta['telefono2']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telefono3">Teléfono 3</label>
                                <input class="form-control" type="text" name="telefono3" id="telefono3" maxlength="8"  value="<?php echo $consulta['telefono3']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telefono4">Teléfono 4</label>
                                <input class="form-control" type="text" name="telefono4" id="telefono4" maxlength="8"  value="<?php echo $consulta['telefono4']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telefono5">Teléfono 5</label>
                                <input class="form-control" type="text" name="telefono5" id="telefono5" maxlength="8"  value="<?php echo $consulta['telefono5']?>">
                            </div>
                        </div>
                        <h5 class="text-primary my-3" style="font-weight:bold;">Números whatsapp</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="whatsapp1">Whatsapp 1</label>
                                <input class="form-control" type="text" name="whatsapp1" id="whatsapp1" maxlength="8"  value="<?php echo $consulta['wspnum1']?>">
                                <small><p class="mt-1" style="line-height:1.3;">Esta es el número de Whatsapp predeterminada, aparece en la parte superior de la página.</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="whatsapplink1">Enlace de whatsapp 1</label>
                                <input class="form-control" type="text" name="whatsapplink1" id="whatsapplink1" value="https://wa.me/502<?php echo $consulta['wspnum1']?>" disabled>
                                <small><p class="mt-1" style="line-height:1.3;">Este enlace se genera automáticamente</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="whatsapp2">Whatsapp 2</label>
                                <input class="form-control" type="text" name="whatsapp2" id="whatsapp2" maxlength="8"  value="<?php echo $consulta['wspnum2']?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="whatsapplink2">Enlace de whatsapp 2</label>
                                <input class="form-control" type="text" name="whatsapplink2" id="whatsapplink2" value="https://wa.me/502<?php echo $consulta['wspnum2']?>" disabled>
                                <small><p class="mt-1" style="line-height:1.3;">Este enlace se genera automáticamente</p></small>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                        
                        <h5 class="text-primary mb-3" style="font-weight:bold;">Redes sociales</h5>
                        <div class="border rounded bg-light px-3 pt-2">
                            <div class="form-group">
                                <label class="form-label" for="facebook">Facebook</label>
                                <input class="form-control" type="text" name="facebook" id="facebook" maxlength="100" value="<?php echo $consulta['facebook']?>">
                                <small><p class="mt-1" style="line-height:1.3;">URL de la página</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="twitter">Twitter</label>
                                <input class="form-control" type="text" name="twitter" id="twitter" maxlength="100" value="<?php echo $consulta['twitter']?>">
                                <small><p class="mt-1" style="line-height:1.3;">URL del perfil</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="instagram">Instagram</label>
                                <input class="form-control" type="text" name="instagram" id="instagram" maxlength="100" value="<?php echo $consulta['instagram']?>">
                                <small><p class="mt-1" style="line-height:1.3;">URL del perfil</p></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="youtube">Youtube</label>
                                <input class="form-control" type="text" name="youtube" id="youtube" maxlength="100" value="<?php echo $consulta['youtube']?>">
                                <small><p class="mt-1" style="line-height:1.3;">URL del canal</p></small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Cancelar</button>
        <button onclick="location.href='editor-datos.php'" class="btn btn-primary" name="btnEnviarContacto">Actualizar datos</button>
      </div>
      
      </form>
    </div>
  </div>
</div>