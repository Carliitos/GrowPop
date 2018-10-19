<?php session_start(); ini_set('error_reporting',0); $varsession = $_SESSION['user_name']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<!-- Screen resolution (for mobile, and desktop) -->
	<link rel="stylesheet" type="text/css" href="assets/css/media.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}

	/* MOBILE LOGIN */

	body{
			overflow-x: hidden;
		}
		.mob-main-content{
			width: 90%;
			height: 40%;
			margin: 10px auto;
			background-color: #fff;
			padding: 40px 50px;
			margin-top: 40%;
		}
		.header{
			border: 0px solid #000;
			margin-bottom: 5px;
		}
		
		#mob-signin{
			margin-top: 10px;
			width: 40%;
			border-radius: 5px;
		}
		.mob-overlap-text{
			position: relative;
		}
		.mob-overlap-text a{
			position: absolute;
			top: 8px;
			right: 10px;
			font-size: 14px;
			text-decoration: none;
			font-family: 'Overpass Mono', monospace;
			letter-spacing: -1px;

		}

		.createAcc {
			text-align: center;
		}

</style>
<?php
    if($varsession == null || $varsession =''){
?>
<body>
<div class="row desktop">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Iniciar Sesión</strong></h3>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="user_name" placeholder="Usuario" required="required" class="form-control input-md">
					</div>
					<br>
					<div class="overlap-text">
						<input type="password" name="pass" placeholder="Contraseña" required="required" class="form-control input-md"><br>
						<a style="text-decoration:none;float: right;color: #187FAB; opacity: 0.8;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">He olvidado la contraseña</a>
					</div>
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">¿Todavía no tienes cuenta?</a><br><br>

					<center><button id="signin" class="btn btn-info btn-lg" name="login">Entrar</button></center>
					<?php include("login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE LOGIN -->
<div class="row mobile">
	<div class="col-sm-12">
		<div class="mob-main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Iniciar Sesión</strong></h3>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="user_name" placeholder="Usuario" required="required" class="form-control input-md">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-key"></i></span>
						<input type="password" name="pass" placeholder="Contraseña" required="required" class="form-control input-md"><br>
					</div>
					
					<center><button id="mob-signin" class="btn btn-info btn-lg" name="login">Entrar</button></center>
					<?php include("login.php"); ?>

					<center><small><a style="margin-top:10px;text-decoration:none;color: #187FAB; opacity: 0.8;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">He olvidado la contraseña</a></small><br></center>
					

					<div class="createAcc"><a style="text-decoration: none;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">¿Todavía no tienes cuenta?</a></div>
					
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>

<?php die(); } else {header('Location:home.php?'."$varsession");}  ?>