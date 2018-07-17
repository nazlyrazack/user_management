<!DOCTYPE html>
<html>
    <head>
        <title>
            User signup
        </title>
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
        <style>
            .space
        	{
        		padding-top :50px;
        	}
        	.error
        	{
        		color:red;

        	}
        </style>
    </head>
    <body>
        <?php

include "connect.php";

if (isset($_POST['submit'])) {
    $uname        = $_POST['uname'];
    $fname        = $_POST['fname'];
    $lname        = $_POST['lname'];
    $pwd          = $_POST['pwd'];
    $email        = $_POST['email'];
    $desg         = $_POST['desg'];
    $join         = $_POST['join'];
    $exp          = $_POST['exp'];
    $created_date = $_POST['created_date'];

    if (empty($uname)) {
        $name_error = "username is required";

    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $uname)) {
        echo "only letters and numbers are allowed";
    }

    if (empty($fname)) {
        $fname_error = "Firstname is required";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
        echo "only letters are allowed";
    }

    if (empty($lname)) {
        $lname_error = "lastname is required";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
        echo "only letters are allowed";
    }
    if (empty($pwd)) {
        $pwd_error = "password is required";
    }
    if (empty($email)) {
        $email_error = "email is required";
    } else if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
        echo "email is not a valid email address";
    }
    if (empty($desig)) {
        $desig_error = "designation is required";
    }
    if (empty($join)) {
        $join_error = "join date is required";
    }
    if (empty($exp)) {
        $exp_error = "experience is required";
    }
    if (empty($created_date)) {
        $created_error = "created date is required";
    }

    $data = new Database();

    $insert_data = array(
        'username'    => mysqli_real_escape_string($data->connect_db, $_POST['uname']),
        'firstname'   => mysqli_real_escape_string($data->connect_db, $_POST['fname']),
        'lastname'    => mysqli_real_escape_string($data->connect_db, $_POST['lname']),
        'password'    => mysqli_real_escape_string($data->connect_db, $_POST['pwd']),
        'email'       => mysqli_real_escape_string($data->connect_db, $_POST['email']),
        'designation' => mysqli_real_escape_string($data->connect_db, $_POST['desig']),
        'join_date'    => mysqli_real_escape_string($data->connect_db, $_POST['join']),
        'experience'  => mysqli_real_escape_string($data->connect_db, $_POST['exp']),
        'created'=> mysqli_real_escape_string($data->connect_db, $_POST['created_date']),
    );
    if ($data->insertUser("user", $insert_data)) {
        echo "inserted successfully";
    }

}

?>
        <div class="jumbotron">
            <h2>
                <center>
                    Bromlays Techventures
                </center>
            </h2>
        </div>
        <div class="container">
            <h4>
                
                    SignUp
             </h4>

                <a href = "userlogin.php"><button class="btn btn-primary" name="submit" type="submit">
                    Login
                </button></a>
            
        </div>
        <div class="col-md-4 offset-md-4">
            <form action="viewuserdata.php" method="post">
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
                    <label for="firstname">
                        First Name:
                    </label>
                    <input class="form-control" id="fname" name="fname" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($fname_error)) {
    echo $fname_error;
}
?>
                       
                       
                    </p>
                </div>
                <div class="form-group">
                    <label for="lastname">
                        Last name:
                    </label>
                    <input class="form-control" id="lname" name="lname" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($lname_error)) {
    echo $lname_error;
}
?>
                        
                    </p>
                </div>
                <div class="form-group">
                    <label for="email">
                        Email address:
                    </label>
                    <input class="form-control" id="email" name="email" type="email">
                    </input>
                    <p class="error">
                        <?php
if (isset($email_error)) {
    echo $email_error;
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
                <div class="form-group">
                    <label for="designation">
                        Designation:
                    </label>
                    <input class="form-control" id="desig" name="desig" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($desig_error)) {
    echo $desig_error;
}
?>
                        
                    </p>
                </div>
                <div class="form-group">
                    <label for="joindate">
                        Join Date:
                    </label>
                    <input class="form-control" id="join" name="join" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($join_error)) {
    echo $join_error;
}
?>
                        
                    </p>
                </div>
                <div class="form-group">
                    <label for="experience">
                        Experience:
                    </label>
                    <input class="form-control" id="exp" name="exp" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($exp_error)) {
    echo $exp_error;
}
?>
                       
                    </p>
                </div>
                <div class="form-group">
                    <label for="created_date">
                        Created Date:
                    </label>
                    <input class="form-control" id="created_date" name="created_date" type="text">
                    </input>
                    <p class="error">
                        <?php
if (isset($created_error)) {
    echo $created_error;
}
?>
                    </p>
                </div>
                <button class="btn btn-primary" name="submit" type="submit">
                    Sign Up
                </button>

                
                <div class="space">
                </div>
            </form>
        </div>
    </body>
</html>
