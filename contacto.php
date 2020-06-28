<!--
ASPEL proyect, contacto.php v1es
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApoyoAE</title>
    <link rel="icon" href="img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/animaciones.css">
</head>
<body>
    
<?php
    include("parts/preloader.php");
    include("parts/header.php");
    
    $frmcontacto = $_REQUEST['frmcontacto'];
    if($frmcontacto == true){
        echo('
        <script>
        $(document).ready(function(){$("#modal-contacto").modal("show");});
        </script>'
        );
    }
?>


<!--AREA DE CONTENIDO=====================================================-->

<div class="precontenedor"></div>

    <section class="contenedor">

        <h2 class="animar">Oficinas</h2>

        <div class="row">
            <div class="col-md-6">

                <div class="bg-light border rounded w-100 my-3 mx-auto p-4 animar delay1">

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
                        <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#modal-contacto">Contactar</button>
                    </div>
                                
                </div>
            
            </div>

            <div class="col-md-6">

                <div class="w-100 my-3 mx-auto animar delay2">

                    <iframe class="maps rounded border" style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.301259899349!2d-90.56672468584738!3d14.638832780064742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a034c15a8e29%3A0x44596677f777f298!2sApoyo%20Administrativo%20Empresarial!5e0!3m2!1ses!2sgt!4v1589894547593!5m2!1ses!2sgt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>

            </div>

        </div>

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
    <script src="js/data.js"></script>
    <script src="js/animaciones.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
	<script src="js/header.js"></script>
    <script src="js/animaciones.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 6;
    </script> 
    <script src="maps.json"></script>
</html>



<div class="modal fade" id="modal-contacto" tabindex="-1" role="dialog" aria-labelledby="modal-contactoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-contacto-Label">Contactar a ApoyoAE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form class="" action="#!">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="materialContactFormName">Nombre(s)</label>
                                <input type="text" id="materialContactFormName" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="materialContactFormLastName">Apellido(s)</label>
                                <input type="text" id="materialContactFormLastName" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="materialContactFormEmail">Correo electrónico</label>
                        <input type="email" id="materialContactFormEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="materialContactFormEmail">Número de Teléfono</label>
                        <input type="email" id="materialContactFormEmail" class="form-control">
                    </div>
                    <label for="materialContactFormEmail">Cuerpo del mensaje:</label>
                     <div class="form-group">
                         <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                    </div>
                   

                </form>

      </div>
      <div class="modal-footer">
        <div class="custom-control custom-checkbox" style="float:left;">
            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
            <label class="custom-control-label" for="defaultUnchecked">No es Spam</label>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>

