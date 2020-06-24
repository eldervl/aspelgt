<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BACKUP</title>
    <link rel="icon" href="img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/preloader.php");
    include("parts/header.php");
    
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
            
                <br>
                <br>
                <h2>URANIUM BACKUP PRO DB </h2>
                <p>Copia de seguridad de bases de datos MySQL, MariaDB Microsoft SQL Server y servidores Exchange.Se pueden programar copias de seguridad múltiples y paralelas de servidores de bases de datos locales, en red y remotos, sin ninguna interrupción de los servicios (copia de seguridad en caliente)

</p>    
            </div>
           <div class="col-lg-6">
               <img src="img/productos/prod/bk.png" alt="none">
           </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> Programación de copias de seguridad automáticas</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Detalles</a>
                
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                 
                    <h2 class="font-weight-bold text-primary"> Programación de copias de seguridad automáticas</h2>
                    <p>En Uranium Backup se incluye una herramienta de planificación flexible y automática para que pueda crear planes de copia de seguridad completos para sus bases de datos. Es posible efectuar múltiples copias de seguridad paralelas de varios servidores de bases de datos, sin ningún consumo importante de los recursos del sistema.
                    </p>
                  <p>Uranium Backup es una solución eficaz para la copia de seguridad de MySQL, MariaDB, Microsoft SQL Server y Exchange.Uranium es compatible </p>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    
                    <h2 class="font-weight-bold text-primary">Detalles:</h2>
                    
                  <ul>
              <li><i class="ri-check-double-line"></i>Licencia de por vida</li>
              <li><i class="ri-check-double-line"></i>Permite 1 instalación por licencia, en una máquina física o virtual</li>
              <li><i class="ri-check-double-line"></i>Compatible con Windows Server</li>
              <li><i class="ri-check-double-line"></i>Asistencia y actualizaciones gratuitas</li>
              <li><i class="ri-check-double-line"></i>compatible con: MySQL versión 3.23 y posterior
</li>
<li><i class="ri-check-double-line"></i>compatible con cualquier versión de Microsoft SQL Server(incluido SQL Express)</li>
<li><i class="ri-check-double-line"></i>compatible con MariaDB versión 5.0 y posterior</li>
              <li><i class="ri-check-double-line"></i>Debe instalarse en Exchange Server para hacer copia de seguridad de los buzones</li>
             <li><i class="ri-check-double-line"></i>Puede realizar copias de seguridad ilimitadas de bases de datos en servidores ilimitados con solo una licencia</li>
            </ul>

                </div>
                
               
                   
            </div>
        </div>
    </div>

    </section>

                          
  
        

<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script src="js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 2;
    </script> 
</html>
