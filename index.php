<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>XIX3D Accounts</title>

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
                        <h1><span>Login</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Welcome back! Login to access your xix3D account.</p>
                    </div>
                </div>
                <form name="login_val" action = "functions/authentication.php" onsubmit = "return validation()" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn btn-default" value="Login">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <p class="error">No account found with that username or email.</p>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- <div id="success_notify" style="display:block;position:absolute;right:30px;top:70px;" class="alert alert-danger fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Username or Password is incorrect ! </strong></span>
            <button type="button" class="close" onclick="this.parentElement.style.display='none'" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->

	    <footer>
			<div class="row">
				<div class="col-md-12">
					<p class="footer-center">©2020 xix3D | All Rights Reserved</p>
				</div>
			</div>
	    </footer>

        <script>
            function validation()  
            {
                var username=document.login_val.username.value;  
                var password=document.login_val.password.value;  
                if(username.length=="" && password.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(username.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (password.length=="") {  
                        alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
    </body>
</html>