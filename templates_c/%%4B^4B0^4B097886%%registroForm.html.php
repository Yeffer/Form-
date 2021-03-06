<?php /* Smarty version 2.6.6, created on 2015-02-04 14:49:12
         compiled from registroForm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'registroForm.html', 110, false),array('function', 'html_options', 'registroForm.html', 145, false),array('function', 'html_radios', 'registroForm.html', 229, false),)), $this); ?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Description ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Registro Centro Democrático</title>
	<!-- css/CSS -->
	<link rel="stylesheet" href="css/vendor/normalize.css">
	<link rel="stylesheet" href="css/vendor/foundation.min.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- TOP SCRIPTS -->
	<script src="script/jquery_2.1.0_min.js"></script>
	<script src="script/modernizr.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- - - - - - -->
</head>
<body>
	<!-- - - - - - - -->
	<!-- INIT -->
	<header>
		<div class="logo">
			<img src="images/logo.jpg" alt="">
		</div>
	</header>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="ContentForm">
				<div class="titlleBox">
					<h4>Registro Nuevos Miembros</h4>
				</div>
				<div class="stepWrap">
					<div class="step">
						<div class="stepNum active">
							<img src="images/step.png" height="55" width="55" alt="">
						</div>
						<div class="stepTxt">Registro</div>
					</div>
					<div class="step">
						<div class="stepNum">
							<img src="images/step.png" alt="">
						</div>
						<div class="stepTxt">Confirmación de datos</div>
					</div>
					
					
				</div>

				<div class="FormWrap">

					<div class="row">
						<div class="small-12 medium-10 large-10 medium-offset-1 large-offset-1 columns">
							<p class="topTxt">
								<p>Bienvenidos al sistema de inscripción de miembros del Partido Centro Democrático. En los siguientes pasos encontrarán un formulario que debe ser diligenciado en su totalidad y de forma verás. En caso de no tener acceso a internet, existe la posibilidad de imprimir el formulario y diligenciarlo a mano para luego ser entregado en las direcciones departamentales del partido que se encuentran en este link <a href="http://www.centrodemocratico.com/direccionesdepartamentales">este link</a></p>

								<p>Una vez culminado el proceso, un carnet de acreditación será enviado a su correo electrónico y le permitirá descargarlo e imprimirlo.</p>

								<p>Gracias por contar con el Centro Democrático, un partido de todos.</p> 

	
							<!-- INIT FORM -->							
							<form action="confirmReg.php?varCtrl=1" method="POST"> 
								<!-- datos personales -->
								<div class="subTitleInput">
									<p>Datos personales*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-6 large-6 columns">
										<input type="text" placeholder="Nombre*" name="nombre">
									</div>
									<div class="small-12 medium-6 large-6 columns">
										<input type="text" placeholder="Apellidos*" name="apellido">
									</div>
									<div class="small-12 medium-12 large-12 columns">
										<input type="text" placeholder="C.C.*" name="cedula">
									</div>
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns">
												<span>Género*</span>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<input type="radio" name="genero" value="Masculino">
												<label for="">Masculino</label>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<input type="radio" name="genero" value="Femenino">
												<label for="">Femenino</label>
											</div>
										</div>
									</div>
								</div>

								<!-- fecha nacimiento -->
								<div class="subTitleInput">
									<p>Fecha de Nacimiento*</p>
								</div>
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns" id="fecha">
												<?php echo smarty_function_html_select_date(array('prefix' => 'StartDate','start_year' => '-80','end_year' => '-5','display_days' => true), $this);?>

											</div>
										</div>
									</div>
								</div>
								<!-- Contacto -->
								<div class="subTitleInput">
									<p>Contacto*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Correo: andres@ejemplo.com*" name="mail">
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Celular" name="celular">
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Teléfono" name="telefono">
											</div>
										</div>
									</div>
								</div>
								<!-- Ubicación -->
								<div class="subTitleInput">
									<p>Ubicación*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns">
												<select  name="selectPais">														
   													<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['pais'],'selected' => $this->_tpl_vars['selectPais']), $this);?>

												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="selectDepartamento" id="">
														<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['departamento'],'selected' => $this->_tpl_vars['selectDepartamento']), $this);?>

												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="selectMunicipio" id="">
														<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['municipio'],'selected' => $this->_tpl_vars['selectMunicipio']), $this);?>
											
												</select>
											</div>

											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Dirección" name="direccion">
											</div>
										</div>
									</div>
								</div>
								<!-- Ocupación -->
								<div class="subTitleInput">
									<p>Ocupación</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<select name="selectOcupacion" id="">
													<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ocupacion'],'selected' => $this->_tpl_vars['selectOcupacion']), $this);?>
										
												</select>
												<p>Ocupación: oficio al que usted se dedica la mayoría del tiempo y del cual proviene su sustento</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Lugar de votación -->
								<div class="subTitleInput">
									<p>Lugar de votación</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-6 large-6 columns">
												<input type="text" placeholder="Ejemplo: Colegio . . ." name="lugarVotacion" >
											</div>
											<div class="small-12 medium-3 large-3 columns">
												<input type="radio" name="lugarVotacion" value="urbano">
												<label for="">Casco Urbano</label>
											</div>
											<div class="small-12 medium-3 large-3 columns">
												<input type="radio" name="lugarVotacion" value="rural">
												<label for="">Rural</label>
											</div>
											<p>Lugar de votación: municipio o zona de la ciudad en la cual usted tiene inscrita su cédula de ciudadanía para votar. En caso de conocerla, puede ingresar a <a href="http://www.registraduria.gov.co/">www.registraduria.gov.co</a> y ubicar el buscador de centros de votación en el costado derecho de la página.</p>
											<p>Si usted vive en una vereda o territorio rural fuera del casco urbano del municipio, por favor indíquelo en el campo correspondiente</p>
										</div>
									</div>
								</div>
								<!-- Referido de -->
								<div class="subTitleInput">
									<p>Referido de:</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Ejemplo . . ." name="referido">
											</div>
										</div>
									</div>
								</div>
								<!-- cual tema -->
								<div class="subTitleInput2">
									<p>¿Cuál es el tema de más te preocupa en tu municipio?</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-3 large-3 columns">
												<?php echo smarty_function_html_radios(array('name' => 'tema_radios','options' => $this->_tpl_vars['temas_radios'],'selected' => $this->_tpl_vars['tema_radios'],'separator' => "<br />"), $this);?>

											</div>
									
											<div class="small-12 medium-3 large-3 columns">
												&nbsp;
											</div>
										</div>
									</div>
								</div>
								<!-- /* * * * * * * */ -->
								<hr>
								<!-- /* * * * * * * */ -->
								<!-- de acuerdo -->
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<input type="radio" name="temaMunicipio" value="">
												<label for=""> Acepto y declaro bajo la gravedad de juramento no haber cometidos relacionados con la vinculación a grupos armados ilegales y actividades del narcotráfico, delitos de lesa humanidad o delitos contra los mecanismos de participación democrática.</label>
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="radio" name="temaMunicipio" value="">
												<label for="">Manifiesto de forma expresa y libre no pertenecer a otro partido político y por tanto suscribirme como miembro del Partido Centro Democrático.</label>
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="radio" name="temaMunicipio" value="">
												<label for="">Acepto que conforme a la Ley 1581 de 2012 (Habeas Data) y su Decreto Reglamentario 1377 de 2013 permito que los datos suministrados sean empleados y almacenados por el Centro Democrático.</label>
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="radio" name="temaMunicipio" value="">
												<label for="">. Confirmo que este proceso de suscripción lo he realizado a nivel personal y en uso de mis facultades ciudadanas.</label>
											</div>
										</div>
									</div>
								</div>
								<div class="clear30"></div>
								<!-- de acuerdo -->
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-6 large-6 columns">
												<p>Al hacer click en "Siguiente" aceptas las <a href="#">Condiciones de uso</a>, su <a href="#">Política de privacidad</a>.</p>
											</div>
											<div class="small-12 medium-6 large-6 columns">
												<img src="images/captcha.png" height="123" width="331" alt="">
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="varCtrl" value="1">
                				<input type="submit" class="button_01" name="Registrar">   

								<!-- * * * * * * * * * * * * * *  -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FIN INIT -->
	<!-- - - - - - - -->

	<!-- BOTTOM SCRIPTS -->
	<script src="script/foundation.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/registroForm.js"></script>
	<script>$(document).foundation();</script>
</body>
</html>