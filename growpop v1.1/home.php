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
            
            <div class="center-xs header-mob">
                <img class="header-logo-mob" style="margin-left: 6%;" src="img/logo.png">
                <i class="far fa-envelope" style="float: right; font-size: 25px; margin-top: 10px; margin-right: 4%"></i>
            </div>

            <div class="row center-xs all-mob-post">
                
                <div class="post-mob col-xs-12 col-sm-11">
                    <div class="post-head">
                        <img class="col-xs-2 post-header-photo" src="img/Screenshot_1.png">
                        <a href="" style="text-decoration: none;color: currentColor;"><span class="middle-xs post-header-user">daanii_la_cupula</span></a>
                        <i style="cursor: pointer;" class="fas fa-ellipsis-h edit-post"></i>
                    </div>
                    <div class="post-content">
                        <img src="foto.jpg">
                    </div>
                    <div class="col-xs-4 post-footer">
                    <a><i class="far fa-cannabis ico-post"></i></a>
                    <a><i class="far fa-comment ico-post"></i></a>
                    <a><i class="far fa-share-square ico-post"></i></a><br>
                    <small><span>123.322 likes</span></small>
                    </div>
                </div>

                

            </div>    
            
            <div class="row center-xs around-xs footer-mob">
               
                <div class="u col-xs-2">
                    <a href=""><img class="menu-ico" src="img/ico/home-sel.png"></a>
                </div>
                <div class="u col-xs-2">
                    <a href="search.php"><img class="menu-ico" src="img/ico/search.png"></a>
                </div>
                <div class="u col-xs-2">
                    <a href="post.php"><img class="menu-ico" src="img/ico/upload.png"></a>
                </div>
                <div class="u col-xs-2">
                    <a href=""><img class="menu-ico" src="img/ico/noti.png"></a>
                </div>
                <div class=" col-xs-2">
                    <a href="profile.php?=<?php echo $_SESSION['user_name']; ?>"><img class="menu-ico" src="img/ico/profile.png"></a>
                </div>
            </div>
             
        </div>

        
        
        
        
            <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
            <script src="assets/js/javascript.js"></script>
    </body>
</html>

<?php } ?>