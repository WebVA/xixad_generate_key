<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>XIX3D Generate Key</title>

        <link href="assets/bootstrap.min.css" rel="stylesheet">
        <link href="assets/styles.css" rel="stylesheet">
        <link href="assets/simple-sidebar.css" rel="stylesheet">

        <script src="assets/jquery.min.js.download"></script>
        <script src="assets/bootstrap.min.js.download"></script>
        <script src="assets/code.js.download"></script>
    </head>
		
	<body class="login-body">
		<header>
			<div class="container">
				<div class="row">
                    <div class="col-md-12 mobile-logo">
                        <a href="https://xix3d.com/">
                            <img src="assets/cropped-xixlogowhite-1.png" class="logo">
                        </a>
                    </div>
                </div>
			</div>
		</header>
        <section id="login" style="margin-top:-100px;">
            <div class="container">
            <div class="row">
                    <div class="col-md-12 heading-wrapper">
                        <h1><span>Generate Key</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Generate key failed!<br>Your generated key exists!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" value="<?php 
                            echo $_SESSION['key']; 
                        ?>" style="font-size:20px;">
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" onclick = "back()" value="Back">
                        </div>
                    </div>
                </div>
            </div>
        </section>

	    <footer>
			<div class="row">
				<div class="col-md-12">
					<p class="footer-center">©2020 xix3D | All Rights Reserved</p>
				</div>
			</div>
	    </footer>

        <script>
            function back() {
                window.location.href = "generate.php";
            }  
        </script>
    </body>
</html>