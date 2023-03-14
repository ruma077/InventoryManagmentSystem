<?php include('session.php');?>
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


            <?php
              include('backend/counting.php');
              $obj = new Count();
              $obc=$obj-> overseas_credit_daily_sum();
              $omc=$obj->overseas_credit_monthly_sum();
              $odb=$obj-> overseas_debit_daily_sum();
              $odw=$obj-> overseas_debit_weekly_sum();
              $odm=$obj-> overseas_debit_monthly_sum();
              $bgcd=$obj-> biddabd_gobal_credit_daily_sum();
              $bgcm=$obj->biddabd_gobal_credit_monthly_sum();
              $bgdd=$obj-> biddabd_gobal_debit_daily_sum();
              $bgdw=$obj->  biddabd_gobal_debit_weekly_sum();
            $bgdm=$obj-> biddabd_gobal_debit_monthly_sum();
             $bscm=$obj->bst_credit_monthly_sum();
             $bsdm=$obj-> bst_debit_monthly_sum();
             $bcde=$obj-> biddabd_credit_daily_sum();
             $bcm=$obj->biddabd_credit_monthly_sum();
              $bdd=$obj-> biddabd_debit_daily_sum();
              $bdwr=$obj-> biddabd_debit_weekly_sum();
              $mnbv=$obj->biddabd_debit_monthly_sum();

              ?>
           
                                   
                   <div class="row g-4" hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered1" hidden="hidden" id="table" style="border: 1px solid; border-color: white;">
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
                  
                  
                        <table class="table table-bordered " hidden="hidden"style="border: 1px solid; border-color: white;">

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

  
                                 
                   <div class="row g-4" hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" hidden="hidden" id="tabletable" style="border: 1px solid; border-color: white;">
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
                    <table class="table table-bordered" hidden="hidden"style="border: 1px solid; border-color: white;">

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
                   <div class="row g-4" hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table id="tabletab" hidden="hidden" class="table table-bordered" style="border: 1px solid; border-color: white;">
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
                            <table class="table table-bordered" hidden="hidden" style="border: 1px solid; border-color: white;">

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

                            <!-----------------------biddabd----------------->

          
                           <div class="row g-4" hidden="hidden">
                              <div class="col-sm-12 col-xl-12">
                               <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" hidden="hidden" id="tableeleven" style="border: 1px solid; border-color: white;">
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
                                            <td><?php echo  $bcde;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>weekly</td>
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">03</th>
                                            <td>Monthly</td>
                                            <td><?php echo $bcm['total'];?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                              </div>
                    
                             </div>
                            </div>
                    <table class="table table-bordered" hidden="hidden"style="border: 1px solid; border-color: white;">

                            <tbody class="header" style="color: white; text-align: center;">

                                <tr>
                                    <th>Total Amount</th>
                                    <td id="alex"></td>
                                </tr>
                                </tbody>



                                
                                    <script>
                                        
                                        var tableeleven = document.getElementById("tableeleven"), sumAlex = 0;
                                        
                                        for(var i = 1; i < tableeleven.rows.length; i++)
                                        {
                                            sumAlex  = sumAlex  + parseInt(tableeleven.rows[i].cells[2].innerHTML);
                                        }
                                    
                                        
                                        document.getElementById("alex").innerHTML =   + sumAlex ;
                                        console.log(sumAlex );

                                        
                                        
                                    </script>
                            </tbody>
                    </table>
                   <div class="row g-4"  hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered"  hidden="hidden" id="tabletwelve" style="border: 1px solid; border-color: white;">
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
                                            <td><?php echo $bdd['total'];?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>weekly</td>
                                            <td><?php echo $bdwr;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">03</th>
                                            <td>monthly</td>
                                            <td><?php echo  $mnbv['total'];?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                          </div>
                          

                          

                    </div>
                   </div>
                    <table class="table table-bordered"  hidden="hidden"style="border: 1px solid; border-color: white;">

                            <tbody class="header" style="color: white; text-align: center;">

                                        <tr>
                                            <th>Total Amount</th>
                                            <td id="pondith"></td>
                                        </tr>
                            </tbody>



                    
                             <script>
                    
                                var tabletwelve = document.getElementById("tabletwelve"), sumPondith = 0;
                                
                                for(var i = 1; i < tabletwelve.rows.length; i++)
                                {
                                    sumPondith = sumPondith + parseInt(tabletwelve.rows[i].cells[2].innerHTML);
                                }

                                
                                document.getElementById("Pondith").innerHTML =   + sumPondith;
                                console.log(sumPondith);

                                
                    
                             </script>
                        </tbody>
                    </table>
<!---------------------------------------->


                   <div class="row g-4" hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" id="tablethirten" hidden="hidden" style="border: 1px solid; border-color: white;">
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
                                            <td>Total Credit Amount</td>
                                            <td id="jafrin">
                                            <script>
                                                document.getElementById("jafrin").innerHTML = + sumAlex;
                                               
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>Total Debit Amount</td>
                                            <td id="cendila">
                                            <script>
                                                document.getElementById("cendila").innerHTML = + sumPondith;
                                               
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>
                          </div>
                          

                          

                        </div>
                   </div>
                   <br>
                    <br>
                    <table class="table table-bordered" hidden="hidden" style="border: 1px solid; border-color: white;">

                        <tbody class="header" style="color: white; text-align: center;">

                            <tr>
                                <th>Total Amount</th>
                                <td id="koly"></td>
                                
                            </tr>

                                    <script>

                                        var tablethirten = document.getElementById("tablethirten"), sumKoly = 0;

                                        for(var i = 1; i < tablethirten.rows.length; i++)
                                        {
                                            sumKoly= sumKoly+ parseInt(tablethirten.rows[i].cells[2].innerHTML);
                                        }


                                        document.getElementById("Koly").innerHTML =   + sumKoly;
                                        console.log(sumKoly);



                                    </script>
                        </tbody>
                    </table>

                            <!----------end----------------------->

                             <!-----------------------biddabd global----------------->


                                  
                   <div class="row g-4" hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered1" id="tablefive" style="border: 1px solid; border-color: white;">
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
                                            
                                            <td><?php echo $bgcd;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>02</th>
                                            <td>weekly</td>
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>03</th>
                                            <td>Monthly</td>
                                            <td><?php echo $bgcm;?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                
                               
                          </div>
                          

                          

                        </div>
                   </div>
                    <table class="table table-bordered" hidden="hidden"style="border: 1px solid; border-color: white;">

                              <tbody class="header" style="color: white; text-align: center;">
                         
                                <tr>
                                    <th>Total Amount</th>
                                    <td id="sp"></td>
                                </tr>
                              </tbody>
                             
                         
                        
                                   
                                <script>
                                    
                                    var tablefive = document.getElementById("tablefive"), sumSp = 0;
                                    
                                    for(var i = 1; i < tablefive.rows.length; i++)
                                    {
                                        sumSp= sumSp + parseInt(tablefive.rows[i].cells[2].innerHTML);
                                    }
                               
                                    
                                    document.getElementById("sp").innerHTML =   + sumSp;
                                    console.log(sumSp);
                            
                                    
                                    
                                </script>
                              </tbody>
                    </table>
                   <div class="row g-4"hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" id="tablesix" style="border: 1px solid; border-color: white;">
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
                                            <td><?php echo $bgdd['total'];?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>weekly</td>
                                            <td><?php echo $bgdw;?></td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">03</th>
                                            <td>monthly</td>
                                            <td><?php echo $bgdm['total'];?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                              
                          </div>

                        </div>
                   </div>
                    <table class="table table-bordered" hidden="hidden"style="border: 1px solid; border-color: white;">

                        <tbody class="header" style="color: white; text-align: center;">

                        <tr>
                            <th>Total Amount</th>
                            <td id="sanjo"></td>
                        </tr>
                        </tbody>



                            
                        <script>
                            
                            var tablesix = document.getElementById("tablesix"), sumSanjo = 0;
                            
                            for(var i = 1; i < tablesix.rows.length; i++)
                            {
                                sumSanjo = sumSanjo + parseInt(tablesix.rows[i].cells[2].innerHTML);
                            }
                        
                            
                            document.getElementById("sanjo").innerHTML =   + sumSanjo;
                            console.log(sumSanjo);

                            
                            
                        </script>
                        </tbody>
                        </table>


           
          
                   <div class="row g-4" hidden="hidden" >
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table id="tableseven" class="table table-bordered" style="border: 1px solid; border-color: white;">
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
                                            <td id="tanvir">
                                            <script>
                                                document.getElementById("tanvir").innerHTML = +  sumSp;
                                               
                                                </script>


                                            </td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th >02</th>
                                            <td>Total Debit Amount</td>
                                            <td id="emon">
                                            <script>
                                                document.getElementById("emon").innerHTML = + sumSanjo ;
                                               
                                                </script>
                                            </td>    
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>
                                

                          </div>
                          

                          

                        </div>
                   </div>
                            <table class="table table-bordered" hidden="hidden" style="border: 1px solid; border-color: white;">

                                <tbody class="header" style="color: white; text-align: center;">
                         
                                    <tr>
                                        <th>Total Amount</th>
                                        <td id="global"></td>
                                        
                                    </tr>

                                    <script>
                            
                                        var tableseven = document.getElementById("tableseven"), sumglobal = 0;
                                        
                                        for(var i = 1; i < tableseven.rows.length; i++)
                                        {
                                            sumglobal = sumglobal+ parseInt(tableseven.rows[i].cells[2].innerHTML);
                                        }
                                    
                                        
                                        document.getElementById("global").innerHTML =   + sumglobal;
                                        console.log(sumglobal);

                            
                            
                                    </script>
                                </tbody>
                                    </table>
                            <!---------bst------------------>

                            <div class="row g-4" hidden="hidden">
                                     <div class="col-sm-12 col-xl-12">
                                 <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered1" hidden="hidden" id="tableeight" style="border: 1px solid; border-color: white;">
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
                                            
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>02</th>
                                            <td>weekly</td>
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th>03</th>
                                            <td>Monthly</td>
                                            <td><?php echo $bscm;?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                
                               
                          </div>
                        </div>
                   </div>
                    <table class="table table-bordered" hidden="hidden"style="border: 1px solid; border-color: white;">

                              <tbody class="header" style="color: white; text-align: center;">
                         
                                <tr>
                                    <th>Total Amount</th>
                                    <td id="popup"></td>
                                </tr>
                              </tbody>
                             
                         
                        
                                   
                                <script>
                                    
                                    var tableeight = document.getElementById("tableeight"), sumPopup = 0;
                                    
                                    for(var i = 1; i < tableeight.rows.length; i++)
                                    {
                                        sumPopup  = sumPopup  + parseInt(tableeight.rows[i].cells[2].innerHTML);
                                    }
                               
                                    
                                    document.getElementById("popup").innerHTML =   + sumPopup ;
                                    console.log(sumPopup );
                            
                                    
                                    
                                </script>
                              </tbody>
                        </table>

                   <div class="row g-4"  hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" id="tablenine" style="border: 1px solid; border-color: white;">
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
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">02</th>
                                            <td>weekly</td>
                                            <td>0</td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white; text-align: center;">
                                            <th scope="row">03</th>
                                            <td>monthly</td>
                                            <td><?php echo  $bsdm['total'];?></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                              
                          </div>

                        </div>
                   </div>
                    <table class="table table-bordered"  hidden="hidden"style="border: 1px solid; border-color: white;">

                        <tbody class="header" style="color: white; text-align: center;">

                        <tr>
                            <th>Total Amount</th>
                            <td id="tarek"></td>
                        </tr>
                        </tbody>



                            
                                <script>
                                    
                                    var tablenine = document.getElementById("tablenine"), sumTarek = 0;
                                    
                                    for(var i = 1; i < tablenine.rows.length; i++)
                                    {
                                        sumTarek  = sumTarek  + parseInt(tablenine.rows[i].cells[2].innerHTML);
                                    }
                                
                                    
                                    document.getElementById("tarek").innerHTML =   + sumTarek ;
                                    console.log(sumTarek );

                                    
                                    
                                </script>
                        </tbody>
                    </table>
                   <div class="row g-4"  hidden="hidden">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table id="tableten" class="table table-bordered" style="border: 1px solid; border-color: white;">
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
                                            <td id="friday">
                                            <script>
                                                document.getElementById("friday").innerHTML = + sumPopup ;
                                               
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                        <tr style="color: white; text-align: center;">
                                            <th >02</th>
                                            <td>Total Debit Amount</td>
                                            <td id="satday">
                                            <script>
                                                document.getElementById("satday").innerHTML = + sumTarek  ;
                                               
                                                </script>
                                            </td>    
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>
                                
                               
                                

                          </div>
                          

                          

                        </div>
                   </div>
                  
                            <table class="table table-bordered" hidden="hidden" style="border: 1px solid; border-color: white;">

                                <tbody class="header" style="color: white; text-align: center;">
                         
                                    <tr>
                                        <th>Total Amount</th>
                                        <td id="bs"></td>
                                        
                                    </tr>

                                    <script>
                            
                                    var tableten = document.getElementById("tableten"), sumbs = 0;
                                    
                                    for(var i = 1; i < tableten.rows.length; i++)
                                    {
                                        sumbs = sumbs  + parseInt(tableten.rows[i].cells[2].innerHTML);
                                    }
                                
                                    
                                    document.getElementById("bs").innerHTML =   + sumbs ;
                                    console.log(sumbs);

                            
                            
                        </script>
                                </tbody>
                            </table>   
                            <!------------------------------END------->            



    <!------------------------------------------------------>
            <div class="container-fluid pt-4 px-4">
            
            <div class="row g-4">
                
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="h-100 bg-secondary rounded p-4" style="overflow-x:auto;">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                    
                            <div class="col-12 text-center text-sm-start">
                                <center><h2 style="color:white;">OVERALL TRANSACTION</h2> 
                                  
                                
                            
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
              
                                    <br> 
                   <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                            
                               <table class="table table-bordered" id="tabletotal" style="border: 1px solid; border-color: white;">
                                    <thead style="background-color: #D61355; color: black; text-align: center;">
                                        <tr> 			
                                            <th scope="col">Sl.No</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr style="color: white;">
                                            <th scope="row">01</th>
                                            <td>Overseas</td>
                                            <td id="overseas">
                                                <script>
                                                     document.getElementById("overseas").innerHTML = + sumpipra  ; 
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white;">
                                            <th scope="row">02</th>
                                            <td>Biddabd</td>
                                            <td id="biddabd">
                                            <script>
                                                     document.getElementById("biddabd").innerHTML = + sumKoly ; 
                                                </script>

                                            </td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white;">
                                            <th scope="row">03</th>
                                            <td>Biddabd Global</td>
                                            <td id="biddabdglobal">
                                            <script>
                                                     document.getElementById("biddabdglobal").innerHTML = + sumglobal ; 
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr style="color: white;">
                                            <th scope="row">04</th>
                                            <td>Bs Technology</td>
                                            <td id="bst">
                                            <script>
                                                     document.getElementById("bst").innerHTML = + sumbs ; 
                                                </script>
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                          </div>
                          

                          

                        </div>
                   </div>
                   <br>
                    <br>
                    <table class="table table-bordered" style="border: 1px solid; border-color: white;">

                            <tbody class="header" style="color: white; text-align: center;">

                                <tr>
                                    <th>Total Amount</th>
                                    <td id="totalbill"></td>
                                    
                                </tr>

                                <script>

                            var tabletotal = document.getElementById("tabletotal"), sumTotalbill = 0;

                            for(var i = 1; i < tabletotal.rows.length; i++)
                            {
                                sumTotalbill = sumTotalbill + parseInt(tabletotal.rows[i].cells[2].innerHTML);
                            }


                            document.getElementById("totalbill").innerHTML =   + sumTotalbill;
                            console.log(sumTotalbill);



                            </script>
                              </tbody>
                            </table>
  <!------------------------------------->


  <br>
  <br>
  <br>
 



                    
       </div>        
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