<?php

class Display 
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

    public function overseas_debit_show_daily($id)
    {
        $query = "SELECT * FROM overseas_debit_daily WHERE id=$id";
       
        if (mysqli_query($this->conn, $query)) {
            $overseas_debit_daily = mysqli_query($this->conn, $query);
            return $overseas_debit_daily;
        }
    }

}
   ?>