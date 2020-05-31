<!--
ASPEL proyect, productos.php v1er
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/header.php");
    include("parts/social.php");
?>

<!--AREA DE CONTENIDO=====================================================-->


  
<section class="sector" id="sector4">
    <div class="seccion" style="float:left">
    <br>
        <h3 class="mx-1">Servicios Aspel</h3>
        <p class="mx-1">contamos con una amplia gama de servicios como lo son nuestras capacitaciones en un nivel basico y avanzado para el personal de tu empresa ademas de nuestras polizas de diferentes tipos de necesidades ,ta,mbien esta nuestro soporte tecnicon y soportes a solicitud de los clientes ademas del sistema de solucion y desarrollo a la medida </p>
        <button type="button" class="btn btn-outline-light m-1" onclick="location.href='#software'">Capacitaciones</button>
        <button type="button" class="btn btn-outline-light m-1" onclick="location.href='#capacitaciones'">Pólizas</button>
    </div>
    <div class="seccion" style="float:right">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/roKHuM5P4fU?controls=0" frameborder="0" allow="autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
    </div>
</section>


    <div class="sec-software" id="software">

        <section class="sector" id="sector5">
            <div class="seccion" style="float:left">
                <h3>Capacitaciones</h3>
                <p class="mx-1">Nuestra  capacitación es personalizada, ofreciendo la ventaja de ser impartida en nuestras oficinas o en sus instalaciones, trabajando con información real de su empresa; enviamos cronogramas previamente pactados</p>
            </div>
        </section>


        <div class="p-1 margenes-g">
        
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/SAE.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SAE</h5>
                        <p class="card-text">Este curso tiene como principal objetivo la capacitación del Participante para obtener los conocimientos Y herramientas que le permitan administrar el sistema, esto es, Configurarlo para adaptarlo a las necesidades de la empresa</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>20 Hrs.</td>
          <td>TEMARIO ASPEL Aspel SAE .docx</td>
      
    </tr>
    <tr>
      <td>Avanzado</td>
      <td>10 Hrs.</td>
          <td>TEMARIO ASPEL Aspel SAE avanzado.docx </td>
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/COI.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">COI</h5>
                        <p class="card-text">Al término de este curso el usuario tendrá los conocimientos y herramientas que le permitirán administrar la información además conocimientos necesarios para realizar la captura, modificación y eliminación de los datos en los catálogos del sistema</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>15 Hrs.</td>
          <td>TEMARIO ASPEL COI.docx  </td>
      
    </tr>
    <tr>
      <td>Avanzado</td>
      <td>10 Hrs.</td>
          <td>TEMARIO ASPEL COI Avanzado.docx </td>
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/NOI.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOI</h5>
                        <p class="card-text">El participante conocerá Implementación de Aspel-NOI, desde la instalación y Configuración, la captura de la información de los trabajadores e incidencias de un período de nómina, información necesaria y relevante para facilitar la toma de decisiones en las empresas</p>
                       <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>15 Hrs.</td>
          <td>TEMARIO ASPEL NOI.docx </td>
      
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/CAJA.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">caja</h5>
                        <p class="card-text">Conocimientos necesarios para la instalación del sistema, el manejo de los procesos de captura de datos, como: líneas, departamentos, impuestos, configuración de dispositivos así Como emisión de documentos de venta digitales e impresos.</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>10 Hrs.</td>
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/BANCO.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BANCO</h5>
                        <p class="card-text">El alumno tendrá los conocimientos necesarios para el manejo y la administración del sistema, la configuración de Aspel-BANCO; conocerá la estructura general del sistema, comenzando por sus catálogos</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>15 Hrs.</td>
          <td>TEMARIO ASPEL BANCO .docx</td>
      
    </tr>
    <tr>
      <td>Avanzado</td>
      <td>10 Hrs.</td>
          <td>TEMARIO ASPEL BANCOAvanzado.docx</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/PROD.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PROD</h5>
                        <p class="card-text">Este curso el usuario conocerá la estructura general del sistema y su operación e interacción con Aspel-SAE. Se analizará los catálogos de información el manejo de los Seguimientos de Producción tales como: Fabricación Directa, Registro Automático de Órdenes,</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Informacion</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        
<table class="table table-striped">
  <thead>
    <tr>
 <th scope="col">Nivel</th>
      <th scope="col">Duracion</th>
        <th scope="col">Temario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Basico</td>
      <td>15 Hrs.</td>
          <td>TEMARIO ASPEL PROD BASICO.docx</td>
      
    </tr>
    <tr>
      <td>Avanzado</td>
      <td>10 Hrs.</td>
          <td>TEMARIO ASPEL PROD Avanzado.docx </td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
          <!--  <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/ADM.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AMD</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, hic quo accusamus ad atque consequatur quod. Labore nisi adipisci quae neque nesciunt sunt ad maiores harum dignissimos? Adipisci, magnam mollitia?</p>
                        <a href="#" class="btn btn-primary" style="position: absolute; bottom: 15px;">Mas Informacion</a>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    

<hr>

    <div class="sec-capacitaciones" id="capacitaciones">

        <section class="sector" id="sector6">
            <div class="seccion" style="float:left">
                <h3>Pólizas</h3>
                <p class="mx-1">nuestra empresa cuenta con polizas de soporte tecnico los virus y la falta de back-up's actualizados provoquen que cada dia mas clientes requieran de nuestros servicios este tipo de contratos busca como fin el mantener en optimas condiciones de funcionamiento,los sistemas Aspel que utilizan.Solo Aspel cuenta con una Poliza de Asesoria que te brinda tantos beneficios respaldando la compra de tu sistema Aspel.Por ello pone a tu disposicion el mejor programa de Servicio y Asesoria con el apoyo de la empresa lider </p>
            </div>
        </section>


        <div class="p-1 margenes-g mb-5">

        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/SAE.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="color:royalblue;text-align: center;">Poliza No.1</h4>
                <p class="card-text" style="text-align:center;">Asesoría via char, correo electonico o Telefonico</p>
                        <a href="#ventana1" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.1</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p> Cualquier problema o duda del cliente relacionado con el funcionamiento y operación de los sistemas Aspel, pudiendo implicar una o varias consultas.Todos se programan por medio de asignación de tareas, máximo de atención cliente con póliza de soporte vigente 04 horas.</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>Sin limite de Eventos</td>
          <td>Q2,530.00 - Q230.00</td>
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td>10 Eventos</td>
          <td>Q1,440.00 - Q240.00</td>
    </tr>
    <tr>
      <td>Remota</td>
      <td>05 Eventos</td>
          <td>Q900.00 - Q225.00</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>05 Eventos</td>  
          <td>Q1,125.00 - Q225.00</td> 
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>Sin limite de Eventos</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/COI.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"style="color:royalblue;text-align: center;">Poliza No.2</h4>
                 <p class="card-text"style="text-align:center;">Asesoria por conexion remota o personalizada</p>
                 <a href="#ventana2" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana2">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.2</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                         <p>se trata cualquier tipo de inconveniente en base de datos,
modificación, mantenimientos, instalaciones, revisiones de requerimientos. Se descuenta
mínimo 0.5 horas de su póliza de soporte vigente.</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>11 horas</td>
          <td>Q2,530.00 - Q230.00</td>
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td> 06 horas</td>
          <td>Q1,440.00 - Q240.00</td>
    </tr>
    <tr>
      <td>Remota</td>
      <td>04 horas</td>
          <td>Q900.00 - Q225.00</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>05 horas</td>  
          <td>Q1,125.00 - Q225.00</td> 
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>50 horas</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/NOI.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"style="color:royalblue;text-align: center;">Poliza No.3</h4>
                <p class="card-text"style="text-align:center;">Asesoria de Respaldo de datos Aspel</p>
                <a href="#ventana3" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana3">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.3</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p></p>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>04 backup</td>
          <td>Q2,530.00 - Q230.00</td>
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td>04 backup</td>
          <td>Q1,440.00 - Q240.00</td>
    </tr>
    <tr>
      <td>Remota</td>
      <td>1 backup</td>
          <td>Q900.00 - Q225.00</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>No incluido</td>  
          <td>Q1,125.00 - Q225.00</td> 
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>Configuracion y datos adicionales de usuario</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/PROD.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"style="color:royalblue;text-align: center;">Poliza No.4</h4>
                <p class="card-text"style="text-align:center;">Mantenimiento preventivo de Equipos bimensual</p>
                 <a href="#ventana4" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana4">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.4</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>no incluye</td>
         
      
    </tr>
    <tr>
      <td>Tipica</td>
     <td>no incluye</td>
         
    </tr>
    <tr>
      <td>Remota</td>
     <td>no incluye</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>no incluido</td>  
         
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>1 a 7 equipos en horas presenciales</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/CAJA.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"style="color:royalblue;text-align: center;">Poliza No.5</h4>
                <p class="card-text"style="text-align:center;">Descuentos en servicios adicionales en las instalaciones</p>
                 <a href="#ventana5" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana5">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.5</h2>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>no incluye</td>
       
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td>no incluye</td>
         
    </tr>
    <tr>
      <td>Remota</td>
      <td>10%</td>
          <td>Q900.00 - Q225.00</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>no incluido</td>  
          
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>no incluye</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/BANCO.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="color:royalblue;text-align: center;">Poliza No.6</h4>
                <p class="card-text" style="text-align:center;">Descuento especial en implementacion de facturas</p>

                 <a href="#ventana6" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana6">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.6</h2>
                        
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>10%</td>
          <td>Q2,530.00 - Q230.00</td>
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td>8%</td>
          <td>Q1,440.00 - Q240.00</td>
    </tr>
    <tr>
      <td>Remota</td>
      <td>no incluye</td>
        
    </tr>
     <tr>
      <td>Anual</td>
      <td>no inlcuida</td>  
        
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>12%</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4  border-0 tarjeta" style="overflow:hidden; height:420px;" >
                    <img src="img/BANCO.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title" style="color:royalblue;text-align: center;">Poliza No.7</h4>
                <p class="card-text"style="text-align:center;">Cursos presenciales o por video conferencias</p>
        
                 <a href="#ventana7" class="btn btn-primary" data-toggle="modal" style="float:right;margin-right:10px;margin-bottom:10px">Mas Informacion</a>
                 <div class="modal fade" id="ventana7">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" style="color: royalblue;">Poliza No.7</h2>
                        
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>se descuenta de su póliza 2 horas de soporte,ya sea utilice dos horas o fracción. Horas adicionales se tienen que coordinar según agenda establecida. (El cliente propone la agenda a tratar)</p>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Categorias</th>
      <th scope="col">Informacion</th>
        <th scope="col">Costo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Especial</td>
      <td>11 horas</td>
          <td>Q2,530.00 - Q230.00</td>
      
    </tr>
    <tr>
      <td>Tipica</td>
      <td> 06 horas</td>
          <td>Q1,440.00 - Q240.00</td>
    </tr>
    <tr>
      <td>Remota</td>
      <td>04 horas</td>
          <td>Q900.00 - Q225.00</td>
    </tr>
     <tr>
      <td>Anual</td>
      <td>05 horas</td>  
          <td>Q1,125.00 - Q225.00</td> 
    </tr>
     <tr>
      <td>Personalizada</td>
      <td>50 horas</td> 
    </tr>
  </tbody>
</table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

<!--======================================================================-->


<?php
    include("parts/footer.php")
?>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/header.js"></script>
    <script>
        $(function(){
            $.scrollUp();
        });
    </script> 
    <script>
        $page = 2;
    </script> 
</html>
