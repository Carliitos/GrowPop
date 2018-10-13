<?php 
	
	include('config.php');
	
	
	$name = $con -> real_escape_string($_POST['name']);
	$user = $con -> real_escape_string($_POST['user']);
	$email = $con -> real_escape_string($_POST['email']);
	$passwd = $con -> real_escape_string(md5($_POST['passwd']));
	$rPasswd = $con -> real_escape_string(md5($_POST['r_passwd']));

	
				
	if($name == "" || $user == "" || $email == "" || $passwd == "" || $rPasswd == ""){
	    
	    echo "Comprueba los datos"; 
	    
	} else {
	    
	    if($passwd != $rPasswd) {
	        echo "las contraseñas no coinciden";
	    } else {
	        
        $token = "ABCDFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
        
	    $sql =$con->query("INSERT INTO users(name,user,email,password,token) VALUES ('$name','$user','$passwd','$token') ") ;
	    
	    
	   }
	}




?> 