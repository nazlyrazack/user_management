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

    	header("location:viewuserdata.php");
	}

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>

 <body>

 	<form name="form1" method="post" action="">
        <table>
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
    </form>
 
 </body>
 </html>