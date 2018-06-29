
<?php
   require_once('function/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel :: Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body style="background:#0b7456">
        <div class="container">

            <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" style="background:#a8c6c0">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                          	<?php
		   if(isset($_POST['submit'])){
		     	$username = $_POST["username"];
			    $password = $_POST["password"];
			  if(empty($username) || empty($password)){
				    $error = "<h5 style='color:red'>Fields Must Not Empty.<h5>";
			} else {
				$sql = "SELECT  * FROM cit_users WHERE username='$username' AND user_pass='$password'";
        	$result = mysqli_query($conn,$sql);
				if($result->num_rows == 1){
					$row =mysqli_fetch_assoc($result);
                      $_SESSION['user_id'] =$row['user_id'];
                     $_SESSION['username'] =$row['username'];
					  $_SESSION['user_photo'] =$row['user_photo'];
					  $_SESSION['role_id'] =$row['role_id'];
					  $error = "You Can Login";
					   header("location: index.php");
				} else {
					$error = "<h5 style='color:red'>Username or Password Incorrect.<h5>";
				}
			}
			echo "<p>$error</p>";
		}
		?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success" name='submit'>Login  </button>
                                    <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account!
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
