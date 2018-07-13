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
    </head>
    <body>
    	<?php



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
                <center>
                    SignUp
                </center>
            </h4>
        </div>
        <div class="col-md-4 offset-md-4">
            <form method="post">
                <div class="form-group">
                    <label for="username">
                        Username:
                    </label>
                    <input class="form-control" id="uname" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="firstname">
                        First Name:
                    </label>
                    <input class="form-control" id="fname" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="lastname">
                        Last name:
                    </label>
                    <input class="form-control" id="lname" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="email">
                        Email address:
                    </label>
                    <input class="form-control" id="email" type="email">
                    </input>
                </div>
                <div class="form-group">
                    <label for="pwd">
                        Password:
                    </label>
                    <input class="form-control" id="pwd" type="password">
                    </input>
                </div>
                <div class="form-group">
                    <label for="designation">
                        Designation:
                    </label>
                    <input class="form-control" id="desig" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="joindate">
                        Join Date:
                    </label>
                    <input class="form-control" id="join" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="experience">
                        Experience:
                    </label>
                    <input class="form-control" id="exp" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label for="created_date">
                        Created Date:
                    </label>
                    <input class="form-control" id="created_date" type="text">
                    </input>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                            Remember me
                        </input>
                    </label>
                </div>
                <button class="btn btn-primary" type="submit">
                    Sign Up
                </button>
                <div class="space" style="padding-top: 50px">
                </div>
            </form>
        </div>
    </body>
</html>
