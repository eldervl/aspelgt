<footer class="page-footer font-small elegant-color-dark">
<div style="background-color: #FFFFFF;">
  <div class="container">
    <div class="row py-4 d-flex align-items-center">
    </div>
  </div>
</div>
<div class="container text-center text-md-left mt-5">
  <div class="row mt-3">
    <!--Area info ApoyoAE-->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"> 
      <h6 class="text-uppercase font-weight-bold">ApoyoAE</h6>
      <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Somos un equipo de profesionales lider en la implementación y comercialización de software y hardware, soluciones empresariales diseñadas para ayudar al ciclo de negocios de micro, pequeñas y medianas empresas.</p>
    </div>
    <!--Area de páginas-->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">Información</h6>
      <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="../productos.php">Productos</a>
      </p>
      <p>
        <a href="../capacitaciones.php">Capacitaciones</a>
      </p>
      <p>
        <a href="../soporte.php">Soporte</a>
      </p>
      <p>
        <a href="../nosotros.php">Nosotros</a>
      </p>
      <p>
        <a href="../contacto.php">Contacto</a>
      </p>
    </div>
    <!--Area de ayuda al publico-->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">Público</h6>
      <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="../faqs.php">FAQS</a>
      </p>
      <p>
        <a href="../cotizaciones.php">Cotizaciones</a>
      </p>
      <p>
        <a href="../contacto.php">Contacto</a>
      </p>
    </div>
    <!--Area de contacto-->


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

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      <h6 class="text-uppercase font-weight-bold">Contacto</h6>
      <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <br>
        <img src="https://img.icons8.com/material/17/000000/worldwide-location--v1.png"/> <span><b>Dirección:</b></span><br>
        <?php if(!empty($consulta['direccion'])){ ?> <?php echo $consulta['direccion']?></span> <?php $direccion=$direccion+1; } else {  }?>
        <?php if($direccion == 0) { ?> <small>No hay dirección disponible</small> <?php } else { } ?>
        <br>
        <br>
        <img class="mr-2" src="https://img.icons8.com/material/17/000000/phone--v1.png"/><b>Números de teléfono:</b><br>
        <?php if(!empty($consulta['telefono1'])){ ?> <span><?php echo $consulta['telefono1']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
        <?php if(!empty($consulta['telefono2'])){ ?> <span><?php echo $consulta['telefono2']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
        <?php if(!empty($consulta['telefono3'])){ ?> <span><?php echo $consulta['telefono3']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
        <?php if(!empty($consulta['telefono4'])){ ?> <span><?php echo $consulta['telefono4']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
        <?php if(!empty($consulta['telefono5'])){ ?> <span><?php echo $consulta['telefono5']?></span><br> <?php $telefonos=$telefonos+1; } else {  }?>
        <?php if($telefonos == 0) { ?> <small>No hay números de teléfono disponibles</small> <?php } else { } ?>
        <br>
        <br>
        <img class="mr-2" src="https://img.icons8.com/material/17/000000/email--v1.png"/> <span><b>Correos Electrónicos:</b></span><br>
        <?php if(!empty($consulta['email1'])){ ?> <span><a href="mailto:<?php echo $consulta['email1']?>" target="_blank"><?php echo $consulta['email1']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
        <?php if(!empty($consulta['email2'])){ ?> <span><a href="mailto:<?php echo $consulta['email2']?>" target="_blank"><?php echo $consulta['email2']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
        <?php if(!empty($consulta['email3'])){ ?> <span><a href="mailto:<?php echo $consulta['email3']?>" target="_blank"><?php echo $consulta['email3']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
        <?php if(!empty($consulta['email4'])){ ?> <span><a href="mailto:<?php echo $consulta['email4']?>" target="_blank"><?php echo $consulta['email4']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
        <?php if(!empty($consulta['email5'])){ ?> <span><a href="mailto:<?php echo $consulta['email5']?>" target="_blank"><?php echo $consulta['email5']?></a></span><br> <?php $correos = $correos+1; } else {  }?>
        <?php if($correos == 0) { ?> <small>No hay direcciones de correo electrónico disponibles</small> <?php } else { } ?>
    </div>
  </div>
</div>
<br>
<!--Area de copyright-->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="../creditos.html">Instituto Emiliani Somascos</a>
</div>
</footer>
