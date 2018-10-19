<?php session_start(); ini_set('error_reporting',0); $varsession = $_SESSION['user_name'];?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<!-- Screen resolution (for mobile, and desktop) -->
	<link rel="stylesheet" type="text/css" href="assets/css/media.css">

	<script>
        function replaceName(e){
  			e.value = e.value.replace(/ /g, "_")
		}
		//function replaceDate(e){}
  			
		
	</script>

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
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}

	/* MOBILE REGISTER */
	body {
		overflow-x: hidden;
	}
	.mob-main-content {
		width: 90%;
		height: 40%;
		margin: 0 auto;
		background-color: #fff;
		padding: 40px 50px;
		margin-top: 5%;
		
	}
	.mob-header {
		border: 0px solid #000;
		
	}
	.well {
		background-color: #187FAB;
	}
	#signup {
		margin-top: 10px;
			width: 40%;
			border-radius: 5px;
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
				<h3 style="text-align: center;"><strong>Registro</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="Usuario" id="user_name" name="user_name" required="required" onkeyup="replaceName(this);">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-at"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required" >
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-key"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Contraseña" name="u_pass" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-key"></i></span>
						<input id="r_password" type="password" class="form-control" placeholder="Confirmar contraseña" name="r_pass" required="required">
					</div><br>
					
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required" >
							<option disabled>País</option>
							<option>Spain</option>
							<option>Pakistan</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required" >
							<option disabled>Género</option>
							<option>Hombre</option>
							<option>Mujer</option>
							<option>Otros</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Fecha de nacimiento. DD/MM/AA" name="u_birthday" required="required" onkeyup="" >
					</div><br>
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">¿Ya tienes cuenta?</a><br><br>

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Registrarse</button></center>
					<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>




<!-- MOBILE -->
<div class="row mobile">
	<div class="col-sm-12">
		<div class="mob-main-content">
			<div class="mob-header">
				<h3 style="text-align:center;"><strong>Registrarse</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="Usuario" id="user_name" name="user_name" required="required" onkeyup="replaceName(this);">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-at"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required" >
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-key"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Contraseña" name="u_pass" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-key"></i></span>
						<input id="r_password" type="password" class="form-control" placeholder="Confirmar contraseña" name="r_pass" required="required">
					</div><br>
					
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required" >
							<option disabled>País</option>
							<option>Spain</option>
							<option>Pakistan</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required" >
							<option disabled>Género</option>
							<option>Hombre</option>
							<option>Mujer</option>
							<option>Otros</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Fecha de nacimiento. DD/MM/AA" name="u_birthday" required="required" onkeyup="" >
					</div><br>
					<center><button id="mob-signup" class="btn btn-info btn-lg" name="sign_up">Registrarse</button></center>
					<?php include("insert_user.php"); ?>
					<center><a style="text-decoration: none;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">¿Ya tienes cuenta?</a></center>
					
				</form>
			</div>
		</div>
	</div>
</div>


<?php include('includes/signup_mobile.php');?>
</body>
</html>

<?php die(); } else {header('Location:home.php?');}  ?>