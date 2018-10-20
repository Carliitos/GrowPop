 <?php 
session_start();

include('includes/config.php');
include('functions/functions.php');



$varsession = $_SESSION['user_name'];

// ini_set('error_reporting',0);
    
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
            
            <div ondblclick="" class="center-xs header-mob">
                <a href="home.php"><i class="fas fa-angle-left msg-back"></i></a>
                <h3 class="header-msg">Mensajes</h3>
                
            </div>

            <div class="row center-xs all-mob-msg">
                
                

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