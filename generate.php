<?php
    session_start();
    if(!$_SESSION['id']) header("Location: index.php");
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
                        <p>You can click Generate button and get key.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="functions/save.php" method="post">
                            <div class="form-group">
                                <input type="text" style="display:none;" value="<?php echo $_SESSION['id']; ?>">
                                <input type="submit" class="btn btn-default" value="Generate">
                            </div>
                        </form>
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

            // function generate(id) {
            //     $.ajax({ 
            //         method:'POST',
            //         url:'functions/save.php',
            //         data:{
            //             id : id
            //         },
            //         success: function(result) {
            //             console.log(result);
            //         },
            //         error:function(error){
            //             console.log(error)
            //         }
            //     })
            // }

            function back() {
                window.location.href = "index.php";
            }
        </script>
    </body>
</html>