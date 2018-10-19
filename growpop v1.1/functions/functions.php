<?php 

include('./includes/config.php');


function insertPost(){
	if (isset($_POST['sub'])) {
                    global $conexion;
                    global $user_id;

                    $content = htmlentities($_POST['content']);
                    $upload_img = $_FILES['upload_image']['name'];
                    $image_tmp = $FILES['upload_image']['tmp_name'];
                    $random_number = rand(1, 100);

                    if(strlen($content) > 250) {
                        echo "<script>alert('Máximo carácteres permitidos, Por favor, utiliza 250 carácteres o menos.')</script>";
                        echo "<script>window.open('home.php', '_self')</script>";
                    }else {
                        if(strlen($upload_img) >= 1 && strlen($content) >= 1) {
                            move_uploaded_file($image_tmp, "imagepost/$upload_img.$random_number");

                            $insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date) VALUES ('$user_id','$content','$upload_img.$random_number', NOW())";

                            $run = mysqli_query($conexion,$insert);

                            if($run){
                                echo "<script>alert('Se ha publicado correctamente.')</script>";
                                echo "<script>window.open('home.php', '_self')</script>";

                                $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                                $run_update = mysqli_query($conexion,$update);

                            }
                            exit();

                        } else {
                        if($upload_img == '' && $content == ''){
                            echo "<script>alert('Selecciona o escribe algo.')</script>";
                            echo "<script>window.open('post.php', '_self')</script>";
                        } else {
                            if($content == ''){
                                move_uploaded_file($image_tmp, "imagepost/$upload_img.$random_number");

                                $insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date) VALUES ('$user_id','No','$upload_img.$random_number', NOW())";
                                $run = mysqli_query($conexion,$insert);

                                if($run){
                                echo "<script>alert('Se ha publicado correctamente.')</script>";
                                echo "<script>window.open('home.php', '_self')</script>";

                                $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                                $run_update = mysqli_query($conexion,$update);

                                    }

                                exit();

                                } else {

                            $insert = "INSERT INTO posts (user_id, post_content, post_date) VALUES ('$user_id','No', NOW())";
                            $run = mysqli_query($conexion,$insert);

                            if($run){
                            echo "<script>alert('Se ha publicado correctamente.')</script>";
                            echo "<script>window.open('home.php', '_self')</script>";

                            $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                            $run_update = mysqli_query($conexion,$update);

                            exit();

                        }
                    }
                }
            }
        } 
    }
}


function get_posts(){
	global $conexion;
	$per_page = 4;

	if(isset($_GET['page'])){
		$_GET['page'];
	} else {
		$page=1;
	}

	$start_from = ($page-1) * $per_page;

	$get_posts = "SELECT * FROM posts ORDER by 1 DESC LIMIT $start_from, $per_page";
}






?>