<?php 
   include_once('admin.php');

		$adminObj = new Admin();
 
    	$viewUsers = $adminObj->viewUsers();
 
    	$userArray = array();
 
    	while($row = mysqli_fetch_assoc($viewUsers)){
        $userArray[] = $row;
        // print_r($row[]);
    }

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>    </title>
 </head>
 <body>
 
 	<div>

 		<table border=1>

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