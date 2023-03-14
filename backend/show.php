<?php

class Show
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


    /*____________________________biddabd____________________________*/
    public function biddabd_credit_show_daily()
    {
        $query = "SELECT * FROM biddabd_credit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_credit_daily = mysqli_query($this->conn, $query);
            return $biddabd_credit_daily;
        }
    } 
    public function biddabd_credit_show_weekly()
    {
        $query = "SELECT * FROM biddabd_credit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_credit_weekly = mysqli_query($this->conn, $query);
            return $biddabd_credit_weekly;
        }
    }
    public function biddabd_credit_show_monthly()
    {
        $query = "SELECT * FROM biddabd_credit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_credit_monthly = mysqli_query($this->conn, $query);
            return $biddabd_credit_monthly;
        }
    } 
    public function biddabd_debit_show_daily()
    {
        $query = "SELECT * FROM biddabd_debit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_debit_daily = mysqli_query($this->conn, $query);
            return $biddabd_debit_daily;
        }
    } 
    public function biddabd_debit_show_weekly()
    {
        $query = "SELECT * FROM biddabd_debit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_debit_weekly = mysqli_query($this->conn, $query);
            return $biddabd_debit_weekly;
        }
    }
    public function biddabd_debit_show_monthly()
    {
        $query = "SELECT * FROM biddabd_debit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_debit_monthly = mysqli_query($this->conn, $query);
            return $biddabd_debit_monthly;
        }
    }




        /*____________________________biddabd global____________________________*/



        public function biddabdgl_credit_show_daily()
        {
            $query = "SELECT * FROM biddabd_gobal_credit_daily";
           
            if (mysqli_query($this->conn, $query)) {
                $biddabd_gobal_credit_daily = mysqli_query($this->conn, $query);
                return $biddabd_gobal_credit_daily;
            }
        }

    public function biddabdgl_credit_show_weekly()
    {
        $query = "SELECT * FROM biddabd_gobal_credit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_gobal_credit_weekly = mysqli_query($this->conn, $query);
            return $biddabd_gobal_credit_weekly;
        }
    }

    public function biddabdgl_credit_show_monthly()
    {
        $query = "SELECT * FROM biddabd_gobal_credit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_gobal_credit_monthly = mysqli_query($this->conn, $query);
            return $biddabd_gobal_credit_monthly;
        }
    }

    public function biddabdgl_debit_show_daily()
    {
        $query = "SELECT * FROM biddabd_gobal_debit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_gobal_debit_daily = mysqli_query($this->conn, $query);
            return $biddabd_gobal_debit_daily;
        }
    }
    public function biddabdgl_debit_show_weekly()
    {
        $query = "SELECT * FROM biddabd_gobal_debit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_gobal_debit_weekly = mysqli_query($this->conn, $query);
            return $biddabd_gobal_debit_weekly;
        }
    }
    public function biddabdgl_debit_show_monthly()
    {
        $query = "SELECT * FROM biddabd_gobal_debit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $biddabd_gobal_debit_monthly = mysqli_query($this->conn, $query);
            return $biddabd_gobal_debit_monthly;
        }
    }
    
    /*____________________________bs techonology____________________________*/

    public function bst_debit_show_daily()
    {
        $query = "SELECT * FROM bst_debit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_debit_daily = mysqli_query($this->conn, $query);
            return $bst_debit_daily;
        }
    }

    public function bst_debit_show_weekly()
    {
        $query = "SELECT * FROM bst_debit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_debit_weekly = mysqli_query($this->conn, $query);
            return $bst_debit_weekly;
        }
    }

    public function bst_debit_show_monthly()
    {
        $query = "SELECT * FROM bst_debit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_debit_monthly = mysqli_query($this->conn, $query);
            return $bst_debit_monthly;
        }
    }
    public function bst_credit_show_daily()
    {
        $query = "SELECT * FROM bst_credit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_credit_daily = mysqli_query($this->conn, $query);
            return $bst_credit_daily;
        }
    }
    public function bst_credit_show_weekly()
    {
        $query = "SELECT * FROM bst_credit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_credit_weekly = mysqli_query($this->conn, $query);
            return $bst_credit_weekly;
        }
    }
    public function bst_credit_show_monthly()
    {
        $query = "SELECT * FROM bst_credit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $bst_credit_monthly = mysqli_query($this->conn, $query);
            return $bst_credit_monthly;
        }
    }

 /*____________________________overseas____________________________*/
    public function overseas_credit_show_daily()
    {
        $query = "SELECT * FROM overseas_credit_daily";
        
        if (mysqli_query($this->conn, $query)) {
            $overseas_credit_daily = mysqli_query($this->conn, $query);
            return $overseas_credit_daily;
        }
    }
    public function show_overseas_credit_daily()
    {
        $query = "SELECT * FROM overseas_credit_daily";
            if(mysqli_query($this->conn, $query))
            {
                $overseas_credit_daily = mysqli_query($this->conn, $query);
                return $overseas_credit_daily;
            }
    }
    public function overseas_credit_show_monthly()
        {
            $query = "SELECT * FROM overseas_credit_monthly";
        
            if (mysqli_query($this->conn, $query)) {
                $overseas_credit_monthly = mysqli_query($this->conn, $query);
                return $overseas_credit_monthly;
            }
        }
    public function overseas_credit_show_weekly()
    {
        $query = "SELECT * FROM overseas_credit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $overseas_credit_weekly = mysqli_query($this->conn, $query);
            return $overseas_credit_weekly;
        }
    }
public function overseas_debit_show_daily()
    {
        $query = "SELECT * FROM overseas_debit_daily";
       
        if (mysqli_query($this->conn, $query)) {
            $overseas_debit_daily = mysqli_query($this->conn, $query);
            return $overseas_debit_daily;
        }
    }
public function overseas_debit_show_weekly()
    {
        $query = "SELECT * FROM overseas_debit_weekly";
       
        if (mysqli_query($this->conn, $query)) {
            $overseas_debit_weekly = mysqli_query($this->conn, $query);
            return $overseas_debit_weekly;
        }
    }
public function overseas_debit_show_monthly()
    {
        $query = "SELECT * FROM overseas_debit_monthly";
       
        if (mysqli_query($this->conn, $query)) {
            $overseas_debit_monthly = mysqli_query($this->conn, $query);
            return $overseas_debit_monthly;
        }
    }
   


}
?>
