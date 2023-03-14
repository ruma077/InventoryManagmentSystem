<?php

class Update 
{
    private $con;
    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root"; 
        $dbpass = "";
        $dbname = "ims";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

        if (!$this->conn) {
            die("Database Connection Error!"); 
        }
    }
    //..................................................................................











}
