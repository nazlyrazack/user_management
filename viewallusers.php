<?php 
   include_once('admin.php');

		$adminObj = new Admin();
 
    	$viewUsers = $adminObj->viewUsers();
 
    	$userArray = array();
 
    	while($row = mysqli_fetch_assoc($viewUsers)){
        $userArray[] = $row;
        // print_r($row[]);
    }

    session_start();
        if($_SESSION)
        {


        	$id = $_SESSION['id'];
        	// echo $id;
    		

    	}

    

    if(isset($_POST['logout'])){  
       session_destroy();  
      
     if(!($_SESSION)){  

        header("Location:adminlogin.php");  
    } 
    } 

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>    </title>
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
 
 	<div class="col-md-10 offset-md-1">

 		<h3>User Info </h3>

 		<table class="table table-bordered table-dark table-hover">

 			<tr>
 				<th>
 					Username
 				</th>
 				<th>
 					Firstname
 				</th>
 				<th>
 					Email
 				</th>
 				<th>
 					Designation
 				</th>
 				<th>
 					Join date
 				</th>
 				<th>
 					Experience
 				</th>
 			</tr>
 			<tr>
 				<?php
 					 foreach($userArray as $user)
 					 {


 				?>
 				 <td><?php echo $user['username'] ?></td>
 				 <td><?php echo $user['firstname'] ?></td>
 				 <td><?php echo $user['email'] ?></td>
 				 <td><?php echo $user['designation'] ?></td>
 				 <td><?php echo $user['join_date'] ?></td>
 				 <td><?php echo $user['experience'] ?></td>
 				 <td><a href="viewsingleuser.php?id=<?php echo $user['id'] ?>">View</a></td>
 				 <td><a href="deleteuser.php?id=<?php echo $user['id']?>">Delete</a></td>


 				
 			</tr>
<?php
 					}
 				?>
 		</table>

 	</div>

 </body>
 </html>