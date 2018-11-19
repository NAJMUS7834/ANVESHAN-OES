<!DOCTYPE html>
<?php include 'includes/check_reply.php'; ?>
<html>
    
<head>

        <title>VVCE | Login</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Online Examination System" />
        <meta name="keywords" content="Online Examination System" />
        <meta name="Najmus" content="vvce mysore" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/images/icon.png" rel="icon"> <!--for putting top icon-->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
         <link href="assets/css/snack.css" rel="stylesheet" type="text/css"/>
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    <style>
        img{
         display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
        }
    
    </style>
        
    </head>
     <body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-login">
    
        <main class="page-content">

            <div class="page-inner">
            <img src="vvce.png" alt="">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <div class="login-box">
                                <a href="./" class="logo-name text-lg text-center">Online Examination System</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="pages/authentication.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email or Registration No."  autocomplete="off" name="user" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Your strong password" name="login" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                   <!-- <a href="forgot_pw.php" class="display-block text-center m-t-md text-sm">Forgot Password?</a>-->
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
			<?php if ($ms == "1") {
?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{
	
}
?>

        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>