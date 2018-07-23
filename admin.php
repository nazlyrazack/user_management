<?php

include_once 'users.php';

class Admin
{
    protected $DBConnection = "";

    public function __construct()
    {
        $connectdb          = new Database();
        $this->DBconnection = $connectdb->connection();
    }

    public function check_admin($uname, $pwd)
    {
        $query      = "SELECT * FROM admin where username = '$uname' and password = '$pwd'";
        $result     = mysqli_query($this->DBconnection, $query);
        $admin_data = mysqli_fetch_assoc($result);

        if (count($admin_data) > 0) {
            return $admin_data;
        } else {
            return false;
        }
    }

    public function viewUsers()
    {

        $viewQuery = "SELECT * FROM user;";
        $results   = mysqli_query($this->DBconnection, $viewQuery);
        return $results;
    }

    // public function viewSingleuser()
    // {
    //             $viewQuery = "SELECT * FROM user where id='$id';";
    //             $results = mysqli_query($this->DBconnection, $viewQuery);
    //             return $results;
    // }

    public function deleteUser()
    {

    }

}
