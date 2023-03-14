<?php

class Delete 
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




    // -------------------------------------------------OVERSEAS STARTS HERE-------------------------------------------------
    function delete_overses_daily_debit($id)
    {
        $query = "DELETE FROM overseas_debit_daily WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS DAILY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }

    function delete_overseas_debit_weekly($id)
    {
        $query = "DELETE FROM overseas_debit_weekly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS WEEKLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    } 
    
    function delete_overseas_debit_monthly($id)
    {
        $query = "DELETE FROM overseas_debit_monthly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS MONTHLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    
    function delete_overseas_credit_daily($id)
    {
        $query = "DELETE FROM overseas_credit_daily WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS DAILY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    } 
    
    function delete_all_weekly($id)
    {
        $query = "DELETE FROM overseas_credit_weekly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS WEEKLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    function delete_overses_monthly_credit($id)
    {
        $query = "DELETE FROM overseas_credit_monthly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "OVERSEAS MONTHLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    
    // -------------------------------------------------OVERSEAS ENDS HERE-------------------------------------------------

    // -------------------------------------------------BIDDABD STARTS HERE-------------------------------------------------

    function delete_biddabd_credit_show_daily($id)
    {
        $query = "DELETE FROM biddabd_credit_daily WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD DAILY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    function delete_biddabd_credit_show_weekly($id)
    {
        $query = "DELETE FROM biddabd_credit_weekly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD WEEKLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    function delete_biddabd_credit_show_monthly($id)
    {
        $query = "DELETE FROM biddabd_credit_monthly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD MONTHLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    } 
    function delete_biddabd_debit_show_daily($id)
    {
        $query = "DELETE FROM biddabd_debit_daily WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD DAILY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    } 
    function delete_biddabd_debit_show_weekly($id)
    {
        $query = "DELETE FROM biddabd_debit_weekly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD WEEKLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    } 
    function delete_biddabd_debit_show_monthly($id)
    {
        $query = "DELETE FROM biddabd_debit_monthly WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "BIDDABD MONTHLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
            return $msg;
        }
    }
    
 // -------------------------------------------------BIDDABD ENDS HERE-------------------------------------------------

 // -------------------------------------------------BIDDABD GLOBAL STRATS HERE-------------------------------------------------
    

 function delete_biddabdgl_credit_show_daily($id)
 {
     $query = "DELETE FROM biddabd_gobal_credit_daily WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL DAILY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
 function delete_biddabdgl_credit_show_weekly($id)
 {
     $query = "DELETE FROM biddabd_gobal_credit_weekly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL WEEKLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
 function delete_biddabdgl_credit_show_monthly($id)
 {
     $query = "DELETE FROM biddabd_gobal_credit_monthly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL MONTHLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_biddabdgl_debit_show_daily($id)
 {
     $query = "DELETE FROM biddabd_gobal_debit_daily WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL DAILY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_biddabdgl_debit_show_weekly($id)
 {
     $query = "DELETE FROM biddabd_gobal_debit_weekly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL WEEKLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_biddabdgl_debit_show_monthly($id)
 {
     $query = "DELETE FROM biddabd_gobal_debit_monthly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BIDDABD GLOBAL MONTHLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
// -------------------------------------------------BIDDABD GLOBAL ENDS HERE-------------------------------------------------

// -------------------------------------------------BS TECHONOLOGY STRATS HERE-------------------------------------------------
    

 function delete_bst_credit_show_daily($id)
 {
     $query = "DELETE FROM bst_credit_daily WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY DAILY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
 function delete_bst_credit_show_weekly($id)
 {
     $query = "DELETE FROM bst_credit_weekly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY WEEKLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
 function delete_bst_credit_show_monthly($id)
 {
     $query = "DELETE FROM bst_credit_monthly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY MONTHLY CREDIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_bst_debit_show_daily($id)
 {
     $query = "DELETE FROM bst_debit_daily WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY DAILY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_bst_debit_show_weekly($id)
 {
     $query = "DELETE FROM bst_debit_weekly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY WEEKLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 } 
 function delete_bst_debit_show_monthly($id)
 {
     $query = "DELETE FROM bst_debit_monthly WHERE id=$id";
     if (mysqli_query($this->conn, $query)) {
         $msg = "BS TECHONOLOGY MONTHLY DEBIT TRANSACTION DELETED SUCCESSFULLY.......!";
         return $msg;
     }
 }
// -------------------------------------------------BS TECHONOLOGY ENDS HERE-------------------------------------------------








}
