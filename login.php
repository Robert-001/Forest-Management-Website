<?php
if($_POST)
{
    include('config/setup.php');
    $username=$_POST['l-form-username'];
    $password=$_POST['l-form-password'];

    $result = mysql_query("SELECT * from users where username = '$username' and password = '$password'") or die("Failed to query Database." .mysql_error());
    $row = mysql_fetch_array($result);
    if($row['username'] == $username && $row['password']== $password) 
    {
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['anything']='something';
        header("Location: uarea.php"); /* Redirect browser */
        exit();
    }
    else
    {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username or Password is wrong! Please Try again.')
            window.location.href='login.php';
            </SCRIPT>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Authorized Users</title>
        <link rel="icon" href="ico/icon.png">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/login_style.css">
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>WELCOME</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                    	<span class="show-login-form">Login</span>
                    </div>
                </div>

                <div class="row form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="l-form-username">Username</label>
	                        	<input type="text" name="l-form-username" required autocomplete="off" placeholder="Username..." class="l-form-username form-control" id="l-form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="l-form-password">Password</label>
	                        	<input type="password" name="l-form-password" required autocomplete="off" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
	                        </div>
				            <button type="submit" class="btn" >Log In</button>
				    	</form>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
                            <a><img class="img_login" src="ico/icon.png"></a>
                            <br>
                            <p class="vision">Conservation and Development of all the natural resources and tree growth on sustainable basis for present and future generation.</p>
                        </div>
                    </div>
                </div>

        	</div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p><i class="fa fa-copyright" aria-hidden="true"></i> Govt. of Gujarat.</p>
        			</div>
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>
