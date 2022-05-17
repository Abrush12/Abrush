<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?> <!doctype html>
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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
   
   <style type="text/css">
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
     .xbbbl{    font-weight: bold;
    font-size: 15px;
}
  .xdropdown,.xallocatedriver{    z-index: 999;
    position: absolute;
    width: 158px;display: none;
    background: #fff;
    margin-top: 46px; 
    border: 1px solid #eaeaea;padding: 0px;max-height: 200px;
    overflow-y: auto;}
    .xdropdown li,.xallocatedriver p{display: block;
    border-bottom: 1px solid #eaeaea;
    padding: 4px 5px;cursor: pointer;
    list-style-type: none;margin:0px;}
    .xdropdown li:hover,.xallocatedriver p:hover{background:#eaeaea;}
    .xallocatedriver{margin-top:0px;display: none;}
    .xallocatedriver .boldx{width: 100%;text-align: center;padding:10px;color:#000;font-weight: bold;text-size:16px;display: none;}
    .xallocatedriver  p span{font-size: 12px;
    float: right;
    margin-top: 3px;}
  .no_bg .lbl{width: 25px;
    position: absolute;
    background: transparent;
    height: 25px;
}
     .sectdriver:hover td, #tbd tr:hover td{background:#8b8989 !important;cursor:pointer;}
._allpoi{display:inline-block;text-align:center;cursor:pointer;}
._allpoi input[type='text']{width:65px;margin-left:4px;text-align:center;cursor:pointer;float:left;}
 ._qwdc{    position: absolute;
    width: 65px;
    height: 25px;
    margin-left: 4px;
background: transparent;}
._clpoi{
      width: 20px;
     clear: both;
    float: left;
    margin-left: 25px;
    margin-top: 8px;
  cursor:pointer;
  
}
  .trselected td,.trselected:hover td,.trselected:hover{background: #000 !important;}
.vbgtable tr th{padding: 8px 0px !important;}
.vbgtable tr th i{background: #adadad;
    width: 1px;
    height: 15px;
    float: right;
    margin-top: 5px;}
    ._jobtable{margin-top: 50px;}
  ._jobtable tr td{border-right: 1px solid #999999;
    color: #fff;
    padding: 3px 6px;
    display: inline-block;font-size: 14px;
} 
._jobtable tr td:last-child{border-right:transparent;}
.timer-box {
    position: absolute;
    width: inherit;
    padding: 5px;
    box-shadow: 1px 1px #eaeaea;
    border: 1px solid #bababa;
    background: #fff;
    margin-top: 0px;
    z-index: 999;
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
    </style>

    <title>Abrush Empire - EMARA</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
    <script>
      window.dddr=function(){
          if($(".timer-box1").is(":visible")){
             
    var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour").val()+":"+$("#bdemominute").val()+ampm;
 
            $("#bdemominute").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
            window.istimeboxopen=false;
            $(".timer-box1,.timer-box2").hide();
         
              
           $("#fromtime").val($("#bdemohour").val()+":"+$("#bdemominute").val()+" "+ampm);
         
          }
          else  if($(".timer-box2").is(":visible")){
             
    var ampm=$("#demoam2").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour2").val()+":"+$("#bdemominute2").val()+ampm;
 
            $("#bdemominute2").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
           
          window.istimeboxopen=false;
            $(".timer-box1,.timer-box2").hide();
         
              
           $("#totime").val($("#bdemohour2").val()+":"+$("#bdemominute2").val()+" "+ampm);
         
          }
          

}
  document.onkeydown = checkKey;
  function checkKey(e) {

    e = e || window.event;
 
    if(e.keyCode=="39"){
          if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
                $("#bdemominute").focus();
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                 
                  
                }

            return;
        }
        else if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
                $("#bdemominute2").focus();
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                  
                }

            return;
        }
        window.location.href="search.php";
        
    }
     if(e.keyCode=="37"){ 
        if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
               
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                  $("#bdemohour").focus();
                  
                }

            return;
        }
        else    if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
               
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                  $("#bdemohour2").focus();
                  
                }

            return;
        }
             window.location.href="appoinment.php?status=3";
           
        
      }
       if(e.keyCode=="27"){
            if($(".timer-box1").is(":visible")){
           window.istimeboxopen=false;
            $(".timer-box1").hide();
            $("#fromtime").val("");

                return false;
            } 
            else  if($(".timer-box2").is(":visible")){
           window.istimeboxopen=false;
            $(".timer-box2").hide();
            $("#totime").val("");

                return false;
            } 
        return;
    }
     if (e.keyCode == '38') {
     if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
                inchourbkdate(document.getElementById("barrowup"),'datepicker');
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                 
                 incminbkdate(document.getElementById("barrowupmin"),'datepicker');
                }

            return;
        }
        else  if($(".timer-box2").is(":visible")){
            
             if (document.querySelector('#bdemohour2') === document.activeElement) {

                inchourbkdate(document.getElementById("barrowup2"),'datepicker');
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                 incminbkdate(document.getElementById("barrowupmin2"),'datepicker');
                }

            return;
        }
    }
    if (e.keyCode == '40') {
     if($(".timer-box1").is(":visible")){
        
              if (document.querySelector('.demohour') === document.activeElement) {

                minhourbkdate(document.getElementById("barrowup"),'datepicker');
             }  else  if(document.querySelector('.demominute') === document.activeElement) {
                
                 minminbkdate(document.getElementById("barrowdownmin"),'datepicker');
                }


            return;
        }
        else if($(".timer-box2").is(":visible")){
        
              if (document.querySelector('#bdemohour2') === document.activeElement) {

                minhourbkdate(document.getElementById("barrowup2"),'datepicker');
             }  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                
                 minminbkdate(document.getElementById("barrowdownmin2"),'datepicker');
                }


            return;
        }
    }
    if (e.keyCode == '13') {
    if($(".timer-box1").is(":visible")){
                 
                if (document.querySelector('.demohour') === document.activeElement) {
                    $("#bdemominute").focus().addClass("llfocus");
                    $("#bdemohour").removeClass("llfocus");
                }
                  else  if(document.querySelector('.demominute') === document.activeElement) {
                    
                 dddr();
                  
                } 
                return;
            }
            else  if($(".timer-box2").is(":visible")){
                 
                if (document.querySelector('#bdemohour2') === document.activeElement) {
                    $("#bdemominute2").focus().addClass("llfocus");
                    $("#bdemohour2").removeClass("llfocus");
                }
                  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                    
                 dddr();
                  
                } 
                return;
            }
        }
  }
</script>
  </head>
  <body onload="startTimezz()">

      <!---header start---------->
   <?php
    include "header.php";
   ?>
   <!--------header end-------->

    <section class="inner_s_wrap">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-sm-3">
       
<div class="search_labels">
              
              <div class="search_inpt_flx">
                <span class="labels_search">Select Date</span>
                <span class="inputs_search">
                  <div style="width:100%;float:left;">
                  <input type="text" id="datetimex" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepicker">
                </div>
                   
                </span>
              </div>

           <div class="search_inpt_flx">
                <span class="labels_search">Time from and to</span>
                <span class="inputs_search">
                  <div style="width:48%;float:left;" class="fromtime">
                  <input type="text" id="fromtime" style="width:100%" class="hlf_f  ">
                   <img src="img/clock.png" style="width: 17px;  position: absolute; margin-left: -21px; margin-top: 4px;" id="openfromtime">
                    <div class="timer-box mtr-datepicker timer-box1">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" id="barrowup" onclick="inchourbkdate(this,'datepicker')"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" id="bdemohour"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down" id="barrowdown"   onclick="minhourbkdate(this,'datepicker')" ><span></span></div>

                            </div> 
                             <div class="mtr-input-slider"> 
                              <div class="arrow up"  id="barrowupmin"  onclick="incminbkdate(this,'datepicker')"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" id="bdemominute"   data-value="10" maxlength="2" >
                              </div>                              <div id="barrowdownmin"  onclick="minminbkdate(this,'datepicker')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam" id="demoam"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;width: 100%;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                </div>
                  <div style="width:48%;float:left;margin-left: 10px;"  class="totime">
                  <input type="text" id="totime" style="width:100%" class="hlf_f  ">
                   <img src="img/clock.png" style="width: 17px;  position: absolute; margin-left: -21px; margin-top: 4px;" id="opentotime">
                <div class="timer-box mtr-datepicker timer-box2">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" id="barrowup2" onclick="inchourbkdate(this,'datepicker')"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" id="bdemohour2"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down" id="barrowdown2"   onclick="minhourbkdate(this,'datepicker')" ><span></span></div>

                            </div> 
                             <div class="mtr-input-slider"> 
                              <div class="arrow up"  id="barrowupmin2"  onclick="incminbkdate(this,'datepicker')"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" id="bdemominute2"   data-value="10" maxlength="2" >
                              </div>                              <div id="barrowdownmin2"  onclick="minminbkdate(this,'datepicker')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam" id="demoam2"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm2"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;width: 100%;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                </div>
                </span>
              </div>
   
              

               

              

             
              <div class="btns_cnfrm btns_cnfrmcx"> 
<button type="button" style="margin-top:10px;margin-left:140px" class="btn btn-primary" id="submit">Submit</button>
                 
             

                </div>
            </div>
      </div><div class="col-sm-9">
      <h3 style="text-align: right;color:#fff;margin-top:35px;margin-right:35px;" id="ccdate"></h3>  
      </div>
 
<div class="clearfix"></div>
 
          <div class="col-md-12 px-0">
            
            <div class="table_s full_wdth" style="margin-top:0px;">
                 <table class="table vbgtable"  style="margin-top:13px;">
                  <thead>
                    <tr>
                      <th>Call Sign<i></i></th>

                      <th>Name<i></i></th>
                      <th>Shift<i></i></th>
                      <th>Hours<i></i></th>
                      <th>Cash<i></i></th>
            <th>Pre-Paid<i></i></th>
                      <th>Cash Jobs<i></i></th>
                      <th>Pre-Paid Jobs<i></i></th>                    
            <th>Earnings<i></i></th>
                      <th>Average<i></i></th>
                       <th>Owed<i></i></th>
                     
                     
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>  
 
    <script type="text/javascript">
        window.kkr=function(ref,dt,idx){
          var hr=$(ref).parent().parent().find(".demohour").val();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          
      }
         window.incminbkdate=function(ref,idx){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt++;
          if(dt>59){
            dt=1;
          }
          if(dt<10){
            dt="0"+dt
          }
           kkr(ref,dt,idx);

      }
       window.minminbkdate=function(ref,idx){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
            kkr(ref,dt,idx);
      }
        window.tofulltimedt=function(time){ 
    if(!time) return "";
var hours = Number(time.match(/^(\d+)/)[1]);
var minutes = Number(time.match(/:(\d+)/)[1]);
var AMPM = time.match(/\s(.*)$/)[1];
if(AMPM == "PM" && hours<12) hours = hours+12;
if(AMPM == "AM" && hours==12) hours = hours-12;
var sHours = hours.toString();
var sMinutes = minutes.toString();
if(hours<10) sHours = "0" + sHours;
if(minutes<10) sMinutes = "0" + sMinutes;
return (sHours + ":" + sMinutes);
  }
      window.startTimezz=function() {
  var date=new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  if(!window.istimeboxopen){
 $(".demohour").val(hours);
 $(".demominute").val(minutes);
 if(ampm=="AM"){
  $(".demoam").addClass("timeselected");
      $(".demopm").removeClass("timeselected")

 }
 else{
   $(".demoam").removeClass("timeselected");
    $(".demopm").addClass("timeselected")

 }
}
  //$("#fromtime,#totime").attr("placeholder",strTime);
 
  setTimeout(startTimezz, 1000);
}
      window.clopitimer=function(ref,event){
    event.stopPropagation();
      $(ref).parent().parent().hide();
    window.istimeboxopen=false;
}
      window.minhourbkdate=function(ref,idx){
        
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        
          dt--;
          if(dt<=0){
            dt=12;
          }
           if(dt<10){
            dt="0"+dt
          }

          kk(ref,dt,idx);          

      }
      
      window.inchourbkdate=function(ref,idx){
         
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        
          dt++;
          if(dt>12){
            dt=1;
          }
           if(dt<10){
            dt="0"+dt
          }

         kk(ref,dt,idx);
         

      }
      window.kk=function(ref,dt,idx){
          var mn=$(ref).parent().parent().find(".demominute").val();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = dt+":"+mn+ampm;

              
           _time=window.tofulltimedt(_time).split(":");
                
        
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          
      }
        window.settmx=function(ref){
        var hr=$(ref).find(".demohour").html();
        var mn=$(ref).find(".demominute").html();
         var ampm=$(ref).find(".demoam").hasClass("timeselected")?"AM":"PM";
        //$(ref).find("input[type=text]").val(hr+":"+mn+" "+ampm);
        return hr+":"+mn+" "+ampm;
      }
    window._baseurl="http://18.168.83.39/";
 
  window.checkTime=function(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
window._cdate=dd + '-'+mm+"-"+ yyyy;
window.getcurrentDateTime=function(){
 const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  return window._cdate+" "+h + ":" + m;
 }
  function isInt(n){
    return Number(n) === n && n % 1 === 0;
}
 
 
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
      if($(this).hasClass("demohour")){
        if($.trim(this.value)>12) this.value="12";
         if($.trim(this.value)<0) this.value="0";
      }
      if($(this).hasClass("demominute")){
        if($.trim(this.value)>59) this.value="59";
         if($.trim(this.value)<0) this.value="0";
      }
     
    });
  });
}
  
        $(function(){
           setInputFilter(document.getElementById("bdemohour"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
  setInputFilter(document.getElementById("bdemominute"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
     setInputFilter(document.getElementById("bdemohour2"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
  setInputFilter(document.getElementById("bdemominute2"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
             $("#demoam").click(function(){
             $("#demopm").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demopm").click(function(){
                  $("#demoam").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demoam1").click(function(){
             $("#demopm1").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
            $("#demopm1").click(function(){
                  $("#demoam1").removeClass("timeselected");

        $(this).addClass("timeselected");
             window.settmx($(this).parent().parent().parent().parent().parent().parent().parent())

        });
             $(".fromtime,.totime").click(function(e){
              $(".timer-box").hide();
    $(this).find(".timer-box").show();
    if($(this).hasClass("fromtime")){
      $("#bdemohour").focus();
    }
     if($(this).hasClass("totime")){
      $("#bdemohour2").focus();
    }

     e.stopPropagation();
     
           var timeval=$.trim($(this).find("input[type=text]").val());
           if(timeval.length!=0){
            var t = timeval.split(" ");

        if(t[1]=="AM"){
          $(this).find(".demoam") .addClass("timeselected");
          $(this).find(".demopm") .removeClass("timeselected");

        }
        else{
           $(this).find(".demoam") .removeClass("timeselected");
          $(this).find(".demopm") .addClass("timeselected");
        }
        var tt=t[0].split(":");
        $(this).find(".demohour").html(tt[0]);
        $(this).find(".demominute").html(tt[1]);
      }
     window.istimeboxopen=true;

}); 

$(document).click(function(){
    $(".timer-box").hide();
    window.istimeboxopen=false;
});
$(document).mouseup(function(e) 
{
     $("._dropdown").removeClass("active");
    var container = $(".xdropdown,.lcdropdown,.xallocatedriver");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
    

});
               $("#opendatepicker").click(function(){
                 $("#datetimex").datepicker("show");
        });
     $('#datetimex').datepicker({
         
        autoclose: true,
        todayHighlight: true,setDate:new Date(),  dateFormat: 'dd-mm-yy'
    });
       
   $("#submit").click(function(){
     var datetimex=$.trim($("#datetimex").val());
     var fromtime=$.trim($("#fromtime").val());
     var totime=$.trim($("#totime").val());
     if(fromtime.length!=0){
      fromtime=window.tofulltimedt($.trim(fromtime))+":00";
     }
     if(totime.length!=0){
      totime=window.tofulltimedt($.trim(totime))+":00";
     }
      
     if(datetimex.length==0) return;
      const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
     var dd = String(today.getDate()).padStart(2, '0');
     var mm = String(today.getMonth() + 1).padStart(2, '0');  
     var yyyy = today.getFullYear();
     $("#ccdate").html(datetimex);
         var dt=datetimex;//+" "+h_ + ":" + m_+":00";
     lk(dt,fromtime,totime); 
   });
     window.lk=function(dt,fromtime,totime){
       $("#tbd ._rowax").remove();
      myajax( {"api":"getdriverearnings","datetime":dt,"fromtime":fromtime,"totime":totime},function( data, textStatus, jQxhr ){
        var html="";
    window._joblist=data.data;
    if(data.data.length==0){
     
    }
       $(data.data).each(function(x,y){
      
       html='<tr  class="_rowax">';
          html+='<td>'+y.callsign+'</td>';

         html+='<td>'+y.name+'</td>';
         html+='<td>'+y.stime+'</td>';
               html+='<td>'+y.hourworked+'</td>';
      html+='<td>£'+y.cash+'</td>';

         html+='<td>£'+y.prepaid+'</td>';
         html+='<td>'+y.cashjobs+'</td>';
               html+='<td>'+y.prepaidjobs+'</td>';
      

               html+='<td>£'+y.ttlearning+'</td>';
                html+='<td>0</td><td>£'+y.owed+'</td></tr>';
         $("#tbd").append(html);
       });
    });
     }
      const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
     var dd = String(today.getDate()).padStart(2, '0');
     var mm = String(today.getMonth() + 1).padStart(2, '0');  
     var yyyy = today.getFullYear();
         var dt=dd + '-'+mm+"-"+ yyyy+" "+h_ + ":" + m_+":00";
       $("#ccdate").html(dd + '-'+mm+"-"+ yyyy);
     lk(dt,"","");
  });
      
    </script>

  </body>
</html>