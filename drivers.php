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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files  -->
   
    <style type="text/css">
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
       .chkcb{width: 20px !important;
    height: 20px !important;
    margin-top: 25px !important;
    opacity: unset !important;}
     .chkcbx{width: 20px !important;
    height: 20px !important;
     opacity: unset !important;}
    body{background: #000 !important;}
.edit_cfrm{left:0%;}
.user_pic {min-width: 181px;}
.fa.fa-eye{display: none;}
.call_sign{bottom: 15%;}

    </style>

    <title>Abrush Empire</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
  </head>
  <body>
     <div class="modal" id="errormodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: right; right: 250px; margin-top: 500px;">
    <div class="modal-content">
       
      <div class="modal-body">
               <h5 id="errormsg" style="font-size:19px;text-align: center;"> </h5>

      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="clsxbtn" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
        <div class="modal" id="vvc" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document"  style="max-width: 700px; float: right; right: 250px; margin-top: 500px;">
    <div class="modal-content">
       
      <div class="modal-body">
        <h4 id="amerrorbx"  style="font-size:19px;text-align: center;">Please Receive Payment First.</h4>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
               
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Ok</button> 
        
      </div>
    </div>
  </div>
</div>
    
<div id="imgmyModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width: 700px;">

    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-body">
        <center>
        <img id="kmimg" style="width: 500px">
      </center>
      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      <!---header start---------->
   <?php
    include "header.php";
   ?>
   <!--------header end-------->

    <section class="inner_s_wrap">
 		
      <div class="container-fluid">
        <div class="row">

          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="bxx_one">
              <div class="user_pic">
                <input type="file" id="img" name="img" accept="image/*">
                <span style="width:150px;height:150px">
                  <img id="profilepic" src="img/index5.png" style="width:150px;height:150px">
                </span>
              </div>
              <div class="drivers_field">
                
                <div class="rpeates_flds">
                  <div class="form_groups">
                    <label>Name</label>
                    <input type="text" onkeyup="firstCapitalAlways(event);" name="" id="firstname" class="hlf_f">
                  </div>
                  <div class="form_groups">
                    <label>Last Name</label>
                    <input type="text" onkeyup="firstCapitalAlways(event);"  name="" id="lastname" class="hlf_f fl_rt">
                  </div>
                </div>

                <div class="rpeates_flds">
                  <div class="form_groups">
                    <label>Date of Birth</label>
                    <input type="text" id="dob" name="" disabled style="color: #000;background: #fff;" >
                  </div>
                </div>

                <!-- <div class="rpeates_flds">
                  <div class="form_groups">
                    <label>Address</label>
                    <input type="text" id="address" onkeyup="firstCapitalAlways(event);"  name="" class="py-2">
                  </div>
                </div> -->

                <div class="rpeates_flds" style="margin-bottom:0px">
                  <div class="plates_bx">
                    
                    <span class="icon_select">
					<b class="labels_sp" style="color:#fff">Front ID</b>
                        <input type="file" id="fileUpload" onchange="uploadImage(0,this)" name="img" accept="image/*">
                        <span style="height: 150px;width: 150px;margin-right: 10px;">
                          <img src="img/upload.png"  class="xplatenoimage">
                        </span>
                       <a target="_blank" style="position: relative;
    margin-right: 11px;
      top: -15px;" class="xplatenoimagehref" > <i class="fa fa-eye" style="color:#fff;font-size: 20px; "></i></a>
                    </span>
					
					 <span class="icon_select">
					<b class="labels_sp" style="color:#fff">Back ID</b>
                        <input type="file" id="fileUpload" onchange="uploadImage(0,this)" name="img" accept="image/*">
                        <span style="height: 150px;width: 150px;margin-right: 10px;">
                          <img src="img/upload.png"  class="xplatenoimageback">
                        </span>
                       <a target="_blank" style="position: relative;
    margin-right: 11px;
      top: -15px;" class="xplatenoimagebackhref" > <i class="fa fa-eye" style="color:#fff;font-size: 20px; "></i></a>
                    </span>
                  </div>
                  <div class="plates_int" style="margin-left:10px">
                    <span>
					<span class="labels_sp" style="color:#fff">ID Number</span>
                      <input type="text" onkeyup="firstCapitalAlways(event);"  id="plateno" name="">
                    </span>
                  </div>
                </div>

                <div class="rpeates_flds" style="display:none">
                  <div class="plates_bx">
                    <span class="labels_sp">Badge No.</span>
                    <span class="icon_select">
                        <input type="file"   id="fileUpload1"  onchange="uploadImage(1,this)"  name="img" accept="image/*">
                        <span>
                          <img src="img/upload.png" class="xbadgenoimage">
                        </span>
                    </span>
                  </div>
                  <div class="plates_int">
                    <span>
                      <input type="text"  onkeyup="firstCapitalAlways(event);" id="badgeno" name="">
                    </span>
                  </div>
                </div>

                <div class="rpeates_flds" style="display:none">
                  <div class="form_groups">
                    <label>Hackney / Private Hire</label> 
					<select id="hackney" style="width:100%">
					<option value="Hackney">Hackney</option>
					<option value="Private Hire">Private Hire</option>
					</select>
                  </div>
                </div>
<div class="rpeates_flds" >
                  <div class="form_groups">
                    <label style="width:100%">Capability<?php if(isset($_GET['ispending'])||isset($_GET['isedit'])||isset($_GET['isview'])) {?><style>#ammt,#ammtt{display: none;}</style> <?php }   ?> <style>#ammtt{color:#ffd800}</style><b id="ammt" style="float:right"></b></label> 
          <select id="xcapability" style="width:100%">
          <option value="normal">Normal</option>
          <option value="autorikshaw">Auto-Rikshaw</option>
          <option value="motorbike">Motorbike</option>

          </select>
                  </div>
                </div>
                <div class="rpeates_flds" >
                  <div class="form_groups">
                    <label>Payment Mode</label> 
          <select id="paymentmode" style="width:100%">
          <option value="0">Cash</option>
          <option value="1">Online</option> 
          <option value="2">Money First</option> 
          </select>
                  </div>
                </div>
                <div class="rpeates_flds">
                  <div class="form_groups">
                    <label>Mobile</label>
                    <input type="text" readonly id="mobile" name="">
                  </div>
                </div>
<!--
                <div class="rpeates_flds">
                  <div class="form_groups">
                    <label>Email</label>
                    <input type="text" id="email" name="">
                  </div>
                </div>
-->
                <div class="rpeates_flds" style="display:none">
                  <div class="plates_bx">
                    <span class="labels_sp">Insurance</span>
                    
                  </div>
                  <div class="plates_int">
                    <span>
                      <label>Expiry Date</label>
                      <input id="expirydate"  type="text" name="">
                    </span>
                  </div>
                </div>

                

              </div>
            </div>
          </div>


          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="rpeat_boking">
             
              <div class="left_s_apacing">
                <div class="mileage_pr" style="margin-top:-15px">
                  <div class="user_pic second_bbs">
                <label class="_mqqw">Pic Upload</label>
                <input type="file"  onchange="uploadImage(4,this)"  id="fileUpload4" name="img" accept="image/*">
                <span class="bg_images" style="width:150px;height:150px">
                  <img src="img/upload.png" class="xcarimage1" style="width:150px;height:150px;">
                </span>
                 <a target="_blank" style="position: relative;top: -35px; margin-left: 10px;" class="xcarimage1href" > <i class="fa fa-eye" style="color:#fff;font-size: 20px; "></i></a>
              </div>
                  <div class="user_pic second_bbs" style="display:none">
                <label class="_mqqw">Pic Upload</label>
                <input type="file"  id="fileUpload5" onchange="uploadImage(5,this)"  name="img" accept="image/*">
                <span class="bg_images">
                  <img src="img/upload.png"  class="xcarimage2"   style="width:85px;height:85px;">
                </span>
              </div>
                      <div class="user_pic second_bbs"  style="display:none">
                <label class="_mqqw">Pic Upload</label>
                <input type="file" id="fileUpload6" onchange="uploadImage(6,this)"  name="img" accept="image/*">
                <span class="bg_images">
                  <img src="img/upload.png"  class="xcarimage3"  style="width:85px;height:85px;">
                </span>
              </div>
                </div>
              </div>
           
             
              <div class="rpeates_flds">
                <div class="form_groups">
                  <label>Colour</label>
                  <input type="text" onkeyup="firstCapitalAlways(event);"  id="color"  name="">
                </div>
              </div>

              <div class="rpeates_flds">
                <div class="form_groups">
                  <label>Make</label>
                  <input type="text" onkeyup="firstCapitalAlways(event);"  id="make" name="">
                </div>
              </div>

              <div class="rpeates_flds">
                <div class="form_groups">
                  <label>Model</label>
                  <input type="text" onkeyup="firstCapitalAlways(event);"  id="model" name="">
                </div>
              </div>
              
              <div class="rpeates_flds">
                  <div class="plates_bx">
                    <span class="labels_sp">Vehicle Registration</span>
                    <span class="icon_select">
                        <input type="file" id="fileUpload8"  onchange="uploadImage(8,this)"  name="img" accept="image/*">
                        <span style="width: 150px;height: 150px;margin-right: 15px;">
                          <img src="img/upload.png" style="width: 150px;height: 150px;" class="xvehicleregistration">
                        </span>
                    </span>
                      <a target="_blank"  class="xvehicleregistrationhref" > <i class="fa fa-eye" style="color:#fff;font-size: 20px;  margin-left: 10px;"></i></a>
                  </div>
                  <div class="plates_int">
                    <span>
                      <input id="registration" onkeyup="firstCapitalAlways(event);"  type="text" name="">
                    </span>
                  </div>
                </div>
              <div class="rpeates_flds" style="display:none">
                <div class="plates_bx">
                  <span class="labels_sp">Log Book</span>
                  <span class="icon_select">
                      <input type="file" id="fileUpload7"  onchange="uploadImage(7,this)"  name="img" accept="image/*">
                      <span>
                        <img src="img/upload.png" class="xlogbookimage">
                      </span>
                  </span>
                </div>
                <div class="plates_int">
                  <span>
                    <input id="logbook" onkeyup="firstCapitalAlways(event);"  type="text" name="">
                  </span>
                </div>
              </div>
 
             
<div class="rpeates_flds"  style="display:none">
                  <div class="plates_bx">
                    <span class="labels_sp">Council Letter</span>
                    <span class="icon_select">
                        <input type="file"   id="fileUpload2" onchange="uploadImage(2,this)"  name="img" accept="image/*">
                        <span>
                          <img src="img/upload.png" class="xconcileletterimage">
                        </span>
                    </span>
                  </div>
				  <div class="plates_int">
                    <span>
                      <select id="councillettertxt" style="width:100%" >
					  <option value="A">A</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					  <option value="D">D</option>
					  <option value="E">E</option>
					  <option value="F">F</option>
					  </select>
                    </span>
                  </div>
                </div>

                <div class="rpeates_flds">
                  <div class="plates_bx">
                    <span class="labels_sp">Driving Licence</span>
                    <span class="icon_select">
                        <input type="file" id="fileUpload3"  onchange="uploadImage(3,this)"  name="img" accept="image/*">
                        <span  style="width: 150px;height: 150px;margin-right: 15px;">
                          <img src="img/upload.png"  style="width: 150px;height: 150px;" class="xdrivinglicenseimage">
                        </span>
                    </span>
                     <a target="_blank"  class="xdrivinglicenseimagehref" > <i class="fa fa-eye" style="color:#fff;font-size: 20px;  margin-left: 10px;"></i></a>
                  </div>
                  <div class="plates_int">
                    <span>
                      <input id="drivinglicence" onkeyup="firstCapitalAlways(event);"  type="text" name="">
                    </span>
                  </div>
                </div>
            </div>
          </div>


          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" >
            <div class="atm_card_wrapper scnd_rltv" >
 <div class="heading_cpblty" style="margin-top:36px"  style="display:none">
                <h2  style="display:none">Capability</h2>
              </div>
              <div class="rpeat_column mt_checkboxs"  style="display:none"> 

                <div class="images_checkbox">
                  <div class="rpeat_images_chkbox">
                    <span>
                      <img src="img/Artboard 17 copy 14.png">
                      <p>WheelChair</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox" class="chkcb" id="wheelchair">
                      
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox">
                    <span>
                      <img src="img/Artboard 17 copy 16.png">
                      <p>Pets</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox"  class="chkcb" style="margin-left:-10px" id="pets"> 
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox">
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left:-10px" class="chkcb" id="pram"> 
                    </label>
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Pram</p>
                    </span>
                  </div>
				   <div class="rpeat_images_chkbox" style="margin-right:30px">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Bicycle </p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left:-10px" class="chkcb" id="bicycle"> 
                    </label>
                  </div>
                </div>
 <div class="images_checkbox animalsbox" style="display:none">
                  <div class="row" style="margin: 0px;width: 100%;">
                <label class="col-sm-4" style="font-size:14px;color:#000">
                  <input checked="" type="radio" name="axcfv" class="chkcbx chkcbvc" id="guarddog" > <span style="top: -4px;
    position: relative;">Guard Dog</span>
                </label>
                
                <label class="col-sm-4" style="font-size:14px;color:#000">
                 
                  <input type="radio" name="axcfv" class="chkcbx chkcbvc"  id="animaldog" > <span style="top: -4px;
    position: relative;">Animal Dog</span>
                </label>
                  <label class="col-sm-4" style=" display: flex; justify-content: flex-end;font-size:14px;color:#000">
                 
                  <input type="radio" name="axcfv" class="chkcbx chkcbvc"  id="cat"> <span style="top: 0px;margin-left: 5px;  position: relative;">Cat</span>
                </label>
              </div>
                  
                  
                </div>
				   <div class="images_checkbox">
                  <div class="rpeat_images_chkbox">
                    <span>
                      <img src="img/Artboard 17 copy 14.png">
                      <p>Items</p>
                    </span>
                    <label class="containerr" style="padding-left: 5px;">
                      <input type="checkbox" class="chkcb" id="items">
                      
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox" >
                   
                    <span>
                      <img src="img/Artboard 17 copy 16.png">
                      <p>Scooter </p>
                    </span>
                       <label class="containerr">
                      <input type="checkbox"  class="chkcb" style="margin-left:-10px" id="scooter"> 
                    </label>
                  
                  </div>
                  <div class="rpeat_images_chkbox">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Boxes</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left:-10px" class="chkcb" id="boxes"> 
                    </label>
                  </div>
 <div class="rpeat_images_chkbox" style="margin-right:30px">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Fishing</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left:-10px" class="chkcb" id="fishing"> 
                    </label>
                  </div>

                </div>
				<div class="row boxesbox"  style="margin-bottom:10px;display:none">
                     <div class="col-sm-3"></div>
                  <div class="col-sm-3"> 
                      <select  style=" border:1px solid #eaeaea" class=" "  id="sizetype"> 
					  <option value="0">Select Size</option>
					   <option value="1">Large Size</option>
					    <option value="2">Small Size</option>
					  </select>
                   
                   
                  </div>
                  <div class="col-sm-3"> 
                    <select  style=" border:1px solid #eaeaea" class=" "  id="sizehowmany"> 
					  <option value="0">How Many</option>
					   <option value="1">1</option>
					    <option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					  </select>
                 
                  </div>
                </div>
				 <div class="row itemsbox"  style="margin-bottom:10px;display:none">
                     <div class="col-sm-4"></div>
                  <div class="col-sm-4"> 
                    <input type="text"  name="" id="noofitems" placeholder="Enter Items" style="border:1px solid #eaeaea">
                  </div>
                 
                </div>
                <div class="images_checkbox secnd_b">
                  
				  <div class="rpeat_images_chkbox">
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left: -30px; top: -12px;" class="chkcb"  id="shopping"> 
                    </label>
                    <span>
                      <img src="img/Artboard 42.png">
                      <p>Shopping</p>
                    </span>
                  </div>
                  <div class="rpeat_images_chkbox">
                    <label class="containerr">
                      <input type="checkbox"  style="margin-left: -30px; top: -12px;" class="chkcb"  id="lowvehicle"> 
                    </label>
                    <span>
                      <img src="img/Artboard 42.png">
                      <p>Salon</p>
                    </span>
                  </div>
                  <div class="rpeat_images_chkbox">
                    <label class="containerr">
                      <input type="checkbox"   style="margin-left: -30px; top: -12px;" class="chkcb"  id="highvehicle">
                      
                    </label>
                    <span>
                      <img src="img/Artboard 43.png">
                      <p>HV</p>
                    </span>
                  </div>
                </div>

              </div>
              <div class="atm_b drivers_atm mb-2"  style="display:none">
                <h2>Bank Details <br> Outgoing</h2>
                <div class="row">
                  <div class="col-md-8">
                    <div class="img_input">
                      <img src="img/Artboard-44.png">
                      <div class="on_img_i">
                        <div class="atm_one">
                          <input type="text" name="ccn" maxlength="16" id="outgoingnumber" placeholder="XXXX XXXX XXXX XXXX" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                        <div class="atm_one">
                          <input type="text" onkeypress="return /[a-z]/i.test(event.key)" id="outgoingname" name="" placeholder="Name On Card">
                             <input maxlength='5' placeholder="Expiry Date" id="outgoingexpirydate" type="text" onkeyup="formatString(event);">
                        </div>
                        <div class="atm_one">
                          <input type="text" maxlength='3' name="" placeholder="CVV" id="outgoingcvv" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="postn_bb">
                      <div class="top_icons">
                        <img src="img/Artboard-49.png">
                        <img src="img/Artboard-50.png">
                      </div>
                      <div class="centred_btn">
                        <button type="button">Process</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="atm_b drivers_atm" style="display:none">
                <h2>Incoming Details</h2>
                <div class="row">
                  <div class="col-md-8">
                    <div class="img_input">
                      <img src="img/Artboard-44.png">
                      <div class="on_img_i">
                        <div class="atm_one">
                          <input type="text" name="ccn" maxlength="16" id="incomingnumber" placeholder="XXXX XXXX XXXX XXXX" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                        <div class="atm_one">
                          <input type="text" onkeypress="return /[a-z]/i.test(event.key)" id="incomingname" name="" placeholder="Name On Card">
                             <input maxlength='5' placeholder="Expiry Date" id="incomingexpirydate" type="text" onkeyup="formatString(event);">
                        </div>
                        <div class="atm_one">
                          <input type="text" maxlength='3' name="" placeholder="CVV" id="incomingcvv" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="postn_bb">
                      <div class="top_icons">
                        <img src="img/Artboard-49.png">
                        <img src="img/Artboard-50.png">
                      </div>
                      <div class="centred_btn">
                        <button type="button">Process</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="above_call_sign" style="position:initial">
                <div class="form_groups" style="bottom: 35%; position: absolute;">
                  <label>Maximum Journey</label>
                  <select id="max_jrny" style="width:100%">
                 <option value="0">Select Maximum Journey</option>
                    <option value="1">25</option>
					 <option value="2">50</option>
					  <option value="3">75</option>
					   <option value="4">100+</option>
                  
                  </select>
                </div>
              </div>


              <div class="above_call_sign" style="position:initial">
                <div class="form_groups" style="bottom: 25%; position: absolute;">
                  <label>Passengers</label>
                  <select id="passengers" style="width:100%">
                  <?php for($i=1;$i<=20;$i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>


              <div class="call_sign">
                <label>Call Sign</label>
                <input type="text" name="" readonly id="callsign">
              </div>

            </div>

            <div class="edit_cfrm">
			<img src="img/load.gif" class="_loading" style="display:none;width:50px;margin-top: 15px;" >
              <div class="btns_cnfrm" style="display:block">
                <?php if(isset($_GET['isview'])) { ?>

                <?php } else if(isset($_GET['ispending'])||isset($_GET['isedit'])) { ?>
                  <button type="button" id="confirm" style="padding: 0px;margin-left: 20px;width: 120px;display: none;position: relative; top:0px" class="confrm">Confirm</button>
                   <button type="button" id="cancel" onclick='window.location.reload();' style="padding: 0px;margin-left: 20px;width: 120px;display: none;position: relative; top:0px" >Cancel</button>
                   <button type="button" id="edit" style="padding: 0px;margin-left: 20px;width: 120px; position: relative; top:0px" >Edit</button>
                   <button type="button" id="leave" onclick='window.location.href="appoinment.php?status=3";' style="padding: 0px;margin-left:0px;width: 120px;background: #0048bc; position: relative; top:0px" >Leave</button>
                <?php } else { ?>
                  <div style="color:#fff;display: block;top: -20px;margin-left: 32px;position: relative;width: 100%;"><span style="float:left;margin-top: 25px;"><b id="ammtt"></b>&nbsp;&nbsp;Have you received the payment?</span>
                    <label style="margin-left: 20px;">Yes<input type="radio" id="xyes" name="isskxc"></label><label style="margin-left: 10px;">No<input type="radio" id="xno" checked name="isskxc"></label></div>
                    <div class="clearfix"></div><div style="display: block;position: relative;top:-23px">
                  <button style="height: 25px; display: none; padding: 0px 10px;  margin-left: 28px;" type="button" id="pending">Pending</button>

                  <button type="button" style="height: 25px; margin-left: 30px; padding: 0px 10px;" id="confirm" class="confrm">Confirm</button>
                </div>

                <?php } ?>
                </div>
            </div>

          </div>

        </div>
      </div>
    </section>
			<input type="hidden" id="platenoimage" >
         <input type="hidden" id="badgenoimage" >
		<input type="hidden" id="councilletterimage" >
		<input type="hidden" id="drivinglienceimage" >
		<input type="hidden" id="carimage1" >
		<input type="hidden" id="carimage2" >
		<input type="hidden" id="carimage3" >
		<input type="hidden" id="logbookimage" >
 <input type="hidden" id="vehicleregistrationimage" >
<input type="hidden" id="backidimg" >
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script type="text/javascript">
 	window._baseurl="http://18.168.83.39/";


window._pos=0;
window._ref=null;
 function crypMobile(mobile){
    if((mobile).length>8){
      a = mobile.substr(0,3);
      len=mobile.length;
      st = len-3;
      b = mobile.substr(st,len);
      mobile=a+"******"+b;
    }
    return mobile;
   }
window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}
window.firstCapitalAlwaysref= function (val) {
  
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    return (firstLetterUpper + val.substr(1, val.length));
}
function uploadProgressHandler(event) {
        
        var percent = (event.loaded / event.total) * 100;
        var progress = Math.round(percent);
        $("#uploadprogress,#uploadprogress1").show().val(progress);
         
    }

    function loadHandler(event) {
 				$(window._ref).parent().find("img").attr("src","img/upload.png");

		 if(window._pos==0){
        $("#platenoimage").val(event.target.responseText);
		 }
		 else if(window._pos==1){
        $("#badgenoimage").val(event.target.responseText);
		 }
		  else if(window._pos==2){
        $("#councilletterimage").val(event.target.responseText);
		 }
		  else if(window._pos==3){
        $("#drivinglienceimage").val(event.target.responseText);
		 }
		  else if(window._pos==4){
        $("#carimage1").val(event.target.responseText);
          }
		  else if(window._pos==5){
        $("#carimage2").val(event.target.responseText);
          }
		  else if(window._pos==6){
        $("#carimage3").val(event.target.responseText);
          }
		  else if(window._pos==7){
        $("#logbookimage").val(event.target.responseText);
		 }
     else if(window._pos==8){
        $("#vehicleregistrationimage").val(event.target.responseText);
     }

		 $(window._ref).parent().find("img").attr("src",window._baseurl+"files/"+event.target.responseText);

        
    }

    function errorHandler(event) {
     }

    function abortHandler(event) {
     }
     window.uploadImage=function(qs,ref){
      window._pos=qs;
	  window._ref=ref;
	  
          var file;
          if(qs==0)  file = $("#fileUpload")[0].files[0];
          else if(qs==1) file = $("#fileUpload1")[0].files[0];
           else if(qs==2) file = $("#fileUpload2")[0].files[0];
            else if(qs==3) file = $("#fileUpload3")[0].files[0];
             else if(qs==4) file = $("#fileUpload4")[0].files[0];
              else if(qs==5) file = $("#fileUpload5")[0].files[0];
               else if(qs==6) file = $("#fileUpload6")[0].files[0];
                else if(qs==7) file = $("#fileUpload7")[0].files[0];
                   else if(qs==8) file = $("#fileUpload8")[0].files[0];
        if($(ref).val().length==0){
			return;
		}
		$(ref).parent().find("img").attr("src","img/load.gif");
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
	 window.uid=<?php echo $_GET['id']; ?>;
	 window.alpha="";
	 window.counter=0;
   window.getcallSign=function(){
     myajax({"api":"getcalsign"},function( data, textStatus, jQxhr ){
            if(data.status=="200"){
           $("#callsign").val(data.data.alpha+""+data.data.counter);
          
          window.alpha=data.data.alpha;
          window.counter=data.data.counter;

            }
             
           });
   }
   window.getDrivers=function(){}
	 $(function(){
    $("#edit").click(function(){
      $(this).hide();
      $("#confirm").show();
      $("#cancel").show();
    })
    $(".fa.fa-eye").parent().click(function(e){
      e.preventDefault();
       $("#imgmyModal").modal({"show":true});
       $("#kmimg").attr("src",$(this).attr("href"))
      return false;
    });
    $(".xplatenoimage,.xvehicleregistration,.xdrivinglicenseimage,.xcarimage1,#profilepic").click(function(e){
      e.preventDefault();
       $("#imgmyModal").modal({"show":true});
       $("#kmimg").attr("src",$(this).attr("src"))
      return;
    });
    <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  { ?>
      window.isloadx=true;
    <?php } else { ?>  window.isloadx=true;<?php } ?>
       $("#xcapability").change(function(){
        if(!window.isloadx) return;
        $("#passengers option").remove();

        if($(this).val()=="motorbike"){
			if("<?php echo $_SESSION['COUNTRYCODE']; ?>" == "IN")
			{
				 $("#ammtt").html("(Rs 600)");
			}
			else
			{
				 $("#ammtt").html("(Rs 1250)");
			}
          $("._mqqw").html("Motorbike Pic Upload");
           <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {  } else { ?>
              $("#passengers").append("<option value='0'>Select Passengers</option>")
           <?php } ?>
          $("#passengers").append("<option value='1'>1</option>")
           setTimeout(function(){
            <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {    ?>
              $("#passengers").val("1")
           <?php } ?>
          },400);
        }
        else if($(this).val()=="autorikshaw"){
			if("<?php echo $_SESSION['COUNTRYCODE']; ?>" == "IN")
			{
				 $("#ammtt").html("(Rs 900)");
			}
			else
			{
				 $("#ammtt").html("(Rs 1875)");
			}
           
 $("._mqqw").html("Auto-Rikshaw Pic Upload");
   <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {  } else { ?>
              $("#passengers").append("<option value='0'>Select Passengers</option>")
           <?php } ?>
          for(var i=1;i<=6;i++){
            $("#passengers").append("<option value='"+i+"'>"+i+"</option>")

          }
          setTimeout(function(){
             <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {    ?>
              $("#passengers").val("6")
           <?php } ?>
          },400);
        }
        else if($(this).val()=="normal"){
			if("<?php echo $_SESSION['COUNTRYCODE']; ?>" == "IN")
			{
				 $("#ammtt").html("(Rs 1200)");
			}
			else
			{
				 $("#ammtt").html("(Rs 2500)");
			}
          
           $("._mqqw").html("Normal Pic Upload")
             <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {  } else { ?>
              $("#passengers").append("<option value='0'>Select Passengers</option>")
           <?php } ?>
           for(var i=1;i<=20;i++){
            $("#passengers").append("<option value='"+i+"'>"+i+"</option>")

          }
          setTimeout(function(){
             <?php if(isset($_GET['ispending'])||isset($_GET['isview']))  {    ?>
              $("#passengers").val("20")
           <?php } ?>
           
          },400);
        }
       })
        window.isselected=false;
       window.ispet=false;
       window.firstselected=0;
        $("#wheelchair").change(function(){
        if(window.firstselected==0){
          window.firstselected=1;$(".animalsbox").hide();
        }
        if(window.ispet&&window.firstselected==2){
          $("#pram").prop("checked",false);

          return;
        }
                window.ispet=false;

        if($(this).is(":checked")){

   if(window.firstselected==2){

            if($("#pets").is(":checked")){
                        window.firstselected=2;
$(".animalsbox").show();

                       $("#pram").removeAttr("disabled").prop("checked",false);

          }
          else{
         $("#pram,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");

          }
             }
             else{
         $("#pram,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");
             }
        }
        else{
           if(window.firstselected==1){
          window.firstselected=0;
   if($("#pets").is(":checked")){
      $("#pram").removeAttr("disabled","true"); 
       window.firstselected=2;
     $(".animalsbox").show();
   }else{
        $("#pram,#lowvehicle,#highvehicle,#pets").prop("checked",false);
                 $("#pram,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled","true");
   }         
                 


        }

        }
        setTimeout(function(){
            getDrivers();
        },400);
       })
       $("#pets").change(function(e){
          if(window.firstselected==0){
          window.firstselected=2;
          $(".animalsbox").show();
                  window.ispet=true;

        }
         if($(this).is(":checked")){
			 if(window.firstselected==4||window.firstselected==1||window.firstselected==3||window.firstselected==6||window.firstselected==7){
				   $(".animalsbox").show();
			 }
			 else{
         $("#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");
			 }
        }
        else{
			 if(window.firstselected==4||window.firstselected==1||window.firstselected==3||window.firstselected==6||window.firstselected==7){
				   $(".animalsbox").hide();
			 }
			 else if(window.firstselected==2){
          window.firstselected=0;
            if($("#pram").is(":checked")){
                  $("#lowvehicle,#highvehicle,#wheelchair").attr("disabled","true");

       window.firstselected=3;$(".animalsbox").hide();
      }else  if($("#wheelchair").is(":checked")){
          
               window.firstselected=1;$(".animalsbox").hide();

                           $("#pram").attr("disabled","true");


      }else{
      $(".animalsbox").hide();
                  $("#pram,#wheelchair,#pets").prop("checked",false);

            $("#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");
   }
        }

        }
 setTimeout(function(){
            getDrivers();
        },400);
       });
       $("#pram").change(function(){ 
        
          if(window.firstselected==0){
          window.firstselected=3;$(".animalsbox").hide();
        }
         if(window.ispet&&window.firstselected==2){
          $("#wheelchair").prop("checked",false);

          return;
        }
               window.ispet=false;

        if($(this).is(":checked")){
             if(window.firstselected==2){

            if($("#pets").is(":checked")){
                        window.firstselected=2;
$(".animalsbox").show();
                       $("#wheelchair").removeAttr("disabled").prop("checked",false);

          }
          else{
                       $("#wheelchair,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");

          }
             }
             else{
         $("#wheelchair,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");
             }
        }
        else{
           if(window.firstselected==3){
          window.firstselected=0;
          if($("#pets").is(":checked")){
                        window.firstselected=2;
$(".animalsbox").show();

                       $("#wheelchair,#pram").removeAttr("disabled");

          }
          else{
 
                $("#pram,#wheelchair,#pets").prop("checked",false);

                   $("#wheelchair,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");
          }

        }
        else if(window.firstselected==2){

            if($("#pets").is(":checked")){
                        window.firstselected=2;
$(".animalsbox").show();

                       $("#wheelchair,#pram").removeAttr("disabled");

          }
          else{
 
                $("#pram,#wheelchair,#pets").prop("checked",false);

                   $("#wheelchair,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");
          }
        }
         else{
 
                $("#pram,#wheelchair,#pets").prop("checked",false);

                   $("#wheelchair,#lowvehicle,#highvehicle,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");
          }

        }
		
		setTimeout(function(){
            getDrivers();
        },400);
       });
	   $("#items").change(function(){
		       if(window.firstselected==0){
                window.firstselected=5; 
            }
		   if($(this).is(":checked")){
		  $(".itemsbox").show(); 
		  				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#pets,#scooter,#fishing,#bicycle,#boxes").attr("disabled","true").prop("checked",false);

		   }
		   else{
			   window.firstselected=0;
			    $(".itemsbox").hide(); 
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#pets,#scooter,#fishing,#bicycle,#boxes").removeAttr("disabled");
		   }
		  setTimeout(function(){
            getDrivers();
        },400);
       });
	  $("#scooter").change(function(){
		      if(window.firstselected==0){
                window.firstselected=6; 
            }
			if($(this).is(":checked")){
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#bicycle,#fishing,#boxes").attr("disabled","true");
			}
			else{
				if($("#pets").is(":checked")){
					window.firstselected=2;
					$("#wheelchair,#pram").removeAttr("disabled");
					$("#scooter").attr("disabled",true).prop("checked",false);
					 
				}
				else{
					 window.firstselected=0;
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#bicycle,#fishing,#boxes").removeAttr("disabled").prop("checked",false);
					    $(".boxesbox").hide();
				}
			}
			
			setTimeout(function(){
            getDrivers();
        },400);
       });
	   $("#fishing").change(function(){
		      if(window.firstselected==0){
                window.firstselected=7; 
            }
			if($(this).is(":checked")){
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#bicycle,#scooter").attr("disabled","true");
			}
			else{
				if($("#pets").is(":checked")){
					window.firstselected=2;
					$("#wheelchair,#pram").removeAttr("disabled");
					$("#fishing").attr("disabled",true).prop("checked",false);
					 
				}
				else{
					 window.firstselected=0;
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#bicycle,#scooter").removeAttr("disabled").prop("checked",false);
					    $(".boxesbox").hide();
				}
			}
			
			setTimeout(function(){
            getDrivers();
        },400);
       });
	   $("#bicycle").change(function(){
		      if(window.firstselected==0){
                window.firstselected=4; 
            }
			if($(this).is(":checked")){
				$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing").attr("disabled","true");
			}
			else{
				if($("#pets").is(":checked")){
					window.firstselected=2;
					$("#wheelchair,#pram").removeAttr("disabled");
					$("#bicycle,#boxes").attr("disabled",true).prop("checked",false);
					 
				}
				else{
					 window.firstselected=0;
					$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing,#boxes").removeAttr("disabled").prop("checked",false);
					    $(".boxesbox").hide();
				}
			}
			
			setTimeout(function(){
            getDrivers();
        },400);
       });
	  
	   $("#boxes").change(function(){
		    if(window.firstselected==0){
                window.firstselected=8; 
            }
		   if($(this).is(":checked")){
		     $(".boxesbox").show(); 
			 if($("#bicycle").is(":checked")||$("#fishing").is(":checked")){}
				else{
		  $("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing,#bicycle,#pets").attr("disabled","true");
				}
		   }
		   else{
			    $(".boxesbox").hide(); 
				if($("#bicycle").is(":checked")||$("#fishing").is(":checked")){}
				else{
				 window.firstselected=0;
					$("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing,#boxes,#pets").removeAttr("disabled").prop("checked",false);
				}
		   }
		   setTimeout(function(){
            getDrivers();
        },400);
       });
     $("#lowvehicle").change(function(){
         if($(this).is(":checked")){
          $("#highvehicle").prop("checked",false);
           $("#wheelchair,#pets,#pram").attr("disabled","true");
         }
         else{
          if(!$("#highvehicle").is(":checked")){
            $("#wheelchair,#pets,#pram").removeAttr("disabled");

          }
         }
          

       });
        $("#highvehicle").change(function(){
         if($(this).is(":checked")){
          $("#lowvehicle").prop("checked",false);
           $("#wheelchair,#pets,#pram").attr("disabled","true");

         }
          else{
          if(!$("#lowvehicle").is(":checked")){
            $("#wheelchair,#pets,#pram").removeAttr("disabled");

          }
         }

       })
      $('input').on('input', function() {
		  if($(this).attr("type")!="file"){
  $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
		  }
});
    var _apiax="";
    var _isedit=false;
    <?php if(isset($_GET['ispending'])||isset($_GET['isedit'])||isset($_GET['isview'])) { ?><?php if(isset($_GET['ispending'])) { ?>
      getcallSign();
      _apiax="getpendingappointment";
      <?php } else if(isset($_GET['isedit'])||isset($_GET['isview'])) { ?>
        _apiax="getdoneappointmentbyid";
        _isedit=true;
      <?php } ?>

myajax({"api":_apiax,"uid":uid},function( data, textStatus, jQxhr ){

            if(data.status=="200"){
              $("#xcapability,#paymentmode").on('mousedown', function(e) {
   e.preventDefault();
   this.blur();
   window.focus();
});
          var obj=data.data;
           $("#firstname").val(firstCapitalAlwaysref(obj.firstname));
           $("#lastname").val(firstCapitalAlwaysref(obj.lastname));
           var db=obj.dateofbirth.split("-")
            $("#dob").val(db[2]+"-"+db[1]+"-"+db[0]);
            $("#address").val(firstCapitalAlwaysref(obj.address));
        //  $("#email").val(obj.email.toLowerCase());
          $("#mobile").val(crypMobile(obj.mobile)).attr("data-mobile",obj.mobile);
          $("#profilepic") .attr("src",window._baseurl+obj.image).parent().parent().find("input[type=file]").remove();
          $("#plateno").val(firstCapitalAlwaysref(obj.platnotxt));
		  
          if(obj.platnoimage!=""){
          $(".xplatenoimage").attr("src",window._baseurl+"files/"+obj.platnoimage).parent().parent().find("input[type=file]").remove();

          $(".xplatenoimagehref").attr("href",window._baseurl+"files/"+obj.platnoimage);
          $("#platenoimage").val(obj.platnoimage);
            }
			if(obj.backidimg!=""){
          $(".xplatenoimageback").attr("src",window._baseurl+"files/"+obj.backidimg).parent().parent().find("input[type=file]").remove();

          $(".xplatenoimagebackhref").attr("href",window._baseurl+"files/"+obj.backidimg);
                   $("#backidimg").val(obj.backidimg);

            }
			
            if(obj.vehicleregistrationimage!=""){
              
               $(".xvehicleregistrationhref").attr("href",window._baseurl+"files/"+obj.vehicleregistrationimage);
          $(".xvehicleregistration").attr("src",window._baseurl+"files/"+obj.vehicleregistrationimage).parent().parent().find("input[type=file]").remove();
          $("#vehicleregistrationimage").val(firstCapitalAlwaysref(obj.vehicleregistrationimage));
            }
            
 
            $("#badgeno").val(firstCapitalAlwaysref(obj.badgenotxt));
          if(obj.badgenoimage!=""){
          $(".xbadgenoimage").attr("src",window._baseurl+"files/"+obj.badgenoimage);
          $("#badgenoimage").val(firstCapitalAlwaysref(obj.badgenoimage));
            }
            if(obj.hackney){
            $('#hackney option[value="'+obj.hackney+'"]').attr('selected','selected');
          }
        
           
             
            if(obj.normal=="1"){
              $("._mqqw").html("Normal Pic Upload")
            $("#xcapability").val("normal").change();
          }
            else if(obj.autorikshaw=="1"){
              $("._mqqw").html("Auto-Rikshaw Pic Upload")
            $("#xcapability").val("autorikshaw").change();
          }
            else if(obj.motorbike=="1"){
              $("._mqqw").html("Motorbike Pic Upload")
            $("#xcapability").val("motorbike").change();
          }

          $("#paymentmode").val(obj.paymentmode).change();
          var db=obj.expirydate.split("-")
            $("#expirydate").val(db[2]+"-"+db[1]+"-"+db[0]);
             if(obj.carimage1!=""){
              
              $(".xcarimage1href").attr("href",window._baseurl+"files/"+obj.carimage1);
          $(".xcarimage1").attr("src",window._baseurl+"files/"+obj.carimage1).parent().parent().find("input[type=file]").remove();
          $("#carimage1").val(obj.carimage1);
            }
  if(obj.carimage2!=""){
          $(".xcarimage2").attr("src",window._baseurl+"files/"+obj.carimage2);
          $("#carimage2").val(obj.carimage2);
            }
              if(obj.carimage3!=""){
          $(".xcarimage3").attr("src",window._baseurl+"files/"+obj.carimage3);
          $("#carimage3").val(obj.carimage3);
            }
            if(obj.councillettertxt){
             $('#councillettertxt option[value="'+obj.councillettertxt+'"]').attr('selected','selected');
           }
              if(obj.concileletter!=""){
          $(".xconcileletterimage").attr("src",window._baseurl+"files/"+obj.concileletter);
          $("#councilletterimage").val(obj.concileletter);
            }
            $("#drivinglicence").val(firstCapitalAlwaysref(obj.drivinglicencetext));
            if(obj.drivinglicenceimage!=""){
               $(".xdrivinglicenseimagehref").attr("href",window._baseurl+"files/"+obj.drivinglicenceimage);
              $(".xdrivinglicenseimage").attr("src",window._baseurl+"files/"+obj.drivinglicenceimage).parent().parent().find("input[type=file]").remove();
              $("#drivinglienceimage").val(obj.drivinglicenceimage);
            }

             $('#passengers option[value="'+obj.passengers+'"]').attr('selected','selected');
			 $('#max_jrny option[value="'+obj.maxjourney+'"]').attr('selected','selected');
			 
			 
             $("#color").val(firstCapitalAlwaysref(obj.color));
 $("#make").val(firstCapitalAlwaysref(obj.make));
  $("#model").val(firstCapitalAlwaysref(obj.model));
  $("#registration").val(firstCapitalAlwaysref(obj.registration));
  $("#logbook").val(firstCapitalAlwaysref(obj.logbooktext));
   if(obj.logbookimage!=""){
              $(".xlogbookimage").attr("src",window._baseurl+"files/"+obj.logbookimage);
              $("#logbookimage").val(obj.logbookimage);
            }
            
           

           
           

            window.ispet=(obj.ispet=="1");
            window.firstselected=obj.firstselected;
			var job=obj;
               $("#sizetype").val(job.boxessize);
			$("#sizehowmany").val(job.boxeshowmany);
			$("#noofitems").val(job.noofitems=="0"?"":job.noofitems);
			$("#shopping") .prop('checked', (job.shopping=="1"));
                if(window.firstselected==1){
                 $("#wheelchair") .prop('checked', (job.wheelchair=="1"));
                $("#pets").prop("checked",(job.pets=="1"));
               $("#pram,#lowvehicle,#highvehicle,#bicycle,#scooter,#fishing,#boxes,#items").attr("disabled","true"); 
            }
            else if(window.firstselected==2){
               
               $("#wheelchair") .prop('checked', (job.wheelchair=="1"));
                $("#pets").prop("checked",(job.pets=="1"));
               $("#pram").prop("checked",(job.pram=="1"));
              $("#lowvehicle,#highvehicle,#bicycle,#scooter,#fishing,#boxes,#items").attr("disabled","true");
            
            }
            else if(window.firstselected==3){
                $("#pets").prop("checked",(job.pets=="1"));
               $("#pram").prop("checked",(job.pram=="1"));

                       $("#wheelchair,#lowvehicle,#highvehicle").attr("disabled","true");

            }
			 else if(window.firstselected==4){
                $("#pets").prop("checked",(job.pets=="1"));
				 $("#bicycle").prop("checked",(job.bicycle=="1"));
				 $("#boxes").prop("checked",(job.boxes=="1"));
				 if(job.boxes=="1"){
					 $(".boxesbox").show();
				 }
                $("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing").attr("disabled","true");
				

            }
			 else if(window.firstselected==5){ 
				 $("#items").prop("checked",(job.items=="1"));
				 				              $(".itemsbox").show();

                $("#wheelchair,#lowvehicle,#highvehicle,#pram,#bicycle,#scooter,#fishing,#pets,#boxes").attr("disabled","true");
				

            }
			 else if(window.firstselected==6){ 
				   $("#pets").prop("checked",(job.pets=="1"));
				     $("#scooter").prop("checked",(job.scooter=="1"));

                $("#wheelchair,#lowvehicle,#highvehicle,#pram,#bicycle,#items,#fishing,#boxes").attr("disabled","true");
				

            }
			 else if(window.firstselected==7){ 
				   $("#pets").prop("checked",(job.pets=="1"));
				     $("#fishing").prop("checked",(job.fishing=="1"));
					 $("#boxes").prop("checked",(job.boxes=="1")); 
					  if(job.boxes=="1"){
					 $(".boxesbox").show();
				 }
                $("#wheelchair,#lowvehicle,#highvehicle,#pram,#bicycle,#items,#scooter").attr("disabled","true");
				

            }
			else if(window.firstselected==8){
				  $("#boxes").prop("checked",(job.boxes=="1")); 
		  $(".boxesbox").show(); 
		  $("#wheelchair,#lowvehicle,#highvehicle,#pram,#items,#scooter,#fishing,#bicycle,#pets").attr("disabled","true");
		   
			}
            else{
              if(!(job.lowvehicle=="1")&&!(job.highvehicle=="1")){}
                else{
                             $("#pram,#wheelchair,#pets").attr("disabled","true");

               $("#lowvehicle").prop("checked",(job.lowvehicle=="1"));
            $("#highvehicle").prop("checked",(job.highvehicle=="1")); 
            }
			
			
          }
		  if(job.pets=="1"){
				              $(".animalsbox").show();
              if(job.animaltype=="1"){
                $("#guarddog").prop("checked",true);
              }
              else   if(job.animaltype=="2"){
                $("#animaldog").prop("checked",true);
              }
                else   if(job.animaltype=="3"){
                $("#cat").prop("checked",true);
              }
			}

            if(_isedit){
                         $("#callsign").val(obj.callsign);


            }






            }
             
           });

    <?php } else { ?>
      
      myajax({"api":"deleteappointmentnotificationsbyid","uid":uid},function( data, textStatus, jQxhr ){ window.getnoti() });
		  myajax({"api":"appointmentbyid","uid":uid},function( data, textStatus, jQxhr ){
      		 	if(data.status=="200"){
					var obj=data.data[0];
					var name=obj.name.split(" ");
					$("#firstname").val(name[0]);
					 $("#lastname").val(name[1]);
           if(obj.image!=""){
           $("#profilepic") .attr("src",window._baseurl+obj.image).parent().parent().find("input[type=file]").remove();
         }
         $("#mobile").val(crypMobile(obj.phone)).attr("data-mobile",obj.phone);
           if(obj.idnumberimage!=""){
             $(".xplatenoimagehref").attr("href",window._baseurl+"files/"+obj.idnumberimage);
          $(".xplatenoimage").attr("src",window._baseurl+"files/"+obj.idnumberimage).parent().parent().find("input[type=file]").remove();
                   $("#platenoimage").val(obj.idnumberimage);

            }
			if(obj.backidimg!=""){
          $(".xplatenoimageback").attr("src",window._baseurl+"files/"+obj.backidimg).parent().parent().find("input[type=file]").remove();

          $(".xplatenoimagebackhref").attr("href",window._baseurl+"files/"+obj.backidimg);
		  
          $("#backidimg").val(obj.backidimg);
            }
            if(obj.carimage!=""){
               $(".xcarimage1href").attr("href",window._baseurl+"files/"+obj.carimage);
          $(".xcarimage1").attr("src",window._baseurl+"files/"+obj.carimage).parent().parent().find("input[type=file]").remove();
          $("#carimage1").val(obj.carimage);
            }
            $("#color").val(obj.colour);
             $("#make").val(obj.make); 
              $("#model").val(obj.model);
            $("#registration").val(obj.vehicleregistration);
            if(obj.vehicleregistrationimage!=""){
               $(".xvehicleregistrationhref").attr("href",window._baseurl+"files/"+obj.vehicleregistrationimage);
          $(".xvehicleregistration").attr("src",window._baseurl+"files/"+obj.vehicleregistrationimage).parent().parent().find("input[type=file]").remove();
          $("#vehicleregistrationimage").val(obj.vehicleregistrationimage);
            }
            $("#drivinglicence").val(obj.drivinglicence);
            if(obj.drivinglicenceimage!=""){
               $(".xdrivinglicenseimagehref").attr("href",window._baseurl+"files/"+obj.drivinglicenceimage);
              $(".xdrivinglicenseimage").attr("src",window._baseurl+"files/"+obj.drivinglicenceimage).parent().parent().find("input[type=file]").remove();
              $("#drivinglienceimage").val(obj.drivinglicenceimage);
            }
            $("#plateno").val(obj.idnumber)
           
          
          $("#paymentmode").val(obj.paymentmode).change();
				    $("#dob").val(obj.DOB);

				    $("#address").val(obj.address+" "+obj.area);
				//	$("#email").val(obj.email);

					$("#mobile").val(crypMobile(obj.phone)).attr("data-mobile",obj.mobile);
          
					$("#profilepic") .attr("src",window._baseurl+obj.image).parent().parent().find("input[type=file]").remove();
 if(obj.normal=="1"){
              $("._mqqw").html("Normal Pic Upload")
            $("#xcapability").val("normal").change();
          }
            else if(obj.autorikshaw=="1"){
              $("._mqqw").html("Auto-Rikshaw Pic Upload")
            $("#xcapability").val("autorikshaw").change();
          }
            else if(obj.motorbike=="1"){
              $("._mqqw").html("Motorbike Pic Upload")
            $("#xcapability").val("motorbike").change();
          }
          setTimeout(function(){
             window.isloadx=true;
           $("#passengers option").remove();

           if(obj.motorbike=="1"){
            $("#passengers").append("<option value='0'>Select Passengers</option>");
          $("#passengers").append("<option value='1' selected='selected' >1</option>");
		  
        }  
       else if(obj.autorikshaw=="1") {
         $("#passengers").append("<option value='0'>Select Passengers</option>");
          for(var i=1;i<=6;i++){
            $("#passengers").append("<option value='"+i+"'>"+i+"</option>")

          }
          setTimeout(function(){
           // $("#passengers").val("6")
          },400);
        }
      else if(obj.normal=="1") {
 
         $("#passengers").append("<option value='0'>Select Passengers</option>");
          for(var i=1;i<=20;i++){
            $("#passengers").append("<option value='"+i+"'>"+i+"</option>")

          }
          setTimeout(function(){
          //  $("#passengers").val("20")
          },400);
        }
      },500);
        
       		 	}
      		 	 
      		 });

    <?php } ?>

    <?php if(isset($_GET['ispending'])||isset($_GET['isedit'])||isset($_GET['isview']))  { ?>


    <?php }  else { ?>
			  getcallSign();
       <?php } ?>

			 $("#pending").click(function(){
				km("1");
			 });
			 $("#confirm").click(function(){
        <?php if(isset($_GET['isedit'])){
          ?>
 km("0");
        <?php } else { ?>
          km("0");
        
        <?php } ?>
				 
			 }); 
       
        
       
       
        
		    window.km=function(ispending){
			var firstname=$.trim($("#firstname").val()); 
			var lastname=$.trim($("#lastname").val());
			var dob=$.trim($("#dob").val());
			var address=$.trim($("#address").val());
			var plateno=$.trim($("#plateno").val());
			var badgeno = $.trim($("#badgeno").val());
			var hackney= $.trim($("#hackney").val());
			var mobile=$.trim($("#mobile").attr("data-mobile"));
		//	var email=$.trim($("#email").val());
			var expirydate=$.trim($("#expirydate").val());
			var drivinglicence=$.trim($("#drivinglicence").val());
			var color=$.trim($("#color").val());
			var make=$.trim($("#make").val());
			var model=$.trim($("#model").val());
      var registration=$.trim($("#registration").val());
			var logbook=$.trim($("#logbook").val());
			var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
			var pets=$("#pets").is(":checked")?"1":"0";
			var pram=$("#pram").is(":checked")?"1":"0";
			var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
			var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
			var outgoingnumber=$.trim($("#outgoingnumber").val());
			var outgoingname = $.trim($("#outgoingname").val());
			var outgoingexpirydate=$.trim($("#outgoingexpirydate").val());
			var outgoingcvv=$.trim($("#outgoingcvv").val());
			
			var incomingnumber=$.trim($("#incomingnumber").val());
			var incomingname = $.trim($("#incomingname").val());
			var incomingexpirydate=$.trim($("#incomingexpirydate").val());
			var incomingcvv=$.trim($("#incomingcvv").val());
 			var dobx=dob.split("-");
			dobx=dobx[2]+"-"+dobx[1]+"-"+dobx[0];
			var expirydatex="";
			if(expirydate.length!=0){
				 var expirydatex=expirydate.split("-");
				 expirydatex=expirydatex[2]+"-"+expirydatex[1]+"-"+expirydatex[0];

			}
     /* if(outgoingname.length==0||outgoingnumber.length==0||outgoingexpirydate.length==0||outgoingcvv.length==0){

        alert("Please Fill Bank Details Outgoing"); return;
      }*/
	  var isDisabled = $('#lowvehicle').prop('disabled');
	  if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
		  //alert("Please Select Capability");return;
	  }
			 var bicycle=$("#bicycle").is(":checked")?"1":"0";
			   var items=$("#items").is(":checked")?"1":"0";
			   var scooter=$("#scooter").is(":checked")?"1":"0";
			   var boxes=$("#boxes").is(":checked")?"1":"0";
			   var fishing=$("#fishing").is(":checked")?"1":"0";
			   var shopping=$("#shopping").is(":checked")?"1":"0";
			   var noofitems=$.trim($("#noofitems").val());
			   noofitems=(noofitems.length==0?"0":noofitems);
			   var size=$("#sizetype").val();
			   var howmany=$("#sizehowmany").val();
         var xcapability=$("#xcapability").val();
         var normal=(xcapability=="normal"?"1":"0");
         var autorikshaw=(xcapability=="autorikshaw"?"1":"0");
         var motorbike=(xcapability=="motorbike"?"1":"0");
        
			var obj=new Object();
      obj["paymentmode"]=$("#paymentmode").val();
      obj["normal"]=normal;
      obj["autorikshaw"]=autorikshaw;
      obj["motorbike"]=motorbike;
			 obj["bicycle"]=bicycle;
	   obj["items"]=items;
	   obj["scooter"]=scooter;
	   obj["boxes"]=boxes;
	   obj["fishing"]=fishing;
	   obj["shopping"]=shopping;
	   obj["noofitems"]=noofitems;
	   obj["size"]=size;
	   obj["howmany"]=howmany;
      obj["passengers"]=$("#passengers").val();
	  obj["maxjourney"]=$("#max_jrny").val();
			obj["wheelchair"]=wheelchair;
			obj["pets"]=pets;
			obj["pram"]=pram;
			obj["lowvehicle"]=lowvehicle;
			obj["highvehicle"]=highvehicle;
      <?php if(isset($_GET['ispending'])) { ?>
        obj["api"]="updatedriverbookingpending";
      <?php } else if(isset($_GET['isedit'])) { ?>
        obj["api"]="updatedriverbooking";
		 if(obj["maxjourney"]=="0"){
         $("#errormodal").modal("show");
          $("#errormsg").html("Please Select Maximum Journey");
          return;
      }
      <?php } else { ?> obj["api"]="driverbooking"; 
	   if(obj["maxjourney"]=="0"){
         $("#errormodal").modal("show");
          $("#errormsg").html("Please Select Maximum Journey");
          return;
      }
      if(obj["passengers"]=="0"){
         $("#errormodal").modal("show");
          $("#errormsg").html("Please Select Passengers");
          return;
      }
	  
       if(!$("#xyes").is(":checked")){
                $("#vvc").modal({"show":true});
                return;
          }


       <?php } ?>

      obj["animaltype"]=($("#guarddog").is(":checked")?"1":($("#animaldog").is(":checked")?"2":"3"));
        obj["controllerid"]=localStorage.getItem("id"); 
			obj["ispet"]=window.ispet?"1":"0";
      obj["firstselected"]=window.firstselected;
			obj["ispending"]=ispending;
      obj["registration"]=registration;
			obj["uid"]=window.uid;
			obj["firstname"]=firstname;
			obj["lastname"]=lastname;
			obj["dateofbirth"]=dobx;
			obj["address"]=address;
			obj["platnotxt"]=plateno;
			obj["platnoimage"]=$("#platenoimage").val(); 
			obj["badgenotxt"]=badgeno;
			obj["badgenoimage"]=$("#badgenoimage").val();
			obj["hackney"]=hackney;
			obj["mobile"]=mobile;
		//	obj["email"]=email;
			obj["expirydate"]=expirydatex;
			obj["backidimg"]=$("#backidimg").val();
			obj["councillettertxt"]=$("#councillettertxt").val();
			obj["concileletter"]=$("#councilletterimage").val();
            obj["vehicleregistrationimage"]=$("#vehicleregistrationimage").val();
			obj["drivinglicencetext"]=drivinglicence;
			obj["drivinglicenceimage"]=$("#drivinglienceimage").val();
			obj["carimage1"]=$("#carimage1").val();
			obj["carimage2"]=$("#carimage2").val();
			obj["carimage3"]=$("#carimage3").val();
			obj["color"]=color;
			obj["make"]=make;
			obj["model"]=model;
			obj["logbooktext"]=logbook;
			obj["adminCountryCode"]="<?php echo $_SESSION['COUNTRYCODE']; ?>";
			obj["logbookimage"]=$("#logbookimage").val();
			obj["capability"]=wheelchair;
			obj["outgoingnumber"]=outgoingnumber;
			obj["outgoingname"]=outgoingname;
			obj["callsign"]=$("#callsign").val();
			obj["alpha"]=window.alpha;
			obj["counter"]=window.counter;
			if(outgoingexpirydate.length!=0){
			var tt = outgoingexpirydate.split("/");
			var mm=tt[0];
			var yy=tt[1];
			obj["outgoingmm"]=mm;
			obj["outgoingyy"]=yy;
			}
			else{
			obj["outgoingmm"]="0";
			obj["outgoingyy"]="0";	
			}
			if(outgoingcvv.length!=0){
			obj["outgoingcvv"]=outgoingcvv;
			}
			else{
			 obj["outgoingcvv"]="0";

			}

			
			obj["incomingnumber"]=incomingnumber;
			obj["incomingname"]=incomingname;
			if(incomingexpirydate.length!=0){
			tt = incomingexpirydate.split("/");
			mm=tt[0];
			yy=tt[1];
			obj["incomingmm"]=mm;
			obj["incomingyy"]=yy;
			}
			else{
			 obj["incomingmm"]="0";
			 obj["incomingyy"]="0";
			}
			if(incomingcvv.length!=0){
			obj["incomingcvv"]=incomingcvv;
			}
			else{
		    obj["incomingcvv"]="0";
			}
			$(".btns_cnfrm").hide();
			$("._loading").show();
         
 			  myajax(obj,function( data, textStatus, jQxhr ){
      		 	 if(data.status=="400"){
					 $(".btns_cnfrm").show();
			         $("._loading").hide(); 
         $("#errormodal").modal("show");
          $("#errormsg").html(data.message);
				 }
				 else{
					 //alert("Successfully"); 
				  window.location.href="appoinment.php?status=3";
				  
				 }
      		 	 
      		 });
			
			 
		 };
      $('#dob,#expirydate').datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0",
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    });
    $('#datepicker').datepicker("setDate", new Date());
	 });
	   
    </script>

  
  <script type="text/javascript">     
  // enable spacing for credit card number     
  $('#number').on('keyup', function(e){         
    var val = $(this).val();         
    var newval = '';         
    val = val.replace(/\s/g, ''); 
    
    // iterate to letter-spacing after every 4 digits   
    for(var i = 0; i < val.length; i++) {             
      if(i%4 == 0 && i > 0) newval = newval.concat(' ');             
      newval = newval.concat(val[i]);         
    }        

    // format in same input field 
    $(this).val(newval);     
   });   
</script>
 <script type="text/javascript">     
  // enable spacing for credit card number     
  $('#number1').on('keyup', function(e){         
    var val = $(this).val();         
    var newval = '';         
    val = val.replace(/\s/g, ''); 
    
    // iterate to letter-spacing after every 4 digits   
    for(var i = 0; i < val.length; i++) {             
      if(i%4 == 0 && i > 0) newval = newval.concat(' ');             
      newval = newval.concat(val[i]);         
    }        

    // format in same input field 
    $(this).val(newval);     
   });   
</script>
<script>
 function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

</script>

  </body>
</html>