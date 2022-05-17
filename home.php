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
      <div class="table-responsive">
        <table class="table user-list">
         <!--- <thead>
            <tr>
              <th><span>User</span></th>
              <th ><span>Created</span></th>
              <th class="text-center"><span>Status</span></th>
              <th><span>Email</span></th>
              <th class="text-center"><span>Action</span></th>
            </tr>
          </thead>--->
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
   
<script>
  document.onkeydown = checkKey;
  function checkKey(e) {

    e = e || window.event;
 
    if(e.keyCode=="39"){
         
        window.location.href="new-booking.php";
        
    }
  }
</script>
  </body>
</html>