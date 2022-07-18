<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?> 
<?php
$status=1;
if(isset($_GET['status'])){
  $status="2,3";
}

?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files  -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <style type="text/css">
  body,#tabs{
    background-color:black;border-color:#000;
  }
      #tbd tr td,#tbdpending  tr td,#tbdregistration tr td,#tbdcredit tr td,#tbdappointment tr td ,#tbdearnings tr td,#tbdjobs tr td{border-top:transparent !important;}
      #tbdearnings tr td,#tbdjobs tr td{font-weight: bold;}
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
       ._loading{float:right;display: none;}
       ._mxicon{}
     .user-list a{
       color:#fff;
      
     }
.user-list .table tbody tr.activebooking td,.user-list .table tbody tr.activebooking:hover td{
 
    background: #0028a1;
}
.user-list .table tbody tr.cancelbooking td,.user-list .table tbody tr.cancelbooking:hover td{
 
    background: #999900;
}
.user-list .table tbody tr.runnerbooking td,.user-list .table tbody tr.runnerbooking:hover td{
 
    background: #336600;
}
.user-list .table tbody tr.nofarebooking td,.user-list .table tbody tr.nofarebooking:hover td{
 
    background: #e600ac;
}
.user-list .table tbody tr.prebooking td,.user-list .table tbody tr.prebooking:hover{background:#b34b29}

	 
     .user-list ._mxicon a:hover{
       color:#fff;
       background-color:green;
       border:none;
      
     }
     ._mxicon{
       float:right;
       margin-right:20px;
       border:1px solid #fff;
       padding:5px 5px;
     }
     ._mxicon:hover{
       background-color:green;
       color:#fff;
       bprder:none;
     }
     .pagination a{color:#fff !important;}
    .ui-widget-header{border-color: #000;
    background: #000;}
  .ui-tabs .ui-tabs-nav .ui-tabs-anchor{color:#cfcfcf;}
  .ui-tabs .ui-tabs-nav li.ui-tabs-active{
        background: transparent;
    border-color: transparent;
    font-weight: bold;
  }
  .ui-tabs .ui-tabs-nav li.ui-tabs-active a{color:#ffffff;}
  .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
        background: transparent;
    border: transparent;
     
  }
  .rowax,.rowsplspending,.rowearning,.rowaxcustomer{background: #363636;border-top: 8px SOLID TRANSPARENT;position: relative;}

  .table td, .table th{padding:0px !important;}


         .btn-grad {background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC  51%, #02AAB0  100%)}
         .btn-grad {
           margin: 10px;
    padding: 3px 10px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white; 
    border-radius: 2px;
    display: block;
    border: 1px solid #02AAB0;
    font-size: 13px;
}
      

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
         .btn-grada {border-color:#D31027;background-image: linear-gradient(to right, #D31027 0%, #EA384D  51%, #D31027  100%)}
         

          .btn-grada:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         .owed{  
    float: left;
    font-size: 15px;}
    body{overflow-x: hidden}
     .ui-datepicker-header.ui-widget-header{
        border: 1px solid #dddddd;
    background: #e9e9e9;
    color: #333333;
    font-weight: bold;
}
.ui-datepicker-calendar .ui-state-default.ui-state-active{color: #000;font-weight: bold;}
     #loadinggif{display: none;}
     .table.user-list{margin-top: 5px !important;}
     #creditamounttable tr th,#creditamounttable tr td{padding: 5px !important;color: #000;}
     .btn-grad{margin: 5px;height: 25px;}
     .table.user-list tr th,.table.user-list tr th span{border-top: none;border-bottom: none;font-weight: bold;font-size: 17px }
      .table.user-list tr th{padding: 20px 0px}
      .user-listax th span{ padding:0px 0px 5px !important; }
      .rowaxnoshow {
    background: #363636;
}
#tbdnoshow tr td, #tbdpending tr td {
    border-top: transparent !important;
}
 .ui-state-default.ui-tab a{color: #c1bcbc}
 input[type=radio]{cursor: pointer;}
 .inputs_search img{cursor: pointer;}
 table tr td .fa{cursor:pointer;}
    </style>
    <style type="text/css">
      .timer-box {
    position: absolute;
    width: inherit;
    padding: 5px;
    box-shadow: 1px 1px #eaeaea;
    border: 1px solid #bababa;
    background: #fff;
    margin-top: 0px;
    z-index: 999;
    width: 22%;
    display: none;
    min-width: 202px;
}
.mtr-row,.mtr-input-radio{    position: relative!important;
    float: left!important;}
  .mtr-input-slider {
    width: 50px!important;
    height: 85px!important;
    overflow: hidden!important;
    margin: 14px 6px!important;
    text-align: center!important;
    vertical-align: middle!important;
    position: relative!important;
    float: left!important;
}
.mtr-datepicker .mtr-input-slider .arrow {
    height: 20px!important;
    line-height: 20px!important;
    cursor: pointer!important;
    z-index: 0!important;
    position: relative!important;
}
.mtr-datepicker .arrow.up {
    padding-top: 6px; 
}
.mtr-datepicker .arrow span {
    background: url(img/mtr-datepicker-arrows.png);
    width: 13px;
    height: 8px;
}
.mtr-datepicker .mtr-input-slider .arrow span {
    display: block!important;
    margin: 0 auto!important;
}
.mtr-datepicker .arrow.up span {
    background-position: top center;
}
.mtr-datepicker .arrow.down {
   
    padding-top: 6px;
}
.mtr-datepicker .arrow:hover{background: #eaeaea;}
.mtr-datepicker .content {
    background: #bdbcb8;
    color: #fff;
}
.mtr-datepicker .mtr-input-slider .content {
    overflow: hidden!important;
    height: 45px!important;
    z-index: 1!important;
    position: relative!important;
}
.mtr-datepicker .arrow.down span {
    background-position: bottom center;
}
.mtr-datepicker .mtr-input-radio label {
    color: #b9b7b7;
}
.mtr-datepicker .mtr-input-radio label {
    position: relative!important;
}
.mtr-datepicker .mtr-input-radio label span.value {
    width: 20px;
}
.mtr-datepicker .mtr-input-radio, .mtr-datepicker .mtr-input-radio label span  {
    position: relative!important;
    float: left!important;
}
.mtr-datepicker .mtr-input-radio, .mtr-datepicker .mtr-input-radio label{
  display: block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: #000;
}
.mtr-datepicker .mtr-input-radio input[type=radio] {
    width: 26px;
    height: 14px;
    display: inline-block; 
    line-height: 18px;
    margin: 0;
    margin-left: 5px;
}
.mtr-input-slider:hover .content{background: #ff8612}
.mtr-datepicker .mtr-input-slider .content   .default-value-holder {
    height: 45px!important;
    line-height: 45px!important;
    font-size: 15px!important;
    font-size: 1.5rem!important;
}
.mtr-datepicker .mtr-input-slider .content   .default-value-holder .default-value{
  height: 45px!important;
    line-height: 45px!important;
    font-size: 15px!important;
    font-size: 1.5rem!important;
}
.mtr-datepicker .mtr-input-radio   span.radio {
    width: 26px;
    height: 18px;
    display: inline-block;
    background: url(img/mtr-datepicker-radio.png) no-repeat;
    line-height: 18px;
    margin: 0;
    margin-left: 5px;
}
.mtr-datepicker .mtr-input-radio   .radio.timeselected{
    background-position:-27px 0px;
}
  .demohour:focus,.demominute:focus {background: #ffa800 !important;}
 .mtr-datepicker .mtr-input-slider .content input {
    background: #bdbcb8;
    color: #fff;
    text-align: center;
}
.redccr{width: 14px;
    height: 14px;
    background: red;
    position: absolute;
    border-radius: 40px;
    margin-top: 2px;
    margin-left: 2px;}
.greenccr{width: 14px;
    height: 14px;
    background: #14d914;
    position: absolute;
    border-radius: 40px;
    margin-top: 2px;
    margin-left: 2px;}
    .redccra{width: 14px;
    height: 14px;
    background: red;
    float: left;
    border-radius: 40px;
    margin-top: 3px;
    margin-right: 7px;}
.greenccra{width: 14px;
    height: 14px;
    background: #14d914;
    float: left;
    border-radius: 40px;
    margin-top: 3px;
    margin-right: 7px;}
    .sxdc{cursor: pointer;}
#jobsearch:active {
  background-color: blue;
}

    </style>


    <title>Abrush Empire</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
       
  </head>

  <body>

      <!---header start---------->
   <?php
    include "header.php";
   ?>
   <!--------header end-------->
   <div class="modal" id="creditmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="creditdrivername"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" id="creditamounttable" style="margin-top:0px"><thead>
  <tr><th>Date</th><th>Credit</th><th>Type</th><th>Controller</th></tr>
</thead><tbody></tbody>
</table>
        
         <div class="row" style="margin-bottom:2px;">
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold;text-align: right;">
                  <input style="width:auto;" checked="" type="radio" name="ax" class="chkcb chkcbvc" id="creditcash"> <span style="top: -1px;
    position: relative;font-size: 19px">Cash</span>
                </label>
                
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold">
                 
                  <input style="width:auto;"  type="radio" name="ax" class="chkcb chkcbvc" id="creditprepaid"> <span style="top: -  px;
    position: relative;font-size: 19px">Prepaid</span>
                </label>
              </div>
        <div class="row"><div class="col-sm-9">
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Credit Amount </label>
    <input type="number" style="padding:18px" class="form-control" id="creditamount"  > <span>Amount should be 100, 200, 500, 1000, 2000, 5000</span>
   </div>
 </div><div class="col-sm-3"><img src="img/load.gif" id="creditloading" style="margin-top:25px;width: 50px;display: none;" /><button style="margin-top:31px" type="button" class="btn btn-primary" id="savecredit">Save Credit</button>
</div></div>

      </div>
       
    </div>
  </div>
</div>
   <div class="modal" id="transfermodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p id="ddrivername"></p>

        </center>
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Transfer Amount</label>
    <input type="number" class="form-control" id="transferamount"  >
   </div>
      </div>
      <div class="modal-footer">
        <img src="img/load.gif" style="width:60px;display:none" class="transferloading" />
     <button type="button" class="btn btn-primary" id="savetransfer">Submit</button>

      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
 <div class="modal" id="erromodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px;margin-top:140px" role="document">
    <div class="modal-content">
       
      <div class="modal-body">
        <center><h4 id="xerror"></h3>

        </center>
       
      </div>
      <div class="modal-footer">
         
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div class="modal" id="depositmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deposit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p id="dcdrivername"></p>

        </center>
        <div class="row" style="margin-bottom:2px;">
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold;text-align: right;">
                  <input style="width:auto;" checked="" type="radio" name="ax" class="chkcb chkcbvc" id="cash"> <span style="top: -1px;
    position: relative;font-size: 19px">Cash</span>
                </label>
                
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold">
                 
                  <input style="width:auto;"  type="radio" name="ax" class="chkcb chkcbvc" id="prepaid"> <span style="top: -  px;
    position: relative;font-size: 19px">Prepaid</span>
                </label>
              </div>
<br>
 
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Deposit Amount</label>
    <input type="number" class="form-control" id="depositamount"  >
   </div>
      </div>
      <div class="modal-footer">
        <img src="img/load.gif" style="width:60px;display:none" class="transferloading" />
     <button type="button" class="btn btn-primary" id="savedeposit">Submit</button>

      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<section class="inner_s_wrap">
<div class="fluid-container">
  <div class="row" style="margin-left:55px;">
    <div class=" col-md-4" >
            <div class="search_labels alldm" style="display:none">
               
              <div class="search_inpt_flx">
                <span class="labels_search">Select Date </span>
                <span class="inputs_search">
              <input type="text" style="width:70%" id="registrationdate" value="<?php echo date("d-m-Y"); ?>" value="" class="hlf_f  "> 
               <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepicker">
                </span>
              </div>
                <div class="search_inpt_flx" id="cont">
                <span class="labels_search">Controller</span>
                <span class="inputs_search">
                 <select id="xcontrollername"   style="width:70%"  style="width: 46%;padding:2px;font-size: 14px;"></select>
                </span>
              </div>
                 <div class="search_inpt_flx" style="display:none">
                <span class="labels_search">Call Sign</span>
                <span class="inputs_search">
                 <input type="text" id="xcallsign"  style="width:70%" onkeyup="firstCapitalAlways(event)" class="hlf_f  "> 
                </span>
              </div>
 <div class="search_inpt_flx" style="display:none" id="VehicleNS">
                <span class="labels_search">Vehicle Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xallNS" name="xvehicletypeNS" ></label> 
                  <label style="color:#fff;margin-left: 10px">Normal <input type="radio" id="xnormalNS"  name="xvehicletypeNS" ></label> 
                  <label style="color:#fff;margin-left: 10px">Auto-Rikshaw <input type="radio" id="xautorikshawNS" name="xvehicletypeNS" ></label> 
                  <label style="color:#fff;margin-left: 10px">Motorbike <input type="radio" id="xmotorbikeNS" name="xvehicletypeNS"   ></label> 
                </span>
              </div>
			    <div class="search_inpt_flx" style="display:none" id="VehicleR">
                <span class="labels_search">Vehicle Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xallR" name="xvehicletypeR" ></label> 
                  <label style="color:#fff;margin-left: 10px">Normal <input type="radio" id="xnormalR"  name="xvehicletypeR" ></label> 
                  <label style="color:#fff;margin-left: 10px">Auto-Rikshaw <input type="radio" id="xautorikshawR" name="xvehicletypeR" ></label> 
                  <label style="color:#fff;margin-left: 10px">Motorbike <input type="radio" id="xmotorbikeR" name="xvehicletypeR"   ></label> 
                </span>
              </div>
                
  <div class="search_inpt_flx hlbx" style="display:none">
                <span class="labels_search rthg">Earnings</span>
                <span class="inputs_search">
                  <label style="color:#fff">Highest <input type="radio" checked   name="earningamountall" id="xhighest" ></label> 
                  <label style="color:#fff;margin-left: 10px">Lowest <input type="radio"   name="earningamountall" id="xlowest" ></label> 
                  
                </span>
              </div>
 
              

               

              

             
              <div class="btns_cnfrm btns_cnfrmcx" style="display:none"> 

                  <button style="margin-left: 155px;height: 25px;visibility: hidden;" type="button" class="confrm" id="search">Search</button>
                  <img src="img/load.gif" id="loadinggif" style="width:40px;float: left;margin-top: -7px;">
             

                </div>
            </div>

             <div class="search_labels otherdm" style="display:none;">
              
              <div class="search_inpt_flx" style="width:80%">
                <span class="labels_search">Select Date</span>
                <span class="inputs_search">
                  <div style="width:100%;">
                  <input type="text" id="fromdate"  value="<?php echo date("d-m-Y"); ?>" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepickera1">
                </div>
                 
              </div>

                

              <div class="search_inpt_flx">
                <span class="labels_search">Name</span>
                <span class="inputs_search" >
                  <input type="text" id="name" style="width:75%;" onkeyup="firstCapitalAlways(event)">
                </span>
              </div>
  <div class="search_inpt_flx" id="VehicleT2" >
                <span class="labels_search">Vehicle Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xalldm" name="xvehicletypedm" ></label> 
                  <label style="color:#fff;margin-left: 10px">Normal <input type="radio" id="xnormaldm"  name="xvehicletypedm" ></label> 
                  <label style="color:#fff;margin-left: 10px">Auto-Rikshaw <input type="radio" id="xautorikshawdm" name="xvehicletypedm" ></label> 
                  <label style="color:#fff;margin-left: 10px">Motorbike <input type="radio" id="xmotorbikedm" name="xvehicletypedm"   ></label> 
                </span>
              </div>
              

               

  <!--            

             
              <div class="btns_cnfrm btns_cnfrmcx"> 

                  <button style="margin-left: 155px;height: 25px;" type="button" class="confrm" id="searchdm">Search</button>
                  <img src="img/load.gif" id="loadinggifdn" style="width:40px;float: left;margin-top: -7px;">
             

                </div>-->
            </div>

            <div class="search_labels earningsrc" style="display:none;width: 80%;">
              
              <div class="search_inpt_flx">
                <span class="labels_search">Select Date</span>
                <span class="inputs_search">
                  <div style="width:100%;float:left;">
                  <input type="text" id="datetimex" value="<?php echo date("d-m-Y"); ?>" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepickerearning">
                </div>
                   
                </span>
              </div>
  <!--             
           <div class="search_inpt_flx">
                <span class="labels_search">Time from and to</span>
                <span class="inputs_search">
                  <div style="width:48%;float:left;" class="fromtime">
                  <input type="text" id="fromtime" style="width:100%" class="hlf_f  ">
                   <img src="img/clock.png" style="width: 17px;  position: absolute; margin-left: -21px; margin-top: 4px;" id="openfromtime">
                    <div class="timer-box mtr-datepicker timer-box1">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" id="barrowup" onclick="inchourbkdate(this,'datepicker')"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" id="bdemohour"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down" id="barrowdown"   onclick="minhourbkdate(this,'datepicker')" ><span></span></div>

                            </div> 
                             <div class="mtr-input-slider"> 
                              <div class="arrow up"  id="barrowupmin"  onclick="incminbkdate(this,'datepicker')"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" id="bdemominute"   data-value="10" maxlength="2" >
                              </div>                              <div id="barrowdownmin"  onclick="minminbkdate(this,'datepicker')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam" id="demoam"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;width: 100%;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                </div>
                  <div style="width:48%;float:left;margin-left: 10px;"  class="totime">
                  <input type="text" id="totime" style="width:100%" class="hlf_f  ">
                   <img src="img/clock.png" style="width: 17px;  position: absolute; margin-left: -21px; margin-top: 4px;" id="opentotime">
                <div class="timer-box mtr-datepicker timer-box2">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" id="barrowup2" onclick="inchourbkdate(this,'datepicker')"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" id="bdemohour2"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down" id="barrowdown2"   onclick="minhourbkdate(this,'datepicker')" ><span></span></div>

                            </div> 
                             <div class="mtr-input-slider"> 
                              <div class="arrow up"  id="barrowupmin2"  onclick="incminbkdate(this,'datepicker')"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" id="bdemominute2"   data-value="10" maxlength="2" >
                              </div>                              <div id="barrowdownmin2"  onclick="minminbkdate(this,'datepicker')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam" id="demoam2"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm2"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;width: 100%;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                </div>
                </span>
              </div>
      <div class="search_inpt_flx">
                <span class="labels_search">Earning Amount</span>
                <span class="inputs_search">
                  <label style="color:#fff">Highest <input type="radio" checked   name="earningamount" id="earningamounthighest" ></label> 
                  <label style="color:#fff;margin-left: 10px">Lowest <input type="radio"   name="earningamount" id="earningamountlowest" ></label> 
                  
                </span>
              </div>-->
              

               

    <!--          

             
              <div class="btns_cnfrm btns_cnfrmcx"> 
<button type="button" style="margin-top:10px;margin-left:165px" class="btn btn-primary" id="submit">Submit</button>
                 
             

                </div>
				-->
            </div> 
              <div class="search_labels jobbx" style="display:none;width: 80%;">
               
              

              <div class="search_inpt_flx">
                <span class="labels_search">Date from and to</span>
                <span class="inputs_search">
                  <div style="width:48%;float:left;">
                  <input type="text" id="datejob" value="<?php echo date("d-m-Y"); ?>" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepickerjob">
                </div>
                  <div style="width:48%;float:left;margin-left: 10px;">
                  <input type="text" id="datejobto" value="<?php echo date("d-m-Y"); ?>" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepickerjobto">
                </div>
                </span>
              </div>

                
             

              
  
                
                <div class="search_inpt_flx">
                <span class="labels_search">Reference Number</span>
                <span class="inputs_search">
                  <input type="text" onkeyup="firstCapitalAlways(event)"  id="jobreferencenumber"> <img src="searchx.png" style=" width: 13px;  position: absolute; margin-left: -22px;margin-top: 5px;"  >
                </span>
              </div>
                 <div class="search_inpt_flx">
                 
                  <div class="btns_cnfrm btns_cnfrmcx"  style="margin-left:135px;margin-top:-7px;" > 

                  <button style=" height: 25px; " type="button" class="confrm" id="jobsearch">Search</button>
                  <img src="img/load.gif" id="jobloadinggif" style="width:40px;float: left;margin-top: -7px;display: none;">
             

                </div>
              </div>
   
               

              

             
            
            </div>
             <div class="search_labels customerbx" style="display:none">
              
              
                
               
                 <div class="search_inpt_flx">
                <span class="labels_search">Select Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xall" name="xvehicletypeccbv" ></label> 
                  <label style="color:#fff;margin-left: 10px">App <input type="radio" id="xapp"  name="xvehicletypeccbv" ></label> 
                  <label style="color:#fff;margin-left: 10px">Call <input type="radio" id="xcall" name="xvehicletypeccbv" ></label> 
                  
                </span>
              </div>
                
 
 
              

               

              

             
               
            </div>
          </div>
<div class="col-sm-5"><div class="search_labels alldm2">
               
              <div class="search_inpt_flx">
                <span class="labels_search">Make </span>
                <span class="inputs_search">
              <input type="text" style="width:70%" onkeyup="firstCapitalAlways(event)"   id="xmkmake"  value="" class="hlf_f  ">  
                </span>
              </div>
                <div class="search_inpt_flx">
                <span class="labels_search">Model</span>
                <span class="inputs_search">
                 <input type="text" style="width:70%"  onkeyup="firstCapitalAlways(event)"  id="xmkmodel"   value="" class="hlf_f  ">  

                </span>
              </div>
                 <div class="search_inpt_flx">
                <span class="labels_search">Colour</span>
                <span class="inputs_search">
                             <input type="text" style="width:70%" onkeyup="firstCapitalAlways(event)"  id="xmkcolour"   value="" class="hlf_f  ">  

                </span>
              </div>
               <div class="search_inpt_flx">
                <span class="labels_search">Vehicle Registration</span>
                <span class="inputs_search">
                             <input type="text" style="width:70%" onkeyup="firstCapitalAlways(event)"  id="xmkreg"   value="" class="hlf_f  ">  

                </span>
              </div>
            </div></div>
          <div class=" col-md-3 " id="creditinfo"><!--<h4 id="xttlpayment" style="color:#fff;text-align: right;margin-right: 50px;margin-top: 29px;">Total Payment : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlpaymentcash" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top: 10px;">Cash : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlpaymentprepaid" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Prepaid : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlregistration" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Registration : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlcredit" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Credit : <span style='color:#ffd800;'>Rs 0</span></h4>-->&nbsp;
             </div>
  </div>
<div class="row">
  <div class="col-lg-12">
    <div class="main-box clearfix">
  <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Drivers</a></li>
    <li><a href="#tabs-2">Appointments</a></li> 
 
    <li><a href="#tabs-3">No Show</a></li> 	
    <li><a href="#tabs-4">Registration</a></li> 
    <li><a href="#tabs-5">Credit</a></li> 
    <li><a href="#tabs-6">Earnings</a></li> 
    <li><a href="#tabs-7">Jobs</a></li>
     <li><a href="#tabs-8">Customers</a></li> 
  </ul>
  <div id="tabs-1">
   <div class="table-responsive">
        <table class="table user-list user-listax">
          <thead>
            <tr>
              <th style="width:100px"><span>Picture</span></th>
              <th style="width: 130px;"><span style="padding:0px !important"><span>Call Sign</span><input onkeyup="firstCapitalAlways(event)"  id='kkkcallsign' type="text" style="display:none;width: 96px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
               <th  style="width: 200px;"><span style="padding:0px !important"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='kkkname' type="text" style="display:none;width: 150px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>

               <th  style="width: 200px;" ><span style="padding:0px !important"><span>Phone Number</span><input id='kkkphonenumber' type="text" style="display:none;width: 150px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
               <th style="width: 20px;"></th> 
               <th style="width: 220px;"><span>Earnings <select style="margin-left:10px" id="mkkearnings">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th>
               <th style="width:300px"><span>Credit</span></th>
              <th style="width:300px"><span>Vehicle Type <select style="margin-left:10px" id="mkkvehicletype">
                 <option value="0">All</option>
                 <option value="1">Normal</option>
                 <option value="2">Auto-Rikshaw</option>
                 <option value="3">Motorbike </option>
               </select></span></span></th>
                <th class=" "> </th>
            </tr>
          </thead>  
          <tbody id="tbd" class="tbd-target">  
            
            
           
          </tbody>
        </table>
      
      </div>
   </div>
   
     <div id="tabs-2">
 <div class="table-responsive">
        <table class="table user-list">
         
          <tbody id="tbdappointment">  
            
            
           
          </tbody>
        </table>
     
      </div>  </div>
      <div id="tabs-3"  >
 <div class="table-responsive">
        <table class="table user-list">
         
          <tbody id="tbdnoshow">  
            
            
           
          </tbody>
        </table>
     
      </div>  </div>
       <div id="tabs-4">
   <div class="table-responsive">
        <table class="table user-list user-listax">
          <thead>
            <tr>
              <th><span>Picture</span></th>
              <th ><span>Call Sign</span></th>
               <th ><span>Name</span></th>
              <th class=" "><span>Phone Number</span></th>
              <th><span>Controller</span></th>
              <th class=" "><span>Amount</span></th> 
			  <th class=" "><span>Registration Time</span></th> 
              <th class=" "><span>Vehicle Type</span></th>
               <th class=" "><span>Affiliate</span></th>
              <th class=" "> </th>
            </tr>
          </thead> 
          <tbody id="tbdregistration">  
            
            
           
          </tbody>
        </table>
      
      </div>
   </div>
   <div id="tabs-5">
   <div class="table-responsive">
        <table class="table user-list user-listax">
          <thead>
            <tr>
              <th><span>Picture</span></th>
              <th ><span>Call Sign</span></th>
               <th ><span>Name</span></th>
              <th class=" "><span>Phone Number</span></th>
              <th><span>Controller</span></th> 
               <th style="width:345px"><span>Credit <select style="margin-left:10px" id="mkcredit">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th>
			   <th style="width:345px"><span>Credit Time</span></th>
              <th class=" "><span>Vehicle Type</span></th>
   <!--            <th class=" "><span>Affiliate</span></th>
              <th class=" "> </th>-->
            </tr>
          </thead> 
          <tbody id="tbdcredit">  
            
            
           
          </tbody>
        </table>
      
      </div>
   </div>
  <div id="tabs-6">
 <div class="table-responsive">
    <table class="table user-list  user-listax ">
       <thead>
                    <tr>
                      <th style="width:225px"><span>Call Sign</span> </th>

                      <th style="width:225px"><span>Name</span></th>
                      <th style="width:210px"><span>Shift</span></th>
                      <th style="width:210px"><span >Hours</span></th>
              <!--        <th><span>Cash</span></th>
            <th><span>Pre-Paid</span></th>
                      <th><span>Cash Jobs</span></th>
                      <th><span>Pre-Paid Jobs</span></th> -->                   
            <th style="width:225px"><span>Earnings<select style="margin-left:10px" id="mkearning">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th>
                      <th style="width:225px"><span>Average</span></th>
                  <!--     <th><span>Owed</span></th>-->
                     
                     
                    </tr>
                  </thead>
                  <tbody id="tbdearnings">
                     
                  </tbody>
                </table>
              </div>
    
      </div>
 <div id="tabs-7">
 <div class="table-responsive user-list">
    <table class="table user-list  user-listax">
      <thead>
                    <tr>
                      <th style="width:125px"><span>Call Sign</span>
					  <input onkeyup="firstCapitalAlways(event)"  id='jobcallsign' type="text" style="display:none;width: 96px;position:relative;top:-5px" /> <img src="searchp.png" style="width: 16px;margin-top: -2px; " class="sxdc"> </th>
                      <th style="width:110px"><span>Date</span></th> 
                       <th style="width:110px"><span>Time</span></th> 
                      <th style="width:20%"><span>Pickup</span>
					  <input onkeyup="firstCapitalAlways(event)"  id='jobpickup' type="text" style="display:none;width: 280px;position:relative;top:-5px" /> <img src="searchp.png" style="width: 16px;margin-top: -2px; " class="sxdc"> </th>
                      <th style="width:20%"><span>Drop Off</span>
					  <input onkeyup="firstCapitalAlways(event)"  id='jobdropoff' type="text" style="display:none;width: 280px;position:relative;top:-5px" /> <img src="searchp.png" style="width: 16px;margin-top: -2px; " class="sxdc"> </th>
                      <th style="width:300px"><span>Vehicle Type <select style="margin-left:10px;width:105px" id="jobvehicletype">
                 <option value="0">All</option>
                 <option value="1">Normal</option>
                 <option value="2">Auto-Rikshaw</option>
                 <option value="3">Motorbike </option>
               </select></span></th>
                      <th style="width:100px"><span>Pass</span></th>                    
                       
                     
                      <th style="width:200px"><span>Price <select style="margin-left:10px" id="highestjobprice">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th>
                      <th style="width:130px"><span>Payment</span></th>
                      <th style="width:130px"><span>Status</span></th>
            
                    </tr>
                  </thead>
                  <tbody id="tbdjobs">
                     
                  </tbody>
                </table>
              </div>
    
      </div>
       <div id="tabs-8">
 <div class="table-responsive">
    <table class="table user-list  user-listax" id="custTab">
      <thead>
                    <tr>
           <!--           <th><span>Picture</span></th>-->
              <th style="width:250px;"><span style="padding:0px !important;margin-left:20px;"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='kkkcustomer' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:250px"><span style="padding:0px !important"><span>Phone</span><input onkeyup="firstCapitalAlways(event)"  id='kkkcustomerphone' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
               <th ><span>Used<select style="margin-left:10px" id="custjobused">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th> 
			     <th ><span>Cancelled<select style="margin-left:10px" id="custjobcancel">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th> 
				   <th ><span>No Fare<select style="margin-left:10px" id="custjobnofare">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th> 
				     <th ><span>Runner<select style="margin-left:10px" id="custjobrunner">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th> 
              <th ><span>Last Used</span></th> 
              <th ><span>Spent<select style="margin-left:10px" id="custspent">
                 <option value="0">None</option>
                 <option value="1">Highest</option>
                 <option value="2">Lowest</option>
               </select></span></th> 
             <!-- <th ><span>Affiliate</span></th> 
              <th><span>Type</span></th> -->
			  <th><span>&nbsp;</span></th>
                    </tr>
                  </thead>
                  <tbody id="tbdcustomers">
                     
                  </tbody>
                </table>
              </div>
    
      </div>
        </div>
   
</div>
     
     
    </div>
  </div>
</div>
</div>
    </section>
    <div style="display:none">
    </div>
    
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
  
</script>
  <script>
 window.viewId=0;  
window.olddriver=-1;
window.oldcredit = -1;  
window.oldappo = -1; 
window.oldpending = -1; 
window.oldregi = -1; 
window.oldearn = -1; 
window.oldjob = -1; 
window.oldcustomer = -1; 

      window.checkTime=function(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
window.driverid=0;
window.credit=function(ref,id){
   window.driverid=id;
   $("#creditcash").prop("checked",true);
      $("#creditamount").val("");
      $("#creditdrivername").html("<b>"+$(ref).attr("data-name")+" ("+$(ref).attr("data-callsign")+")");
        $("#creditmodal").modal("show");
        loaddrivercredit();
}
window.loaddrivercredit=function(){
   $("#creditamounttable tbody tr").remove();
   var ctrlname="";
    myajax( {"api":"getdrivercredit", "driverid":window.driverid},function( data, textStatus, jQxhr ){
      $(data.data).each(function(x,y){
        if(y.controllerid=="0"){
          ctrlname="Self";
        }
        else{
          ctrlname=(y.controllername==null?"":y.controllername);
        }
  $("#creditamounttable tbody").prepend("<tr><td>"+y.createdate+"</td><td>"+y.amount+"</td><td>"+(y.type=="0"?"Cash":"Prepaid")+"</td><td>"+ctrlname+"</td></tr>");
});
        
    });
}

function sort_used()
{
 //var table=$('#mytable');
 var tbody =$('#tbdcustomers');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#custjobused').val()=='2') 
  {
	  var fv = parseInt($('td:nth-child(3)', a).text());
	  var sv = parseInt($('td:nth-child(3)', b).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else if($('#custjobused').val()=='1') 
  {
	   var fv = parseInt($('td:nth-child(3)', b).text());
	  var sv = parseInt($('td:nth-child(3)', a).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else 
  {
	  var fv = parseInt($('td:first', b).attr("data-id"));
	  var sv = parseInt($('td:first', a).attr("data-id"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  
  }
		
 }).appendTo(tbody);
	
}

function sort_cancel()
{
 //var table=$('#mytable');
 var tbody =$('#tbdcustomers');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#custjobcancel').val()=='2') 
  {
	  var fv = parseInt($('td:nth-child(4)', a).text());
	  var sv = parseInt($('td:nth-child(4)', b).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else if($('#custjobcancel').val()=='1') 
  {
	   var fv = parseInt($('td:nth-child(4)', b).text());
	  var sv = parseInt($('td:nth-child(4)', a).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else 
  {
	  var fv = parseInt($('td:first', b).attr("data-id"));
	  var sv = parseInt($('td:first', a).attr("data-id"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  
  }
		
 }).appendTo(tbody);
	
}
function sort_nofare()
{
 //var table=$('#mytable');
 var tbody =$('#tbdcustomers');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#custjobnofare').val()=='2') 
  {
	  var fv = parseInt($('td:nth-child(5)', a).text());
	  var sv = parseInt($('td:nth-child(5)', b).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else if($('#custjobnofare').val()=='1') 
  {
	   var fv = parseInt($('td:nth-child(5)', b).text());
	  var sv = parseInt($('td:nth-child(5)', a).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else 
  {
	  var fv = parseInt($('td:first', b).attr("data-id"));
	  var sv = parseInt($('td:first', a).attr("data-id"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  
  }
		
 }).appendTo(tbody);
	
}
function sort_runner()
{
 //var table=$('#mytable');
 var tbody =$('#tbdcustomers');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#custjobrunner').val()=='2') 
  {
	  var fv = parseInt($('td:nth-child(6)', a).text());
	  var sv = parseInt($('td:nth-child(6)', b).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else if($('#custjobrunner').val()=='1') 
  {
	   var fv = parseInt($('td:nth-child(6)', b).text());
	  var sv = parseInt($('td:nth-child(6)', a).text());
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else 
  {
	  var fv = parseInt($('td:first', b).attr("data-id"));
	  var sv = parseInt($('td:first', a).attr("data-id"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  
  }
		
 }).appendTo(tbody);
	
}

function sort_spent()
{
 //var table=$('#mytable');
 var tbody =$('#tbdcustomers');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#custspent').val()=='2') 
  {
	  var fv = parseInt($('td:nth-child(8)', a).attr("data-spent"));
	  var sv = parseInt($('td:nth-child(8)', b).attr("data-spent"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else if($('#custspent').val()=='1') 
  {
	   var fv = parseInt($('td:nth-child(8)', b).attr("data-spent"));
	  var sv = parseInt($('td:nth-child(8)', a).attr("data-spent"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  }
  else 
  {
	  var fv = parseInt($('td:first', b).attr("data-id"));
	  var sv = parseInt($('td:first', a).attr("data-id"));
       if(fv==sv)
	   {
		   return 0;
	   }
	   else if(fv>sv)
	   {
		   return 1;
	   }
	   else if(fv<sv)
	   {
		   return -1;
	   }
  
  }
		
 }).appendTo(tbody);
	
}


window.llcustomer=function(xnj){ 
  var type="2";

/*  if(xnj==1){
  if($("#xapp").is(":checked")){
    type="1";
  }
  else  if($("#xcall").is(":checked")){
    type="0";
  }
} */
    myajax( {"api":"getcustomersdetails","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){ 
         $(".rowaxcustomer").remove();
         var _clone ="";
         var tbd=$("#tbdcustomers");
     
         $(data.data).each(function(x,y){
         
 if(y.used >0 || y.cancelled>0 || y.nofare>0 || y.runner>0){
          _clone +='<tr  class="rowaxcustomer" style="height:45px;" data-phone="'+y.mobile+'" data-name="'+y.name+'"> ';
  /*        if(y.image!=""){
          _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='http://18.168.83.39/"+y.image+"'></td>";
        }
        else{
           _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='img/Artboard-10.png'></td>";
        }*/
          _clone+='<td data-id='+y.id+'><b style="font-size:15px;margin-left:20px">'+y.name+'</td>';
          _clone+='<td style="font-size:15px"><b>'+crypMobile(y.mobile)+'</b>';
          _clone+='<i style="font-size: 15px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
        _clone+='<td><b style="font-size:15px;">'+y.used+'</td>';
		 _clone+='<td><b style="font-size:15px;">'+y.cancelled+'</td>';
		  _clone+='<td><b style="font-size:15px;">'+y.nofare+'</td>';
		   _clone+='<td><b style="font-size:15px;">'+y.runner+'</td>';
        _clone+='<td><b style="font-size:15px;">'+y.lastused+'</td>';
		_clone+='<td data-spent='+y.spent+'><b style="font-size:15px;">Rs '+y.spent+'</td>';
		_clone+='<td><a  href="javascript:void(0)" class="btn-grad _mxicon">Block</a></td>';
     /*   _clone+='<td><b style="font-size:15px;margin-left:15px"></td>';
         _clone+='<td style="font-size:15px"><b>';
         if(y.isapp=="1") _clone+="App";
         else _clone+="Call";
         _clone+='</b></td>';*/
             
            _clone+='</tr>';
 }
         // tbd.append(_clone);
		  
         });
          if(window.oldcustomer==-1){
			window.oldcustomer=_clone;
			tbd.html(_clone);
			
		}
		else if(window.oldcustomer != _clone)
		{
			window.oldcustomer=_clone;
			tbd.html(_clone);
		}
     
       
    });
   
    };
    window.transfer=function(ref,id){
      window.driverid=id;
      $("#transferamount").val("");
      $("#ddrivername").html("<b>"+$(ref).attr("data-name")+" ("+$(ref).attr("data-callsign")+")<br>Owed : £"+$(ref).attr("data-owed"));
        $("#transfermodal").modal("show");
    }
    window.deposit=function(ref,id){
      window.driverid=id;
      $("#depositamount").val("");
      $("#dcdrivername").html("<b>"+$(ref).attr("data-name")+" ("+$(ref).attr("data-callsign")+")<br>Owed : £"+$(ref).attr("data-owed"));
        $("#depositmodal").modal("show");
    }
 window.status=<?php echo $status; ?>;
  window._baseurl="http://18.168.83.39/";
  window.xcontrollernamea="0";
  window.prmobile=function(mobile){
  var tt=  mobile.substr(0,1);
  return tt=="0"?mobile:"0"+mobile;
}
  window.kkr=function(ref,dt,idx){
          var hr=$(ref).parent().parent().find(".demohour").val();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          
      }
         window.incminbkdate=function(ref,idx){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt++;
          if(dt>59){
            dt=1;
          }
          if(dt<10){
            dt="0"+dt
          }
           kkr(ref,dt,idx);

      }
       window.minminbkdate=function(ref,idx){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
            kkr(ref,dt,idx);
      }
        window.tofulltimedt=function(time){ 
    if(!time) return "";
var hours = Number(time.match(/^(\d+)/)[1]);
var minutes = Number(time.match(/:(\d+)/)[1]);
var AMPM = time.match(/\s(.*)$/)[1];
if(AMPM == "PM" && hours<12) hours = hours+12;
if(AMPM == "AM" && hours==12) hours = hours-12;
var sHours = hours.toString();
var sMinutes = minutes.toString();
if(hours<10) sHours = "0" + sHours;
if(minutes<10) sMinutes = "0" + sMinutes;
return (sHours + ":" + sMinutes);
  }
 /*     window.startTimezz=function() {
  var date=new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  if(!window.istimeboxopen){
 $(".demohour").val(hours);
 $(".demominute").val(minutes);
 if(ampm=="AM"){
  $(".demoam").addClass("timeselected");
      $(".demopm").removeClass("timeselected")

 }
 else{
   $(".demoam").removeClass("timeselected");
    $(".demopm").addClass("timeselected")

 }
}
  //$("#fromtime,#totime").attr("placeholder",strTime);
 
  setTimeout(startTimezz, 1000);
}*/
      window.clopitimer=function(ref,event){
    event.stopPropagation();
      $(ref).parent().parent().hide();
    window.istimeboxopen=false;
}
      window.minhourbkdate=function(ref,idx){
        
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        
          dt--;
          if(dt<=0){
            dt=12;
          }
           if(dt<10){
            dt="0"+dt
          }

          kk(ref,dt,idx);          

      }
      
      window.inchourbkdate=function(ref,idx){
         
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        
          dt++;
          if(dt>12){
            dt=1;
          }
           if(dt<10){
            dt="0"+dt
          }

         kk(ref,dt,idx);
         

      }
      window.kk=function(ref,dt,idx){
          var mn=$(ref).parent().parent().find(".demominute").val();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = dt+":"+mn+ampm;

              
           _time=window.tofulltimedt(_time).split(":");
                
        
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          
      }
        window.settmx=function(ref){
        var hr=$(ref).find(".demohour").html();
        var mn=$(ref).find(".demominute").html();
         var ampm=$(ref).find(".demoam").hasClass("timeselected")?"AM":"PM";
        //$(ref).find("input[type=text]").val(hr+":"+mn+" "+ampm);
        return hr+":"+mn+" "+ampm;
      }
    window._baseurl="http://18.168.83.39/";
 
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
window._cdate=dd + '-'+mm+"-"+ yyyy;
window.getcurrentDateTime=function(){
 const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  return window._cdate+" "+h + ":" + m;
 }
  function isInt(n){
    return Number(n) === n && n % 1 === 0;
}
 
 
 window.setInputFilter=function(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
      if($(this).hasClass("demohour")){
        if($.trim(this.value)>12) this.value="12";
         if($.trim(this.value)<0) this.value="0";
      }
      if($(this).hasClass("demominute")){
        if($.trim(this.value)>59) this.value="59";
         if($.trim(this.value)<0) this.value="0";
      }
     
    });
  });
}
 function crypMobile(mobile){
    if((mobile).length>6){
      a = mobile.substr(0,3);
      len=mobile.length;
      st = len-3;
      b = mobile.substr(st,len);
      mobile=a+"******"+b;
    }
    return mobile;
   }
      $(function(){

        $("input[name='xvehicletypeccbv']").change(function(){
          llcustomer(1);
        });
        llcustomer(0);
        $("#xmkreg").keyup(function(){

          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-registration").toLowerCase()==a){
                $(this).show();
              }
            })
          }
        });
         $("#xmkmake").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-make").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
          $("#xmkmodel").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-model").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
          $("#xmkcolour").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-colour").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
        $("#kkkcallsign").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-callsign").startsWith(a)){
                $(this).show();
              }
            })
          }
        })
		 $("#jobcallsign").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowjobs").hide();
          if(a.length==0){
            $(".rowjobs").show();
          }
          else{
            $(".rowjobs").each(function(){
              if($(this).attr("data-callsign").startsWith(a)){
                $(this).show();
              }
            })
          }
        })
		$("#jobpickup").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowjobs").hide();
          if(a.length==0){
            $(".rowjobs").show();
          }
          else{
            $(".rowjobs").each(function(){
              if($(this).attr("data-pickup").startsWith(a)){
                $(this).show();
              }
            })
          }
        })
		$("#jobdropoff").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowjobs").hide();
          if(a.length==0){
            $(".rowjobs").show();
          }
          else{
            $(".rowjobs").each(function(){
              if($(this).attr("data-dropoff").startsWith(a)){
                $(this).show();
              }
            })
          }
        })
         $("#kkkcustomer").keyup(function(){

          var a=$.trim($(this).val());
          $(".rowaxcustomer").hide();
          if(a.length==0){
            $(".rowaxcustomer").show();
          }
          else{
            $(".rowaxcustomer").each(function(){
              if($(this).attr("data-name").startsWith(a)){
                $(this).show();
              }
            })
          }
        });
        $("#kkkname").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-name").startsWith(a)){
                $(this).show();
              }
            })
          }
        });
        
          $("#kkkcustomerphone").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowaxcustomer").hide();
          if(a.length==0){
            $(".rowaxcustomer").show();
          }
          else{
            $(".rowaxcustomer").each(function(){
              if($(this).attr("data-phone") === a){
                $(this).show();
              }
            })
          }
        })
  $("#kkkphonenumber").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-phone").toLowerCase() == a){
                $(this).show();
              }
            })
          }
        })

        $(".sxdc").click(function(){ 
		window.searchClick =$(this).hide().parent().find("input");
           $(".sxdc").parent().find("input").val("").hide();
            $(".sxdc").parent().find("span,img").show();
          $(this).hide().parent().find("input").show().focus();
          $(this).parent().find("span").hide();

        });
window.searchClick ="";		
$(document).click(function(){ 
if(window.searchClick=="")
{
   $(".sxdc").parent().find("input").val("").hide();
   $(".sxdc").parent().find("span,img").show();
}
if(!$(".sxdc").parent().find("input").is(":focus"))
{
   $(".sxdc").parent().find("input").val("").hide();
   $(".sxdc").parent().find("span,img").show();
}
});

        setInputFilter(document.getElementById("kkkphonenumber"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});/*
 setInputFilter(document.getElementById("bdemohour"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
  setInputFilter(document.getElementById("bdemominute"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
     setInputFilter(document.getElementById("bdemohour2"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
  setInputFilter(document.getElementById("bdemominute2"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
     /*        $("#demoam").click(function(){
             $("#demopm").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demopm").click(function(){
                  $("#demoam").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demoam1").click(function(){
             $("#demopm1").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demopm1").click(function(){
                  $("#demoam1").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
             $(".fromtime,.totime").click(function(e){
              $(".timer-box").hide();
    $(this).find(".timer-box").show();
    if($(this).hasClass("fromtime")){
      $("#bdemohour").focus();
    }
     if($(this).hasClass("totime")){
      $("#bdemohour2").focus();
    }

     e.stopPropagation();
     
           var timeval=$.trim($(this).find("input[type=text]").val());
           if(timeval.length!=0){
            var t = timeval.split(" ");

        if(t[1]=="AM"){
          $(this).find(".demoam") .addClass("timeselected");
          $(this).find(".demopm") .removeClass("timeselected");

        }
        else{
           $(this).find(".demoam") .removeClass("timeselected");
          $(this).find(".demopm") .addClass("timeselected");
        }
        var tt=t[0].split(":");
        $(this).find(".demohour").html(tt[0]);
        $(this).find(".demominute").html(tt[1]);
      }
     window.istimeboxopen=true;

}); 
*/
$(document).click(function(){
  //  $(".timer-box").hide();
 //   window.istimeboxopen=false;
});
$(document).mouseup(function(e) 
{
     $("._dropdown").removeClass("active");
    var container = $(".xdropdown,.lcdropdown,.xallocatedriver");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
    

});

window.loadnoshow=function(){
   var regdate=$.trim($("#registrationdate").val());
	var xall=xnormal=xautorikshaw=xmotorbike="0";
	xall= $("#xallNS").is(":checked")?"1":"0";
    xnormal= $("#xnormalNS").is(":checked")?"1":"0";
    xautorikshaw= $("#xautorikshawNS").is(":checked")?"1":"0";
    xmotorbike= $("#xmotorbikeNS").is(":checked")?"1":"0";
     myajax( {"api":"allappointmentsnoshow","ddate":regdate,"xall":xall,"xnormal":xnormal,"xautorikshaw":xautorikshaw,"xmotorbike":xmotorbike,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
       
         var _clone;
         var tbd=$("#tbdnoshow");  
     
     $(".rowsplsnoshow,.rowaxnoshow").remove()
         $(data.data.all).each(function(x,y){

console.log(y);
          _clone ='<tr class="rowaxnoshow  "  style="height:45px"   ><td style="width:90px">'
          _clone+='<center><img style="height: 30px;width: 30px;margin-top: 5px;margin-bottom:5px;border-radius: 50px;" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></center></td>';
          _clone+='<td><b style="font-size:15px">'+y.name+'&nbsp;&nbsp;<span style="color:#ffd800"> </span></b></td>';
          _clone+='<td style="width:100px"><b>'+prmobile(y.phone)+'</b></td>';
          _clone+='<td><i style="font-size: 15px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
       _clone+='<td>';
        if(y.normal=="1") _clone+="<b>Normal</b>";
           else if(y.autorikshaw=="1") _clone+="<b>Auto-Rikshaw</b>";
           else if(y.motorbike=="1") _clone+="<b>Motorbike</b>";
        _clone+='</td>';
        _clone+='<td class="_createdate">'+y.createdate+' '+y.createtime+'</td>';

            _clone+='<td style="width: 30%;">';
            _clone+='<img   src="img/load.gif" class="_loading">';
      
        _clone+='<a  href="javascript:void(0)" class="accept _mxicon">No Show</a>';

       
           _clone+='    </td> </tr><tr  class="rowsplsnoshow" style="height:10px"><td colspan="5"></td></tr>';
          
          tbd.append(_clone);
         });
        
    });
   }
   loadnoshow();
$("#name").keyup(function(){
          window.issearch=true;
          var name=$.trim($(this).val());
          
          if(name.length==0){
            $("._namex").show();
          }
          else{
            
             $("._namex").hide().each(function(){
               
              if($(this).attr("data-name").toLowerCase().startsWith(name)){
                $(this).show();
              }
             });


          }
        }) 
	/*	$("#xall").change(function(){
            alert("here");
            ll(1);
             
        });
		$("#xnormal").change(function(){
            
            ll(1);
             
        });
		 $("#xautorikshaw").change(function(){
			   ll(1);
			 });
			 
			 $("#xmotorbikedm").change(function(){
				ll(1);
			 });*/
   $("#xalldm").change(function(){
            
            $("._namex").show();
             
        });
           $("#xnormaldm").change(function(){
            $("._namex").hide();
            $(".rowsplspending").each(function(){
              if($(this).attr("data-normal")=="1"){
                $(this).show();
              }
            });
          });
              $("#xautorikshawdm").change(function(){
            $("._namex").hide();
            $(".rowsplspending").each(function(){
              if($(this).attr("data-autorikshaw")=="1"){
                $(this).show();
              }
            })
          });
             $("#xmotorbikedm").change(function(){
            $("._namex").hide();
            $(".rowsplspending").each(function(){
              if($(this).attr("data-motorbike")=="1"){
                $(this).show();
              }
            })
          });
     
        window.llb=function(cc){
          var fromdate = $.trim($("#fromdate").val());
          var todate = "";//$.trim($("#todate").val());
          var xall= $("#xalldm").is(":checked")?"1":"0";
          var xnormal= $("#xnormaldm").is(":checked")?"1":"0";
          var xautorikshaw= $("#xautorikshawdm").is(":checked")?"1":"0";
          var xmotorbike=$("#xmotorbikedm").is(":checked")?"1":"0";
		  var name = $.trim($("#name").val());
          if(cc==0) {
            fromdate=todate=name="";
          }
           myajax( {"api":"allappointments","fromdate":fromdate,"todate":todate,"status":"1","xall":xall,"xnormal":xnormal,"xautorikshaw":xautorikshaw,"xmotorbike":xmotorbike,"name":name,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
         $("#loadinggifdn").hide();
         var _clone;
         var tbd=$("#tbdappointment");  
     
     $(".rowsplspending").remove()
         $(data.data.all).each(function(x,y){


          _clone ='<tr class="rowsplspending _namex " style="height:45px" data-name="'+y.name+'"  data-normal="'+y.normal+'"  data-motorbike="'+y.motorbike+'" data-autorikshaw="'+y.autorikshaw+'"><td style="width:90px">'
          _clone+='<center><img style="height:30px;width: 30px;margin-top:4px;margin-bottom:4px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></center></td>';
          _clone+='<td><b style="font-size:15px">'+y.name+'</b></td><td><b>';
if(y.normal=="1")
  _clone+='Normal';
  else if(y.autorikshaw=="1")
  _clone+='Auto-Rikshaw';  
  else if(y.motorbike=="1")
  _clone+='Motorbike';    
          _clone+='</b></td>';
          _clone+='<td><b>'+y.phone+'</b><i style="font-size: 15px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
           
        _clone+='<td class="_createdate">'+y.createdate+' '+y.createtime+'</td>';

            _clone+='<td style="width: 30%;">';
            _clone+='<img   src="img/load.gif" class="_loading">';
      if(y.type==3){
       _clone+='<a  href="javascript:void(0)" class="accept _mxicon">Pending</a>';
      }
      else if(y.type==4){
        _clone+='<a  href="javascript:void(0)" class="accept _mxicon">Done</a>';

      }
      else{
        _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
           _clone+='    </td> </tr></tr>';
          
          tbd.append(_clone);
         });
         
    });

         }
         llb(0);
         $("#opendatepicker").click(function(){
                 $("#registrationdate").datepicker("show");
        });
          $("#opendatepickerjob").click(function(){
                 $("#datejob").datepicker("show");
        });
             $("#opendatepickerjobto").click(function(){
                 $("#datejobto").datepicker("show");
        });
          $("#opendatepickera1").click(function(){
                 $("#fromdate").datepicker("show");
        });
            $("#opendatepickera2").click(function(){
                 $("#today").datepicker("show");
        });
 $("#opendatepickerearning").click(function(){
                 $("#datetimex").datepicker("show");
        });

           
         
        $("#xcallsign").keyup(function(){
          var vv=$.trim($(this).val());
          $(".rowaxdriver").hide();
          $(".rowax").each(function(){
            if($(this).attr("data-callsign").startsWith(vv)){
              $(this).show();
            }
          })
        })
        $("#savecredit").click(function(){
          var creditamount=$.trim($("#creditamount").val());
          var type=$("#creditcash").is(":checked")?"0":"1";
          if(creditamount!=""){
           $("#creditloading").show();
           $(this).hide();
		   var loginUserId=$.trim(<?php echo $_SESSION['ID'];?>); 
             myajax( {"api":"savedrivercredit","controllerid":loginUserId,"amount":creditamount,"type":type ,"driverid":window.driverid,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
               $("#creditloading").hide();
           $("#savecredit").show();
            if(data.status=="400"){
          $("#erromodal").modal({"show":true});
          $("#xerror").html(data.alert)
         }
           if(data.status=="200"){
           $("#creditamount").val("");
           var cdc = "";//$(".creditamount"+window.driverid).attr("data-amount");
          // cdc=parseFloat(cdc);a
           cdc=parseFloat(data.data.creditamount);//alert(data.data.creditamount);
       //    $(".creditamount"+window.driverid).html("Rs "+cdc+"&nbsp;&nbsp;&nbsp;"+(type=="0"?"Cash":"Prepaid")).attr("data-amount",cdc);
	   $(".creditamount"+window.driverid).html("Rs "+cdc).attr("data-amount",cdc);
           $("#creditamounttable tbody").prepend("<tr><td>"+data.data.date+"</td><td>"+creditamount+"</td><td>"+(type=="0"?"Cash":"Prepaid")+"</td><td>"+data.data.controllername+"</td></tr>");
           var ttlpayment = parseFloat($("#xttlpayment").attr("data-amount"));
            var ttlcredit = parseFloat($("#xttlcredit").attr("data-amount"));
            
            ttlcredit+=parseFloat(creditamount);
            ttlpayment+=parseFloat(creditamount);
             
           
    //        $("#xttlcredit").attr("data-amount",ttlcredit).html("Total Credit : <span style='color:#ffd800;'>Rs "+ttlcredit+"</span>");
     //       $("#xttlpayment").attr("data-amount",ttlpayment).html("Total Payment : <span style='color:#ffd800;'>Rs "+ttlpayment+"</span>");
            if(type=="0"){
              var cash = parseFloat($("#xttlpaymentcash").attr("data-amount"));
              cash+=parseFloat(creditamount);
      //        $("#xttlpaymentcash").attr("data-amount",cash).html("Total Cash : <span style='color:#ffd800;'>Rs "+cash+"</span>");
            }
            else if(type=="1"){
              var cash = parseFloat($("#xttlpaymentprepaid").attr("data-amount"));
              cash+=parseFloat(creditamount);
       //       $("#xttlpaymentprepaid").attr("data-amount",cash).html("Total Online : <span style='color:#ffd800;'>Rs "+cash+"</span>");
            }
            $("#creditmodal").modal("hide");
            $("#erromodal").modal("show");
            $("#xerror").html("Successfully Saved");
            setTimeout(function(){
                 $("#erromodal").modal("hide");
            },2300)

         }
        
             });
          }
        })
        $("input[name='xvehicletypeR']").change(function(){
			if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
          ll(2);
        });
		 $("input[name='xvehicletypeNS']").change(function(){
			     loadnoshow();
        });
         $("input[name='xvehicletypedm']").change(function(){
          llb(1);
        });
          $("input[name='earningamount']").change(function(){

         
        });
            $("input[name='earningamountall'],#mkkearnings,#mkkvehicletype,#mkcredit").change(function(){
			if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
          ll(1);
        });
		
		$("#mkearning,#datetimex").change(function(){
		          nj();
        });
		$("#custjobused").change(function(){
		         sort_used();
        });
		$("#custjobcancel").change(function(){
		         sort_cancel();
        });
		$("#custjobnofare").change(function(){
		         sort_nofare();
        });
		$("#custjobrunner").change(function(){
		         sort_runner();
        });
		$("#custspent").change(function(){
		         sort_spent();
        });
		
           $("input[name='jobbyprice'],#jobvehicletype,#highestjobprice").change(function(){

          loadjobs();
        });

          
         
        

        // $("#xcontrollername").append("<option value='0'>Select Controller</option>")
          myajax( {"api":"getcontrollerlist","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>" },function( data, textStatus, jQxhr ){
            var _ctrlid=localStorage.getItem("id");
            $("#xcontrollername").append("<option    value='0'>All</option>")
            $(data.data).each(function(x,y){

              $("#xcontrollername").append("<option    value='"+y.id+"'>"+y.fullname+"</option>")
            });
			if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
             ll(0);
              $("#xcontrollername").change(function(){
          window.xcontrollernamea=$(this).val();
		  	if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
          ll(1);
        });
          });
        $("#search").click(function(){
          $("#loadinggif").show();
		  	if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
          ll(1);
        });
         $("#searchdm").click(function(){
          $("#loadinggifdn").show();
          llb(1);
        })
         window.isdatechange=false;
         $('#registrationdate').datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0", maxDate: new Date(),
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    }).change(function(e){
       window.isdatechange=true;
      setTimeout(function(){
         loadnoshow();
		 	if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
        ll(1);

      },500)
      
    }); 
	$("#fromdate").change(function(e){
         llb(1);
      });
     $("#fromdate,#todate,#datetimex,#datejob,#datejobto").datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0", maxDate: new Date(),
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    })
        $("#savedeposit").click(function(){
          var ref=$(this);
          var transferamount = $.trim($("#depositamount").val());
          if(transferamount.length!=0){
           transferamount = parseFloat(transferamount);
            const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
         var dd = String(today.getDate()).padStart(2, '0');
         var mm = String(today.getMonth() + 1).padStart(2, '0');  
         var yyyy = today.getFullYear();
        var dt=dd + '-'+mm+"-"+ yyyy+" "+h_ + ":" + m_+":00";
        ref.parent().find("button").hide();
        ref.parent().find("img").show();
        var iscash=$("#cash").is(":checked")?"1":"0";
        var isprepaid=$("#prepaid").is(":checked")?"1":"0"
              myajax( {"api":"depositdriveramount","driverid":window.driverid,"amount":transferamount,"datetime":dt,"iscash":iscash,"isprepaid":isprepaid},function( data, textStatus, jQxhr ){
                if(data.status=="400"){
                   ref.parent().find("button").show();
                   ref.parent().find("img").hide();
                  alert(data.alert);
                  return;
                }
                $("#transfermodal").modal("hide");
                setTimeout(function(){
                 alert("Success");
                 window.location.reload();
                },400)
            });
           }
        });

        $("#savetransfer").click(function(){
          var transferamount = $.trim($("#transferamount").val());
          if(transferamount.length!=0){
           transferamount = parseFloat(transferamount);
            const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
         var dd = String(today.getDate()).padStart(2, '0');
         var mm = String(today.getMonth() + 1).padStart(2, '0');  
         var yyyy = today.getFullYear();
        var dt=dd + '-'+mm+"-"+ yyyy+" "+h_ + ":" + m_+":00";
        $(this).parent().find("button").hide();
        $(this).parent().find("img").show();

              myajax( {"api":"transferdriveramount","driverid":window.driverid,"amount":transferamount,"datetime":dt},function( data, textStatus, jQxhr ){
                $("#transfermodal").modal("hide");
                setTimeout(function(){
                 alert("Success");
                 window.location.reload();
                },400)
            });
           }
        });
       
            $( "#tabs" ).tabs();
            $('#tabs > ul  > li > a').on("click",function(e){
    e.preventDefault();
	$(".alldm").hide();
	$(".alldm2").hide();
	 $("#VehicleNS, #VehicleR").hide();
    if($(this).html()=="Drivers"){
		$(".alldm").hide();
		 $("#cont").show();
		$(".alldm2").show();
       $(".hlbx").hide();
	   $("#creditinfo").show();
      $(".rthg").html("Earnings");
	  window.selectedtab = 0;
	  		if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
      ll(1);
    }
    else if($(this).html()=="Credit")
    {
		 $("#cont").show();
      $(".hlbx").hide();
	  $(".alldm").show();
	  $("#creditinfo").hide();
      $(".rthg").html("Earnings");
	  window.selectedtab = 4;
	  		if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
      ll(1);
    }
	else if($(this).html()=="Registration")
    {
      $(".alldm").show();
		$(".alldm2").show();
		 $("#VehicleR").show();
	  $(".hlbx").hide();
	  $("#creditinfo").hide();
      $(".rthg").html("Earnings");
	  window.selectedtab = 3;
	  		if(window.intervalref2!=null)
			{
			  clearInterval(window.intervalref2);
			}
      ll(2);
    }
    else if($(this).html()=="Appointments"){
		 $("#creditinfo").hide();
		 window.selectedtab = 1;
      llb(1);
    }
     else if($(this).html()=="No Show"){
		 $("#cont").hide();
		 $("#VehicleNS").show();
		 $(".alldm").show();
		   $(".hlbx").hide();
		  $("#creditinfo").hide();
		   window.selectedtab = 2;
      loadnoshow();
    }
    else if($(this).html()=="Earnings"){
		 $("#creditinfo").hide();
		  window.selectedtab = 5;
      nj()
    }
     else if($(this).html()=="Jobs"){
		  $("#creditinfo").hide();
		   window.selectedtab = 6;
      loadjobs();
     }
    else  {     $(".hlbx").hide();
	 $("#creditinfo").hide();
	 window.selectedtab = 7;
	}
    if($(this).html()=="Drivers"||$(this).html()=="Credit"||$(this).html()=="Registration"||$(this).html()=="No Show"){
      $(".otherdm,.earningsrc,.jobbx,.customerbx").hide();
    //  $(".alldm").show();
    }
    else if($(this).html()=="Appointments"){
      $(".otherdm").show();
      $(".alldm,.earningsrc,.jobbx,.customerbx").hide();
    }
    else if($(this).html()=="Earnings"){
      $(".earningsrc").show();
      $(".alldm,.otherdm,.jobbx,.customerbx").hide();
    }
     else if($(this).html()=="Jobs"){
      $(".jobbx").show();
      $(".alldm,.otherdm,.earningsrc,.customerbx").hide();
    }
      else if($(this).html()=="Customers"){
      $(".customerbx").hide();
      $(".alldm,.otherdm,.earningsrc,.jobbx").hide();
    }

    
});

window.selectedtab = 0;
window.timerref=null;
window.alldriverlist=[];
window.intervalref2=null;
window.ll=function(xnj){ 
 window.intervalref2 = setInterval(function(){
  var regdate=$.trim($("#registrationdate").val());
  var ddate=regdate;
  var xcontrollername = window.xcontrollernamea;
  var xall=xnormal=xautorikshaw=xmotorbike="0";

  var kk=$("#mkkvehicletype").val();
 if(window.selectedtab == 0){
	 regdate="<?php echo date("d-m-Y"); ?>";
	 xcontrollername="0";
	 xall="0";
  if(kk=="0"){
    xall="1";
  }
  else if(kk=="1"){
    xnormal="1";
  }
   else if(kk=="2"){
    xautorikshaw="1";
  }
   else if(kk=="3"){
    xmotorbike="1";
  }
 }
  // $("#xcontrollername").val();

  var ishighest ="-1";
  var mkkearnings=$("#mkkearnings").val();
  if(mkkearnings!="0"){
    if(mkkearnings=="1"){
      ishighest="1";
    }
    else{
      ishighest="0"
    }
  }
  if(window.selectedtab == 4)
  {
	  xall="1";
	 var mkcredit = $("#mkcredit").val();
	 if(mkcredit!="0"){
		if(mkcredit=="1"){
		  ishighest="1";
		}
		else{
		  ishighest="0"
		}
	}
  }
   if(window.selectedtab == 3)
  {
	xall= $("#xallR").is(":checked")?"1":"0";
    xnormal= $("#xnormalR").is(":checked")?"1":"0";
    xautorikshaw= $("#xautorikshawR").is(":checked")?"1":"0";
    xmotorbike= $("#xmotorbikeR").is(":checked")?"1":"0";
	ishighest ="-1";
  }
         
  if(xnj==0 && xall==0 && xnormal==0&& xautorikshaw==0 && xmotorbike==0) {
   //xcontrollername="0";
   regdate=xall=xnormal=xautorikshaw=xmotorbike="";
  } 
  if(!window.isdatechange){
    regdate="";
  }
  else{  $("#loadinggif").show();}
      myajax( {"api":"allappointmentsboth","controllerid":xcontrollername,"xall":xall,"xnormal":xnormal,"xautorikshaw":xautorikshaw,"xmotorbike":xmotorbike,"regdate":regdate,"status":"<?php echo $status; ?>","ddate":ddate,"ishighest":ishighest,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
        $("#loadinggif").hide();
       //  $(".rowax,.rowspls").remove();
         var _clone="";
         var tbd=$("#tbd");
     var tbdpending=$("#tbdpending");

      
      if(data.data.pending.length==0){
       $(".paginationpending").hide();
     }
     window.alldriverlist=data.data.all;
     window._ttlpayment=0;
     window._ttlcash=0;
     window._ttlprepaid=0;
     window._ttlregistration=0;
     window._ttlcredit=0;

      window._ttlcash=parseFloat(data.data.drivercreditcashprepaid.cash);
      window._ttlprepaid=parseFloat(data.data.drivercreditcashprepaid.prepaid);
      window._ttlcredit=Math.round(window._ttlcash+window._ttlprepaid);
      window._ttlpayment+=window._ttlcredit;
          $(data.data.all).each(function(x,y){
        
          _clone +='<tr class="rowax rowaxdriver" style="height:45px;" data-registration="'+y.registration+'" data-colour="'+y.color+'" data-model="'+y.model+'" data-make="'+y.make+'" data-phone="'+y.phonex+'"  data-name="'+y.name+'" data-callsign="'+y.callsign+'"><td>'
          _clone+='<img style="margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></td>';
          _clone+='<td><b >'+y.callsign+'</b></td>';
          _clone+='<td><b >'+y.name+'</b></td>';
          _clone+='<td><b>'+y.phone+'</b><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td><td></td><td>';
            if(y.isonline=="0"){
        _clone+="<span class='redccra'></span>";
       }
       else{
         _clone+="<span class='greenccra'></span>";
       }
          _clone+='';
         _clone+='<b >Rs '+y.earnings+'</b></td>';
       
         if(y.type==3){
            
 /*_clone+=' <a  href="javascript:void(0)"  data-callsign="'+y.callsign+'" data-owed="'+y.owed +'" data-name="'+y.name+'" onclick="deposit(this,'+y.driverid+')"  class="btn-grad _mxicon btn-grada">Deposit</a>';
         _clone+='<a  href="javascript:void(0)" data-callsign="'+y.callsign+'" data-owed="'+y.owed +'" data-name="'+y.name+'" onclick="transfer(this,'+y.driverid+')" class="btn-grad _mxicon ">Transfer</a>';*/
          _clone+='<td class="_createdate" style="font-size:18px">';
           _clone+='<b class="owed" style="margin-top:6px;float:left"><span style="color:#ffd800;"><span class="creditamount'+y.driverid+'" data-amount="'+Math.round(y.creditamount)+'">Rs '+Math.round(y.creditamount)+'</span></b><a  href="javascript:void(0)" data-callsign="'+y.callsign+'"  data-name="'+y.name+'" onclick="credit(this,'+y.driverid+')" class="btn-grad _mxicon " style="margin-right:150px; ">Credit</a>';
           _clone+=' </td>';
 
        }else{ 
                   _clone+="<td ><b class='owed'><span style='color:#ffd800;'>Rs "+y.paymentgiven+"</span></td>";
        }

        
        _clone+='<td>';
        if(y.normal=="1") _clone+="<b>Normal</b>";
           else if(y.autorikshaw=="1") _clone+="<b>Auto-Rikshaw</b>";
           else if(y.motorbike=="1") _clone+="<b>Motorbike</b>";
        _clone+='</td>';
            _clone+='<td style="width: 15%;">';
      if(y.type==2){
       _clone+='<a  href="javascript:void(0)" class="btn-grad _mxicon">Pending</a>';
      }
      else if(y.type==3){
         _clone+='<a  href="drivers.php?id='+y.uid+'&isedit=1" class="btn-grad _mxicon btn-grada">View</a>';
         //_clone+='<a  href="drivers.php?id='+y.uid+'&isview=1" class="btn-grad _mxicon ">View</a>';
      }
      else{
        _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
             
            _clone+='    </td> </tr>  ';
          
        //  tbd.append(_clone);
         }); //alert(window.oldlen); alert(data.data.all.length);
		if(window.olddriver==-1){
			window.olddriver=_clone;
			tbd.html(_clone);
			
		}
		else if(window.olddriver != _clone)
		{
			window.olddriver=_clone;
			tbd.html(_clone);
		}
		//tbd.html(_clone);
		_clone="";
       $(data.data.creditlist).each(function(x,y){
         
          
          _clone +='<tr class="rowax rowaxdriver" style="height:45px;" data-registration="" data-colour="" data-model="" data-make="" data-phone="'+y.phonex+'"  data-name="'+y.name+'" data-callsign="'+y.callsign+'"><td>'
          _clone+='<img style="margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></td>';
          _clone+='<td><b >'+y.callsign+'</b></td>';
          _clone+='<td><b >'+y.name+'</b></td>';
          _clone+='<td><b>'+y.phone+'</b><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
          _clone+="<td><b>"+y.controllername+"</b></td>";
       
         if(y.type==3){
            
 /*_clone+=' <a  href="javascript:void(0)"  data-callsign="'+y.callsign+'" data-owed="'+y.owed +'" data-name="'+y.name+'" onclick="deposit(this,'+y.driverid+')"  class="btn-grad _mxicon btn-grada">Deposit</a>';
         _clone+='<a  href="javascript:void(0)" data-callsign="'+y.callsign+'" data-owed="'+y.owed +'" data-name="'+y.name+'" onclick="transfer(this,'+y.driverid+')" class="btn-grad _mxicon ">Transfer</a>';*/
          _clone+='<td class="_createdate" style="font-size:18px">';
   //        _clone+='<a  href="javascript:void(0)" data-callsign="'+y.callsign+'"  data-name="'+y.name+'" onclick="credit(this,'+y.driverid+')" class="btn-grad _mxicon " style="margin-right:140px">Credit</a><b class="owed" style="margin-top:6px;float:left"><span style="color:#ffd800;"><span class="creditamount'+y.driverid+'" data-amount="'+Math.round(y.creditamount)+'">Rs '+Math.round(y.creditamount)+'&nbsp;&nbsp;&nbsp;'+(Math.round(y.creditamount)>0?(y.credittype=="0"?"Cash":"Online"):"")+'</span></b>';
	//	   _clone+='<b class="owed" style="margin-top:6px;float:left"><span style="color:#ffd800;"><span class="creditamount'+y.driverid+'" data-amount="'+Math.round(y.creditamount)+'">Rs '+Math.round(y.creditamount)+'&nbsp;&nbsp;&nbsp;'+(Math.round(y.creditamount)>0?(y.credittype=="0"?"Cash":"Online"):"")+'</span></b>';
		   	   _clone+='<b class="owed" style="margin-top:6px;float:left"><span style="color:#ffd800;"><span class="creditamount'+y.driverid+'" data-amount="'+Math.round(y.amount)+'">Rs '+Math.round(y.amount)+'</span></b>';
           _clone+=' </td>';
		   
		   _clone+="<td><b>"+y.credittime.substring(11,16)+"</b></td>";
		  

        }else{ 
                   _clone+="<td><b class='owed'><span style='color:#ffd800;'>Rs "+y.amount+"</span></td>";
				   _clone+="<td><b>"+y.credittime.substring(11,16)+"</b></td>";
        }

        
        _clone+='<td>';
        if(y.normal=="1") _clone+="<b>Normal</b>";
           else if(y.autorikshaw=="1") _clone+="<b>Auto-Rikshaw</b>";
           else if(y.motorbike=="1") _clone+="<b>Motorbike</b>";
        _clone+='</td>';//<td></td>';
            _clone+='<td style="width: 15%;">&nbsp;';
      if(y.type==2){
     //  _clone+='<a  href="javascript:void(0)" class="btn-grad _mxicon">Pending</a>';
      }
      else if(y.type==3){
      //   _clone+='<a  href="drivers.php?id='+y.uid+'&isedit=1" class="btn-grad _mxicon btn-grada">View</a>';
         //_clone+='<a  href="drivers.php?id='+y.uid+'&isview=1" class="btn-grad _mxicon ">View</a>';
      }
      else{
    //    _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
	  _clone+='    </td> </tr>';
             
       //     _clone+='    </td> </tr><tr class="rowspls"><td colspan=5></td></tr><tr style="height:10px" class="rowspls"><td colspan="5"></td></tr>';
          
          
         }); 
		 if(window.oldcredit==-1){
			window.oldcredit=_clone;
			$("#tbdcredit").html(_clone);
			
		}
		else if(window.oldcredit != _clone)
		{
			window.oldcredit=_clone;
			$("#tbdcredit").html(_clone);
		}
		 _clone="";
   $(data.data.registrationlist).each(function(x,y){
         
    //      window._ttlpayment+=parseFloat(y.paymentgiven);
      //    window._ttlregistration+=parseFloat(y.paymentgiven);
          
          _clone +='<tr class="rowax rowaxdriver" style="height:45px;" data-registration="'+y.registration+'" data-colour="'+y.color+'" data-model="'+y.model+'" data-make="'+y.make+'" data-phone="'+y.phonex+'"  data-name="'+y.name+'" data-callsign="'+y.callsign+'" ><td>'
          _clone+='<img style="margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></td>';
          _clone+='<td><b >'+y.callsign+'</b></td>';
          _clone+='<td><b >'+y.name+'</b></td>';
          _clone+='<td><b>'+y.phone+'</b><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
          _clone+='<td><b>'+y.controllername+'</b></td>';
       
         if(y.type==3){
			 var balance =y.paymentgiven*4;
           _clone+='<td class="_createdate" style="font-size:18px">';
          _clone+='<b class="owed" style="margin-top:6px;"><span style="color:#ffd800;">Rs '+balance+'</span></b></td>';
          _clone+='<td><b>'+y.registrationdate.substring(11,16)+'</b></td>';
         

        }    if(y.type==2){
			_clone+='<td>&nbsp;</td>';
			_clone+='<td>&nbsp;</td>';
		}

        
        _clone+='<td>';
        if(y.normal=="1") _clone+="<b>Normal</b>";
           else if(y.autorikshaw=="1") _clone+="<b>Auto-Rikshaw</b>";
           else if(y.motorbike=="1") _clone+="<b>Motorbike</b>";
        _clone+='</td><td>&nbsp;</td>';
            _clone+='<td style="width: 15%;">';
      if(y.type==2){
       _clone+='<a  href="javascript:void(0)" class="btn-grad _mxicon">Pending</a>';
      }
      else if(y.type==3){
         _clone+='<a  href="drivers.php?id='+y.uid+'&isedit=1" class="btn-grad _mxicon btn-grada">View</a>';
         //_clone+='<a  href="drivers.php?id='+y.uid+'&isview=1" class="btn-grad _mxicon ">View</a>';
      }
      else{
        _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
              
            _clone+='    </td> </tr>';
          
         // $("#tbdregistration").append(_clone);
         }); 
		  if(window.oldregi==-1){
			window.oldregi=_clone;
			$("#tbdregistration").html(_clone);
			
		}
		else if(window.oldregi != _clone)
		{
			window.oldregi=_clone;
			$("#tbdregistration").html(_clone);
		}
 /*    $("#xttlpayment").html("Total Payment : <span style='color:#ffd800;'>Rs "+window._ttlpayment+"</span>").attr("data-amount",window._ttlpayment);
      $("#xttlpaymentcash").html("Total Cash : <span style='color:#ffd800;'>Rs "+window._ttlcash+"</span>").attr("data-amount",window._ttlcash);
       $("#xttlpaymentprepaid").html("Total Online : <span style='color:#ffd800;'>Rs "+window._ttlprepaid+"</span>").attr("data-amount",window._ttlprepaid);
        $("#xttlcredit").html("Credit : <span style='color:#ffd800;'>Rs "+window._ttlcredit+"</span>").attr("data-amount",window._ttlcredit);
      
	  $("#xttlregistration").html("Registration : <span style='color:#ffd800;'>Rs "+window._ttlregistration+"</span>");*/
      _clone="";
	  $(data.data.pending).each(function(x,y){


         

          _clone +='<tr  class="rowax" style="height:45px;"><td>'
          _clone+='<img style="margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></td>';
          _clone+='<td><b style="font-size:18px">'+y.name+'</b></td>';
          _clone+='<td style="font-size:18px"><b>'+y.phone+'</b><i style="font-size: 23px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 23px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
 
        _clone+='<td class="_createdate"> </td><td></td>';
        
            _clone+='<td style="width: 30%;">';
            _clone+='<img   src="img/load.gif" class="_loading">';
      if(y.type==3){
       _clone+='<a  href="javascript:void(0)" class="btn-grad _mxicon">Pending</a>';
      }
      else if(y.type==3){
         _clone+='<a  href="drivers.php?id='+y.uid+'&isedit=1" class="btn-grad _mxicon btn-grada">Edit</a>';
         _clone+='<a  href="drivers.php?id='+y.uid+'&isview=1" class="btn-grad _mxicon ">View</a>';
      }
      else{
        _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
            _clone+='<a style="display:none" href="javascript:void(0)" data-id="'+y.uid+'" onclick="accept(this)" class="accept _mxicon"> <span><img src="img/accept.png" alt=""></span></a>';
            _clone+='<a style="display:none"  href="javascript:void(0)" data-id="'+y.uid+'"  class="deny _mxicon"><span><img src="img/close.png" alt=""></span></a>';
            _clone+='    </td> </tr><tr class="rowspls"><td colspan=5></td></tr><tr style="height:10px"  class="rowspls"><td colspan="5"></td></tr>';
          
           
      //    tbdpending.append(_clone);
         });
		   if(window.oldpending=-1){
			window.oldpending=_clone;
			tbdpending.html(_clone);
			
		}
		else if(window.oldpending != _clone)
		{
			window.oldpending=_clone;
			tbdpending.html(_clone);
		}
      if(xnj==0){
    // window.timerref =  setTimeout(function(){ll(0)},4000);
   } else{
   // clearTimeout(window.timerref);
   }
    });
 },400);	
    };
   
      });
      window.accept=function(ref){
        if(confirm("Do you want to accept?")) 
        {
          var id=$(ref).attr("data-id");
          $(ref).parent().find("._loading").show();
          $(ref).parent().find("._mxicon").hide();
          /* myajax({"api":"updateappointmentsatus","uid":id,"status":"1"},function( data, textStatus, jQxhr ){
            if(data.status=="200"){
              window.location.href="drivers.php?id="+id;
            }
            else{
              $(ref).parent().find("._loading").hide();
                  $(ref).parent().find("._mxicon").show();
              alert("Please Try Again");
            }
           });*/
       }
        }
     


      

    </script>
    <script>
      
      window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}
      window.loadjobs=function(){
        var jobcallsign="";//$.trim($("#dcfjobcallsign").val());
        var ishighestjobprice ="-1";
       
   var mkkearnings=$("#highestjobprice").val();
  if(mkkearnings!="0"){
    if(mkkearnings=="1"){
      ishighestjobprice="1";
    }
    else{
      ishighestjobprice="0"
    }
  }
         const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
         $("#tbdjobs .accdd").remove();
         var dt=$.trim($("#datejob").val())+" "+h_ + ":" + m_+":00";
         var dto=$.trim($("#datejobto").val())+" "+h_ + ":" + m_+":00";
         var all="0";
         var normal="0";
         var autorikshaw="0";
         var motorbike="0";
		 var html ="";
         var pickuplocation=$.trim($("#jobpickup").val());
         var droplocation=$.trim($("#jobdropoff").val());
         var jobvehicletype= $.trim($("#jobvehicletype").val());
         var jobmake="";//$.trim($("#jobmake").val());
         var jobmodel="";//$.trim($("#jobmodel").val());
         var jobcolour="";//$.trim($("#jobcolour").val());
         var jobreferencenumber=$.trim($("#jobreferencenumber").val());
         if(jobvehicletype=="0") all="1";
         else if(jobvehicletype=="1") normal="1";
         else if(jobvehicletype=="2") autorikshaw="1";
         else if(jobvehicletype=="3") motorbike="1";
      myajax( {"api":"gettbooking","datetimefrom":dt,"datetimeto":dto,"jobcallsign":jobcallsign,"ishighestjobprice":ishighestjobprice,"all":all,"normal":normal,"autorikshaw":autorikshaw,"motorbike":motorbike,"pickuplocation":pickuplocation,"droplocation":droplocation,"jobcolour":jobcolour,"jobmake":jobmake,"jobmodel":jobmodel,"jobreferencenumber":jobreferencenumber,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){ 
        $(data.data).each(function(x,y){
          var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";
		if(y.status == "Quotation" || y.status == "Rejected" || y.status == "")
		{
		}
		else
		{
		if(y.status == "Completed")
		{
           html+='<tr  class="rowax accdd rowjobs " style="height:45px;" data-dropoff="'+y.droplocation+'" data-pickup="'+y.pickuplocation+'" data-callsign="'+y.callsign+'" >';
		}
		else if(y.status == "No Fare")
		{
           html+='<tr  class="rowax accdd rowjobs nofarebooking" style="height:45px;" data-dropoff="'+y.droplocation+'" data-pickup="'+y.pickuplocation+'" data-callsign="'+y.callsign+'" >';
		}
		else if(y.status == "Runner")
		{
           html+='<tr  class="rowax accdd rowjobs runnerbooking" style="height:45px;" data-dropoff="'+y.droplocation+'" data-pickup="'+y.pickuplocation+'" data-callsign="'+y.callsign+'" >';
		}
		else if(y.status == "Cancelled")
		{
           html+='<tr  class="rowax accdd rowjobs cancelbooking" style="height:45px;" data-dropoff="'+y.droplocation+'" data-pickup="'+y.pickuplocation+'" data-callsign="'+y.callsign+'" >';
		}
		
       html+="<td>";
       
          html+= "<span style='margin-left:20px'>"+y.callsign+'</span></td>';
html+='<td>'+y.bdate+'</td>';
         html+='<td>'+y.btime+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
               html+='<td>'+y.droplocation+'</td>';
      html+='<td>'+extras+'</td>';

         html+='<td>'+y.passengers+'</td>';
         html+='<td>Rs '+y.jobprice+'</td>';
               html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+="<td>"+y.status+"</td>";
                html+=' </tr>';
		}
      //   $("#tbdjobs").append(html);
        })
		 if(window.oldjob=-1){
			window.oldjob=html;
			$("#tbdjobs").html(html);
			
		}
		else if(window.oldjob != _clone)
		{
			window.oldjob=html;
			$("#tbdjobs").html(html);
		}
      });
      }


        $(function(){
          <?php if(isset($_GET['isappointment'])) { ?>
            $(".hlbx").hide();
             $(".otherdm").show();
      $(".alldm,.earningsrc,.jobbx").hide();
            setTimeout(function() {
          $("#tabs").tabs("option", "active", 1);
      }, 100);
          <?php } ?>
          loadjobs();
          $("#jobsearch").click(function(){
             loadjobs();
          });
             $("#submit").click(function(){
    nj();
   });
             window.nj=function(){
               var datetimex=$.trim($("#datetimex").val());
 /*    var fromtime=$.trim($("#fromtime").val());
     var totime=$.trim($("#totime").val());
     var ishighest=$("#earningamounthighest").is(":checked")?"1":"0";
     if(fromtime.length!=0){
      fromtime=window.tofulltimedt($.trim(fromtime))+":00";
     }
     if(totime.length!=0){
      totime=window.tofulltimedt($.trim(totime))+":00";
     }*/
	 var ishighest ="-1";
  var mkkearnings=$("#mkearning").val();
  if(mkkearnings!="0"){
    if(mkkearnings=="1"){
      ishighest="1";
    }
    else{
      ishighest="0"
    }
  }
      
     if(datetimex.length==0) return;
      const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
     var dd = String(today.getDate()).padStart(2, '0');
     var mm = String(today.getMonth() + 1).padStart(2, '0');  
     var yyyy = today.getFullYear();
     $("#datetimex").html(datetimex);
         var dt=datetimex; 
     lk(dt,ishighest); 
             }
     window.lk=function(dt,ishighest){
       $("#tbdearnings .accdd").remove();
      myajax( {"api":"getdriverearnings","datetime":dt,"ishighest":ishighest,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
        var html="";
    window._joblist=data.data;
    if(data.data.length==0){
     
    }
    
    html="";
    
       $( data.data).each(function(x,y){
      
       html+='<tr  class="rowax accdd rowearning" style="height:40px">';
       html+="<td>";
       if(y.isonline=="0"){
        html+="<span class='redccr'></span>";
       }
       else{
         html+="<span class='greenccr' ></span>";
       }
          html+= "<span style='margin-left:20px'>"+y.callsign+'</span></td>';

         html+='<td>'+y.name+'</td>';
         html+='<td>'+y.stime+'</td>';
               html+='<td>'+y.hourworked+'</td>';
    /*  html+='<td>Rs '+y.cash+'</td>';

         html+='<td>Rs '+y.prepaid+'</td>';
         html+='<td>'+y.cashjobs+'</td>';
               html+='<td>'+y.prepaidjobs+'</td>';
      */

               html+='<td>Rs '+y.ttlearning+'</td>';
                html+='<td>0</td></tr>';
//				html+='<td>0</td><td>Rs '+y.owed+'</td></tr><tr  class="accdd" style="height:10px"><td colspan="11"></td></tr>';
        // .append(html);
       });
	    if(window.oldearn=-1){
			window.oldearn=html;
			$("#tbdearnings").html(html);
			
		}
		else if(window.oldearn != _clone)
		{
			window.oldearn=html;
			$("#tbdearnings").html(html);
		}
	   
    });
     }
      const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
     var dd = String(today.getDate()).padStart(2, '0');
     var mm = String(today.getMonth() + 1).padStart(2, '0');  
     var yyyy = today.getFullYear();
         var dt=dd + '-'+mm+"-"+ yyyy+" "+h_ + ":" + m_+":00";
       $("#datetimex").html(dd + '-'+mm+"-"+ yyyy);
     lk(dt,"1");
        })
      window.dddr=function(){
          if($(".timer-box1").is(":visible")){
             
    var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour").val()+":"+$("#bdemominute").val()+ampm;
 
            $("#bdemominute").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
            window.istimeboxopen=false;
            $(".timer-box1,.timer-box2").hide();
         
              
           $("#fromtime").val($("#bdemohour").val()+":"+$("#bdemominute").val()+" "+ampm);
         
          }
          else  if($(".timer-box2").is(":visible")){
             
    var ampm=$("#demoam2").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour2").val()+":"+$("#bdemominute2").val()+ampm;
 
            $("#bdemominute2").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
           
          window.istimeboxopen=false;
            $(".timer-box1,.timer-box2").hide();
         
              
           $("#totime").val($("#bdemohour2").val()+":"+$("#bdemominute2").val()+" "+ampm);
         
          }
          

}
  document.onkeydown = checkKey;
  function checkKey(e) {

    e = e || window.event;
 
    if(e.keyCode=="39"){
          if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
                $("#bdemominute").focus();
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                 
                  
                }

            return;
        }
        else if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
                $("#bdemominute2").focus();
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                  
                }

            return;
        }
     
         
        window.location.href="earnings.php";
        
    
        
    }
     if(e.keyCode=="37"){ 
        if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
               
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                  $("#bdemohour").focus();
                  
                }

            return;
        }
        else    if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
               
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                  $("#bdemohour2").focus();
                  
                }

            return;
        }
             window.location.href="pre-booking.php";
           
        
      }
       if(e.keyCode=="27"){
            if($(".timer-box1").is(":visible")){
           window.istimeboxopen=false;
            $(".timer-box1").hide();
            $("#fromtime").val("");

                return false;
            } 
            else  if($(".timer-box2").is(":visible")){
           window.istimeboxopen=false;
            $(".timer-box2").hide();
            $("#totime").val("");

                return false;
            } 
            else if($("#jobdropoff").is(":visible")||$("#jobpickup").is(":visible")||$("#jobcallsign").is(":visible")||$("#kkkcustomerphone").is(":visible")||$("#kkkcustomer").is(":visible")||$("#kkkcallsign").is(":visible")||$("#kkkname").is(":visible")||$("#kkkphonenumber").is(":visible")){
              $(".sxdc").parent().find("input").val("").hide();
              $(".sxdc").parent().find("span,img").show();
               $(".rowaxdriver,.rowaxcustomer,.rowjobs").show();
              return false;
            }
            else if($("#mkkearnings").val()!="0"){
              $("#mkkearnings").val("0").change();
            }
             else if($("#mkkvehicletype").val()!="0"){
              $("#mkkvehicletype").val("0").change();
            }
            
        return;
    }
     if (e.keyCode == '38') {
     if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
                inchourbkdate(document.getElementById("barrowup"),'datepicker');
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                 
                 incminbkdate(document.getElementById("barrowupmin"),'datepicker');
                }

            return;
        }
        else  if($(".timer-box2").is(":visible")){
            
             if (document.querySelector('#bdemohour2') === document.activeElement) {

                inchourbkdate(document.getElementById("barrowup2"),'datepicker');
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                 incminbkdate(document.getElementById("barrowupmin2"),'datepicker');
                }

            return;
        }
    }
    if (e.keyCode == '40') {
     if($(".timer-box1").is(":visible")){
        
              if (document.querySelector('.demohour') === document.activeElement) {

                minhourbkdate(document.getElementById("barrowup"),'datepicker');
             }  else  if(document.querySelector('.demominute') === document.activeElement) {
                
                 minminbkdate(document.getElementById("barrowdownmin"),'datepicker');
                }


            return;
        }
        else if($(".timer-box2").is(":visible")){
        
              if (document.querySelector('#bdemohour2') === document.activeElement) {

                minhourbkdate(document.getElementById("barrowup2"),'datepicker');
             }  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                
                 minminbkdate(document.getElementById("barrowdownmin2"),'datepicker');
                }


            return;
        }
    }
    if (e.keyCode == '13') {
    if($(".timer-box1").is(":visible")){
                 
                if (document.querySelector('.demohour') === document.activeElement) {
                    $("#bdemominute").focus().addClass("llfocus");
                    $("#bdemohour").removeClass("llfocus");
                }
                  else  if(document.querySelector('.demominute') === document.activeElement) {
                    
                 dddr();
                  
                } 
                return;
            }
            else  if($(".timer-box2").is(":visible")){
                 
                if (document.querySelector('#bdemohour2') === document.activeElement) {
                    $("#bdemominute2").focus().addClass("llfocus");
                    $("#bdemohour2").removeClass("llfocus");
                }
                  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                    
                 dddr();
                  
                } 
                return;
            }
        }
  }
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>