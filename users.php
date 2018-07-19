<?php 

include "./connect.php";

Class Users
{
	protected $DBconnection = "";

	public function __construct()
	{
		$connectdb = new Database();
		$this->DBconnection = $connectdb->connection();
	}

	public function insertUser($table, $data)
    {
        $insert_query = "INSERT INTO " . $table . " (";
        $insert_query .= implode(",", array_keys($data)) . ') VALUES (';
        $insert_query .= "'" . implode("','", array_values($data)) . "')";
        if (mysqli_query($this->DBconnection, $insert_query)) {
            return true;
        } else {
            echo mysqli_error($this->DBconnection);
        }
    }	

    public function check_user($uname,$pwd)
    {
    	$check_user_query="SELECT * from user where username='$uname' and password='$pwd' ";
   		$result = mysqli_query($this->DBconnection,$check_user_query);
    	$user_data = mysqli_fetch_assoc($result);

    	if(count($user_data) > 0)
    	{
    		return $user_data;
    	}
    	else
    	{
    		return false;
    	}
    }
}