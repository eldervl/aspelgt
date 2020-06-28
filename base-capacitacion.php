<!--
ASPEL proyect, base-capacitacion.php v1er
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
    
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect" id="seccion-infogrm">
        
        <div class="row">
            <div class="col-lg-6">
                <h2>Nombre de la capacitacion</h2>
                <br>
                <p>Nuestra  capacitación es personalizada, ofreciendo la ventaja de ser impartida en nuestras oficinas o en sus instalaciones, trabajando con información real de su empresa; enviamos cronogramas previamente pactados. Se sugieren de 2 a 3 sesiones de 4 horas para los cursos básico  y 1 a 2 sesiones en el curso avanzado.</p>
            </div>
            <div class="col-lg-6">
                <img src="xd.jpg"  style="height: 300px; width: 400px" alt="Imagen capacitacion" class="img-capacitacion">
            </div>
        </div>

    </section>

    <section class="contenedor noselect">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-a1-tab" data-toggle="pill" href="#v-pills-a1" role="tab" aria-controls="v-pills-a1" aria-selected="true">ASPEL SAE</a>
                <a class="nav-link" id="v-pills-a2-tab" data-toggle="pill" href="#v-pills-a2" role="tab" aria-controls="v-pills-a2" aria-selected="false">ASPEL COI</a>
                <a class="nav-link" id="v-pills-a3-tab" data-toggle="pill" href="#v-pills-a3" role="tab" aria-controls="v-pills-a3" aria-selected="false">ASPEL BANCO</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-a1" role="tabpanel" aria-labelledby="v-pills-a1-tab">
                    
                    <!--
                        ÁREA 1
                    -->

                    <h2 class="font-weight-bold text-primary">ASPEL SAE</h2>
                    <p>Al término de este curso el asistente obtendrá los conocimientos y herramientas que le permitan administrar el sistema, esto es, configurarlo para adaptarlo a las necesidades de la empresa, así como lograr un uso eficiente de las diversas funciones que el sistema provee. Se revisará la forma de dar de alta información en los diferentes catálogos del sistema como Zonas, Vendedores, Clientes, Proveedores, Inventarios, etc., registrar todos los documentos de ventas y compras, los movimientos de cuentas por cobrar y por pagar. 

De esta manera, se inicia el trabajo con el sistema con las bases que aseguran la correcta operación y uso del mismo. 

Es importante mencionar que el curso es Básico, para lo cual contamos con planes de soporte que te brinda tantos beneficios respaldando la compra de tu Sistema Aspel. Por ello pone a tu disposición el mejor programa de Servicio y Asesoría con el apoyo de tu distribuidor integra y soporte Certificado ApoyoAE.
</p>
                </div>

                <div class="tab-pane fade" id="v-pills-a2" role="tabpanel" aria-labelledby="v-pills-a2-tab">
                    
                    <!--
                        ÁREA 2
                    -->

                    <h2 class="font-weight-bold text-primary"> ASPEL COI</h2>
                    <p>Al término de este curso el usuario tendrá los conocimientos necesarios para realizar la captura, modificación y eliminación de los datos en los catálogos del sistema, asimismo, conocerá las herramientas disponibles para extraer la información contable que requiera, como reportes de Pólizas, Estados de resultados y Balance general, entre otros, permitiendo así el trabajo con el sistema y la automatización de su registro contable.
También se revisarán los procesos más importantes para el manejo de la información como el manejo de pólizas y periodos.
</p>

                </div>
                
                <div class="tab-pane fade" id="v-pills-a3" role="tabpanel" aria-labelledby="v-pills-a3-tab">
                    
                    <!--
                        ÁREA 3
                    -->

                    <h2 class="font-weight-bold text-primary">ASPEL BANCO</h2>
                    <p>Al término de este curso, el participante tendrá los conocimientos para realizar la configuración de Aspel-BANCO; conocerá la estructura general del sistema, comenzando por sus catálogos (cuentas bancarias, conceptos, monedas, beneficiarios y formas de pago) para posteriormente registrar los tipos de movimientos (ingresos y egresos) que puede haber sobre las cuentas bancarias como la captura y emisión de cheques, depósitos, retiros, movimientos en tránsito, transferencias entre cuentas, programación de movimientos y manejo de movimientos con moneda extranjera. Se analizará el funcionamiento de procesos que ayudarán a simplificar la operación, como la captura masiva, el corte de conciliación, el manejo de la agenda de movimientos, entre otros. Para la realización de las prácticas de este curso se utilizará una base de datos nueva o vacía.</p>

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
    <script src="js/data.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script src="js/animaciones.js"></script>
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
