<!--
ASPEL proyect, productos.php v1er
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
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

    <section class="contenedor noselect">

        <div class="bg-light border rounded w-100 my-3 mx-auto p-4">

    <div class="row">
        <div class="col-md-6 p-4">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="48" height="48"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M28.73665,21.5c-7.82496,0 -14.33333,6.48572 -14.33333,14.31934l-0.06999,129.014l28.66667,-28.66667h100.33333c7.83362,0 14.33333,-6.49972 14.33333,-14.33333v-86c0,-7.83362 -6.49972,-14.33333 -14.33333,-14.33333zM28.73665,35.83333h114.59668v86h-106.26823l-8.37044,8.37044zM78.83333,50.16667v14.33333h14.33333v-14.33333zM78.83333,78.83333v28.66667h14.33333v-28.66667z"></path></g></g>
            </svg>
            <br>
            <br>
            <h3>Cotizar</h3>
            <p>Descripción breve sobre cotizaciones Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dicta doloribus illo inventore alias. Necessitatibus saepe error perspiciatis, quam quibusdam blanditiis ad obcaecati, ipsam fuga, beatae distinctio nesciunt laudantium nobis!</p>
            <br><br><br>
        </div>


    <!---========================================================================0--->
    <div class="col-md-6 p-4" >    
    
            <nav id="navbar-areasprogramas" class="navbar navbar-light bg-light">
                <ul class="nav nav-pills m-auto">
                    <li class="nav-item" onclick="verarea1();">
                      <a class="nav-link" id="linkarea1" >Datos de contacto </a>
                    </li>
                    <li class="nav-item" onclick="verarea2();">
                      <a class="nav-link" id="linkarea2" >Productos y Servicios</a>
                    </li>
                    <li class="nav-item" onclick="verarea3();">
                      <a class="nav-link" id="linkarea3" >Finalizar Cotización</a>
                    </li>
                </ul>
            </nav>

            <div class="cont-area py-4" id="area1">
                <!--FORMULARIO DE DATOS DE COTIZACIÓN-->
                <form class="needs-validation" novalidate>
                        <div class="row">  
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nombre(s)</label>
                                    <input class="form-control" type="text" name="" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Apellido(s)</label>
                                    <input class="form-control" type="text" name="" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Empresa</label>
                                    <input class="form-control" type="text" name="" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Número de contacto</label>
                                    <input class="form-control" type="text" name="" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Correo Electrónico</label>
                            <input class="form-control" type="text" name="" aria-describedby="inputGroupPrepend2" required>
                        </div>

                        <button class="btn btn-secondary d-block float-right">Siguiente</button>  
                     
                <!--FORMULARIO DE DATOS DE COTIZACIÓN-->  
            </div>
            <div class="cont-area py-4" id="area2">

                <h5 class="my-3 text-primary">Productos</h5>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel SEA</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel BANCO</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel COI</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel NOI</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel PRODUCCIÓN</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Aspel CAJA</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Curso Factura Electrónica</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Asesoría Aspel Presencial (mínimo)</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ITS Administración negocios</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ITS Crm-Aspel SAE</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ITS Repartos-Aspel SAE</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ITS Comisiones.- Aspel SAE</label>
                </div>
                <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Sistema Móvil, para el área de ventas</label>
                </div>
                <h5 class="my-3 text-primary">Capacitaciónes</h5>

                <button class="btn btn-secondary d-block float-right">Siguiente</button>  
            </div>

            <div class="cont-area py-4" id="area3">

                <div class="form-group">
                    <label>Nota</label>
                    <textarea id="my-textarea" class="form-control" name="" maxlength="450" style="height: 200px;"
                    onkeyup="countChars(this);" aria-describedby="inputGroupPrepend2" required></textarea>
                    <p id="charNum" style="text-align: right;">450 caracteres disponibles</p>
                </div>

                <button class="btn btn-success d-block float-right" type="submit">Enviar Cotización</button>  
            </div>

            </form> 

           
    </div>
</div>
        
        </div>          

    </section>

                          
  
        

<?php
    include("../parts/footer.php")
?>

</body>
    <!--VALIDACIÓN FORMS-->
    <script src="../js/val_campos.js"></script>
    <script src="../js/contador_coti.js"></script>
    <script src="../js/captcha.js"></script> 

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/jquery.scrollUp.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/verarea.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
</html>
