<?php include('session.php');?>
<?php
$conn=new mysqli("localhost","root","","ims");

if(!$conn){
	echo "Connection Failed";
}
?>  
  
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Inventory Management System</title>
    <?php include("head.php");?>

    <style>
      @page
      {
        size:A4;
        margin:0;
      }
      #print-btn
      {
        display:non;
        visibility:non;
      }
      
     
    </style>



    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 

</head>

<body style="overflow-y:auto;">
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include("nev.php");?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include("saide.php");?>

           

            <!-- Navbar End -->
            
        
        


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
            
            <div class="row g-4">
                
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="h-100 bg-secondary rounded p-4" style="overflow-x:auto;">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                    
                            <div class="col-12 text-center text-sm-start">
                                <center><h2 style="color:white;">OVERSEAS DEBIT WEEKLY TRANSACTION GRAPH</h2> 
                                  
                                
                            
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <?php
                 include("backend/show.php");
                 $obj = new Show();
                 $item = $obj-> overseas_debit_show_weekly();

                $test=array();

                $count= 0;
                

                 while($element = mysqli_fetch_array($item))
                 {
                  $test[$count]["label"]=$element["date"];
                  $test[$count]["y"]=$element["marketing_cost"];
                  $count=$count+1;
                 }
                ?>  
                
                
                <script>
 window.onload = function() {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2",
     title:{
         text: "Months"
     },
     axisY: {
         title: "Transation Amount"
     },
     data: [{
         type: "column",
         yValueFormatString: "#,##0.## ",
         dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 <br>
 <br>


          <div class="card"style="wdith=40px">
          <div id="chartContainer"></div>

          </div>
                           

                           
                                        
          <br>
          <br>                     
                                

                          
       
            <!-- Widgets End -->


            <!-- Footer Start -->
            <?php include("footer.php");?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top hidden-print"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("script.php");?>
</body>

</html>