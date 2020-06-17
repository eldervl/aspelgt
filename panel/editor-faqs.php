<!--
ASPEL proyect, index.php v1ev
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
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/contenido.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/paneles.css">
    <link rel="stylesheet" href="../css/libraries/superslides.css">
</head>

<?php
    include("../parts/preloader.php");
    include("../parts/headermin.php");
    //include("parts/social.php");
?>



<!--AREA DE CONTENIDO=====================================================-->

<div class="precontenedor"></div>
<section class="contenedor" id="seccion-panel">

    <button class="btn btn-light mb-2" onclick="location.href='admin-faqs.php'">
        <img src="https://img.icons8.com/ios/50/000000/left.png" style="width:20px">
        regresar al panel (cancelar)
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
            <p>Las preguntas ayudan a lo usuarios a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo distinctio temporibus corporis fugit voluptates, incidunt odio eius voluptas natus vitae beatae aliquid aperiam necessitatibus, recusandae facere ipsum id quos repellendus.</p>
            <br><br><br>
        </div>
        <div class="col-md-6">

        <h4 class="text-primary">Nueva pregunta</h4><br>

            <form action="">
                <div class="form-group">
                    <label for="titulo">Titulo de la pregunta frecuente</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="form-group">
                    <label for="message">Respuesta de la pregunta</label>
                    <textarea class="form-control" id="message" name="message" style="height: 200px;" maxlength="800" onkeyup="countChars(this);"></textarea>
                </div>
            
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
                
                  <button class="btn btn-primary float-right" type="button" aling="right" >Publicar</button>    
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
    <script src="../js/tarjetas.js"></script>
</html>


