<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Inventory Management System</title>
    <?php include("head.php");?>

    
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
                                <center><h2>OVERSEAS TRANSACTION</h2> 
                                  
                                
                            
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <center><h2>CREDIT</h2>
            
            <?php
              include('backend/counting.php');
              $obj = new Count();
              $obc=$obj-> overseas_credit_daily_sum();
              $omc=$obj->overseas_credit_monthly_sum();
              $odb=$obj-> overseas_debit_daily_sum();
              $odw=$obj-> overseas_debit_weekly_sum();
              $odm=$obj-> overseas_debit_monthly_sum();

              ?>
           
                                    <br> 
                   <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered1" id="table" style="border: 1px solid; border-color: white;">
                                    <thead style="background-color: #D61355; color: black; text-align: center;">
                                        <tr> 			
                                            <th>Sl.No</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr style="color: white; text-align: center;">
                                            <th>01</th>
                                            <td>Daily</td>
                                            
                                            <td><?php echo $obc;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>02</th>
                                            <td>weekly</td>
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>03</th>
                                            <td>Monthly</td>
                                            <td><?php echo $omc;?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                
                               
                          </div>
                          

                          

                        </div>
                   </div>
                  
                   <br>
                    <br>
                    <table class="table table-bordered"style="border: 1px solid; border-color: white;">

                              <tbody class="header" style="color: white; text-align: center;">
                         
                                <tr>
                                    <th>Total Amount</th>
                                    <td id="val"></td>
                                </tr>
                              </tbody>
                             
                         
                        
                                   
                                <script>
                                    
                                    var table = document.getElementById("table"), sumVal = 0;
                                    
                                    for(var i = 1; i < table.rows.length; i++)
                                    {
                                        sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
                                    }
                               
                                    
                                    document.getElementById("val").innerHTML =   + sumVal;
                                    console.log(sumVal);
                            
                                    
                                    
                                </script>
                              </tbody>
                            </table>

  <!------------------------------------->

  <br>
            <br>
            <center><h2>DEBIT</h2>   
                                    <br> 
                   <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" id="tabletable" style="border: 1px solid; border-color: white;">
                                    <thead style="background-color: #D61355; color: black; text-align: center;">
                                        <tr> 			
                                            <th scope="col">Sl.No</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">01</th>
                                            <td>daily</td>
                                            <td><?php echo $odb['total'];?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>weekly</td>
                                            <td><?php echo $odw;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">03</th>
                                            <td>monthly</td>
                                            <td><?php echo $odm['total'];?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                              
                          </div>

                        </div>
                   </div>
                  

                   <br>
                    <br>
                    <table class="table table-bordered"style="border: 1px solid; border-color: white;">

                        <tbody class="header" style="color: white; text-align: center;">

                        <tr>
                            <th>Total Amount</th>
                            <td id="vale"></td>
                        </tr>
                        </tbody>



                            
                        <script>
                            
                            var tabletable = document.getElementById("tabletable"), sumVale = 0;
                            
                            for(var i = 1; i < tabletable.rows.length; i++)
                            {
                                sumVale = sumVale + parseInt(tabletable.rows[i].cells[2].innerHTML);
                            }
                        
                            
                            document.getElementById("vale").innerHTML =   + sumVale;
                            console.log(sumVale);

                            
                            
                        </script>
                        </tbody>
                        </table>
<!---------------------------------------->

            <br>
            <br>
            <center><h2>Overall</h2>   
                                    <br> 
                   <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table id="tabletab" class="table table-bordered" style="border: 1px solid; border-color: white;">
                                    <thead style="background-color: #D61355; color: black; text-align: center;">
                                        <tr> 			
                                            <th >Sl.No</th>
                                            <th >Description</th>
                                            <th >Amount</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr style="color: white; text-align: center;">
                                            <th >01</th>
                                            <td>Total Credit Amount</td>
                                            <td id="demo">
                                            <script>
                                                document.getElementById("demo").innerHTML = + sumVal ;
                                               
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                        <tr style="color: white; text-align: center;">
                                            <th >02</th>
                                            <td>Total Debit Amount</td>
                                            <td id="ruma">
                                            <script>
                                                document.getElementById("ruma").innerHTML = + sumVale ;
                                               
                                                </script>
                                            </td>    
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>

                                <!----------AMOUINT---------->
                               
                               
                                

                          </div>
                          

                          

                        </div>
                   </div>
                   <br>
                    <br>
                
                            <table class="table table-bordered" style="border: 1px solid; border-color: white;">

                                <tbody class="header" style="color: white; text-align: center;">
                         
                                    <tr>
                                        <th>Total Amount</th>
                                        <td id="pipra"></td>
                                        
                                    </tr>

                                    <script>
                            
                            var tabletab = document.getElementById("tabletab"), sumpipra = 0;
                            
                            for(var i = 1; i < tabletab.rows.length; i++)
                            {
                                sumpipra = sumpipra + parseInt(tabletab.rows[i].cells[2].innerHTML);
                            }
                        
                            
                            document.getElementById("pipra").innerHTML =   + sumpipra;
                            console.log(sumpipra);

                            
                            
                        </script>
                                </tbody>
                            </table>
                             
                                       
                     </div> 
                               

                    

       
            <!-- Widgets End -->


            <!-- Footer Start -->
            <?php include("footer.php");?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("script.php");?>
</body>

</html>