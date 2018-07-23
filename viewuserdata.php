<?php

    include_once('users.php');

    $data = new Database();

    $userdata = new Users();

        session_start();
        if($_SESSION)
        {


        	$id = $_SESSION['id'];
        	echo $id;
    		$query="SELECT * from user where id='$id'";
    		$result = mysqli_query($data->connection(),$query);

    	}


    
    if(isset($_POST['logout'])){  
        session_destroy();  
      
    if(!($_SESSION)){  

        header("Location:signup.php");  
    } 
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <meta content="width=device-width,initial-scale=1" name="viewport">
            <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
                <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
                </script>
                <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https	://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
                </script>
            </link>
        </meta>
        <style>
            .space
        	{
        		padding-top :30px;
        	}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        	<div class="offset-md-11">
            <form action="" method="post">
               <button class="btn btn-dark" name="logout" type="submit">
               Logout
            </button>
            </form>
        </div>
        </nav>
        <div class="jumbotron">
            <h2>
                <center>
                    Bromlays Techventures
                </center>
            </h2>
        </div>
        <center>
            <h2>
                Welcome
                <?php echo $_SESSION['username'] ?>
                !!
            </h2>
        </center>
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered table-dark table-hover">
                <?php

        			while($row=mysqli_fetch_assoc($result))
        			{

        		?>
                <tr>
                    <th>
                        Username
                    </th>
                    <td>
                        <?php echo $row['username'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        firstname
                    </th>
                    <td>
                        <?php echo $row['firstname'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Designation
                    </th>
                    <td>
                        <?php echo $row['designation'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Join date
                    </th>
                    <td>
                        <?php echo $row['join_date'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Experience
                    </th>
                    <td>
                        <?php echo $row['experience'] ?>
                    </td>
                </tr>
                <?php
                
        			}
        		?>
            </table>
            <div class="space">
            </div>
        </div>
        <div class= "offset-md-5">
        <a href="editdetails.php?id=<?php echo $id ?>">
            <button class="btn btn-dark" name="submit" type="submit">
                Edit details
            </button>
        </a>
    </div>
    </body>
</html>
