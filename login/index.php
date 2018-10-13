<?php 
session_start();

include('lib/config.php');
include('core/core.php');

ini_set('error_reporting',0);
?>

<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- CURRENT STYLE PAGE -->
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
		<!-- BOOTSTRAP CSS & JS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- FLEXBOX GRID CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/flexboxgrid.min.css">
		<!-- FONT AWESOME includes -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		
		<title><?php echo P_TITLE; ?></title>
	</head>

	<!-- SCRIPT PARA FORMULARIOS -->

		<script>
			
		window.onload = function() {

  			document.getElementById('register-form').style.display = 'none';
  			document.getElementById('forgot-form').style.display = 'none';
		}

		function login(){

			var elemento = document.getElementById("login-form");
		   elemento.style.display = 'block';
		   	var elemento = document.getElementById("register-form");
		   elemento.style.display = 'none';
		   	var elemento = document.getElementById("forgot-form");
		   elemento.style.display = 'none';
		}
		 
		function register(){

			var elemento = document.getElementById("register-form");
		   elemento.style.display = 'block';
			var elemento = document.getElementById("login-form");
		   elemento.style.display = 'none';
		   	var elemento = document.getElementById("forgot-form");
		   elemento.style.display = 'none';

		}

		function forgot(){

			var elemento = document.getElementById("forgot-form");
		   elemento.style.display = 'block';
			var elemento = document.getElementById("login-form");
		   elemento.style.display = 'none';
		   	var elemento = document.getElementById("register-form");
		   elemento.style.display = 'none';

		}
		
		</script>

	<body>
	   
		<div class="register-form">
			<center>
				<img class="logo" src="assets/img/logo.png">
			</center>
			<hr class="desktop hr-separador">
			<hr class="mobile mb-separador">
			
		<!-- Solo se muestra en dispositivos moviles con un maximo de 1024px -->
		<div class="mobile">
		    
		    <div class="row center-xs">
		        <div class="col-xs-10">
		        <span class="mobile-text">Entra para ver las fotos de tus amigos, organiza quedadas y mucho más.</span>
		        </div>
		        <br><br><br>
		        <div class="col-xs-10">
		            <a href="#" class="btn btn-block btn-primary">Registrarse</a>
		        </div>
		        <br><br>
		        
		            <hr class="btn-separador"><span>O</span><hr class="btn-separador">
		            
		      <br><br>
		      <div class="col-xs-10">
		            <a href="#" class="btn btn-block btn-default">Entrar</a>
		        </div>
		      
		    </div>
		</div>
		<!-- Fin codigo dispositivos moviles -->
		
		<!-- Solo se muestra en pantallas con un minimo de 1024px -->

		<!-- FORMULARIO LOGIN -->

		<div id="login-form" class="login-form desktop">
			
			<form class="form-horizontal" method="POST">
				<fieldset>
					<h3 class="form-title">Iniciar Sesión</h3>
				
				<!-- Prepended text-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">@</span>
				      <input id="user" name="user" class="form-control" placeholder="Usuario" type="text" required="">
				    </div>
				    </div> 
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <input id="passwd" name="passwd" type="password" placeholder="Contraseña" class="form-control input-md" required="">
				    </div> 
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <button id="login_btn" name="login_btn" class="btn btn-primary">Entrar</button>
				  </div>
				</div>
				</div> 
				</fieldset>
			</form>
			<div class="row center-xs">
				<div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					<a onclick="JavaScript:forgot();"><span>He olvidado mi contraseña.</span></a>
				</div>
			</div>
			<div class="row center-xs">
				<div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					<span><small>¿Todavía no estas registrado? <a onclick="JavaScript:register();"><br>Regístrate.</small></span></a>
				</div>
			</div>
			<br>
		</div>
			

		<!-- FIN FORMULARIO LOGIN -->

		<!-- FORMULARIO CONTRASEÑA OLVIDADA -->

		<div id="forgot-form" class="forgot-form desktop" >
			
			<form class="form-horizontal" method="POST">
				<fieldset>
					<h3 class="form-title">He olvidado mi contraseña</h3>
				
					<!-- Text input-->
					<div class="form-group">
					  <div class="row center-xs">
					  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					  <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-control input-md" required="">
					   </div>  
					  </div>
					</div>

					<!-- Button -->
					<div class="form-group">
					  <div class="row center-xs">
					  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					    <button id="login_btn" name="forgot_btn" class="btn btn-primary">Recuperar Contraseña</button>
					  </div>
					</div>
					</div> 
				</fieldset>
			</form>
			<div class="row center-xs">
				<div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					<a onclick="JavaScript:login();"><span>Cancelar</span></a>
				</div>
			</div>
			<br>
		</div>
			

		<!-- FIN FORMULARIO CONTRASEÑA OLVIDADA -->



		<!-- FORMULARIO REGISTRO -->
		<div id="register-form" class="desktop" >
			<form class="form-horizontal" method="POST">
				<fieldset>
					<h3 class="form-title">Regístrate</h3>
				<!-- Text input-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				  <input id="name" name="name" type="text" placeholder="Nombre" class="form-control input-md" required="">
				   </div> 
				  </div>
				</div>

				<!-- Prepended text-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">@</span>
				      <input id="user" name="user" class="form-control" placeholder="Usuario" type="text" required="">
				    </div>
				    </div> 
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				  <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-control input-md" required="">
				   </div>  
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <input id="passwd" name="passwd" type="password" placeholder="Contraseña" class="form-control input-md" required="">
				    </div> 
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <input id="r_passwd" name="r_passwd" type="password" placeholder="Repetir Contraseña" class="form-control input-md" required="">
				    </div> 
				  </div>
				</div>

				<!-- Checkbox terms -->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <input type="checkbox" name="terms" required> <span>Acepto y Estoy de acuerdo con los <a href="">Términos y Condiciones</a>.</span>
				  </div>
				</div>
				</div> 

				<!-- Button -->
				<div class="form-group">
				  <div class="row center-xs">
				  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
				    <button id="register_btn" name="register_btn" class="btn btn-primary">Registrarme</button>
				  </div>
				</div>
				</div> 
				</fieldset>
			</form >
			<div class="row center-xs">
				<div class="col-xs-8 col-sm-6 col-md-4 col-lg-2">
					<span>¿Ya tienes cuenta?<a onclick="JavaScript:login();"> Entra.</span></a>
				</div>
			</div>
			<br>
            <!-- Fin codigo pantallas con min. 1024px -->
            <!-- FIN FORMULARIO REGISTRO -->

		</div>
		<div class="desktop app-download">
				<div class="row center-xs">
					
					<div class="col-xs-0">
						<a href=""><img class="app-store" src="assets/img/app-store.png"></a>
					</div>

					<div class="col-xs-0">
						<a href=""><img class="play-store" src="assets/img/play-store.png"></a>
					</div>
				    </div>	
				</div>
			</div>
			<br>
			<hr class="desktop hr-separador">
			<hr class="mobile mb-separador">
			<div class="footer">
					<footer>
						<span>Copyright Growpop © 2018. <br class="mobile">Made by SinketStudios. </span>
					</footer>

        
			</div>
		</div>

	</body>


	
</html>






