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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
                                <center><h2 style="color:white;">BS TECHNOLOGY TRANSACTION GRAPH</h2> 
                                  
                                
                            
                            </div> 
                       </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
   <center><h2>DEBIT</h2>   
                                    <br>  
            <!------------------debit daily---------->

      
    <!---------------------debit monthly-------------------------->

      <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'employee_cost', '	equipment_cost'],
              <?php
              $query= "SELECT  * from   bst_debit_monthly";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $employee_cost=$data['employee_cost'];
                    $equipment_cost=$data['equipment_cost'];
                   
                    
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $employee_cost;?>,<?php echo $equipment_cost;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: 'Bs Technology Monthly',
                  subtitle: 'Employee Cost and Equipment Cost',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('barchart'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
    <!--------------------debit weekly------------->

    
    <!--------------------CREDIT daily---------------->
   
    <!-----------------------credit monthly------>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'software'],
              <?php
              $query= "SELECT  * from  bst_credit_monthly";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $software=$data['software'];
                   
                  
                    
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $software;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: 'Bs Technology Monthly',
                  subtitle: 'Software',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('Contain'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
    </script>
    
    
    <div id="barchart" style="width:500px; height:300px;"></div>
              <br>
              <center><h2>CREDIT</h2>   
                                    <br> 
                                    <br>
                                    
                                    <div id="Contain" style="width:500px; height:300px;"></div>                        
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