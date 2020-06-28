<?php   
    include("../action.php");
    error_reporting(0);
?>  
<header>
<div class="preheader">
        <div>
            <div class="float-left mt-1 mr-3">
                <img class="header-icon" src="https://img.icons8.com/material/17/000000/email--v1.png"/>   
                <span style="font-size:12px;"><b>Correo Electrónico:</b> <a href="mailto:info@apoyoae.com" target="_blank">info@apoyoae.com</a>, <a href="../contacto.php">ver todos</a></span>
            </div>
            <div class="float-left mt-1 mr-3">
                <img class="header-icon" src="https://img.icons8.com/material/17/000000/phone--v1.png"/>
                <span style="font-size:12px;"><b>Teléfono:</b> +502 2438-0949, <a href="../contacto.php">ver todos</a></span>
            </div>
            <div class="float-left mt-1 mr-3">
                <img class="header-icon" src="https://img.icons8.com/material-outlined/17/000000/whatsapp.png"/>
                <span style="font-size:12px;"><b>Whatsapp:</b> <a href="https://wa.me/50247589498" target="_blank">+502 4758-9498</a></span>
            </div>
        </div>

        <div>
            <div class="float-right mt-1 ml-2">
                <span style="font-size:12px;"><b>Redes sociales:</b></span>
                <a href="https://www.facebook.com/SistemasAspelApoyoAdministrativoEmpresarial/" target="_blank"><img class="header-icon ml-2" src="https://img.icons8.com/material/17/000000/facebook-new.png"/></a>
            </div>
        </div>
     </div>
     <div class="contheader">

     <?php
        $resultados = mysqli_query($conexion, "SELECT * FROM $tlogos");
        $consulta = mysqli_fetch_array($resultados);
        {
           echo"
           <img src=\"data:image/jpg;base64,".base64_encode($consulta['imagen'])."\" alt=\"LogotipoPrincipal\" class=\"logop\">
           ";
        }   
    ?>

        <button class="btnmenu  border" id="btnmenu" onclick="btnmenu()"><img src="https://img.icons8.com/ios-glyphs/24/000000/menu.png"></button>
        <nav class="principal openmenu " id="nav-principal">
            <ul class="">
                <div class="menucontent p-1">
                    <a class="btnheader btn" id="hp1" href="../index.php">Inicio</a>
                    <hr>
                    <a class="btnheader btn" id="hp2" href="../productos.php">Productos</a>
                    <hr>
                    <a class="btnheader btn" id="hp3" href="../capacitaciones.php">Capacitación</a>
                    <hr>
                    <a class="btnheader btn" id="hp4" href="../soporte.php">Soporte</a>
                    <hr>
                    <a class="btnheader btn" id="hp5" href="../nosotros.php">Nosotros</a>
                    <hr>
                    <a class="btnheader btn" id="hp6" href="../contacto.php">Contacto</a>
                    <a class="btn btn-cotizar btn-outline-primary" href="productos/cotizaciones.php">COTIZAR</a>
                    <?php  
                if(isset($_SESSION['username']))  
                {  
                ?>  
                    <a class="rounded border border-secondary" id="hp5" href="panel/admin.php">
                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                              width="19" height="19"
                              viewBox="0 0 172 172"
                              style="margin-right:3px; fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M86,6.90688c-43.65602,0 -79.12,35.46398 -79.12,79.12c0,41.63931 32.27171,75.80172 73.1336,78.87141c0.08056,0.00655 0.16115,0.01386 0.24187,0.02015c1.9,0.13691 3.80998,0.22844 5.74453,0.22844c1.93455,0 3.84453,-0.09153 5.74453,-0.22844c0.08072,-0.0063 0.16131,-0.01361 0.24187,-0.02015c40.86189,-3.06969 73.1336,-37.2321 73.1336,-78.87141c0,-43.65602 -35.46398,-79.12 -79.12,-79.12zM86,13.78688c39.93779,0 72.24,32.3022 72.24,72.24c0,19.71706 -7.89544,37.55193 -20.6736,50.57875c-5.46671,-3.98083 -12.22246,-6.35558 -18.275,-8.47906c-7.16896,-2.5112 -13.95113,-4.89168 -15.82937,-9.03c-0.29584,-3.53288 -0.2694,-6.29176 -0.24188,-9.46l0.00672,-1.34375c3.05472,-2.9068 6.89623,-9.04167 8.21031,-14.70735c2.2704,-1.21088 5.04643,-4.11354 5.87891,-11.06578c0.41624,-3.45032 -0.56572,-6.12245 -1.94172,-7.91469c1.8576,-6.3812 5.55361,-22.53555 -0.92047,-32.96219c-2.73824,-4.40664 -6.87027,-7.18686 -12.30203,-8.28422c-3.05128,-3.77712 -8.80925,-5.83859 -16.50797,-5.83859c-11.69944,0.21672 -20.27622,3.80018 -25.4775,10.64922c-6.13352,8.084 -7.29248,20.29804 -3.45344,36.32156c-1.42072,1.79224 -2.44546,4.50307 -2.02234,8.02219c0.83592,6.95224 3.60179,9.8549 5.87219,11.06578c1.31408,5.67256 5.15215,11.80726 8.21031,14.71406l0.00672,1.31015c0.02752,3.182 0.05396,5.94696 -0.24188,9.4936c-1.88512,4.14864 -8.69992,6.55503 -15.90328,9.09719c-6.0162,2.12442 -12.73196,4.50283 -18.18765,8.43203c-12.78804,-13.02829 -20.68703,-30.87322 -20.68703,-50.59891c0,-39.93779 32.30221,-72.24 72.24,-72.24z"></path></g></g>
                         </svg>
                         <?php echo $_SESSION['username']; ?>
                    </a>
                <?php  
                }  
                else  
                {  
                ?>  
                    <a class="rounded" name="login" id="login" data-toggle="modal" data-target="#loginModal" style="display:none;">login</a>
                <?php  
                }  
                ?>  
                </div>

            </ul>
        </nav>
    </div>
    
        
</header>

  
 <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog modal-dialog-centered">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Iniciar sesión como administrador</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                       
                </div>  
                <div class="modal-body">  
                     <label>Nombre de usuario</label>  
                     <input type="text" name="username" id="username" class="form-control" pattern="[A-Za-z0-9_-]{1,15}"/>  
                     <br />  
                     <label>Contraseña</label>  
                     <input type="password" name="password" id="password" class="form-control" pattern="[A-Za-z0-9_-]{1,15}"/>  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-primary">Ingresar</button>  
                     <button type="button" name="login_button" id="login_button" class="btn btn-danger" onclick="cerrarmodal();">Cancelar</button>  
                </div>  
           </div>  
      </div>  
 </div>  
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    function btnmenu(){
        document.getElementById("nav-principal").classList.toggle("openmenu");
    }
</script>
<script>
$(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    data: {username:username, password:password},  
                    success:function(data)  
                    {  
                         //alert(data);  
                         if(data == 'No')  
                         {  
                              alert("Es necesario llenar los datos");  
                         }  
                         else  
                         {  
                              $('#loginModal').hide();  
                              location.reload();  
                         }  
                    }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
 });  

</script>
<script>
     document.addEventListener ("keydown", function (e) {
          if (e.altKey  &&  e.which === 78) {
              $('#loginModal').modal('toggle');
          }
     });
</script>
<script>
function cerrarmodal(){  
     $('#loginModal').hide(); 
};
</script>