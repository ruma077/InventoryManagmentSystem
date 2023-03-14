<?php

class Count
{
    private $conn;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database ="ims";

       $this->conn =  mysqli_connect($servername, $username, $password,$database);

    
        if (!$this->conn) 
        {
         die("Connection failed");
        }
    }

    function overseas_credit_daily_sum()
    {
        $query="SELECT SUM(client_free) FROM overseas_credit_daily";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(client_free)'];
        return $number;
    }
    // function overseas_credit_weekly_sum()
    // {
    //     $query="SELECT SUM(amount) FROM  overseas_credit_weekly";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(amount)'];
    //     return $number;
    // }
    function overseas_credit_monthly_sum()
    {
        $query="SELECT SUM(social_cost) FROM overseas_credit_monthly";
        $value= mysqli_query($this->conn, $query);
       
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(social_cost)'];
        return $number;
    }
    function overseas_debit_daily_sum()
    {
        $query="SELECT SUM(mobile_cost +hospitality_cost +	visa_pro_cost)  AS total FROM  overseas_debit_daily";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
        
    }
    function overseas_debit_weekly_sum()
    {
        $query="SELECT SUM(marketing_cost) FROM overseas_debit_weekly";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(marketing_cost)'];
        return $number;
    }
    function overseas_debit_monthly_sum()
    {
        $query="SELECT SUM(employee_cost+ equipment_cost) AS total FROM  overseas_debit_monthly";
       
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
        
    }


    //---------------biddabd-------------->


    function biddabd_credit_daily_sum()
    {
        $query="SELECT SUM(course_free) FROM biddabd_credit_daily";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(course_free)'];
        return $number;
    }
    // function biddabd_credit_weekly_sum()
    // {
    //     $query="SELECT SUM(	course_free) FROM  biddabd_credit_monthly";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(course_free)'];
    //     return $number;
    // }
    function biddabd_credit_monthly_sum()
    {
        $query="SELECT SUM(facebook + youtube	+ investment)  AS total FROM biddabd_credit_monthly";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }
    function biddabd_debit_daily_sum()
    {
        $query="SELECT SUM(hospitality_cost + teacher_cost)  AS total  FROM biddabd_debit_daily";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }
    function  biddabd_debit_weekly_sum()
    {
        $query="SELECT SUM(marketing_cost) FROM  biddabd_debit_weekly";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(marketing_cost)'];
        return $number;
    }
    function  biddabd_debit_monthly_sum()
    {
        $query="SELECT SUM(employee_cost	+ equipment_cost +	studio_cost)  AS total FROM biddabd_debit_monthly";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }


    //---------------bd global----------------->


    function biddabd_gobal_credit_daily_sum()
    {
        $query="SELECT SUM(student_free) FROM  biddabd_gobal_credit_daily";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(student_free)'];
        return $number;
    }
    // function  biddabd_gobal_credit_weekly_sum()
    // {
    //     $query="SELECT SUM(student_free) FROM biddabd_credit_daily";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(student_free)'];
    //     return $number;
    // }
    function  biddabd_gobal_credit_monthly_sum()
    {
        $query="SELECT SUM(social_cost) FROM  biddabd_gobal_credit_monthly";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(social_cost)'];
        return $number;
    }
    function  biddabd_gobal_debit_daily_sum()
    {
        $query="SELECT SUM(mobile_cost+hospitality_cost+visa_pro_cost)  AS total  FROM  biddabd_gobal_debit_daily";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }
    function   biddabd_gobal_debit_weekly_sum()
    {
        $query="SELECT SUM(marketing_cost) FROM   biddabd_gobal_debit_weekly";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(marketing_cost)'];
        return $number;
    }
    function  biddabd_gobal_debit_monthly_sum()
    {
        $query="SELECT SUM(employee_cost + equipment_cost)  AS total FROM  biddabd_gobal_debit_monthly";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }

    //-----------------bs---------------->


    // function  bst_credit_daily_sum()
    // {
    //     $query="SELECT SUM(marketing_cost) FROM   bst_credit_daily";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(marketing_cost)'];
    //     return $number;
    // }
    // function bst_credit_weekly_sum()
    // {
    //     $query="SELECT SUM(marketing_cost) FROM   bst_credit_weekly";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(marketing_cost)'];
    //     return $number;
    // }
    function    bst_credit_monthly_sum()
    {
        $query="SELECT SUM(software) FROM bst_credit_monthly";
        $value= mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($value);
        $number=$row['SUM(software)'];
        return $number;
    }
    // function   bst_debit_daily_sum()
    // {
    //     $query="SELECT SUM(marketing_cost) FROM   biddabd_gobal_debit_weekly";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(marketing_cost)'];
    //     return $number;
    // }
    // function  bst_debit_weekly_sum()
    // {
    //     $query="SELECT SUM(marketing_cost) FROM   biddabd_gobal_debit_weekly";
    //     $value= mysqli_query($this->conn, $query);
    //     $row = mysqli_fetch_assoc($value);
    //     $number=$row['SUM(marketing_cost)'];
    //     return $number;
    // }
    function   bst_debit_monthly_sum()
    {
        $query="SELECT SUM(employee_cost + equipment_cost)  AS total FROM  bst_debit_monthly";
        $count = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($count); 
            return $row;
    }

}
?>