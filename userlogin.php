

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<meta content="width=device-width,initial-scale=1" name="viewport">
            <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
                <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
                </script>
            </link>
        </meta>
</head>
<body>

	<div class="jumbotron">
            <h2>
                <center>
                    Bromlays Techventures
                </center>
            </h2>
        </div>
        <div class="container">
            <h4>
                <center>
                    Login
                </center>
            </h4>
        </div>
         <div class="col-md-4 offset-md-4">
            <form method="post">
                <div class="form-group">
                    <label for="username">
                        Username:
                    </label>
                    <input class="form-control" id="uname" name="uname" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($name_error)) {
    echo $name_error;
}
?>
                        
                    </p>
                </div>
                
                
                
                <div class="form-group">
                    <label for="pwd">
                        Password:
                    </label>
                    <input class="form-control" id="pwd" name="pwd" type="password">
                    </input>
                    <p class="error">
                        <?php
if (isset($pwd_error)) {
    echo $pwd_error;
}
?>
                        
                    </p>
                </div>
               
                <button class="btn btn-primary" name="login" type="submit">
                    Login
                </button>

                <div class="space">
                </div>
            </form>
        </div>

</body>

</html>
<?php
	include "users.php";
	


	$users = new Users();
	
	{
		if(isset($_POST['login']))
		{
			$uname = $_POST['uname'];
			$pwd=$_POST['pwd'];
			$user=$users->check_user($uname,$pwd);
			// error_log(json_encode($user));
			if($user)
			{

				session_start();
				$_SESSION['id'] = $user['id'];
    			$_SESSION['username'] = $user['username'];  
    			// error_log(json_encode($_SESSION));
            	
				header("location:viewuserdata.php");
			}
			else
			{
				echo "<script>alert('username or password does not match')</script>";
			}
		}
	}
?>