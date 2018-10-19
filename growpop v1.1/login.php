<?php


include("includes/config.php");

	if (isset($_POST['login'])) {

		$user = htmlentities(mysqli_real_escape_string($conexion, $_POST['user_name']));
		$pass = htmlentities(mysqli_real_escape_string($conexion,md5($_POST['pass'])));

		$select_user = "SELECT * FROM users WHERE user_name='$user' AND user_pass='$pass' AND status='verified'";
		$query= mysqli_query($conexion,$select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user != 1){
			echo"<script>alert('Tu Usuario o Contraseña son incorrectos.')</script>";
		}else{
			
			$_SESSION['user_name'] = $user;

			echo "<script>window.open('home.php', '_self')</script>";
		}
	}
?>