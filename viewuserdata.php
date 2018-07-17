<?php 

	include "connect.php";

	$con =new Database();

	$res=$con->login($uname,$pwd);


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
                <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
                </script>
            </link>
        </meta>
        <
 </head>
 <body>

 	<div class="jumbotron">
            <h2>
                <center>
                    Bromlays Techventures
                </center>
            </h2>
        </div>
        <div>
        	<table border=1>
        		<tr>
        			<th>username</th>
        			<th>firstname</th>
        			<th>lastname</th>
        			<th>email</th>
        			<th>designation</th>
        			<th>join date</th>
        			<th>experience</th>
        			<th>created</th>
        		</tr>
        		<tr>
        			<?php
        				while($row=mysql_fetch_row($res))
        				{
        					?>

        					<td><?php echo $row[1]?></td>
        					<td><?php echo $row[2]?></td>
        					<td><?php echo $row[3]?></td>
         					<td><?php echo $row[4]?></td>
        					<td><?php echo $row[8]?></td>
        					<td><?php echo $row[9]?></td>
        					<td><?php echo $row[10]?></td>
        					<td><?php echo $row[12]?></td>

       					




        					<?php
        				}
        			?>
        		</tr>
        	</table>
        </div>
 
 </body>
 </html>