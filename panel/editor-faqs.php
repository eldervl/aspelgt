<?php
    include 'global/config.php';
    include 'global/conexion.php';
	require('../action.php');
?>

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
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/paneles.css">
    <link rel="stylesheet" href="../css/libraries/superslides.css">
</head>

<?php
    include("../parts/preloader.php");
    include("../parts/headermin.php");
    //
?>



<!--AREA DE CONTENIDO=====================================================-->

<div class="precontenedor"></div>
<section class="contenedor" id="seccion-panel">

    <button class="btn btn-light mb-2" onclick="location.href='admin-faqs.php'">
        <img src="https://img.icons8.com/ios/50/000000/left.png" style="width:20px">
        regresar al panel 
    </button>
    <div class="row bg-light border rounded w-100 mx-auto p-4">
        <div class="col-md-6">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="48" height="48"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M28.73665,21.5c-7.82496,0 -14.33333,6.48572 -14.33333,14.31934l-0.06999,129.014l28.66667,-28.66667h100.33333c7.83362,0 14.33333,-6.49972 14.33333,-14.33333v-86c0,-7.83362 -6.49972,-14.33333 -14.33333,-14.33333zM28.73665,35.83333h114.59668v86h-106.26823l-8.37044,8.37044zM78.83333,50.16667v14.33333h14.33333v-14.33333zM78.83333,78.83333v28.66667h14.33333v-28.66667z"></path></g></g>
            </svg>
            <br>
            <br>
            <p>Las preguntas ayudan a los usuarios </p>
            
            <!--SELECCION-->
            <?php
              $sentencia=$pdo->prepare("SELECT * FROM `faqs`");
              $sentencia->execute(); 
              $preguntas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
            
                            <div  class="col-md-12" style=" overflow: auto; 	height: 480px; ">
                             <?php foreach($preguntas as $datos){ ?>
                                <div class="col-md-12 mb-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mt-2 text-primary"><?php echo $datos['Titulo'];?></h5>
                                            <p class="card-text"><?php echo $datos['Info'];?></p>
                                        </div>
                                    </div>
                                </div><br>
                              <?php }?>  
                            </div>
            
            <br><br><br>
        </div>
        
        <div class="col-md-6">

        <h4 class="text-primary">Nueva pregunta</h4><br>

            <form class="form-group" action="editor-faqs.php" method="POST">
                <div class="form-group">
                    <label for="pregunta">Titulo de la pregunta frecuente</label>
                    <input type="text" class="form-control" name="Titulo" id="Titulo">
                </div>
                <div class="form-group">
                    <label for="respuesta">Respuesta de la pregunta</label>
                    <textarea class="form-control" id="Info" name="Info" style="height: 200px;" maxlength="800" onkeyup="countChars(this);"></textarea>
                </div>
            
                <!--INICIO DE CONSULTAS-->
                    <!--ELIMINAR-->   
                    <?php 
                        include("global/conection.php");
                        
                        if(isset($_POST['btn_eliminar']))
                        {
                          $Titulo = $_REQUEST['Titulo'];
            
                          $query = "DELETE FROM faqs  WHERE Titulo='$Titulo'";
                          $resultado = $conexion->query($query);	
            
                          if ($resultado) {
                            header("location: editor-faqs.php");
                          }
                          else{
                            echo "No se ha eliminado";
                          }
                    }
                    ?>   
                    
                    <!--ATUALIZAR-->
                    <?php 
                          include "global/conection.php";
                        
                          if(isset($_POST['btn_actualizar']))
                          {
                            $Titulo = $_REQUEST['Titulo'];
                            $Info = $_POST['Info'];
                            
                            $query = "UPDATE faqs SET Titulo='$Titulo', Info='$Info' WHERE Titulo='$Titulo'";
                            $resultado = $conexion->query($query);	
                            
                            if ($resultado) {
                              header("location: editor-faqs.php");
                            }
                            else{
                              echo "No se ha modificado nada";
                            }
                            }
                    ?>
                    <!--INSERTAR-->
                    <?php
                        include "global/conection.php";
        
                        if(isset($_POST['btn_Insertar']))
                        {      
                          $Titulo = $_POST['Titulo'];
                          $Info = $_POST['Info'];
        
                        if($Titulo=="" || $Info=="")
                        {
                          echo "los campos  son obligatorios";
                        }
                        else
                        {
                          mysqli_query($conexion, " INSERT INTO $tabla_db1 
                          (Titulo,Info) 
                            values 
                          ('$Titulo', '$Info')");
                        }
                        }
                    
                    ?>

                <!--FIN DE CONSULTAS-->
            
                <script>
                    function countChars(obj){
                    var maxLength = 800;
                        var strLength = obj.value.length;
                        var charRemain = (maxLength - strLength);
                    
                        if(charRemain < 0){
                            document.getElementById("charNum").innerHTML = '<span style="color: red;">Se ha exedido el limite de '+maxLength+' caracteres</span>';
                        }else{
                            document.getElementById("charNum").innerHTML = charRemain+' caracteres restantes';
                        }
                    }   
                </script> 
                <!--contador de caracteres-->
                <small id="charNum">800 caracteres restantes</small>
                
                <div class="form-group row col-12">
                    <div class=" col-4">
                         <input type="submit" value="Eliminar Pregunta" class="btn btn-danger float-right mb-3" name="btn_eliminar">
                    </div>
                    <div class=" col-4">
                         <input type="submit" value="Actualizar Contenido" class="btn btn-primary float-right mb-3" name="btn_actualizar">
                    </div>
                    <div class=" col-4">
                         <input type="submit" value="Publicar Contenido" class="btn btn-success float-right mb-3" name="btn_Insertar">
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>



<!--======================================================================-->



<?php
    include("../parts/footer.php")
?>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/jquery.superslides.js"></script>
    <script src="../js/jquery.scrollUp.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/animaciones.js"></script>
    <script src="../js/tarjetas.js"></script>
</html>


