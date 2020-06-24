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

                <h5 class="text-primary" style="font-weight:bold;">Apoyo Administrativo Emprearial, Guatemala</h5>

                <div class="my-4">
                    <div class="my-1">
                        <img src="https://img.icons8.com/material/17/000000/worldwide-location--v1.png"/>
                        <span><b>Dirección:</b> Calzada San Juan 38-32 Zona 07 el Rodeo of.204 Guatemala, Guatemala</span>
                    </div>
                    <div class="my-1">
                        <img src="https://img.icons8.com/material/17/000000/email--v1.png"/>   
                        <span><b>Correos Electrónicos:</b></span><br>
                        <span class="ml-4"><a href="mailto:julio.villagran@apoyoae.com" target="_blank">julio.villagran@apoyoae.com</a></span><br>
                        <span class="ml-4"><a href="mailto:soporte@apoyoae.com" target="_blank">soporte@apoyoae.com</a></span><br>
                        <span class="ml-4"><a href="mailto:info@apoyoae.comC" target="_blank">info@apoyoae.com</a></span>
                    </div>
                    <div class="my-1">
                        <img src="https://img.icons8.com/material/17/000000/phone--v1.png"/>
                        <span><b>Teléfonos:</b></span><br>
                        <span class="ml-4">+502 2438-0949</span><br>
                        <span class="ml-4">+502 2258-8661</span><br>
                        <span class="ml-4">+502 2269-0953</span>
                    </div>
                    <div class="my-1">
                        <img src="https://img.icons8.com/material-outlined/17/000000/whatsapp.png"/>
                        <span><b>Whatsapp:</b> <a href="https://wa.me/50247589498" target="_blank">+502 4758-9498</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="d-inline mr-1">
                            <img src="https://img.icons8.com/material-outlined/17/000000/geography.png"/>
                            <span><b>Redes sociales:</b></span><br>
                            <span class="ml-4"><img class="header-icon" src="https://img.icons8.com/material/17/000000/facebook-new.png"/> Facebook: <a href="https://www.facebook.com/SistemasAspelApoyoAdministrativoEmpresarial/">Apoyo Administrativo Empresarial</a></span>
                        </div>
                    </div>
                </div>
                    

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-contacto">Contactar</button>

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