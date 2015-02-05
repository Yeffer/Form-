<?php /* Smarty version 2.6.6, created on 2015-02-05 06:24:35
         compiled from confirmReg.html */ ?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Description ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Registro Centro Democrático</title>
	<!-- CSS -->
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
	<script></script>
	<style></style>

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
						<div class="stepNum">
							<img src="images/step.png" height="55" width="55" alt=""></div>
						<div class="stepTxt">Registro</div>
					</div>
					<div class="step">
						<div class="stepNum active">
							<img src="images/step.png" height="55" width="55" alt=""></div>
						<div class="stepTxt">Confirmación de datos</div>
					</div>

				</div>
				<div class="clear30"></div>
				<!-- /* * * * DATOS * * * */ -->
				<div class="dataWrap">
						<div class="row">
							<div class="small-12 medium-8 large-8 medium-offset-2 large-offset-2 columns">
								<div class="itemData">
									<input type="hidden" name="nombre" value="<?php echo $this->_tpl_vars['datos']['nombre']; ?>
">
									<div class="small-12 medium-6 large-6 columns"> <strong>Nombre:</strong></div>
									<div class="small-12 medium-6 large-6 columns" id="datos_nombre"><?php echo $this->_tpl_vars['datos']['nombre']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns"> <strong>Apellidos:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_apellido"><?php echo $this->_tpl_vars['datos']['apellido']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Cédula de Ciudadania:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_cedula"><?php echo $this->_tpl_vars['datos']['cedula']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Género:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_genero"><?php echo $this->_tpl_vars['datos']['genero']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Fecha de nacimiento:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_fecha"><?php echo $this->_tpl_vars['datos']['dia']; ?>
 - <?php echo $this->_tpl_vars['datos']['mes']; ?>
 - <?php echo $this->_tpl_vars['datos']['ano']; ?>
 </div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Correo electrónico:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_mail"><?php echo $this->_tpl_vars['datos']['mail']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Celular:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_celular"><?php echo $this->_tpl_vars['datos']['celular']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Teléfono:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_telefono"><?php echo $this->_tpl_vars['datos']['telefono']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>País:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_pais"><?php echo $this->_tpl_vars['datos']['selectPais']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Departamento:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_departamento"><?php echo $this->_tpl_vars['datos']['selectDepartamento']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Municipio:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_municipio"><?php echo $this->_tpl_vars['datos']['selectMunicipio']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Dirección:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_direccion"><?php echo $this->_tpl_vars['datos']['direccion']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Oficio:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_ocupacion"><?php echo $this->_tpl_vars['datos']['selectOcupacion']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>Lugar de Votación:</strong>
									</div>
									<div class="small-12 medium-6 large-6 columns" id="datos_votacion"><?php echo $this->_tpl_vars['datos']['lugarVotacion']; ?>
</div>
								</div>
								<div class="itemData">
									<div class="small-12 medium-6 large-6 columns">
										<strong>¿Cuál es el tema de más te preocupa en tu municipio?</strong>
									</div>
									<input type="hidden" name="" value="<?php echo $this->_tpl_vars['datos']['tema_radios']; ?>
">
									<div class="small-12 medium-6 large-6 columns" id="datos_temas"><?php echo $this->_tpl_vars['datos']['tema_radios']; ?>
</div>
									
								</div>
							</div>
						</div>

					</div>
					<div class="clear30"></div>
					<!-- /* * * * BTN * * * */ -->
					<div class="btnsInitBox" align="center">

						<div class="small-12 medium-2 large-2 columns" align="center">&nbsp;</div>
						<div class="small-12 medium-4 large-4 columns" align="center">
							<a href="registroForm.php" class="button_01">Volver</a>
						</div>
						<div class="small-12 medium-4 large-4 columns" align="center">							
                			<a href="#" class="button_01" id="guardar_ajax">Registrar</a>
						</div>
						<div class="small-12 medium-2 large-2 columns" align="center">&nbsp;</div>
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