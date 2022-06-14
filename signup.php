<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?>  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
	   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files  -->
     
    <style type="text/css">
	body{
		background-color:black;
	}
      #tbd tr:first-child td{border-top:transparent !important;}
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

.alert-danger{    padding: 0.55rem 1.25rem;
    top: 3px;
    margin-left: 10px;display: none;}
input[type=text].password-autocomplete-disabler {
    position: absolute !important;
    left: -10000px !important;
    top: -10000px !important;
}



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

code {
    font-size:1.2em;
    color:#069;
}

#credits {
    position:relative;
    margin:25px auto 0px auto;
    width:350px; 
    font:0.7em verdana;
    border-top:1px solid #000;
    border-bottom:1px solid #000;
    height:90px;
    padding-top:4px;
}

#credits img {
    float:left;
    margin:5px 10px 5px 0px;
    border:1px solid #000000;
    width:80px;
    height:79px;
}

.important {
    background-color:#F5FCC8;
    padding:2px;
}

code span {
    color:green;
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
<section class="inner_s_wrap">
<div class="fluid-container">
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="main-box clearfix">
      <form  autocomplete="off" role="presentation">
	<div class="form-group" style="margin-top:20px">

   <label for="country" style="color: #fff !important; "><h1>Sign Up<h1></label>      
 
  </div>
	<div class="form-group" style="margin-top:20px">

   <label for="firstName" style="color: #fff !important; ">First Name</label>      
      
             <input type="text" name="firstName" onkeyup="firstCapitalAlways(event);" autocomplete="none" class="form-control  " id="firstName"  >
 
  </div>
    <div class="form-group" style="margin-top:20px">

   <label for="lastName" style="color: #fff !important; ">Last Name</label>      
      
             <input type="text" name="lastName" onkeyup="firstCapitalAlways(event);" autocomplete="off" class="form-control  " id="lastName"  >
 
  </div>
      <div class="form-group" style="margin-top:20px">

   <label for="birthDate" style="color: #fff !important; ">Date of Birth</label>      
      
             <input type="date" name="birthDate" autocomplete="off" class="form-control  " id="birthDate"  >
 
  </div>
      <div class="form-group" style="margin-top:20px">

   <label for="PhoneNo" style="color: #fff !important; ">Phone Number</label>      
      
             <input type="text"    name="PhoneNo" class="only-numeric"  autocomplete="off" class="form-control  " id="PhoneNo"  >
 
  </div>
   <div class="form-group" style="margin-top:20px">

   <label for="company" style="color: #fff !important; ">Country</label>      
      
             <select id="company" style="width: 100%;  border: none; outline: none;">
                      <option value="0">Select Country</option>
                      <option value="PK">Pakistan</option>
                      <option value="IN">India </option>
					 <option value="DU">Dubai </option>
					 <option value="UK">United Kindom	 </option>
					 <option value="TU">Turkey </option>
                     </select>
 
  </div>
     <div class="form-group" style="margin-top:20px">
   <label for="passwordMain"  style="color: #fff !important; ">Enter Password</label>      
        
             <input type="password" name="passwordMain"  autocomplete="off" class="form-control secure" id="passwordMain"  >
 
  </div>
</form>
   <div class="form-group" style="margin-top:20px">
    <label for="passwordCon" style="color:#fff">Confirm Password </label>
    <input type="password" name="passwordCon"  autocomplete="off"  class="form-control secure" id="passwordCon"  >
     
  </div>
 <div class="form-group" style="margin-top:20px">

   <label for="PhoneNo" style="color: #fff !important; ">Select Image:</label>      
      
          <input type="file" id="fileUpload" onchange="uploadImage(0,this)" name="img" accept="image/*" style="color: #fff !important; ">
 
  </div>
  <div class="form-group" style="margin-top:20px">

    <button class="btn btn-primary" id="save">Submit</button>   <span class="alert alert-danger" id="xerrormsgs"></span> <img src="img/load.gif" style="width:60px;display: none;" id="loadingggf">
     
  </div>
  <div id="imgtmbnail" style="margin-left:450px;margin-top:-105px">  <img src="img/callcenter.png" class="img-thumbnail" alt="Cinque Terre" width="150" height="100"> </div>
    </div>
  </div>
</div>
</div>
    </section>
    <div style="display:none">
    </div>
       
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    
<script>

window._baseurl="http://18.168.83.39/";


window._pos=0;
window._ref=null;
window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}

 

    function errorHandler(event) {
		alert("error");
     }

    function abortHandler(event) {
		alert("abort");
     }
	 
    
function uploadProgressHandler(event) {
        alert("progress");
  /*      var percent = (event.loaded / event.total) * 100;
        var progress = Math.round(percent);
        $("#uploadprogress,#uploadprogress1").show().val(progress);
       */  
    }
window.uploadImage=function(qs,ref){
      window._pos=qs;
	  window._ref=ref;
	 
          var file;
          if(qs==0) { file = $("#fileUpload")[0].files[0];}
         alert(file); 
        if($(ref).val().length==0){
			return;
		}
	//	$(ref).parent().find("img").attr("src","img/load.gif");
        var formData = new FormData();
        formData.append("file1", file);

        $.ajax({
            url: 'uploadimage.php',
            method: 'POST',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress",
                    uploadProgressHandler,
                    false
                );
                xhr.addEventListener("load", loadHandler, false);
                xhr.addEventListener("error", errorHandler, false);
                xhr.addEventListener("abort", abortHandler, false);

                return xhr;
            }
        });
     }
 
 function loadHandler(event) {
 			//	$(window._ref).parent().find("img").attr("src","img/upload.png");
 alert(event.target.responseText);
		 if(window._pos==0){
		 alert(event.target.responseText);
       // $("#platenoimage").val(event.target.responseText);
		//$(window._ref).parent().find("img").attr("src",window._baseurl+"files/"+event.target.responseText);

        
    }
	}
$(function(){
		
	$(".only-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
          if (!(keyCode >= 48 && keyCode <= 57)) {
             $(event.target).val("");
            return false;
          }else{
            
          }
      });
	
	
  $("#save").click(function(){
	  if($.trim($("#firstName").val())=="")
	  {
		  alert("Please Enter First Name");
		  return;
	  }
	  if($.trim($("#lastName").val())=="")
	  {
		  alert("Please Enter Last Name");
		  return;
	  }
	  if($.trim($("#PhoneNo").val())=="" || $.trim($("#PhoneNo").val()).length !=10)
	  {
		  alert("Please Enter Valid Phone Number");
		  return;
	  }
	  if($.trim($("#company").val()) == 0 || $.trim($("#company").val()) == "0")
	 {
		 alert("Select a valid Country Name");
		 return;
	 }
	  if($.trim($("#passwordMain").val())=="")
	  {
		  alert("Please Enter Password");
		  return;
	  }
	  if($.trim($("#passwordCon").val())=="")
	  {
		  alert("Please Enter Confirm Password");
		  return;
	  }
	  if($.trim($("#passwordCon").val()) != $.trim($("#passwordMain").val()))
	  {
		  alert("Password and Confirm Password do not match");
		  return;
	  }
      $("#loadingggf").show();
        myajax({"api":"addUpdateAdmin","firstName":$.trim($("#firstName").val()),"lastName":$.trim($("#lastName").val()),"dateofbirth":$.trim($("#birthDate").val()),"Phone":$.trim($("#PhoneNo").val()),"countrycode":$.trim($("#company").val()),"image":"image","password":$.trim($("#passwordMain").val())},function( data, textStatus, jQxhr ){
          if(data.status=="200"){
            $("#oldpassword,#newpassword,#cnewpassword").val("");
             $("#xerrormsgs").html("Successfully Changed").show();  
          }
          else{
              $("#xerrormsgs").html(data.alert).show();   
              } 
$("#loadingggf").hide();
    });
      
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
  </body>
</html>