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
    include("../parts/social.php");
?>

<!--AREA DE CONTENIDO=====================================================-->

    
    <div class="precontenedor"></div>

    <section class="contenedor noselect">

        <div class="bg-light border rounded w-100 my-3 mx-auto p-4">
        
        <h2>Cotizaciones</h2><hr>

<div class="row">
    <div class="form-grop col-6">
          <!--FORMULARIO DE DATOS DE COTIZACIÓN-->
          <h6>Nombre</h6>
            <input class="form-control" type="text" name=""><br>
          <h6>Apellido</h6>
            <input class="form-control" type="text" name=""><br>
          <h6>Empresa</h6>
            <input class="form-control" type="text" name=""><br>
          <div class="form-group" >
            <h6>Motivo de Contacto</h6>
            <textarea id="my-textarea" class="form-control" name=""  style="height: 200px;"></textarea>
          </div>
    </div>
    <div class="col-6" >    
        <!--CONTENEDOR DE DATOS DE COTUZACIÓN-->
          <h6>Correo Electrónico</h6>
              <input class="form-control" type="text" name=""><br>
          <h6>Teléfono</h6>
              <input class="form-control" type="text" name=""><br>

        <!-- INICIO DE CONTENEDOR DE SELECCION-->
            <div class="form-group">
                <div class="form-group col-6">
                  <label for="inputState">Productos</label>
                  <select id="inputState" class="form-control">
                        <option selected>Seleccionar</option>
                          <option>Aspel SAE</option>
                          <option>Aspel BANCO</option>
                          <option>Aspel COI</option>
                          <option>Aspel NOI</option>
                          <option>Aspel PRODUCCIÓN</option>
                          <option>Aspel CAJA</option>
                          <option>Curso Factura Electrónica.</option>
                          <option>Asesoría Aspel Presencial (mínimo)</option>
                          <option>Asesoría Aspel remoto (mínimo)</option>
                          <option>ITS Administración negocios.   NO</option>
                          <option>ITS Crm-Aspel SAE</option>
                          <option>ITS Repartos-Aspel SAE</option>
                          <option>ITS Comisiones.- Aspel SAE</option>
                          <option>Sistema Móvil, para el área de ventas. (Pedidos, cotizaciones facturas)</option>
                        </select>
                </div>
                <div class="form-group col-6">
                    <label for="inputState">Capacitaciones</label>
                        <select id="inputState" class="form-control">
                        <option selected>Seleccionar</option>
                          <option>Aspel SAE</option>
                          <option>Aspel BANCO</option>
                          <option>Aspel COI</option>
                          <option>Aspel NOI</option>
                          <option>Aspel PRODUCCIÓN</option>
                          <option>Aspel CAJA</option>
                          <option>Curso Factura Electrónica.</option>
                          <option>Asesoría Aspel Presencial (mínimo)</option>
                          <option>Asesoría Aspel remoto (mínimo)</option>
                          <option>ITS Administración negocios.   NO</option>
                          <option>ITS Crm-Aspel SAE</option>
                          <option>ITS Repartos-Aspel SAE</option>
                          <option>ITS Comisiones.- Aspel SAE</option>
                          <option>Sistema Móvil, para el área de ventas. (Pedidos, cotizaciones facturas)</option>
                        </select>
                </div><br><br> 
            </div>
        <!-- FINAL DE CONTENEDOR DE SELECCION-->  

                <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          No es Spam
                        </label>
                      </div>
                </div>

                <button class="btn btn-primary" type="button">Enviar Cotización</button>           
    </div>
</div>
        
        </div>          

    </section>

                          
  
        

<?php
    include("../parts/footer.php")
?>

</body>
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
    <script>
        $page = 2;
    </script> 
</html>
