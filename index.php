<?php 
session_start();

if(isset($_SESSION['ISLOGIN'])){
//	echo "<script> window.location.href='new-booking.php';</script>";
	//exit();
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
       body{background-position: center top;
    background-repeat: no-repeat;
    background: url("img/Artboard-13.png");
    background-size: 100%;}
    .logn_ipt {
    background-image: linear-gradient(to right, #ffffff , #ffffff);
    background-repeat: no-repeat;
    background-size: 100%;
    margin: -2px 126px 35px;
    padding: 45px 32px 31px;
    border-radius: 24px;
}
.user_lg{border: 1px solid #bbb9b9;
    box-shadow: 1px 1px 5px #eaeaea;}
    a:focus{outline: 2px solid blue;
    border-radius: 40px;}
    </style>

  <title>Abrush Empire</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
  </head>
  <body>

    <section class="login_wrap">
      <div class="container-fluid hg_hndrd">
        <div class="row">
          <div class="col-sm-3">  <center><img style="height: 170px;  margin-top: 80px; " src="img/Artboard-10.png"></center></div>
        <!--  <div class="col-md-7 hg_hndrd p-0">
            <div class="login_bg_lg hg_hndrd">
              <div class="logn_img_logo hg_hndrd">
                <img src="img/Artboard-13.png">
                <div class="lg_logo_abst">
                  <img src="img/Artboard-10.png">
                </div>
              </div>
            </div>
          </div>-->
          <div class="col-sm-6">
          <center>
          <div style="max-width: 700px">
          
            <div class="emara_logo">
                <img src="img/nametext.png">
              </div> 
            <div class="login_details_bg" style="border-radius: 100px;padding: 20px;height:650px;background-size:800px;background-image:none;background-color: #039697;">
              
              <div class="upr_details_logo">
                <img src="img/Artboard-11.png" style="margin-bottom: 2px;height:200px">
              </div>
              <div class="logn_ipt" style="margin:-2px 126px 30px ">
                  <h3 style="color:#000;text-align: center;">Welcome</h3>
              <div class="user_lg" style="margin-top:10px">
                    <span><img src="img/Artboard-14.png"></span>
                     <select id="company" style="width: 100%;  border: none; outline: none;">
                      <option value="0">Select Country</option>
                      <option value="PK">Pakistan</option>
                      <option value="IN">India </option>
					 <option value="DU">Dubai </option>
					 <option value="UK">United Kindom	 </option>
					 <option value="TU">Turkey </option>
                     </select>
                  </div> 
                  <div class="user_lg" style="margin-top:10px">
                    <span><img src="img/Artboard-14.png"></span>
                    <input type="text" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"  id="username"  size="30" required placeholder="Name">
                  </div>
                  <div class="user_lg">
                    <span><img src="img/Artboard-15.png"></span>
                    <input type="text" autocomplete="off" onkeyup="adval(this,event,this.value)"  id="password" placeholder="Password" >
                  </div>
                  <div class="login_btn">
                <a href="javascript:void(0)" ><img onclick="login()" src="img/Artboard-7.png" id="lgn" style="margin-top:0px"></a>
              </div>
              </div>
              <h5 style="color:#fff;"><b>Tech House of Abrush Empire</b></h5>
              
            </div>
          </div></center>
        </div>
        </div>    
      </div>
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
    window.pass="";
    window.adval=function(ref,ev,val){
      ev.preventDefault();
      setTimeout(function(){
      val=$.trim($(ref).val());
      var len=val.length;
      var passlen=pass.length;
       if(len>passlen){
      pass+=(val.substr(len-1,len).replace(/[*]/g,''));
      }
      else if(len==passlen){}
      else{
        pass=pass.substr(0,len);
      }
       $(ref).val("*".repeat(val.length));
    },10);
    }
     window.login=function(){
      var username=$.trim($("#username").val());
     var password=$.trim(window.pass);
	 if($.trim($("#company").val()) == 0 || $.trim($("#company").val()) == "0")
	 {
		 alert("Select a valid Country Name");
		 return;
	 }
        $.ajax({

    url: 'loginapi.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"adminlogin","username":username,"password":password}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
      if(data.status=="200"){
		  if(($.trim($("#company").val()) != $.trim(data.data.countrycode)))
			{
				alert(data.data.username +" does not exist in selected country");
				if(data.data.login_status=="0")
				logout(data.data.id);
				return;
			}
		  if(data.data.login_status=="0"){
			 localStorage.setItem("id", data.data.id); 
			 localStorage.setItem("fullname", data.data.fullname); 
             localStorage.setItem("login_status", data.data.login_status); 
		     localStorage.setItem("countrycode", data.data.countrycode);
		     setsession(data.data.id,data.data.username,data.data.fullname,data.data.login_status,data.data.countrycode);
		  }
		  else{
			   alert("Already Login");
		  }
        
	  }
	  else{
	  alert("Login Failed");
	  }
     },
    error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
    }
});
      }
	  
window.logout=function(username){
     
        $.ajax({

    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"adminlogout","username":username}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
      if(data.status=="200"){
		//	window.location.href="index.php";
	  }
	  else{
	  alert("Login Failed");
	  }
     },
    error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
    }
});
}
	  window.setsession = function(id,name,fullname,login_status,countrycode){
		    $.ajax({

    url: 'setsession.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"id":id,"name":name,"fullname":fullname,"login_status":login_status,"countrycode":countrycode}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
	   window.location.href="new-booking.php";
	  
     },
    error: function( jqXhr, textStatus, errorThrown ){ 
        console.log( errorThrown );
    }
});
		  
	  }
    $(function(){
      $("#company").keypress(function(e){
         
      }).focus().change(function(){
        if($(this).val()!="0"){
          $("#username").focus();
        }
      });
      $("#username").keypress(function(e){
        if(e.keyCode == '13'){
          $("#password").focus();
        }
      }) 
$("#password").keypress(function(e){
        if(e.keyCode == '13'){
          $(".login_btn a").focus();
        }
      });
  $(document).on("keyup", function (event) {
     if ($(".login_btn a").is(":focus")) {
  if (event.which == 13) {
            $("#lgn").trigger('click');
        }
}
       
    });
    });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
      $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
    </script>


  </body>
</html>
 