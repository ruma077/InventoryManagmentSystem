<?php

class Login
{
    private $con;
    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "ims";

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$this->conn)
        {
            die("Database Connection Error!");
        }
    }
    //..............................................................................................

        //Login Area
        function admin_login($data)
        {
            $admin_email = $data['admin_email'];
            $admin_pass = md5($data['admin_pass']);
    
            $query= "SELECT * FROM admin  WHERE admin_email='$admin_email' AND admin_pass='$admin_pass'";
    
            if(mysqli_query($this->conn,$query)){
                $result = mysqli_query($this->conn,$query);
                $admin_info = mysqli_fetch_assoc($result);
    
                if($admin_info){
                    header('location:dashboard.php');
                    session_start();
                    $_SESSION['id'] = $admin_info['id'];
                    $_SESSION['admin_email'] = $admin_info['admin_email'];
                    $_SESSION['admin_pass'] = $admin_info['admin_pass'];
                }else{
                    $msg = "Your username or Password is incorrect!";
                    return $msg;
                }
            }
            
        }
        //...............................................................................................................
                        //Logout Admin
        function adminLogout()
        {
            unset($_SESSION['id']);
            unset( $_SESSION['admin_email']);
            unset($_SESSION['admin_pass']);
            header('location:index.php');
        }
        //...............................................................................................................
}
?>