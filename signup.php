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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files  -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

     
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

   <h1 style="color: #fff !important;text-align:center; ">Controller Sign Up<h1>     
 
  </div>
  <div class="form-group" style="margin-top:20px">

   <label for="userName" style="color: #fff !important; ">User Name</label>      
      
             <input type="text" name="userName" onkeyup="firstCapitalAlways(event);" autocomplete="none" class="form-control" id="userName"  >
 
  </div>
	<div class="form-group" style="margin-top:20px">

   <label for="firstName" style="color: #fff !important; ">First Name</label>      
      
             <input type="text" name="firstName" onkeyup="firstCapitalAlways(event);" autocomplete="none" class="form-control" id="firstName"  >
 
  </div>
    <div class="form-group" style="margin-top:20px">

   <label for="lastName" style="color: #fff !important; ">Last Name</label>      
      
             <input type="text" name="lastName" onkeyup="firstCapitalAlways(event);" autocomplete="off" class="form-control" id="lastName"  >
 
  </div>
      <div class="form-group" style="margin-top:20px">

   <label for="birthDate" style="color: #fff !important; ">Date of Birth</label>      
      
          <input type="text" id="birthDate" readonly placeholder="dd-mm-yyyy" style="width:100%;font-size:1rem;border-radius:0.25rem;padding:0.375rem 0.75rem;" >
          <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendate">
 
  </div>
      <div class="form-group" style="margin-top:20px">

   <label for="PhoneNo" style="color: #fff !important;">Phone Number</label>      
      
             <input type="text" name="PhoneNo"  maxlength="11" autocomplete="off" class="form-control" id="PhoneNo"  >
 
  </div>
   <div class="form-group" style="margin-top:20px">

   <label for="company" style="color: #fff !important; ">Country</label>      
      
             <select id="company" style="width: 100%;  border: none; outline: none;padding:0.175rem 0.75rem;padding-left:8px;border-radius:0.25rem;" onchange="forFocus()">
                      <option value="0">Select Country</option>
                      <option value="PK">Pakistan</option>
                      <option value="IN">India</option>
					 <option value="DU">Dubai</option>
					 <option value="UK">United Kindom</option>
					 <option value="TU">Turkey </option>
                     </select>
 
  </div>
     <div class="form-group" style="margin-top:20px">
   <label for="passwordMain"  style="color: #fff !important; ">Enter Password</label>      
        
             <input type="password" name="passwordMain"  autocomplete="off" class="form-control secure" id="passwordMain"  >
 
  </div>

   <div class="form-group" style="margin-top:20px">
    <label for="passwordCon" style="color:#fff">Confirm Password </label>
    <input type="text" name="passwordCon"  autocomplete="off"  class="form-control secure" id="passwordCon"  >
     
  </div>
 <div class="form-group" style="margin-top:20px">

   <label for="PhoneNo" style="color: #fff !important; ">Select Image:</label>      
      
          <input type="file" id="fileUpload" onchange="uploadImage(0,this)" name="img" accept="image/*" style="color: #fff !important; ">
 
  </div>
   </form>
  <div class="form-group" style="margin-top:20px;text-align:center">

    <button class="btn btn-primary" id="save">Submit</button>   <span class="alert alert-danger" id="xerrormsgs"></span> <img src="img/load.gif" style="width:60px;display: none;" id="loadingggf">
     
  </div>
  <div id="imgtmbnail" style="margin-left:450px;margin-top:-105px;display:none;"><img id="dispimg" src="img/blank.png" class="img-thumbnail" alt="Cinque Terre" width="150" height="100"> </div>
  <input type="hidden" id="imgdb" value="" >
 
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
	  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    
<script>

window._baseurl="http://18.168.83.39/";

document.onkeydown = checkKey;
window._pos=0;
window._ref=null;
window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}

 

    function errorHandler(event) {
	//	alert("error");
     }

    function abortHandler(event) {
	//	alert("abort");
     }
$("#opendate").click(function(){
                 $("#birthDate").datepicker("show");
        });
	 
$("#birthDate").datepicker({
	
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0", maxDate: new Date(),
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    })
          
function uploadProgressHandler(event) {
      //  alert("progress");
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
		 if(window._pos==0){
			 $("#imgtmbnail").show();
		$("#imgdb").val(event.target.responseText);
		$("#dispimg").attr("src",window._baseurl+"files/"+event.target.responseText);
		$("#save").focus();
    }
	}

$(function(){
		

	
  $("#save").click(function(){
	  if($.trim($("#userName").val())=="")
	  {
		  alert("Please Enter User Name");
		  return;
	  }
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
	  if($.trim($("#imgdb").val())=="")
	  {
		  alert("Please Select Image");
		  return;
	  }
	  
	//  alert($.trim($("#firstName").val())); alert($.trim($("#lastName").val())); alert($.trim($("#birthDate").val())); alert($.trim($("#PhoneNo").val())); alert($.trim($("#company").val())); alert($.trim($("#imgdb").val())); alert($.trim($("#passwordMain").val())); 
	//  return;
	  $("#loadingggf").show();
        myajax({"api":"addAdmin","userName":$.trim($("#userName").val()),"firstName":$.trim($("#firstName").val()),"lastName":$.trim($("#lastName").val()),"dateofbirth":$.trim($("#birthDate").val()),"phone":$.trim($("#PhoneNo").val()),"countrycode":$.trim($("#company").val()),"image":$("#imgdb").val(),"password":$.trim($("#passwordMain").val())},function( data, textStatus, jQxhr ){
          if(data.status=="200"){
            alert("Admin user has been added successfully"); 
			window.location.href="controller.php";
          }
          else{
             alert(data.message);  
              } 
$("#loadingggf").hide();
    });
      
  });
})


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
     });
  });
}
setInputFilter(document.getElementById("PhoneNo"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

function checkKey(e) {

    e = e || window.event;
     
  if (e.keyCode == '13') {
 //   alert($("#birthDate").val())
		if( $('#userName').is(':focus') && $.trim($("#userName").val())!=""){ //alert("fn");
			$("#firstName").focus();
		}else if($.trim($("#userName").val())==""){
			$("#userName").focus();
		}else if( $('#firstName').is(':focus') && $.trim($("#firstName").val())!=""){ //alert("fn");
			$("#lastName").focus();
		}else if($.trim($("#firstName").val())==""){
			$("#firstName").focus();
		}else if($('#lastName').is(':focus') && $.trim($("#lastName").val())!=""){//alert("ln");
			$("#birthDate").focus();
		}else if($.trim($("#lastName").val())=="")
			$("#lastName").focus();
		else if($('#birthDate').is(':focus') && $.trim($("#birthDate").val())!=""){//alert("date");
			$("#PhoneNo").focus();
		}else if($.trim($("#birthDate").val())==""){
			$("#birthDate").focus();
		}else if($('#PhoneNo').is(':focus') && $.trim($("#PhoneNo").val())!=""){ //alert("kk");
			$("#company").focus();
		}else if($.trim($("#PhoneNo").val())==""){
			$("#PhoneNo").focus();
		}else if($.trim($("#company").val()) == 0){
			$("#company").focus();
		}else if($('#passwordMain').is(':focus') && $.trim($("#passwordMain").val()) != ""){
			$("#passwordCon").focus();
		}else if($.trim($("#passwordMain").val()) == ""){
			$("#passwordMain").focus();
		}else if($('#passwordCon').is(':focus') && $.trim($("#passwordCon").val()) != ""){
			$("#fileUpload").focus();
		}else if($.trim($("#passwordCon").val()) == ""){
			$("#passwordCon").focus();
		}else if($.trim($("#imgdb").val()) != ""){
			$("#save").focus();
		}else{ 
			$("#fileUpload").focus();
		}
	}

}

function forFocus() { 
  var x = document.getElementById("company").value; 
	if(x!=0)
		$("#passwordMain").focus();
}
</script>
  </body>
</html>