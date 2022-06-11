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
	    <div class="form-group">

   <label for="country" style="color: #fff !important; ">First Name</label>      
      
             <input type="text" name="firstName"  autocomplete="none" class="form-control  " id="firstName"  >
 
  </div>
    <div class="form-group">

   <label for="country" style="color: #fff !important; ">Last Name</label>      
      
             <input type="text" name="lastName"  autocomplete="off" class="form-control  " id="lastName"  >
 
  </div>
    <div class="form-group">

   <label for="country" style="color: #fff !important; ">Email</label>      
      
             <input type="text" name="Email"  autocomplete="off" class="form-control  " id="Email"  >
 
  </div>
       <div class="form-group">

   <label for="country" style="color: #fff !important; ">Phone Number</label>      
      
             <input type="text"    name="PhoneNo"  autocomplete="off" class="form-control  " id="PhoneNo"  >
 
  </div>
     <div class="form-group" style="margin-top:20px">
   <label   style="color: #fff !important; ">Enter Password</label>      
        
             <input type="password" name="passwordMain"  autocomplete="off" class="form-control secure" id="newpassword"  >
 
  </div>
</form>
   <div class="form-group" style="margin-top:20px">
    <label for="area" style="color:#fff">Confirm Password </label>
    <input type="password" name="passwordCon"  autocomplete="off"  class="form-control secure" id="cnewpassword"  >
     
  </div>
  <div class="form-group" style="margin-top:20px">

    <button class="btn btn-primary" id="save">Submit</button>   <span class="alert alert-danger" id="xerrormsgs"></span> <img src="img/load.gif" style="width:60px;display: none;" id="loadingggf">
     
  </div>
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
 
$(function(){
  $("#save").click(function(){
    var oldpassword=$.trim($("#oldpassword").val());
    var newpassword=$.trim($("#newpassword").val());
    var cnewpassword=$.trim($("#cnewpassword").val());
    $("#xerrormsgs").hide();
    if(newpassword.length!=0&&cnewpassword.length!=0&&oldpassword.length!=0){
      if(newpassword!=cnewpassword){
        $("#xerrormsgs").html("Password do not match").show();
        return;
      }
      $("#loadingggf").show();
        myajax({"api":"updateadminpassword","uid":localStorage.getItem("id"),"password":newpassword,"oldpassword":oldpassword},function( data, textStatus, jQxhr ){
          if(data.status=="200"){
            $("#oldpassword,#newpassword,#cnewpassword").val("");
             $("#xerrormsgs").html("Successfully Changed").show();  
          }
          else{
              $("#xerrormsgs").html(data.alert).show();   
              } 
$("#loadingggf").hide();
    });
      }
  });
})
</script>
  </body>
</html>