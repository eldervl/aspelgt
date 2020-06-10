<!--
ASPEL proyect, contacto.php v1es
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspel - Plantilla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
    
<?php
    include("parts/header.php");
    include("parts/social.php");
?>


<!--AREA DE CONTENIDO=====================================================-->

<div class="contenedor ">

<h3>Contacto</h3>
<!--
<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">

				<form class="form-horizontal" id="contactform" role="form" method="POST" action="action_correo.php">
                </form>

				<div class="form-group">
					<input id="name" type="text" placeholder="Nombre *" class="form-control"  name="name">
				</div>

				<div class="form-group">
					<input type="text" placeholder="Teléfono *" class="form-control" name="phone">
				</div>


				<div class="form-group">
					<input type="email" placeholder="E-Mail *" class="form-control" name="email">
				</div>


				<div class="form-group">
					<textarea class="input-message form-control" placeholder="Mensaje *"  rows="7" name="message"></textarea>
				</div>

                    <div class="clear"></div>                        
						<div class="col-md-12 text-center pt-5">	
							<form onsubmit="return checkForm(this);">
								<div class="checkbox primary line-icon on-light">
									<input id="checkForm" type="checkbox" required name="terms">
									<label for="checkForm">
										Presione y valide que no es SPAM
									</label>
								</div>
				       		</form> 
				  		</div>

				  		</div>
					<div class="clear"></div>
					<div class="col-md-12 mt-5 text-center">
						<button class="btn btn-primary btn-round btn-long" name="submit" type="submit" value="Send">Enviar <i class="fa fa-envelope"></i></button>
					</div>

					<div class="mt-2 col-md-12 text-center">
						<div class="row justify-content-center" id="formmessage"></div>	
					</div>

			
			</div>

</div>
-->


          <div class="row">
              <br>

              <!-- INICIO FORMULARIO -->
              <div class="col-md-6">

                  <br>
        

                      <!--Card content-->
                      <div class="card-body px-lg-5 pt-0">

                          <!-- Form -->
                          <form class="" style="color: #757575;" action="#!">
                            <br>
                              <!-- Nombre -->
                              <div class="md-form mt-3">
                                  <label for="materialContactFormName">Nombre y Apellido</label>
                                  <input type="text" id="materialContactFormName" class="form-control">
                              </div>

                              <!-- E-mail -->
                              <div class="md-form">
                                  <label for="materialContactFormEmail">E-mail</label>
                                  <input type="email" id="materialContactFormEmail" class="form-control">
                              </div>

                            <!-- E-mail -->
                                <div class="md-form">
                                    <label for="materialContactFormEmail">Número de Teléfono</label>
                                    <input type="email" id="materialContactFormEmail" class="form-control">
                                </div>
                            
                                <!--Mensaje-->
                                 <label for="materialContactFormEmail">Motivo de la Consulta:</label>
                              <div class="md-form">
                                  <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                              </div>
                            
                              <br>
                              <!-- CAPCHA -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">No es Spam</label>
                            </div>

                              <!-- Send button -->
                              <button class="btn btn-success btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Enviar</button>

                          </form>
                          <!-- Form -->
                          <div class="section background-white padding-top-bottom over-hide z-bigger-2">
			<div class="container-fluid padding-on-grid-6 mx-auto">	
				<div class="row">
					<div class="col-md-4">	
						<div class="services-box-1 p-0 ">
                            <a href="https://www.waze.com/es/livemap?utm_source=waze_website&utm_campaign=waze_website"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="24" height="24"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M86,14.33333c-27.70633,0 -50.16667,22.46033 -50.16667,50.16667c0,28.423 31.562,70.37667 44.61967,86.50883c2.86667,3.54033 8.22733,3.54033 11.094,0c13.05767,-16.13217 44.61967,-58.08583 44.61967,-86.50883c0,-27.70633 -22.46033,-50.16667 -50.16667,-50.16667zM86,82.41667c-9.89717,0 -17.91667,-8.0195 -17.91667,-17.91667c0,-9.89717 8.0195,-17.91667 17.91667,-17.91667c9.89717,0 17.91667,8.0195 17.91667,17.91667c0,9.89717 -8.0195,17.91667 -17.91667,17.91667z"></path></g></g></svg>
                            </a>
                            <a href="https://www.waze.com/es/livemap?utm_source=waze_website&utm_campaign=waze_website"><p class="text-dark">¿Cómo Llegar?</p></a>
						</div>
					</div>				
					<div class="col-md-4">	
						<div class="services-box-1 p-0 ">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="24" height="24"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M137.74333,109.29167l-18.06,-2.07833c-4.37167,-0.50167 -8.67167,1.00333 -11.75333,4.085l-13.25833,13.25833c-10.1695,-5.16 -19.393,-11.8895 -27.36233,-19.866c-7.9765,-7.96933 -14.706,-17.19283 -19.866,-27.36233l13.25833,-13.25833c3.08167,-3.08167 4.58667,-7.38167 4.085,-11.75333l-2.07833,-18.06c-0.86,-7.23833 -6.95167,-12.685 -14.26167,-12.685h-12.39833c-8.09833,0 -14.835,6.73667 -14.33333,14.835c1.89917,30.5945 15.07867,58.10733 35.42483,78.4535c20.34617,20.34617 47.859,33.52567 78.4535,35.42483c8.09833,0.50167 14.835,-6.235 14.835,-14.33333v-12.39833c0,-7.31 -5.44667,-13.40167 -12.685,-14.26167z"></path></g></g></svg>
                            </a>
                            <br>
                            <br>
                            <a href="tel: 24380949"><p class="text-dark">PBX: 24380949</p></a>

						</div>
					</div>
					<div class="col-md-4">	
						<div class="services-box-1 p-0 ">
                            <a href="mailto:info@apoyoae.com"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="24" height="24"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M28.66667,28.66667c-4.773,0 -8.98151,2.34406 -11.57585,5.94889c-1.74867,2.42233 -0.97612,5.85595 1.55371,7.43262l62.93229,39.2207c2.709,1.69133 6.13735,1.69133 8.84636,0l62.66634,-39.55664c2.63017,-1.66267 3.28592,-5.27623 1.34375,-7.69857c-2.61583,-3.25367 -6.60643,-5.34701 -11.09993,-5.34701zM154.19531,57.94922c-0.59931,0.00661 -1.20792,0.17178 -1.77767,0.5319l-61.99446,39.09472c-2.70901,1.68417 -6.13736,1.67734 -8.84636,-0.014l-62.00846,-38.63281c-2.279,-1.419 -5.23503,0.22396 -5.23503,2.91146v67.15951c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-67.62142c0,-2.021 -1.67342,-3.44918 -3.47135,-3.42936z"></path></g></g></svg>
                            </a>
                            <a href="mailto:info@apoyoae.com"><p class="text-dark">Coreo Electrónico</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
                      </div>

<br><br><br><br><br><br><br>
                      
                  </div>


                  
               <!-- FINAL FORMULARIO -->


               <!-- INICIO DEL MAPA -->

                    <div class="col-md-6">
                        <br>
                        <br>
                        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.301259899349!2d-90.56672468584738!3d14.638832780064742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a034c15a8e29%3A0x44596677f777f298!2sApoyo%20Administrativo%20Empresarial!5e0!3m2!1ses!2sgt!4v1589894547593!5m2!1ses!2sgt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



                            
                    </div>

                    

              <!-- FIN DEL MAPA -->
          </div>

          <!-- INICIO RUTAS DE CONTACTO -->
          <br>
          <br>
         
        <!-- FIN RUTAS DE CONTACTO -->
	</section>
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
        $page = 5;
    </script> 
    <script src="maps.json"></script>
</html>