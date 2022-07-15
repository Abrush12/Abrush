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
         .btn-gradp {background-image: linear-gradient(to right, #2fbc7d 0%, #079a59  51%, #2fbc7d  100%)}
         

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
    border: 1px solid #2fbc7d;
    font-size: 13px;
	min-width:80px
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

  <body onload="selMonth()">

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
    <div class=" col-md-4" style="margin-left:55px;">
            <div class="search_labels alldm">
                <div class="search_inpt_flx" id="cont">
                <span class="labels_search">Select Month</span>
                <span class="inputs_search">
                 <select id="xmonthname"   style="width:70%"  style="width: 46%;padding:2px;font-size: 14px;">
				 <option value="01">January</option>
				 <option value="02">February</option>
				 <option value="03">March</option>
				 <option value="04">April</option>
				 <option value="05">May</option>
				 <option value="06">June</option>
				 <option value="07">July</option>
				 <option value="08">August</option>
				 <option value="09">September</option>
				 <option value="10">October</option>
				 <option value="11">November</option>
				 <option value="12">December</option>
				 </select>
                </span>
              </div>
			   </div> </div>
  <div class="col-lg-12">
 <!--   <div class="main-box clearfix">
	<div class=><h1 style="color:white;margin-bottom:20px;margin-left:20px;font-family: Times,serif;" aria-hidden="true">&nbsp;&nbsp;&nbsp;Controller List</h1>
</div>-->
 <div class="table-responsive" style="margin-left:20px;margin-top:20px;">
   <center><img src="img/load.gif" id="loadingr" style="height:80px;display:none;" /></center>  
    <table class="table user-list  user-listax ">
      <thead>
              <tr>
               <th style="width:75px"><span>Picture</span></th>
			   <th style="width:150px"><span style="padding:0px !important"><span>User Name</span><input onkeyup="firstCapitalAlways(event)"  id='unamec' type="text" style="display:none;width: 130px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:200px"><span style="padding:0px !important"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='namec' type="text" style="display:none;width: 180px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:150px"><span style="padding:0px !important"><span>Phone</span><input onkeyup="firstCapitalAlways(event)"  id='phonec' type="text" style="display:none;width: 130px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right;margin-left: 9px;" class="sxdc"></span></th>
               <th style="width:120px"><span >Date of Birth</span></th> 
			   <th style="width:180px"><span style="padding:0px !important"><span>Branch</span><input onkeyup="firstCapitalAlways(event)"  id='branchc' type="text" style="display:none;width: 150px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:180px"><span style="padding:0px !important"><span>Country</span><input onkeyup="firstCapitalAlways(event)"  id='countryc' type="text" style="display:none;width: 150px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
			  <th style="width:250px;border-right: 5px solid white;"></th>
              <th><span style="margin-left:20px">Hours</span></th>
			  <th><span>Overtime</span></th>
			  <th><span>Salary</span></th>
			  <th style="width:110px"></th>
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
 window._selectUid=null; 
 var loginUserId=$.trim(<?php echo $_SESSION['ID'];?>);  
  
 window.selMonth=function()
 {
	 $('#xmonthname option[value="<?php echo date("m"); ?>"]').attr("selected", "selected");
 }	 
  
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

 window.controllerlist=function(){
 
    myajax( {"api":"getcontrollerlist","adminCountryCode":"All"},function( data, textStatus, jQxhr ){ 
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
          _clone+='<td style="font-size:15px"><b>'+y.phone+'</b>';
          _clone+='<td><b style="font-size:15px;">'+dateFormat(y.dateofbirth)+'</td>';
        _clone+='<td><b style="font-size:15px;">'+y.officeadderss+'</td>';
		_clone+='<td><b style="font-size:15px;">'+getCountry(y.countrycode)+'</td>';

        
		if(loginUserId == y.id)
		{
			_clone+='<td style="width:270px;border-right: 5px solid white;">&nbsp;</td>';
		}
		else{
		if(y.blocked == 0)
			_clone+='<td style="width:270px;border-right: 5px solid white;"><a  onclick="blockAlert('+y.id+');" class="btn-grad _mxicon">Block</a>&nbsp;&nbsp;&nbsp;&nbsp;<a  onclick="deleteAlert('+y.id+');" class="btn-grada _mxicon">Delete</a></td>';
		else
			_clone+='<td style="width:270px;border-right: 5px solid white;"><a  onclick="unblockAlert('+y.id+');" class="btn-gradb _mxicon">Un-Block</a>&nbsp;&nbsp;&nbsp;&nbsp;<a  onclick="deleteAlert('+y.id+');" class="btn-grada _mxicon">Delete</a></td>';
        
        }
		_clone+='<td><b style="font-size:15px;">&nbsp;</td>';
		_clone+='<td><b style="font-size:15px;">&nbsp;</td>';
		_clone+='<td><b style="font-size:15px;">&nbsp;</td>';
		 
		if(loginUserId == y.id)
		{
			_clone+='<td>&nbsp;</td>';
		}else{
			_clone+='<td><a  onclick="" class="btn-gradp _mxicon">Pay</a></td>';
		}
		_clone+='</tr>';
          
		  
         });
		tbd.html(_clone);
     
     
       
    });
  
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
       
        
	  });

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>