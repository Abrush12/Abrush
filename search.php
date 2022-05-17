<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"> 
    <!-- JS files  -->
      
   
    <style type="text/css">
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
    </style>
<script>
  document.onkeydown = checkKey;
  function checkKey(e) {

    e = e || window.event;
  
     if(e.keyCode=="37"){ 
             window.location.href="earnings.php";
           
        
      }
  }
</script>
   <title>Abrush Empire - EMARA</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
  </head>
  <body>

     <!---header start---------->
   <?php
    include "header.php";
   ?>
   <!--------header end-------->

    <section class="inner_s_wrap">
      <div class="container-fluid">
        <div class="row" style="justify-content: end;">

          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="search_labels">
              
              <div class="search_inpt_flx">
                <span class="labels_search">Date from and to</span>
                <span class="inputs_search">
                  <input type="text"  id="fromdate"  class="hlf_f">
                  <input type="text" id="todate"  class="hlf_f fl_rt">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Pick up</span>
                <span class="inputs_search">
                  <input type="text" id="pickuplocation">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Via</span>
                <span class="inputs_search">
                  <input type="text" id="via">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Destination</span>
                <span class="inputs_search">
                  <input type="text" id="droplocation">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Name</span>
                <span class="inputs_search">
                  <input type="text" id="fullname">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Phone Number</span>
                <span class="inputs_search">
                  <input type="text" id="phonenumber">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Driver Name</span>
                <span class="inputs_search">
                  <input type="text" id="drivername">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Call Sign</span>
                <span class="inputs_search">
                  <input type="text" id="callsign">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Vehicle Make</span>
                <span class="inputs_search">
                  <input type="text" id="make">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Vehicle Model</span>
                <span class="inputs_search">
                  <input type="text" id="model">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Plate No.</span>
                <span class="inputs_search">
                  <input type="text" id="plateno">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Badge No.</span>
                <span class="inputs_search">
                  <input type="text" id="badgeno">
                </span>
              </div>

              <div class="search_inpt_flx">
                <span class="labels_search">Reference Number</span>
                <span class="inputs_search">
                  <input type="text" id="referencenumber">
                </span>
              </div>
              <div class="btns_cnfrm btns_cnfrmcx"> 

                  <button style="margin-left: 155px;" type="button" class="confrm" id="search">Search</button>
             

                </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            
          </div>

          

        </div>
      </div>
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>  
  

    <script type="text/javascript">
      $(function(){
         $('#fromdate,#todate').datepicker({
          autoclose: true,
        todayHighlight: true,
        setDate:new Date() , dateFormat: 'dd-mm-yy' });
        $("#search").click(function(){
          var fromdate=$.trim($("#fromdate").val());
          var todate=$.trim($("#todate").val());
          var pickup=$.trim($("#pickup").val());
          var via=$.trim($("#via").val());
          var droplocation=$.trim($("#droplocation").val());
          var fullname=$.trim($("#fullname").val());
          var phonenumber=$.trim($("#phonenumber").val());
          var drivername=$.trim($("#drivername").val());
          var callsign=$.trim($("#callsign").val());
          var make=$.trim($("#make").val());
          var model=$.trim($("#model").val());
          var plateno=$.trim($("#plateno").val());
          var badgeno=$.trim($("#badgeno").val());
          var referencenumber=$.trim($("#referencenumber").val());
          window.location.href="searcha.php?fromdate="+fromdate+"&todate="+todate+"&pickup="+pickup+"&via="+via+"&droplocation="+droplocation+"&fullname="+fullname+"&phonenumber="+phonenumber+"&drivername="+drivername+"&callsign="+callsign+"&make="+make+"&model="+model+"&plateno="+plateno+"&badgeno="+badgeno+"&referencenumber="+referencenumber;
        })
      })
      
    </script>

  </body>
</html>