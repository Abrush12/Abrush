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
       float:left;
       margin-right:20px;
       border:1px solid #fff;
       padding:5px 5px;
	   cursor: default;
     }
     ._mxicon:hover{
       background-color:green;
       color:#fff;
       bprder:none;
     }
	 
.xdropdown,.xallocatedriver,.xbandriver,.lcdropdown{z-index: 999;
    position: absolute;
    width: 158px;display: none;
    background: #fff;
    border: 1px solid #eaeaea;padding: 0px;max-height: 260px;
    overflow-y: auto;}
    .lcdropdown{width:calc(100% - 33px);margin-top:-15px;z-index: 9999}
    .xdropdown{width: 177px;}
    .xdropdown li{font-weight: bold;}
    .xdropdown li,.xallocatedriver p,.xbandriver p,.lcdropdown p{display: block;
    border-bottom: 1px solid #eaeaea;
    padding: 1px 5px;cursor: pointer;font-size:15px;
    list-style-type: none;margin:0px;}
    .xdropdown li:hover,.xallocatedriver p:hover,.xbandriver p:hover, .pac-item:hover,.lcdropdown p:hover,.lcdropdown p.active,.xmapassengers li.active,.xallocatedriver p.active,.xbandriver p.active{background-color:#d9d9d9 !important;}
    .xallocatedriver{margin-top:0px;display: none;}
	.xbandriver{margin-top:0px;display: none;}
    .xallocatedriver .boldx,.lcdropdown .boldx{width: 100%;text-align: center;padding:10px;color:#000;font-weight: bold; display: none;}
    .xallocatedriver  p span{font-size: 13px;font-weight: bold;
    float: right;
    margin-top: 3px;}
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

	.btn-grad{margin: 5px;height: 25px;}
    .btn-grad {background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC  51%, #02AAB0  100%)}
         .btn-grad {
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
	min-width:110px
}
    .credit{width: 140px;
    height: 14px;
	position: absolute;
    margin-top: 2px;
    margin-left: 50px;}
	.btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
     .btn-grada{margin: 5px;height: 25px;}    
         .btn-grada {background-image: linear-gradient(to right, #D31027 0%, #EA384D  51%, #D31027  100%)}
         

          .btn-grada:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

.btn-gradp{margin: 5px;height: 25px;}    
         .btn-gradp {background-image: linear-gradient(to right, #10c978 0%, #36e99a  51%, #10c978  100%)}
         

          .btn-gradp:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
	.btn-grada {
    padding: 3px 10px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white; 
    border-radius: 2px;
    display: block;
    border: 1px solid #D31027;
    font-size: 13px;
	min-width:110px
}	.btn-gradp {
    padding: 3px 10px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white; 
    border-radius: 2px;
    display: block;
    border: 1px solid #10c978;
    font-size: 13px;
	min-width:110px
}
   
 .btn-gradb{margin: 5px;height: 25px;}    
         .btn-gradb {background-image: linear-gradient(to right, #d4a211 0%, #e7bb39  51%, #d4a211  100%)}
         

          .btn-gradb:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

	.btn-gradb {
    padding: 3px 10px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white; 
    border-radius: 2px;
    display: block;
    border: 1px solid #d4a211;
    font-size: 13px;
	min-width:110px
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

<div class="modal" id="blockuser" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px;float:left;left: 40%;top: 40%; ">
    <div class="modal-content">
       
      <div class="modal-body">
        <h4>Are you sure you want to block the user?</h4>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="noblock" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="yesblock">Yes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="deleteuser" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px;float:left;left: 40%;top: 40%; ">
    <div class="modal-content">
       
      <div class="modal-body">
        <h4>Are you sure you want to delete the user?</h4>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="nodel" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="yesdel">Yes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="unblockuser" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px;float:left;left: 40%;top: 40%; ">
    <div class="modal-content">
       
      <div class="modal-body">
        <h4>Are you sure you want to unblock the user?</h4>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="nounblock" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="yesunblock">Yes</button>
      </div>
    </div>
  </div>
</div>
   <section class="inner_s_wrap">
<div class="fluid-container">   
 <div class="row">
    <div class=" col-md-4"  style="margin-left:55px;">
            <div class="search_labels alldm">
               
              <div class="search_inpt_flx">
                <span class="labels_search">Select Date </span>
                <span class="inputs_search">
              <input type="text" style="width:70%" id="registrationdate" value="<?php echo date("d-m-Y"); ?>" value="" class="hlf_f  "> 
               <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepicker">
                </span>
              </div> 
			   <div class="search_inpt_flx" id="cont">
                <span class="labels_search">Country</span>
                <span class="inputs_search">
                 <select id="company"   style="width:70%"  style="width: 46%;padding:2px;font-size: 14px;" onchange="forFocusCon()">
                      <option value="All">All</option>
                      <option value="PK">Pakistan</option>
                      <option value="IN">India</option>
					 <option value="DU">Dubai</option>
					 <option value="UK">United Kindom</option>
					 <option value="TU">Turkey </option>
                     </select>
                </span>
              </div>
			   <div class="search_inpt_flx" id="cont">
                <span class="labels_search">Branch</span>
                <span class="inputs_search">
                 <select id="city"   style="width:70%"  style="width: 46%;padding:2px;font-size: 14px;">
                      <option value="All">All</option>
                      
                     </select>
                </span>
              </div>
			  
			  </div> </div>
			  <div class=" col-md-4 ">&nbsp;
			  </div>
             <div class=" col-md-3 " id="creditinfo"><h4 id="xttlpayment" style="color:#fff;text-align: right;margin-right: 50px;margin-top: 29px;">Total Payment : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlpaymentcash" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top: 10px;">Cash : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlpaymentprepaid" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Prepaid : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlregistration" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Registration : <span style='color:#ffd800;'>Rs 0</span></h4>
<h4 id="xttlcredit" style="font-size: 20px;color:#fff;text-align: right;margin-right: 50px;margin-top:10px;">Credit : <span style='color:#ffd800;'>Rs 0</span></h4>
             </div>
</div>
                

<div class="row">
<div class="xallocatedriver xshow " style="width:260px;">
                    <div id="loading" class="boldx">Loading...</div>
                    <div id="dxlist">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                     </div>

                  </div>
  <div class="col-lg-12" style="margin-top:20px;">
 <!--   <div class="main-box clearfix">
	<div class=><h1 style="color:white;margin-bottom:20px;margin-left:20px;font-family: Times,serif;" aria-hidden="true">&nbsp;&nbsp;&nbsp;Controller List</h1>
</div>-->

 <div class="table-responsive" style="margin-left:20px;">
   <center><img src="img/load.gif" id="loadingr" style="height:80px;display:none;" /></center>  
    <table class="table user-list  user-listax ">
      <thead>
              <tr>
               <th style="width:75px"><span>Picture</span></th>
			   <th style="width:250px"><span style="padding:0px !important"><span>User Name</span><input onkeyup="firstCapitalAlways(event)"  id='unamec' type="text" style="display:none;width: 230px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:250px"><span style="padding:0px !important"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='namec' type="text" style="display:none;width: 230px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:250px"><span style="padding:0px !important"><span>Country</span><!--<input onkeyup="firstCapitalAlways(event)"  id='countryc' type="text" style="display:none;width: 230px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span>--></th>
			   <th style="width:250px"><span style="padding:0px !important"><span>Branch</span><!--<input onkeyup="firstCapitalAlways(event)"  id='branchc' type="text" style="display:none;width: 230px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span>--></th>
			  <th style="width:250px"><span>Credit </span></th>
			  <th style="width:250px"><span>Registration</span></th>
			  <th style="width:250px"><span>Total<!--<select style="margin-left:10px" id="dlisttl">
                 <option value="0">Select Driver</option>
                 <option value="1">A101</option>
                 <option value="2">A102</option>
               </select>--></span></th>
			   </tr>
                  </thead>
                  <tbody id="tbd">
                     
                  </tbody>
                </table>
              </div>
    
      </div>
        </div>
   
</div>

    </section>
	<div class="row">
<div class="xallocatedriver xshow " style="width:260px;">
                    <div id="loading" class="boldx">Loading...</div>
                    <div id="dxlist">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                     </div>

                  </div>
                  </div>
    <div style="display:none">
    </div>
    
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
  
</script>
  <script>
 window.totalpayment=0;
 window.totalcash=0;
 window.totalprepaid =0;
 window.totalregistration =0;
 window.totalcredit = 0;

 window._selectUid=null; 
 var loginUserId=$.trim(<?php echo $_SESSION['ID'];?>);  
   $("#opendatepicker").click(function(){
                 $("#registrationdate").datepicker("show");
        });
		
 window.isdatechange=false;
         $('#registrationdate').datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0", maxDate: new Date(),
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    }).change(function(e){
       window.isdatechange=true;
      controllerlist();
    }); 
 window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}
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

 window.viewId=0;  

      window.checkTime=function(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

$("#company").change(function(){
		         controllerlist();
        });
		
$("#city").change(function(){
		         controllerlist();
        });
$( document ).on( "mousedown", function( event ) {
	//alert(event.pageY);
		//alert(event.pageX);
		$(".xallocatedriver").hide();
$( ".xallocatedriver" ).css( {"top" : (event.pageY+5)+"px" ,"margin-left" : (event.pageX+5)+"px" });
});

window.showdriver=function(id){
	$(".xallocatedriver").show().find("p").remove();
	$(".xallocatedriver").show();
	//alert(event.pageY);
		//alert(event.pageX);
		var ddate = $("#registrationdate").val();
	//$( ".xallocatedriver" ).css( {"margin-top" : event.pageY+"px" ,"margin-left" : event.pageX+"px" });
	myajax( {"api":"getdriverlistcredit","controllerid":id,"ddate":ddate,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
        $("#loadinggif").hide();
		
	if(data.data.creditlist.length>0){
                $(".xallocatedriver #loading").hide();

        $(data.data.creditlist).each(function(x,y){
			var dlist_sign= "<p>"+y.callsign;
		/*	if(y.isonline == "1")
				dlist_sign+= "<span class='greenccr'></span>";
			else
				dlist_sign+= "<span class='redccr'></span>";*/
		
				dlist_sign+= "<span class='credit'>(Rs. "+y.amount+")</span>";
				

			dlist_sign+="<span>"+y.name+"</span></p>";
            $("#dxlist").append(dlist_sign);
     //   <span class='redccra'></span>
        });
    }
    else{
         $(".xallocatedriver #loading").show().html("No Driver Found !!");
    

    }
});
}
window.showdriverreg=function(id){
	$(".xallocatedriver").show().find("p").remove();
	$(".xallocatedriver").show();
	//alert(event.pageY);
		//alert(event.pageX);
		var ddate = $("#registrationdate").val(); 
	//$( ".xallocatedriver" ).css( {"margin-top" : event.pageY+"px" ,"margin-left" : event.pageX+"px" });
	myajax( {"api":"getdriverlistreg","controllerid":id,"ddate":ddate,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
        $("#loadinggif").hide();
	if(data.data.reglist.length>0){
                $(".xallocatedriver #loading").hide();

        $(data.data.reglist).each(function(x,y){
			var dlist_sign= "<p>"+y.callsign;
		/*	if(y.isonline == "1")
				dlist_sign+= "<span class='greenccr'></span>";
			else
				dlist_sign+= "<span class='redccr'></span>";*/
		
				dlist_sign+= "<span class='credit'>(Rs. "+y.paymentgiven+")</span>";
				

			dlist_sign+="<span>"+y.name+"</span></p>";
            $("#dxlist").append(dlist_sign);
     //   <span class='redccra'></span>
        });
    }
    else{
         $(".xallocatedriver #loading").show().html("No Driver Found !!");


    }
});
}

 window.controllerlist=function(){
 
  var countrycode = $("#company").val();
  var citycode = $("#city").val();
  var ddate = $("#registrationdate").val();
   window.totalpayment=0;
 window.totalcash=0;
 window.totalprepaid =0;
 window.totalregistration =0;
 window.totalcredit = 0;
 myajax( {"api":"getcontrollerlistcredit","adminCountryCode":countrycode,"city":citycode,"ddate":ddate},function( data, textStatus, jQxhr ){ 
         $(".rowaxcustomer").remove();
         var _clone="";
         var tbd=$("#tbd"); 
         $(data.data).each(function(x,y){
         
 
          _clone +='<tr  class="rowax rowaxcontroller" data-phone="'+y.phone+'" data-uname="'+y.username+'" data-name="'+y.fullname+'" data-branch="'+y.officeadderss+'" data-country="'+getCountry(y.countrycode)+'"> ';
          if(y.image!=""){
          _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='http://18.168.83.39/files/"+y.image+"'></td>";
        }
        else{
           _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='img/Artboard-10.png'></td>";
        }
			_clone+='<td><b style="font-size:15px;">'+y.username+'</td>';
          _clone+='<td><b style="font-size:15px;">'+y.fullname+'</td>';
		_clone+='<td><b style="font-size:15px;">'+getCountry(y.countrycode)+'</td>';
        _clone+='<td><b style="font-size:15px;">'+y.officeadderss+'</td>';

         var t_credit = parseInt(y.creditamount)+parseInt(y.prepaidamount);
		 if(t_credit>0){
			_clone+='<td><b style="font-size:15px;"><span style="color:#ffd800;">Rs '+t_credit+'</span><i class="fa fa-caret-down" style="font-size:24px;color:white;float:right;margin-right:50px;" onclick="showdriver('+y.id+');"></i></td>';
			}
		 else
		 {
			  _clone+='<td><b style="font-size:15px;"><span style="color:#ffd800;">Rs '+t_credit+'</span></td>';
		 }
		 if(y.registration>0){
			  _clone+='<td><b style="font-size:15px;"><span style="color:#ffd800;">Rs '+y.registration+'</span><i class="fa fa-caret-down" style="font-size:24px;color:white;float:right;margin-right:50px;" onclick="showdriverreg('+y.id+');"></i></td>';
		 }
		 else
		 {
			 _clone+='<td><b style="font-size:15px;"><span style="color:#ffd800;">Rs '+y.registration+'</span></td>';
		 }
		 
		_clone+='<td><b style="font-size:15px;"><span style="color:#ffd800;">Rs '+y.total+'</span></td>';

			window.totalpayment+=parseInt(y.total);
			window.totalcash+=parseInt(y.registration)+parseInt(y.creditamount);
			window.totalprepaid +=parseInt(y.prepaidamount);
			window.totalregistration +=parseInt(y.registration);
			window.totalcredit += parseInt(y.creditamount)+parseInt(y.prepaidamount);
         });
		tbd.html(_clone);
     
         $("#xttlpayment").html("Total Payment : <span style='color:#ffd800;'>Rs "+window.totalpayment+"</span>").attr("data-amount",window.totalpayment);
      $("#xttlpaymentcash").html("Cash : <span style='color:#ffd800;'>Rs "+window.totalcash+"</span>").attr("data-amount",window.totalcash);
       $("#xttlpaymentprepaid").html("Prepaid : <span style='color:#ffd800;'>Rs "+window.totalprepaid+"</span>").attr("data-amount",window.totalprepaid);
        $("#xttlcredit").html("Credit : <span style='color:#ffd800;'>Rs "+window.totalcredit+"</span>").attr("data-amount",window.totalcredit);
      
	  $("#xttlregistration").html("Registration : <span style='color:#ffd800;'>Rs "+window.totalregistration+"</span>");
       
    });
  
    }

function forFocusCon() { 
  var x = document.getElementById("company").value;

var html="";
if(x=="PK")
{
	html='<option value="All">All</option><option value="Islamghar">Islamghar</option><option value="Mirpur Azad Kashmir">Mirpur Azad Kashmir</option><option value="Jhelum">Jhelum</option><option value="Bhimber">Bhimber</option>'
	$("#city").html(html);	
}
else if(x=="IN")
{
	html='<option value="All">All</option><option value="Chandigarh">Chandigarh</option><option value="Mohali">Mohali</option><option value="Delhi">Delhi</option><option value="Noida">Noida</option>'
	$("#city").html(html);
}
else if(x=="DU")
{
	html='<option value="All">All</option><option value="Dubai">Dubai</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option>'
	$("#city").html(html);
}else if(x=="UK")
{
	html='<option value="All">All</option><option value="London">London</option><option value="Birmingham">Birmingham</option><option value="Derby">Derby</option>'
	$("#city").html(html);
}else if(x=="TU")
{
	html='<option value="All">All</option><option value="Istanbul">Istanbul</option><option value="Ankara">Ankara</option><option value="Bursa">Bursa</option>'
	$("#city").html(html);
}
else 
{
	html='<option value="All">All</option>'
	$("#city").html(html);
}
}	

function blockAlert(id){
	window._selectUid = id;
$("#blockuser").modal("show");
}
$("#yesblock").click(function(){
            block();
         });
		 
		 

window.block=function(){
    if(window._selectUid==null){
          alert("Please Select Job");
          return;
        }
		$("#blockuser").modal("hide");
		$("#loadingr").show();
	   myajax( {"api":"userblock","flag":"1","userid":window._selectUid},function( data, textStatus, jQxhr ){
		     $("#loadingr").hide();
      if(data.status=="200"){
		 
		 alert("User has been blocked");
		 window.location.href="controller.php";
        
	  }
	  else{
	  alert(data.message);
	  }
     });
}

function deleteAlert(id){
	window._selectUid = id;
$("#deleteuser").modal("show");
}
$("#yesdel").click(function(){
            deleteAdmin();
         });
		 
		 

window.deleteAdmin=function(){
    if(window._selectUid==null){
          alert("Please Select Job");
          return;
        }
		$("#deleteuser").modal("hide");
		$("#loadingr").show();
	   myajax( {"api":"deleteAdmin","flag":"1","userid":window._selectUid},function( data, textStatus, jQxhr ){
		     $("#loadingr").hide();
      if(data.status=="200"){
		 
		 alert("User has been deleted");
		 window.location.href="controller.php";
        
	  }
	  else{
	  alert(data.message);
	  }
     });
}

function unblockAlert(id){
	window._selectUid = id;
$("#unblockuser").modal("show");
}
$("#yesunblock").click(function(){
            unblock();
         });
		 
		 

window.unblock=function(){
    if(window._selectUid==null){
          alert("Please Select Job");
          return;
        }
		$("#unblockuser").modal("hide");
		$("#loadingr").show();
		myajax( {"api":"userblock","flag":"0","userid":window._selectUid},function( data, textStatus, jQxhr ){
			  $("#loadingr").hide();
      if(data.status=="200"){
		 
		 alert("User has been un-blocked");
        window.location.href="controller.php";
	  }
	  else{
	  alert(data.message);
	  }
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
		$("#unamec").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxcontroller").hide();
          if(a.length==0){
            $(".rowaxcontroller").show();
          }
          else{
            $(".rowaxcontroller").each(function(){
              if($(this).attr("data-uname").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
		
		 $("#branchc").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxcontroller").hide();
          if(a.length==0){
            $(".rowaxcontroller").show();
          }
          else{
            $(".rowaxcontroller").each(function(){
              if($(this).attr("data-branch").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
		 $("#countryc").keyup(function(){
          var a=$.trim($(this).val()).toLowerCase();
          $(".rowaxcontroller").hide();
          if(a.length==0){
            $(".rowaxcontroller").show();
          }
          else{
            $(".rowaxcontroller").each(function(){
              if($(this).attr("data-country").toLowerCase().startsWith(a)){
                $(this).show();
              }
            })
          }
        });
     
        
	  });

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>