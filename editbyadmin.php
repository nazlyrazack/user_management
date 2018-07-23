<?php 

        include_once('users.php');

        $data = new Database();

        $id=$_GET['id'];

        $query="SELECT * from user where id='$id'";
        $result = mysqli_query($data->connection(),$query);

        // while($row=mysqli_fetch_assoc($result))
     //    {
            
     //    }

        foreach ($result as $key => $res) {
            # code...
            $username = $res['username'];
            $firstname = $res['firstname'];
            $email = $res['email'];
            $designation = $res['designation'];
            $join_date = $res['join_date'];
            $experience = $res['experience'];
        }

 ?>


 <?php

 if(isset($_POST['update']))
    {

        $id=$_POST['id'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $designation = $_POST['designation'];
        $join_date = $_POST['join_date'];
        $experience = $_POST['experience'];

        
    




        $update_query = "update user set username='$username' , firstname = '$firstname' , email = '$email' , designation = '$designation' , join_date = '$join_date', experience = '$experience' where id ='$id'";

        $result = mysqli_query($data->connection(), $update_query) ;
echo $update_query;

        header("location:viewallusers.php");
    }

 ?>





<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
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
 </head>

 <body>
 	
        <div class="jumbotron">
            <h2>
                <center>
                    Bromlays Techventures
                </center>
            </h2>
        </div>

 	<form name="form1" method="post" action="">
 		<div  class="col-md-6 offset-md-3">
        <table class="table table-bordered table-dark table-hover">
            <tr> 
                <td>User Name</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Firstname</td>
                <td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Designation</td>
                <td><input type="text" name="designation" value="<?php echo $designation;?>"></td>
            </tr>
            <tr> 
                <td>Join date</td>
                <td><input type="text" name="join_date" value="<?php echo $join_date;?>"></td>
            </tr>
            <tr> 
                <td>Experience</td>
                <td><input type="text" name="experience" value="<?php echo $experience;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </div>
    </form>
 
 </body>
 </html>