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
    include("../parts/preloader.php");
    include("../parts/header2.php");
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
            
                <br>
                <br>
                <h2>Servidores en la Nube</h2>
                <p>Nuestros servidores físicos en donde se almacenará el software y bases de datos.Todos los servidores e infraestructura trabajan con redundancia de componentes</p>    
            </div>
           <div class="col-lg-6">
               <img src="../img/productos/prod/111.jpg" alt="none">
           </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Servicio Técnico – Help Desk</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Copia de Seguridad – Back-Up</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Instalaciones</a>
               
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                 
                    <h2 class="font-weight-bold text-primary">Servicio Técnico – Help Desk</h2>
                    <p>Un técnico de Help Desk estará disponible para atender llamadas pertinentes en las horas requeridas por los clientes.Habrá un técnico disponible por cada 80 usuarios.Los técnicos de Help Desk atenderán y resolverán los siguientes Problemas de:

                    </p>
                  <ul>
              <li><i class="ri-check-double-line"></i>Conectividad</li>
              <li><i class="ri-check-double-line"></i>Configuración y reconfiguración de terminales</li>
              <li><i class="ri-check-double-line"></i>Daño físico y reparación de equipo</li>
              <li><i class="ri-check-double-line"></i>Consultas Generales</li>
              <li><i class="ri-check-double-line"></i>Credenciales</li>
             
            </ul>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    
                    <h2 class="font-weight-bold text-primary">Copia de Seguridad – Back-Up</h2>
                    <p>Actualmente, nuestra conexión de Fibra Óptica principal es con la empresa Columbus Networks. Columbus es el proveedor principal de otras empresas en Guatemala como Claro, Navega, Tigo e IBW entre otras. Es el proveedor de internet más importante a nivel Centro Americano. Son el proveedor de proveedores. Cuentan con la más avanzada infraestructura de tal manera que podemos garantizarle a nuestros clientes un 99.741% de up-time en el enlace hacia nuestras instalaciones. Además de esto contamos con una conexión redundante de salida que en caso falle la principal

                    </p>
                  <ul>
              <li><i class="ri-check-double-line"></i>• Copia de seguridad de Servidores para Resguardo de información, garantía de continuidad del negocio y rescate en casos de desastre</li>
              <li><i class="ri-check-double-line"></i>Conexion</li>
             
            </ul>

                </div>
                
               
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    
         
                    <h2 class="font-weight-bold text-primary">Instalaciones</h2>
                    <p>Nuestro centro de datos está físicamente instalado en el edificio más seguro de Guatemala, tanto en infraestructura, como en resguardo de espacio físico (Zona Pradera). Además de esto contamos con sistemas de seguridad dentro del centro que garantizan la integridad física del centro en sí. </p>

                    <P>Entre otras, cámaras infrarrojas y restricciones físicas de ingreso al centro de datos. Nuestro centro de datos además cuenta con redundancia de energía eléctrica. Con certificación de APC, podemos garantizar casi un 100% de up-time incluso en fallos generales en el sistema nacional de energía eléctrica

                    </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i>servidores</li>
              <li><i class="ri-check-double-line"></i>Nuestros servidores son diseñados a la medida de sus necesidades</li>
              <li><i class="ri-check-double-line"></i>Todos nuestros servidores cumplen con los más altos estándares del mercado</li>
              <li><i class="ri-check-double-line"></i>DUtilizamos principalmente la marca SuperMicro (utilizados por los mayores Centros de Datos en Estados Unidos como SoftLayer, Yahoo, etc.). También podemos acomodar servidores de otras marcas si usted así lo requiere</li>
              
            </ul>
                    
                </div>
            </div>
        </div>
    </div>

    </section>

                          
  
        

<?php
    include("../parts/footer2.php")
?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/data.js"></script>
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
        $page = 2;
    </script> 
</html>
