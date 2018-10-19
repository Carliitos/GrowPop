<?php 
session_start(); 

ini_set('error_reporting',0);


$varsession = $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>GrowPop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flexboxgrid.min.css">

</head>

<style>
    
    body{
        overflow-x: hidden;
    }
    .centered-mob {
        margin-top: 40%;
        
    }

    .hr-separador {
        width: 30%;
        display: inline-block;
    }

    #centered1{
        position: absolute;
        font-size: 10vw;
        top: 30%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #centered2{
        position: absolute;
        font-size: 10vw;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
    }
    #centered3{
        position: absolute;
        font-size: 10vw;
        top: 70%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #signup{
        width: 60%;
        border-radius: 5px;
    }
    #login{
        width: 60%;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 5px;
    }
    #login:hover{
        width: 60%;
        background-color: #fff;
        color: #1da1f2;
        border: 2px solid #1da1f2;
        border-radius: 5px;
    }
    .well{
        background-color: #187FAB;
    }

    .header-mob {
        text-align: center;
    }

    .header-logo-mob {
    width: 300px;
    }

</style>
<?php
    if($varsession == null || $varsession =''){
?>
<body>
    <div class="row center-xs desktop">
        
    </div>

    <div class="row center-xs desktop">
        <div class="col-xs-10">
            <form method="post" action="">
                <button id="signup" class="btn btn-info btn-lg" name="signup">Registrarse</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
                ?>
                <button id="login" class="btn btn-info btn-lg" name="login">Entrar</button><br><br>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('signin.php','_self')</script>";
                    }
                ?>
            </form>
        </div>
    </div>

    
    <div class="row center-xs mobile centered-mob">
        <div class="header-mob">
                <img class="header-logo-mob" style="" src="img/logo.png">
                <br><br>
            </div>

            <div class="col-xs-10">
                <span style="opacity: 0.5;">Entra para ver las fotos de tus amigos, organiza quedadas y mucho más.</span>
            </div><br><br><br>
            
        <div class="col-xs-10">
            <form method="post" action="">
                <button id="signup" class="btn btn-info btn-lg" name="signup">Registrarse</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
                ?>
                <div><hr class="hr-separador"><span>O</span><hr class="hr-separador"></div> <br>
                <button id="login" class="btn btn-info btn-lg" name="login">Entrar</button><br><br>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('signin.php','_self')</script>";
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>
<?php die(); } else { header('Location:home.php'); } ?>