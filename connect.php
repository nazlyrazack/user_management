<?php

class Database
{
    private $host     = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name  = "db1";

    public function connection()
    {
    	
        $connect_db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        if (!$connect_db)
        {
            echo 'Database Connection Error <br>' . mysqli_connect_error($this->connect_db);

        }

        return $connect_db;

    }


    
}



?>
