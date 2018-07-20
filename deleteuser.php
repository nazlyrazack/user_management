<?php 

	

    include_once('users.php');

    $data = new Database();

    $userdata = new Users();



        	$id = $_GET['id'];
    		$query="DELETE from user where id='$id'";
    		$result = mysqli_query($data->connection(),$query);
    		header("location:viewallusers.php");

    	


    


 ?>