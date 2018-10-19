<?php
include("includes/config.php");

	if(isset($_POST['sign_up'])){

		$username = htmlentities(mysqli_real_escape_string($conexion,$_POST['user_name']));
		$email = htmlentities(mysqli_real_escape_string($conexion,$_POST['u_email']));
		$pass = htmlentities(mysqli_real_escape_string($conexion,md5($_POST['u_pass'])));
		$rPass = htmlentities(mysqli_real_escape_string($conexion,md5($_POST['r_pass'])));
		$country = htmlentities(mysqli_real_escape_string($conexion,$_POST['u_country']));
		$gender = htmlentities(mysqli_real_escape_string($conexion,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($conexion,$_POST['u_birthday']));
		$status = "verified";
		$posts = "no";

		
		$check_username_query = "SELECT * FROM users WHERE user_name = '$username'";
		$run_username = $conexion->query($check_username_query);

		$check_user = mysqli_num_rows($run_username);

		if($check_user == 1){
			echo "<script>alert('El usuario ya existe, Por favor, prueba con otro usuario.')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();

		} else {
			$check_email_query = "SELECT * FROM users WHERE user_email='$email'";
			$run_email = $conexion->query($check_email_query);

			$check_email = mysqli_num_rows($run_email);

			if($check == 1){
			echo "<script>alert('El correo ya esta registrado, Por favor utilice otro correo.')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();

			} else {

				if(strlen($pass) < 8 ){
					echo"<script>alert('¡La contraseña tiene que tener un mínimo de 8 carácteres!')</script>";
					exit();
				} else {

				if($rPass != $pass){
					echo "<script>alert('Las contraseñas no coinciden, Por favor intentalo de nuevo')</script>";
					echo "<script>window.open('signup.php', '_self')</script>";
					exit();
					
			 } else {

				$profile_pic = "default-profile.png";


				$insert = "INSERT INTO users (user_name,describe_user,user_email,user_pass,user_country,user_gender,user_birthday,user_image,user_reg_date,status,posts)
				VALUES ('$username','Descripcion por defecto de GrowPop.','$email','$pass','$country','$gender','$birthday','$profile_pic',NOW(),'$status','$posts')";
				
				$query = mysqli_query($conexion, $insert);

				if($query){
					echo "<script>alert('Bienvenido $username, te has registrado correctamente.')</script>";
					echo "<script>window.open('signin.php', '_self')</script>";
				}
				else{
					echo "<script>alert('¡Oops!, Algo ha fallado, inténtalo de nuevo.')</script>";
					echo "<script>window.open('signup.php', '_self')</script>";

							}
						}
					}
				}
			}
		}
		
		
?>