<?php 
session_start();

include('includes/config.php');

ini_set('error_reporting',0);

$varsession = $_SESSION['user_name'];
    
?>


<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/easing/EasePack.min.js">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/flexboxgrid.min.css">
        <!-- Screen resolution (for mobile, and desktop) -->
        <link rel="stylesheet" type="text/css" href="assets/css/home-mob.css">
        <link rel="stylesheet" type="text/css" href="assets/css/media.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <title>GrowPop</title>

        <?php 
            $user = $_SESSION['user_name'];
            $get_user = "SELECT * FROM users WHERE user_name='$user'";
            $run_user = mysqli_query($conexion,$get_user);
            $row = mysqli_fetch_array($run_user);

            $user_name = $row['user_name'];
            $user_id = $row['user_id'];
        ?>

        
    </head>
<?php
    if($varsession == null || $varsession =''){
        header('Location:index.php');
        die();
    } else {

?>

    <body>
        <!-- DESKTOP VIEWER -->
    
        <!-- END DESKTOP VIEWER -->


        <!-- START MOBILE VIEWER -->
        <div class="mobile">
            
            <!-- MOBILE HEADER -->  

            <div class="center-xs header-mob">
                <a href="home.php"><img class="header-logo-mob" src="img/logo.png"></a>
            </div>

            <!-- END MOBILE HEADER --> 

            <!-- MOBILE PROIFLE--> 

                <div class="profile-content row center-xs ">
                    
                        <div class="prof-photo col-xs-1">
                           <img class="prof-photo" src="default-profile.png"> 
                        </div>
                        <div class="prof-photo col-xs-2">
                           <span><?php echo $user_name ?></span> 
                        </div>
                        <div class="prof-photo col-xs-6">
                           <a href="#" class="edit-prof_btn" style="text-decoration: none; ">Editar Perfil</a>
                        </div>
                        <div class="prof-photo col-xs-1">
                           <img class="prof-photo" src="default-profile.png"> 
                        </div>
                        
                        <a href="logout.php">Cerrar sesión</a>
                    
                    
                </div> 
                
            
            
            <!-- END MOBILE PROIFLE-->  

            <!-- MOBILE Footer -->  
            
            <div class="row center-xs around-xs footer-mob">
               
                <div class="col-xs-2">
                    <a href="home.php"><img class="menu-ico" src="img/ico/home.png"></a>
                </div>
                <div class="col-xs-2">
                    <a href="search.php"><img class="menu-ico" src="img/ico/search.png"></a>
                </div>
                <div class="col-xs-2">
                    <a href="post.php"><img class="menu-ico" src="img/ico/upload.png"></a>
                </div>
                <div class="col-xs-2">
                    <a href=""><img class="menu-ico" src="img/ico/noti.png"></a>
                </div>
                <div class="col-xs-2">
                    <a href="" ><img class="menu-ico" src="img/ico/profile-sel.png"></a>
                </div>
            </div>

            <!-- END MOBILE Footer -->  
             
        </div>

        
        
        
        
            <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
            <script src="assets/js/javascript.js"></script>
    </body>
</html>

<?php } ?>