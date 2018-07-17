<?php

class Database
{
    private $host     = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name  = "db1";
    public $connect_db = "";

    public function __construct()
    {
    	
        $this->connect_db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        if (!$this->connect_db) {
            echo 'Database Connection Error <br>' . mysqli_connect_error($this->connect_db);

        }

        // print_r($this->connect_db);

    }


    public function insertUser($table, $data)
    {
        $string = "INSERT INTO " . $table . " (";
        $string .= implode(",", array_keys($data)) . ') VALUES (';
        $string .= "'" . implode("','", array_values($data)) . "')";
        if (mysqli_query($this->connect_db, $string)) {
            return true;
        } else {
            echo mysqli_error($this->connect_db);
        }
    }

    public function login($uname,$pwd)
    {
    	$query=mysqli_query("SELECT * from user where uname='$uname' and password='$pwd' ");
    	$result=mysqli_query($this->connect_db,$query);
    	$user_data=mysqli_fetch_array($result);
    	$count_row=$result->mysqli_num_rows() ;

    	if($count_row==1)
    	{
    		$_SESSION['login'] = true;
    		$_SESSION['id'] = $user_data['id'];
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
}

$db = new Database();


?>
