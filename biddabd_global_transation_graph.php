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
                                <center><h2 style="color:white;">BIDDABD GLOBAL TRANSACTION GRAPH</h2> 
                                  
                                
                            
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

      <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'Mobile cost', 'Hospitality Cost','Visa Processing Cost'],
              <?php
              $query= "SELECT  * from biddabd_gobal_debit_daily";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $mobile_cost=$data['mobile_cost'];
                    $hospitality_cost=$data['hospitality_cost'];
                    $visa_pro_cost=$data['visa_pro_cost'];
                   
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $mobile_cost;?>,<?php echo $hospitality_cost;?>,<?php echo $visa_pro_cost;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: 'Biddabd Gobal Debit Daily',
                  subtitle: 'Mobile Cost,Hospitality Cost,Visa Processing Cost ',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('barchart_material'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

    <!---------------------debit monthly-------------------------->

      <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'employee_cost', '	equipment_cost'],
              <?php
              $query= "SELECT  * from   biddabd_gobal_debit_monthly";
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
                  title: 'Biddabd Global Debit Monthly',
                  subtitle: 'Employee Cost and Equipment Cost',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('barchart'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
    <!--------------------debit weekly------------->

    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'Marketing Cost'],
              <?php
              $query= "SELECT  * from  biddabd_gobal_debit_weekly";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $marketing_cost=$data['marketing_cost'];
                  
                    
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $marketing_cost;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: 'Biddabd Global Debit Weekly',
                  subtitle: 'Marketing Cost',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('chartContainer'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
    </script>
    <!--------------------CREDIT daily---------------->
    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'student_free'],
              <?php
              $query= "SELECT  * from   biddabd_gobal_credit_daily";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $student_free=$data['student_free'];
                  
                    
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $student_free	;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: ' Biddabd GLobal Credit Daily',
                  subtitle: 'Student Fee',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('Container'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
    </script>
    <!-----------------------credit monthly------>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Date', 'social_cost'],
              <?php
              $query= "SELECT  * from  biddabd_gobal_credit_monthly";
              $res=mysqli_query($conn,$query);
                  while($data=mysqli_fetch_array($res)){
                    
                    $social_cost=$data['social_cost'];
                   
                  
                    
                    $date=$data['date'];
              ?>
              ['<?php echo $date;?>',<?php echo $social_cost;?>],   
                <?php   
                  }
                ?> 
              ]);

              var options = {
                chart: {
                  title: ' Biddabd Global Credit Monthly',
                  subtitle: 'Social Cost',
                },
                bars: 'vertical' // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('Contain'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
    </script>
    
    
                <div class="row">
                      <div class="col">
                          <div id="barchart_material" style="height:250px"></div>
                        </div>
                      <div class="col">
                        <div id="chartContainer" style="height:250px"></div>
                        </div>
                      <div class="col">
                        <div id="barchart" style="height:250px"></div>
                      </div>
              </div>
              <br>
              <center><h2>CREDIT</h2>   
                                    <br> 
                                    <br>
                                    <div class="row">
                      <div class="col">
                          <div id="Container" style="height:300px"></div>
                        </div>
                      <div class="col">
                        <div id="Contain" style="height:300px"></div>
                        </div>
                    
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