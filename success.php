<?php
    session_start();
    $index = 0;
    include('functions/connection.php');
    $user_id = $_SESSION['id'];
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
                    <h1><span>Generated Key</span></h1>
                </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class = "generated_key">
                            New Key : 
                            <?php
                            $flg = 0;
                                $sql = "select * from license where user_id = '$user_id'";
                                $result = mysqli_query($con, $sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $generated_key = $row['license_key'];
                                        $flg ++;
                                    }
                                }
                                echo $generated_key;
                            ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Your custom activation key has been created.
                            <br>Please send this to your client so that they may activate it through our Zeno launcher.</p>
                    </div>
                </div>
                <?php
                    if($flg > 1) {
                ?>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" style="width:20%; text-align:center;">#</th>
                                    <th scope="col" style="width:40%  text-align:center;">Generated Key</th>
                                    <th scope="col" style="width:40%  text-align:center;">Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $index = 0;
                                    $sql = "select * from license where user_id = '$user_id'";
                                    $result = mysqli_query($con, $sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $generated_key = $row['license_key'];
                                            $created_at = $row['created_at'];
                                            $index ++;
                                ?>
                                <tr>
                                    <th scope="row" style=" text-align:center;"><?php echo $index; ?></th>
                                    <td style="padding-left:40px;"><?php echo $generated_key; ?></td>
                                    <td ><?php echo $created_at; ?></td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="row">
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