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
   <section class="inner_s_wrap">
<div class="fluid-container">   
<div class="row">
  <div class="col-lg-12">
    <div class="main-box clearfix">
	<div class=><h1 style="color:white;margin-bottom:20px;margin-left:20px;font-family: Times,serif;" aria-hidden="true">&nbsp;&nbsp;&nbsp;Controller List</h1>
</div>
 <div class="table-responsive" style="margin-left:20px;">
    <table class="table user-list  user-listax ">
      <thead>
                    <tr>
                      <th><span>Picture</span></th>
              <th style="width:350px"><span style="padding:0px !important"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='namec' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:350px"><span style="padding:0px !important"><span>Phone</span><input onkeyup="firstCapitalAlways(event)"  id='phonec' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px;
    margin-top: 7px;
    float: right;
    margin-left: 9px;" class="sxdc"></span></th>
               <th ><span>Date of Birth</span></th> 
              <th ><span>Country Code</span></th> 
              <th ><span>Username</span></th> 
              </tr>
                  </thead>
                  <tbody id="tbd">
                     
                  </tbody>
                </table>
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

      window.checkTime=function(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

 window.controllerlist=function(){
 
    myajax( {"api":"getcontrollerlist","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){ 
         $(".rowaxcustomer").remove();
         var _clone;
         var tbd=$("#tbd"); 

     
      
     
         $(data.data).each(function(x,y){
         
 
          _clone ='<tr  class="rowax rowaxcontroller" data-phone="'+y.phone+'" data-name="'+y.fullname+'"> ';
          if(y.image!=""){
          _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='http://18.168.83.39/files/"+y.image+"'></td>";
        }
        else{
           _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='img/Artboard-10.png'></td>";
        }
          _clone+='<td><b style="font-size:15px;">'+y.fullname+'</td>';
          _clone+='<td style="font-size:15px"><b>'+y.phone+'</b>';
          _clone+='<td><b style="font-size:15px;margin-left:15px">'+dateFormat(y.dateofbirth)+'</td>';
        _clone+='<td><b style="font-size:15px;margin-left:15px">'+getCountry(y.countrycode)+'</td>';
        _clone+='<td><b style="font-size:15px;margin-left:15px">'+y.username+'</td>';
        _clone+='</tr></tr> </tr>';
          
          tbd.append(_clone);
		  
         });
  
     
     
       
    });
  
    }
  window._baseurl="http://18.168.83.39/";
  window.xcontrollernamea="0";
 
 window.prmobile=function(mobile){
  var tt=  mobile.substr(0,1);
  return tt=="0"?mobile:"0"+mobile;
}

function getCountry(code)
{
	switch(code){
			case "IN":
			day = "India";
			break;
			case "PK":
			day = "Pakistan";
			break;
			case "UK":
			 day = "United Kindom";
			break;
			case "DU":
			day = "Dubai";
			break;
			case "TU":
			day = "Turkey";
			break;
	}
	return day;
}
function dateFormat(date)
{
			var date_in=new Date(date);
			var dd = String(date_in.getDate()).padStart(2, '0');
			var mm = String(date_in.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = date_in.getFullYear();
			return (dd + '-'+mm+"-"+ yyyy);

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

       controllerlist();
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
         $("#namec").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxcontroller").hide();
          if(a.length==0){
            $(".rowaxcontroller").show();
          }
          else{
            $(".rowaxcontroller").each(function(){
              if($(this).attr("data-name").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
          $("#phonec").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxcontroller").hide();
          if(a.length==0){
            $(".rowaxcontroller").show();
          }
          else{
            $(".rowaxcontroller").each(function(){
              if($(this).attr("data-phone").toLowerCase().startsWith(a)){
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
              if($(this).attr("data-phone") == a){
                $(this).show();
              }
            })
          }
        })
  $("#kkkphonenumber").keyup(function(){
          var a=$.trim($(this).val());
          $(".rowaxdriver").hide();
          if(a.length==0){
            $(".rowaxdriver").show();
          }
          else{
            $(".rowaxdriver").each(function(){
              if($(this).attr("data-phone") == a){
                $(this).show();
              }
            })
          }
        })

        $(".sxdc").click(function(){
           $(".sxdc").parent().find("input").val("").hide();
              $(".sxdc").parent().find("span,img").show();
          $(this).hide().parent().find("input").show().focus();
          $(this).parent().find("span").hide();

        });
	  })
      
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>