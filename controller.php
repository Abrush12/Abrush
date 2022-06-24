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

#modalContainer {
    background-color:rgba(0, 0, 0, 0.3);
    position:absolute;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    z-index:10000;
    background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
    position:relative;
    width:500px;
    min-height:200px;
    margin-top:350px;
    border:1px solid #666;
    background-color:#fff;
    background-repeat:no-repeat;
    background-position:20px 30px;
}

#modalContainer > #alertBox {
    position:fixed;
}

#alertBox h1 {
	font-family: "Times New Roman", Times, serif;
    margin:0;
    font:bold 1.2em verdana,arial;
    background-color:#039697;
    color:#FFF;
	text-align:center;
    border-bottom:1px solid #000;
    padding:2px 0 2px 5px;
}

#alertBox p {
	font-family: Arial, Helvetica, sans-serif;
    height:50px;
	font-size:20px;
    padding-left:5px;
	margin-top:55px;
	text-align:center;
}

#alertBox #closeBtn {
    display:block;
    position:relative;
    margin:5px auto;
    padding:7px;
    border:0 none;
    width:70px;
    font:0.9em verdana,arial;
    text-transform:uppercase;
    text-align:center;
    color:#FFF;
    background-color:#039697;
    border-radius: 3px;
    text-decoration:none;
}

/* unrelated styles */

#mContainer {
    position:relative;
    width:600px;
    margin:auto;
    padding:5px;
    border-top:2px solid #000;
    border-bottom:2px solid #000;
    font:0.7em verdana,arial;
}

h1,h2 {
    margin:0;
    padding:4px;
    font:bold 1.5em verdana;
    border-bottom:1px solid #000;
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
  <div class="col-lg-12">
    <div class="main-box clearfix">
	<div class=><h1 style="color:white;margin-bottom:20px;margin-left:20px;font-family: Times,serif;" aria-hidden="true">&nbsp;&nbsp;&nbsp;Controller List</h1>
</div>
 <div class="table-responsive" style="margin-left:20px;">
   <center><img src="img/load.gif" id="loadingr" style="height:80px;display:none;" /></center>  
    <table class="table user-list  user-listax ">
      <thead>
              <tr>
               <th><span>Picture</span></th>
              <th style="width:250px"><span style="padding:0px !important"><span>Name</span><input onkeyup="firstCapitalAlways(event)"  id='namec' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right; margin-left: 9px;" class="sxdc"></span></th>
              <th style="width:250px"><span style="padding:0px !important"><span>Phone</span><input onkeyup="firstCapitalAlways(event)"  id='phonec' type="text" style="display:none;width: 200px;" /> <img src="searchp.png" style="width: 16px; margin-top: 7px;float: right;margin-left: 9px;" class="sxdc"></span></th>
               <th ><span>Date of Birth</span></th> 
              <th ><span>Country Code</span></th> 
              <th ><span>Username</span></th> 
			  <th style="width:300px"></th>
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
         
 
          _clone +='<tr  class="rowax rowaxcontroller" data-phone="'+y.phone+'" data-name="'+y.fullname+'"> ';
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
		if(loginUserId == y.id)
		{
			_clone+='<td></td>';
		}
		else{
		if(y.blocked == 0)
			_clone+='<td><a  onclick="blockAlert('+y.id+');" class="btn-grad _mxicon">Block</a>&nbsp;&nbsp;&nbsp;&nbsp;<a  onclick="deleteAlert('+y.id+');" class="btn-grada _mxicon">Delete</a></td>';
		else
			_clone+='<td><a  onclick="unblockAlert('+y.id+');" class="btn-gradb _mxicon">Un-Block</a>&nbsp;&nbsp;&nbsp;&nbsp;<a  onclick="deleteAlert('+y.id+');" class="btn-grada _mxicon">Delete</a></td>';
        
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
 var ALERT_TITLE = "Alert!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
   
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>