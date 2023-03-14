<?php

class Insert
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


    /*____________________________OVERSEAS____________________________*/

    public function add_overseas_debit_daily($data) 
    {
        $mobile_cost = $data['mobile_cost'];
        $hospitality_cost = $data['hospitality_cost'];
        $visa_pro_cost = $data['visa_pro_cost'];
        $date = $data['date'];
        $query = "INSERT INTO overseas_debit_daily (mobile_cost,hospitality_cost,visa_pro_cost,date) VALUE ('$mobile_cost','$hospitality_cost','$visa_pro_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS DAILY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS DAILY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function add_overseas_debit_weekly($data) 
    {
        $marketing_cost = $data['marketing_cost'];
        $date = $data['date'];
         $query = "INSERT INTO overseas_debit_weekly (marketing_cost,date) VALUE ('$marketing_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS WEEKLY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS WEEKLY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function overseas_debit_add_monthly($data) 
    {
        $employee_cost = $data['employee_cost'];
        $equipment_cost = $data['equipment_cost'];
        $date = $data['date'];
         $query = "INSERT INTO overseas_debit_monthly (employee_cost,equipment_cost,date) VALUE ('$employee_cost','$equipment_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS MONTHLY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS MONTHLY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function overseas_credit_add_daily($data) 
    {
        $client_free = $data['client_free'];
        $date = $data['date'];
         $query = "INSERT INTO overseas_credit_daily (client_free,date) VALUE ('$client_free','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS DAILY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS DAILY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function overseas_credit_add_weekly($data) 
    {
        $date = $data['date'];
         $query = "INSERT INTO overseas_credit_weekly (date) VALUE ('$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS WEEKLY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS WEEKLY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function overseas_credit_add_monthly($data) 
    {
        $social_cost = $data['social_cost'];
        $date = $data['date'];
         $query = "INSERT INTO overseas_credit_monthly (social_cost,date) VALUE ('$social_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS MONTHLY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS MONTHLY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    public function overseas_overall_transation($data) 
    {
        $credit = $data['credit'];
        $debit = $data['debit'];
        $date = $data['date'];
         $query = "INSERT INTO overseas_overall (credit,debit,date) VALUE ('$credit','$debit','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS OVERALL TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "OVERSEAS OVERALL TRANSACTION Not Added!......";
            return $msg;
        }
    }




/*____________________________BIDDABD____________________________*/




    public function biddabd_debit_add_daily($data) 
        {
            $hospitality_cost = $data['hospitality_cost'];
            $teacher_cost = $data['teacher_cost'];
            $date = $data['date'];
            $query = "INSERT INTO biddabd_debit_daily (hospitality_cost,teacher_cost,date) VALUE ('$hospitality_cost','$teacher_cost','$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD DAILY DEBIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD DAILY DEBIT TRANSACTION Not Added!......";
                return $msg;
            }
        }
        public function biddabd_debit_add_weekly($data) 
        {
           
            $marketing_cost = $data['marketing_cost'];
            $date = $data['date'];
            $query = "INSERT INTO biddabd_debit_weekly (marketing_cost,date) VALUE ('$marketing_cost','$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD WEEKLY DEBIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD WEEKLY DEBIT TRANSACTION Not Added!......";
                return $msg;
            }
        }
        public function biddabd_debit_add_monthly($data) 
        {
           
            $employee_cost = $data['employee_cost'];
            $equipment_cost = $data['equipment_cost'];
            $studio_cost = $data['studio_cost'];
            $date = $data['date'];
            $query = "INSERT INTO biddabd_debit_monthly (employee_cost,equipment_cost,studio_cost,date) VALUE ('$employee_cost','$equipment_cost','$studio_cost','$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD MONTHLY DEBIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD MONTHLY DEBIT TRANSACTION Not Added!......";
                return $msg;
            }
        }
        public function biddabd_credit_add_daily($data) 
        {
           
            $course_free = $data['course_free'];
            $date = $data['date'];
            $query = "INSERT INTO biddabd_credit_daily (course_free,date) VALUE ('$course_free','$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD DAILY CREDIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD DAILY CREDIT TRANSACTION Not Added!......";
                return $msg;
            }
        } 
        public function biddabd_credit_add_weekly($data) 
        {
            $date = $data['date'];
            $query = "INSERT INTO biddabd_credit_weekly (date) VALUE ('$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD WEEKLY CREDIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD WEEKLY CREDIT TRANSACTION Not Added!......";
                return $msg;
            }
        }
        public function biddabd_credit_add_monthly($data) 
        {
            $facebook = $data['facebook'];
            $youtube = $data['youtube'];
            $investment = $data['investment'];
            $date = $data['date'];
            // $date = $data['date'];
            $query = "INSERT INTO biddabd_credit_monthly (facebook,youtube,investment,date) VALUE ('$facebook','$youtube','$investment','$date')";
            if (mysqli_query($this->conn, $query)) {
                $msg = "BIDDABD MONTHLY CREDIT TRANSACTION Added Successfully!......";
                return $msg;
            } else {
                $msg = "BIDDABD MONTHLY CREDIT TRANSACTION Not Added!......";
                return $msg;
            }
        }



 /*____________________________BIDDABD GLOBAL____________________________*/

    public function biddabdgl_debit_add_daily($data) 
    {
        $mobile_cost = $data['mobile_cost'];
        $hospitality_cost = $data['hospitality_cost'];
        $visa_pro_cost = $data['visa_pro_cost'];
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_debit_daily (mobile_cost,hospitality_cost,visa_pro_cost,date) VALUE ('$mobile_cost','$hospitality_cost','$visa_pro_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GLOBAL DAILY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GLOBAL DAILY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    public function biddabdgl_debit_add_weekly($data) 
    {
        $marketing_cost = $data['marketing_cost'];
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_debit_weekly (marketing_cost,date) VALUE ('$marketing_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GLOBAL WEEKLY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GLOBAL WEEKLY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    public function biddabdgl_debit_add_monthly($data) 
    {
        $employee_cost = $data['employee_cost'];
        $equipment_cost = $data['equipment_cost'];
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_debit_monthly (employee_cost,equipment_cost,date) VALUE ('$employee_cost','$equipment_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GLOBAL MONTHLY DEBIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GLOBAL MONTHLY DEBIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    public function biddabdgl_credit_add_daily($data) 
    {
        $student_free = $data['student_free'];
      
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_credit_daily (student_free,date) VALUE ('$student_free','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GOBAL DAILY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GOBAL DAILY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    public function biddabdgl_credit_add_weekly($data) 
    {
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_credit_weekly (date) VALUE ('$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GOBAL WEEKLY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GOBAL WEEKLY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }

    public function biddabdgl_credit_add_monthly($data) 
    {
        $social_cost = $data['social_cost'];
        $date = $data['date'];
        $query = "INSERT INTO biddabd_gobal_credit_monthly (social_cost,date) VALUE ('$social_cost','$date')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD GOBAL MONTHLY CREDIT TRANSACTION Added Successfully!......";
            return $msg;
        } else {
            $msg = "BIDDABD GOBAL MONTHLY CREDIT TRANSACTION Not Added!......";
            return $msg;
        }
    }
    
    
/*____________________________BS TECHONOLOGY ____________________________*/
    
    
    
    
    
public function bst_debit_add_daily($data) 
{

    $date = $data['date'];
    $query = "INSERT INTO bst_debit_daily (date) VALUE ('$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST DAILY DEBIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST DAILY DEBIT TRANSACTION Not Added!......";
        return $msg;
    }
}

public function bst_debit_add_weekly($data) 
{

    $date = $data['date'];
    $query = "INSERT INTO bst_debit_weekly (date) VALUE ('$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST WEEKLY DEBIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST WEEKLY DEBIT TRANSACTION Not Added!......";
        return $msg;
    }
}
public function bst_debit_add_monthly($data) 
{

    $employee_cost = $data['employee_cost'];
    $equipment_cost = $data['equipment_cost'];
    $date = $data['date'];
    $query = "INSERT INTO bst_debit_monthly (employee_cost,equipment_cost,date) VALUE ('$employee_cost','$equipment_cost','$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST MONTHLY DEBIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST MONTHLY DEBIT TRANSACTION Not Added!......";
        return $msg;
    }
}
public function bst_credit_add_daily($data) 
{
    $date = $data['date'];
    $query = "INSERT INTO bst_credit_daily (date) VALUE ('$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST DAILY CREDIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST DAILY CREDIT TRANSACTION Not Added!......";
        return $msg;
    }
}
public function bst_credit_add_weekly($data) 
{
    $date = $data['date'];
    $query = "INSERT INTO bst_credit_weekly (date) VALUE ('$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST WEEKLY CREDIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST WEEKLY CREDIT TRANSACTION Not Added!......";
        return $msg;
    }
}
public function bst_credit_add_monthly($data) 
{
    $software = $data['software'];
    $date = $data['date'];
    $query = "INSERT INTO bst_credit_monthly (software,date) VALUE ('$software','$date')";
    if (mysqli_query($this->conn, $query)) {
        $msg = "BST MONTHLY CREDIT TRANSACTION Added Successfully!......";
        return $msg;
    } else {
        $msg = "BST MONTHLY CREDIT TRANSACTION Not Added!......";
        return $msg;
    }
}

















    }
?>