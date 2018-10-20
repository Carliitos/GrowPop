<?php 

include('./includes/config.php');


function insertPost(){
	if (isset($_POST['sub'])) {
                    global $conexion;
                    global $user_id;

                    $content = htmlentities($_POST['content']);
                    $upload_image = $_FILES['upload_image']['name'];
                    $image_tmp = $_FILES['upload_image']['tmp_name'];
                    $random_number = rand(1, 100);
                    

                    if(strlen($content) > 250) {
                        echo "<script>alert('Máximo carácteres permitidos, Por favor, utiliza 250 carácteres o menos.')</script>";
                        echo "<script>window.open('home.php', '_self')</script>";
                    }else {
                        if(strlen($upload_image) >= 1 && strlen($content) >= 1) {
                            move_uploaded_file($image_tmp, "imagepost/$upload_image.$random_number");

                            $insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date, post_likes) VALUES ('$user_id','$content','$upload_image.$random_number', NOW(),'0')";

                            $run = mysqli_query($conexion,$insert);

                            if($run){
                                echo "<script>alert('Se ha publicado correctamente.')</script>";
                                echo "<script>window.open('home.php', '_self')</script>";

                                $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                                $run_update = mysqli_query($conexion,$update);

                            }
                            exit();

                        } else {
                        if($upload_image == '' && $content == ''){
                            echo "<script>alert('Selecciona o escribe algo.')</script>";
                            echo "<script>window.open('post.php', '_self')</script>";
                        } else {
                            if($content == ''){
                                move_uploaded_file($image_tmp, "imagepost/$upload_image.$random_number");

                                $insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date, post_likes) VALUES ('$user_id','No','$upload_image.$random_number', NOW(),'0')";
                                $run = mysqli_query($conexion,$insert);

                                if($run){
                                echo "<script>alert('Se ha publicado correctamente.')</script>";
                                echo "<script>window.open('home.php', '_self')</script>";

                                $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                                $run_update = mysqli_query($conexion,$update);

                                    }

                                exit();

                                } else {

                            $insert = "INSERT INTO posts (user_id, post_content, post_date, post_likes) VALUES ('$user_id','$content', NOW(),'0')";
                            $run = mysqli_query($conexion,$insert);

                            if($run){
                            echo "<script>alert('Se ha publicado correctamente.')</script>";
                            echo "<script>window.open('home.php', '_self')</script>";

                            $update = "UPDATE users SET posts ='yes' WHERE user_id='$user_id'";
                            $run_update = mysqli_query($conexion,$update);

                            

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

    $run_posts = mysqli_query($conexion,$get_posts);

    while($row_posts = mysqli_fetch_array($run_posts)){

        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $content = substr($row_posts['post_content'], 0,40);
        $upload_image = $row_posts['upload_image'];
        $post_date = $row_posts['post_date'];
        $post_likes = $row_posts['post_likes'] . " me gusta";

        $user = "SELECT * FROM users WHERE user_id='$user_id' AND posts = 'yes' ";
        $run_user = mysqli_query($conexion,$user);
        $row_user = mysqli_fetch_array($run_user);

        $user_name = $row_user['user_name'];
        $user_image = $row_user['user_image'];

        $edit_post = "SELECT * FROM users WHERE user_id='$user_id'";
        $run_edit = mysqli_query($conexion,$edit_post);

        

        if($content == "No" && strlen($upload_image) >= 1){
            // edit post
            // <i style='cursor: pointer;' class='fas fa-ellipsis-h edit-post'></i>
            echo " 
                <div class='post-mob col-xs-12 col-sm-11'>
                    <div class='post-head'>
                    <img class='col-xs-2 post-header-photo' src='$user_image'>
                    <a href='user_profile.php?u_id=$user_name' style='text-decoration: none;color:currentColor;'><span class='middle-xs post-header-user'><b>$user_name</b></span></a>    
                    </div>
                    <div class='post-content'>
                        <img id='image-post' src='imagepost/$upload_image'>
                    </div>
                    <div class='col-xs-10 post-footer'>
                    <form method='POST'>
                    
                    
                    <button name='like-btn'><img class='post-like-ico' id='like' src='img/ico/like.png'><br></button>
                    </form>
                    <b><span class='post-likes'>$post_likes $user_id</span></b><br>
                    <span class='post-date'>$post_date</span>
                
                    </div>
                </div>

            ";
            
        } else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
            echo " 
                <div class='post-mob col-xs-12 col-sm-11'>
                    <div class='post-head'>
                    <img class='col-xs-2 post-header-photo' src='$user_image'>
                    <a href='user_profile.php?u_id=$user_name' style='text-decoration: none;color:currentColor;'><span class='middle-xs post-header-user'><b>$user_name</b></span></a>    
                    </div>
                    <div class='post-content'>
                        <img src='imagepost/$upload_image'>
                    </div>
                    <div class='col-xs-12 post-footer'>
                    <a><img class='post-like-ico' name='like-btn' src='img/ico/like.png'></a><br>
                    <b><span class='post-likes'>$post_likes</span></b><br>
                    <span class='post-user-content'><b>$user_name</b> $content</span><br>
                    <span class='post-date'>$post_date</span>
                
                    </div>
                </div>

            ";

              

        } else {

            echo " 
                No tienes ninguna publicacion.

            ";



        }

    }

    

    include('pagination.php');
}





?>
