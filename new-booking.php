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
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     -->
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmti5acRN8Yau_csPjnTKmmHdb7Ntk_IY&callback=initMap"></script>
    
   <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUnvPObS9fsbYknCPqDXFcrrWSZa-CVug "> -->
  <link rel="stylesheet" type="text/css" href="css/switch.css">
   

       <style type="text/css">
	.banbtn{background: #ffa800;
  border: none;
  outline: none;
  box-shadow: none;
  color: #fff;
  border-radius: 4px;
  padding: 0px 20px;
  cursor: pointer;
 	   }
		   
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.8s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}
	   
body{overflow: hidden;   font-family: 'Almarai' !important; }
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
          .chkcb{width: 20px !important;
    height: 20px !important;
    margin-top: 25px;
    opacity: unset !important;}
    .chkcbrd{width: 15px !important;
    height: 15px !important;
    margin-top: 25px;
    opacity: unset !important;}
    .chkcbvc{margin-top:0px;}
    body{background: #000 !important;}
    .mjns input{    width: 81%;
    margin-left: 40px;}
    .addcloseac,.addcloseaclose{position: absolute;margin-left: 0px;cursor: pointer;}
    .addcloseaclose{ margin-left: 4px;
    width: 15px; }
    .startgreen{ 
    margin-left: 0px;}
    .dotsax{    position: absolute;
    color: #fff;
    font-size: 20px;
    margin-top: 16px;
    margin-left: 0px;}
    .dotsax span{display: block;height:7px;}
    .down_arrow{    color: #000;
    position: relative;
    top: -3px;}
    ._dropdown{cursor: pointer;outline :2px solid transparent}
    .xdropdown,.xallocatedriver,.xbandriver,.lcdropdown{z-index: 999;
    position: absolute;
    width: 158px;display: none;
    background: #fff;
    margin-top: 29px; 
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
	.xbandriver .boldx,.lcdropdown .boldx{width: 100%;text-align: center;padding:10px;color:#000;font-weight: bold; display: none;}
    .xbandriver  p span{font-size: 13px;font-weight: bold;
    float: right;
    margin-top: 3px;}
.no_bg,.no_bg *,.ispermanent,#datepicker,#datepicker1,#timerx,#timerx1,#clockx,#clockx1,#booking,#quotation,.left_ic img,.ccpaymenttype input[type='radio'],.date img,#fixedbx,.days_selected.selected span{cursor: pointer;}
.sectdriver:hover td{background:#8b8989 !important;cursor:pointer;}
._am{position:absolute;}
._bm{margin-left:30px;}
.driverbox{display:none;}

.no_bg .lbl{width: 25px;
    position: absolute;
    background: transparent;
    height: 25px;
}
.xbbbl{    
    font-size: 17px;
}
.sctedd{background: #d5d5d5;}
.xmon{ font-size: 13px !important;}
#audiotable tr td{color:#000;}
       .sectdriver:hover td, #tbd tr:hover td{background:#8b8989 !important;cursor:pointer;}
.custom-menu {
    display: none;
    z-index: 1000;
    position: absolute;
    overflow: hidden;
    border: 1px solid #CCC;
    white-space: nowrap;
    font-family: sans-serif;
    background: #FFF;
    color: #333;
    border-radius: 5px;
    padding: 0;
}

 .custom-menu li {
    padding: 4px 12px;
    cursor: pointer;
    width:120px;font-size:18px;
    font-weight:bold;
    list-style-type: none;
    transition: all .3s ease;
    user-select: none;
}

.custom-menu li:hover {
    background-color: #DEF;
}
._allpoi{display:inline-block;text-align:center;cursor:pointer;}
._allpoi input[type='text']{width:65px;margin-left:4px;text-align:center;cursor:pointer;float:left;}
 ._qwdc{    position: absolute;
    width: 65px;
    height: 25px;
    margin-left: 4px;
background: transparent;}
.table_s .table tbody tr.activebooking td,.table_s .table tbody tr.activebooking:hover td{
 
    background: #0028a1;
}
.table_s .table tbody tr.cancelbooking td,.table_s .table tbody tr.cancelbooking:hover td{
 
    background: #999900;
}
.table_s .table tbody tr.runnerbooking td,.table_s .table tbody tr.runnerbooking:hover td{
 
    background: #336600;
}
.table_s .table tbody tr.nofarebooking td,.table_s .table tbody tr.nofarebooking:hover td{
 
    background: #e600ac;
}
.table_s .table tbody tr.prebooking td,.table_s .table tbody tr.prebooking:hover{background:#b34b29}

.table_s .table tbody tr.quotation td,.table_s .table tbody tr.prebooking:hover{background:#f1a906}
.repeatbookingedit{    width: 8px;
    padding: 0px;
    margin: 0px;
    float: right;
    margin-right: 52px;
    margin-top: -1px;display:none;}
#rttables tr td{color:#000;padding: 5px;}
#rttables tr td input{border: 1px solid #eaeaea;}
._bnx{float: left;margin-left: 10px;color: #fff;font-size: 14px;}
.crclgreen{width: 10px;height: 10px;border-radius: 10px;background: #0028a1;float: left;
    margin-top: -5px;}
    .crcleblue{width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #b34b29;
    }
    .crcleorange{width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #f1a906;
    }
    .crclegray{
      width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #8b8989;
    }
	.crclecan{
      width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #999900;
    }
	.crclenofare{
      width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #e600ac;
    }
	.crclerunner{
      width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: -5px;
      background: #336600;
    }

.table_s.full_wdth{margin-top: 0px;}
.dayselectrow{background: #fdc2c2;}
#modal input[type='text']{border: 1px solid #eaeaea;
    padding: 4px;}
.ispermanent{    width: 150px;
    color: #fff;
    margin-left: 20px;
    display: inline-block;
   cursor: default !important;
  }
  .ispermanent input{cursor: pointer;}
  .trselected  {outline: 1px solid #000; }
  .trselected  /*,table  #tbd > tr:hover*/{outline: .20em solid #FFD700 !important;border-left: 0.5em  solid #FFD700 !important;border-right:  0.5em  solid #FFD700 !important;border-bottom: 2px solid #FFD700 !important;;}
 
  /*table  #tbd > tr:hover td   { background: #4169e1;}*/
 .trselected td{background:#00b3b3 !important ;}
/*.trselected td,.trselected:hover td,.trselected:hover{background: #000 !important;}*/
.vbgtable tr th{padding: 8px 0px !important;}
.vbgtable tr th i{background: #adadad;
    width: 1px;
    height: 15px;
    float: right;
    margin-top: 5px;}
._jobtable tr td{border-right: 1px solid #999999;
    color: #fff;
    padding: 3px 6px;
    display: inline-block;font-size: 14px;
} 
._jobtable tr td:last-child{border-right:transparent;}
.ddrrr{    margin-top: 0px !important;
    float: right !important;
    margin-right: 3px !important;
    padding:3px !important;
    height: 0px !important;}
    .ddrrrx{    margin-top: 0px !important;
    float: right !important;
    margin-right: 3px !important; 
    height: 0px !important;}
input#timaerx1::-webkit-calendar-picker-indicator{
  display:block;
  top:0;
  left:0;
  background: #0000;
  position:absolute;
  transform: scale(12)
}
.timer-box{position: absolute;width: inherit;padding: 5px;box-shadow: 1px 1px #eaeaea;
    border: 1px solid #bababa;background: #fff;margin-top: 28px;z-index: 999;display: none;min-width: 202px}
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
.mtr-input-slider:hover .content,.mtr-input-slider:hover .content input{background: #ff8612}
.mtr-datepicker .mtr-input-slider .content input{background: #bdbcb8;color: #fff;text-align: center}
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
.rpeat_images_chkbox img{width: 35px;}
.days_selected{margin-top:3px;} 
#xerrormsgs{    color: #fff;
    margin-left: 58px;
    top: 23px;display: none;
    background: #e83737;
    padding: 10px;
    font-weight: bold;
    font-size: 18px;
    position: relative;}
    .on_img_imk{
        position: absolute;
    bottom: 6px;
    left: 0; width: 70%;
    }

   .resulttry{display: none;
    font-size: 14px;margin-top: 5px;
        position: absolute;
    width: calc(87% - 14px);
    background: #fff;
    border-radius: 10px;
    padding: 0px 10px;
    white-space: nowrap;      /*keep text on one line */
overflow: hidden;         /*prevent text from being shown outside the border */
text-overflow: ellipsis;  /*cut off text with an ellipsis*/

    }
     .bluety{color: blue;font-weight: bold;}
     .capotherbox{background: #3533334a;
    border-radius: 10px;
    padding-top: 10px;
    margin-bottom: 10px;}
    .rpeat_top_bar_flex{height: 23px;}
    ._ikmn{    display: flex;
    height: 30px;
    margin-bottom: 4px;
    width: 32px;margin-left: 10px;
    margin-bottom: 5px;}
    ._ikmnp,._ikmnpl{    display: flex;  }
    ._ikmnp{ }

    ._ikmnpl{margin: 0 auto;margin-bottom: 6px;width: 85px;}
    ._ikmnpl input{border-radius: 5px;
    padding: 0px;
    width: 35px;height: 20px;margin-bottom: 5px !important;}
    ._ikmnpl * {display: inline-block;}
    ._ikmnpl img.minusbn{height: 23px;
    width: 14px; 
    cursor: pointer;}
    ._ikmnpl img.plusbn{    margin-left: 3px;
    height: 18px;
    margin-top: 2px; 
    cursor: pointer;}
    ._ikmnpl input {text-align: center;} 
    .address_wrap input{margin-bottom: 10px;}
    ._lopepe{font-size: 14px;}
    .one_rab {
    width: 12px;
    margin-top: 6px;
}
    ._xnopadding{padding: 0px !important;}
    .two_r {
    width: 27px; 
    }
    .mg_bx1 {
    margin: 6px 0;
}
.rpeat_column.rgbg_bg{padding-bottom: 0px}
.bx_1 span img{    width: 12px;}
.rpeat_days_bx {margin-top: 10px}
._ikmnp input{margin-bottom: 11px !important;}
.sectdriver  th,.sectdriver  td{font-size: 14px !important;}
.mapsx{position: absolute;
    width: 20px;  
    right: 5px;}
 #pickuplocation,#droplocation,.viaaz,._reddc{border: 1px solid transparent;height:25px }
 #pickuplocation:focus,#droplocation:focus,.viaaz:focus,._reddc:focus{outline: 4px solid blue !important;  box-shadow:inset 0px 0px 1px 1px blue ;  }
 .errorbx{outline: 1px solid red;box-shadow:inset 0px 0px 2px 1px red,0 0  8px red;}
 #mobile{border: 1px solid transparent !important;}
.lcoptions,._mboption{position: absolute;
    margin-top: 0px; cursor: pointer;
    right: 3px; } 
    ._mboption{right: 24px;
    background: #fff;
    padding-left: 7px;
    border-top-right-radius: 3px;
    margin-top: -24px;
    border-bottom-right-radius: 3px;}
    ._mboption img{margin-top: -3px;}
 .lcoptions img{ width: 15px;}
.lcoptions .drpdowncx{margin-top: 3px;margin-right: 5px;}
.lcoptions .mapsx{ margin-top: 3px;}
.mapsxboxd{     float: right;
    background: #dad9d9;
    width: 33px;
    height: 1.5em;
    margin-right: -3px;
    margin-top: 0.16em;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;}
.xdropdown li img{width: 24px}
.xdropdown li.specialrequestimg{padding: 5px}
.xdropdown li.specialrequestimg input[type=checkbox]{float: right;margin-top: 2px;}
.xdropdown li.specialrequestimg span{margin-left: -5px;background: transparent;}
.mnbox{width: 40px;
    height: 34px;
    position: absolute;
    right: 0;margin-top: -29px;}
._rdcoverradio{position: absolute;width: 70px;height: 25px;left: 0px}
.rpeat_days_bx{margin-top: 0px !important;z-index: 1; }
.extendeddiv{
          position: absolute;
    width: 155%;
    height: 100%;
    background: #4f4a4a;
    margin-top: -10px;
    border-radius: 8px;
}
.address_wrap{ background: #4f4a4a;  border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;}
 .mapxdbox{width: calc(111% - 10px);
    height: 240px; 
    POSITION: absolute;
    right: 20px}
.notebox{height: 110px;
    margin-top: 30px;}
 .gm-control-active.gm-fullscreen-control,.gm-svpc,.gm-control-active{width: 26px !important;height: 26px !important}
  .gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom img,.gm-svpc img{width: 14px !important;height: 14px !important}
  .gmnoprint {right: 25px !important;}
 .gm-style-mtc button{padding: 0px 10px !important;height: 25px !important;min-width: 25px !important;font-size: 14px !important;}
.mnddrt span{display: inline;}
.mnddrt b{margin-left: 6px;}
.mnddrt{width: 120px !important;}
.ccpaymenttype{font-size: 15px;
    color: #fff;
    padding: 2px 0px 0px 5px;
    border-radius: 5px;
    background: #ffffff4a;cursor: pointer;
    margin-bottom: 13px;}
    ._dropdown label{cursor: pointer;}
 .ccpaymenttype:nth-of-type(2),.ccpaymenttype:nth-of-type(3){margin-left: 5px;}
.ccpaymenttype span {    margin-top: -2px;
    margin-left: 5px; 
    position: absolute;
}
.cardinp{display: inline-block;width: 180px;}
.audiobutton  {
    background: #ffa800;
    border: none;
    outline: none;
    display: none;
    box-shadow: none;
    color: #fff;
    border-radius: 4px;
    padding: 0px 20px;
    cursor: pointer;
    margin-right: 0px;
    height: 25px;
    float: right;
    margin-right: 0px;
    padding-left: 10px;
}
.audiobutton i{margin-right: 10px;}
.xaccount{margin-top: 25px}
.xaccount li{font-weight: normal;}
.xaccount li:last-child{text-align: center;font-weight: bold}
input[name="paymenttype"] {
    accent-color: blue;
}
.xmcash{    width: 100%;
    
    color: #000;
    margin-top: 0px;margin-left: -3px;}
.covercashcheck{
        background: transparent;
    width: 15px;
    height: 21px;
    position: absolute;
}
  .down_arrowcash{  position: absolute;
    right: 9px;
    color: #fff;
    top: 1px;
    font-size: 17px;}
    .rpeat_top_bar_flex .bookings{float: left;margin-top: -7px;}
    ._onetmrpr span{float: left;margin-left: 5px;}
    ._onetmrpr input{width: 20px;float: left;}
    ._onetmrpr:nth-of-type(2){margin-left: 20px;}
    #confirm:focus,#addfixed:focus{box-shadow: 1px 1px 20px #dedede;
    outline: 1px solid #dedede;}
    .hdnn{visibility: hidden;}
    ._cover {
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    z-index: 999;
    background: transparent;
}
body{overflow-x: hidden;}
input{padding: 2px  ;border-radius: 3px;}
.plholder{position: absolute;
    color: #000;
    display: none;
    padding: 2px;
    margin-top: -7px;
    width: 150px;
    height: 13px;
    justify-content: center;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
    margin-left: 29px;
    background: #fff;
    padding-top: 5px;
    padding-left: 8px;}
    .plholder span {position: absolute;
    color: blue;
    font-weight: bold;
    font-size: 12px;
    margin-top: -6px;
}
.pickuplocation.plholder span{margin-left: 20px;}
.droplocation.plholder span{margin-left: 35px;}
.entername.plholder span{margin-left: 33px;}
.entercontact.plholder span{margin-left: 20px;}
.viazdkk.plholder span{margin-left: 55px;}
.flightnum.plholder span{margin-left: 30px;}
._dropdown.active{outline: 3px solid blue;
    box-shadow: 1px 1px 15px #5454f6;}
    .specialrequestimgchld.active{background-color: #dfdfdf;}
    #confirm:focus{font-weight: bold;}
    .demohour:focus,.demominute:focus {background: #ffa800 !important;}

.redccr{width: 14px;
    height: 14px;
    background: red;
    position: absolute;
    border-radius: 40px;
    margin-top: 2px;
    margin-left: 12px;}
.credit{width: 140px;
    height: 14px;
	position: absolute;
    margin-top: 2px;
    margin-left: 50px;}
.blackccr{width: 14px;
    height: 14px;
    background: black;
    position: absolute;
    border-radius: 40px;
    margin-top: 2px;
    margin-left: 30px;}
.greenccr{width: 14px;
    height: 14px;
    background: #14d914;
    position: absolute;
    border-radius: 40px;
    margin-top: 2px;
    margin-left: 12px;}
    .redccra{width: 14px;
    height: 14px;
    background: red;
    float: left;
    border-radius: 40px;
    margin-top: 3px;
    margin-right: 7px;}
.greenccra{width: 14px;
    height: 14px;
    background: #14d914;
    float: left;
    border-radius: 40px;
    margin-top: 3px;
    margin-right: 7px;}
    .sxdc{cursor: pointer;}
.stamp {
  transform: rotate(-14deg);
	color: #fff;
	font-size: 2rem;
	font-weight: 700;
	background-color: #0028a1;
	border: 0.5rem solid #0028a1;
	display: inline-block;
	padding: 0.25rem 1rem;
	text-transform: uppercase;
	border-radius: 0;
	font-family: 'Courier';
	-webkit-mask-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/8399/grunge.png');
	-webkit-mask-size: 44px 60px;
}

.is-prebook{
  color: #fff;
  background-color: #b34b29;
  border: 0.5rem solid #b34b29;
 transform: rotate(-14deg);
   border-radius: 0;
}

.is-quote {
	 color: #fff;
	 background-color: #f1a906;
     border: 0.5rem solid #f1a906;
	transform: rotate(-14deg);
  border-radius: 0;
} 

.is-complete {
	 color: #fff;
  background-color: #8b8989;
  border: 0.5rem solid #8b8989;
	transform: rotate(-14deg);
  border-radius: 0;
} 
.is-cancel {
	 color: #fff;
  background-color: #999900;
  border: 0.5rem solid #999900;
	transform: rotate(-14deg);
  border-radius: 0;
} 
.is-nofare {
	 color: #fff;
  background-color: #e600ac;
  border: 0.5rem solid #e600ac;
	transform: rotate(-14deg);
  border-radius: 0;
} 
.is-runner {
	 color: #fff;
  background-color: #336600;
  border: 0.5rem solid #336600;
	transform: rotate(-14deg);
  border-radius: 0;
} 
</style>
<script >
 window.editwhat=0;
 window.selectedcount=-1;
 window.selectedbancount =-1;
 window.distancearr=[];
  window.METERS_IN_MILE = 1609.344;

    function metersToMiles(meters) {
        return meters / METERS_IN_MILE;
    }
    
    function milesToMeters( miles) {
        return miles * METERS_IN_MILE;
    }
    
    function getHRMIN(minutes){
         var realmin = minutes % 60
    var hours = Math.floor(minutes / 60);
    return hours+" "+realmin;
    }
    function secondsToHms(d) {
    d = Number(d);
    var h = Math.round(d / 3600);
    var m = Math.round(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);

    var hDisplay = h > 0 ? h + (h == 1 ? " H, " : " H, ") : "";
    var mDisplay = m > 0 ? m + (m == 1 ? " M" : " M") : "";
    var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
    return hDisplay + mDisplay; 
}
window.printmap=function(lat,lng){
  
var mapProp= {
  center:new google.maps.LatLng(lat,lng),
  zoom:14 
};
var map = new google.maps.Map(document.getElementById("mapxdbox"),mapProp);
 new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                map: map,
            });
map.addListener('tilesloaded', function () { 
   
})
google.maps.event.addListenerOnce(map, 'idle', function(){
    setTimeout(function(){
   
    $("button[title='Zoom in']").parent().css({"width":"26px","height":"53px"});
},1500);
});
    
}
window.randomIntFromInterval=function(min, max) { // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min)+""+Math.floor(Math.random() * (max - min + 1) + min);
}

window._xmrandomid=randomIntFromInterval(100000,999999);
    window.mklccall=function(ref,e){
          if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
       
         
        window.amaddressref=$(ref).parent();
         var q=$.trim(ref.value);
         if(q.length==0){
            $(ref).removeAttr("data-lat").removeAttr("data-lng");
            getDistance();
         }
           var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    val=firstLetterUpper + val.substr(1, val.length);
    $(event.target).val(val);
    q=val;
          var dropref=$(ref).parent().find(".lcdropdown");
          var loadingref =  dropref.find(".allloading");
          clearTimeout(window.timeoutref);
          if(q.length!=0){
              dropref.find("p").remove();
                loadingref.show().html("Loading...");
                dropref.show();
                  if(window.xhr!=null){
        window.xhr.abort()
        }
  
    window.timeoutref=setTimeout(function(){
    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"getaddresssearch","countrycode":window.controllercountrycode,"lat":window.controllerlat,"lng":window.controllerlng,"q":q,"randomid":window._xmrandomid}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
        if(data.data.length!=0){
                                    loadingref.hide();
window._isdrpshown=true;
        var postal_code=""
        $(data.data ).each(function(x,y){
            
            dropref.append("<p onclick='getplacedetails(this,3)' data-placeid='"+y.place_id+"' >"+y.description+postal_code+"</p>");
        });
         
    }
    else{
                        loadingref.show().html("No Result Found...");

    }
    }
    }); },1);
          }
    }
window.getDistance=function(){
window.distancearr=[];
if(window.pickuplat!=0&&$.trim($("#pickuplocation").val()).length!=0){
window.distancearr.push({"lat":""+window.pickuplat,"lng":""+window.pickuplng});
}
$(".viaaz").each(function(){
  var lat = $(this).attr('data-lat');
  var lng = $(this).attr('data-lng');

if (typeof lat !== 'undefined' && lat !== false&&$.trim($(this).val()).length!=0) {
   window.distancearr.push({"lat":lat,"lng":lng});  
}
});
 if( window.droplat!=0&&$.trim($("#droplocation").val()).length!=0){
window.distancearr.push({"lat":""+window.droplat,"lng":""+window.droplng});
}
 if(window.distancearr.length<2) return;

myajax({"api":"getdrivingdistance","distances":JSON.stringify(window.distancearr)},function( data, textStatus, jQxhr ){
  window.bookingmileage=data.data.distance;
  window.bookingmileagetime=data.data.time;
              $("#ttlmileage").html(metersToMiles(data.data.distance).toFixed(2)+" km");        
              $("#ttltime").html(secondsToHms(data.data.time).toLowerCase());   
           }); 
}
window.pickuplat=0;
window.pickuplng=0;
window.pickupzipcode=0;
window.droplat=0;
window.droplng=0;
window.dropzipcode=0;
window.bookingmileage=0;
window.bookingmileagetime=0;
window.refxarra=[];
window.refxarrb=[];
window._xoptions={};
window.controllerlat=0;
window.controllerlng=0;
window.controllercountrycode="UK";
 function init() {
   myajax({"api":"getadminuserlocation","uid":localStorage.getItem("id")},function( data, textStatus, jQxhr ){
              const center = { lat: data.data.latitude, lng: data.data.longitude };
              window.controllerlat=data.data.latitude;
              window.controllerlng=data.data.longitude;
              window.controllercountrycode=data.data.countrycode;
              printmap(window.controllerlat,window.controllerlng)
 const defaultBounds = {
  north: parseFloat(center.lat) + 0.05,
  south: parseFloat(center.lat) - 0.05,
  east: parseFloat(center.lng) + 0.05,
  west: parseFloat(center.lng) - 0.05,
};
 

 /*window._xoptions = {
  bounds: defaultBounds,
  componentRestrictions: { country: data.data.countrycode },
  fields: ["address_components", "geometry", "icon", "name"],
   types: ['(regions)'],
};    
    var pickuplocation = new google.maps.places.SearchBox(document.getElementById('pickuplocation'),window._xoptions);
   google.maps.event.addListener(droplocation, 'places_changed',  function() {
    var place = pickuplocation.getPlaces();
     
    window.pickuplat=(place[0].geometry.location.lat());
    window.pickuplng=(place[0].geometry.location.lng());
    var address = place[0].address_components;
    window.pickupzipcode=address[address.length - 1].long_name;
 getDistance();
 getDrivers();
  });
 var droplocation = new google.maps.places.SearchBox(document.getElementById('droplocation'), window._xoptions);
   google.maps.event.addListener(droplocation, 'places_changed', function() {
    
    var place = droplocation.getPlaces();
    window.droplat=(place[0].geometry.location.lat());
    window.droplng=(place[0].geometry.location.lng());
     var address = place[0].address_components;
    window.dropzipcode=address[address.length - 1].long_name;
  getDistance();

  });
     bindlocationsearch(document.getElementsByClassName("via1")[0],"via1");*/
           }); 
  
 

 
     
 
  }

  window.bindlocationsearch=function(ref,_classname){
    var location = new google.maps.places.SearchBox(ref,window._xoptions);
    var locationltr = google.maps.event.addListener(location, 'places_changed', function() {
    var place = location.getPlaces();
    console.log(place);
     var address = place[0].address_components;

    var zipcode = address[address.length - 1].long_name;
     
     $(ref).attr("data-zipcode",zipcode);
    $(ref).attr("data-lat",place[0].geometry.location.lat());
    $(ref).attr("data-lng",place[0].geometry.location.lng());
     getDistance();
    });
    window.refxarra[_classname]=location;
    window.refxarrb[_classname]=locationltr;
   
  }
 //google.maps.event.addDomListener(window, 'load', init);




function GetLatlong(address) {
  var geocoder = new google.maps.Geocoder();
 
  geocoder.geocode({
    'address': address
  }, function(results, status) {

    if (status == google.maps.GeocoderStatus.OK) {
      var latitude = results[0].geometry.location.lat();
      var longitude = results[0].geometry.location.lng();
      alert(latitude+" "+longitude);
    }
  });
}
</script>
    <title>Abrush Empire</title>
    <link rel="shortcut icon" href="img/Artboard-10.png" />
  </head>
  <body onload="startTimezz()">
   <input type="text" style="display: none;position: absolute;left:-1000px"  id="dropwaitingtime" autocomplete="off" value="0">
   <!---header start---------->
   <?php
    include "header.php";
   ?>
   <style>._jobtable{margin-top: 0px}</style>
     <div class="modal" id="errormodaldate" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px;">
    <div class="modal-content">
       
      <div class="modal-body">
               <h5 id="amerrorbxaxc" style="font-size:17px"></h5>

      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="clsxbtn" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
 <div class="modal" id="errormodalreturn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: left; left: 200px; margin-top: 360px;">
    <div class="modal-content">
       
      <div class="modal-body">
               <h5 id="amerrorbxreturn" style="font-size:17px"> </h5>

      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="clsxbtn" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
    <div class="modal" id="errormodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: right; right: 170px; margin-top: 360px;">
    <div class="modal-content">
       
      <div class="modal-body">
               <h5 id="amerrorbx" style="font-size:17px"> </h5>

      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary"  id="clsxbtnax"  >OK</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal" id="cancelbk" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document"  style="max-width: 500px;top:30%">
    <div class="modal-content">
       
      <div class="modal-body">
        <h5 id="amerrorbx">Are you sure you want to cancel this booking?</h5>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
                <button type="button" class="btn btn-primary" id="yescancel">Yes</button>

        <button type="button" class="btn btn-secondary" id="nocancel" data-dismiss="modal">No</button> 
        
      </div>
    </div>
  </div>
</div>
<div class="modal" id="errormodala" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: right; right: 170px; margin-top: 360px;">
    <div class="modal-content">
       
      <div class="modal-body">
        <h5 id="amerrorbxa"> </h5>
      
      </div>
      <div class="modal-footer" style="justify-content:center;">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
        
      </div>
    </div>
  </div>
</div>
   <div class="modal" id="confirmsaloonmodalax" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: left; left: 39%; margin-top: 220px;">
      
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" style="text-align:center;font-weight: bold;">This passenger normally has a saloon car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center> <p> 
Are you sure you want to take the saloon request off?
 <div style="margin-top:15px">
<label class="_onetmrpr"><input type="radio" name="ioplsys" id="saloonyes">&nbsp;<span>Yes</span></label>
       <label class="_onetmrpr"><input type="radio" name="ioplsys" id="saloonno">&nbsp;<span>No</span></label>
   </div>
   
</p></center>
  <center> <p> 
Do you want to remove saloon car as one time or permanently.<br>
 <div style="margin-top:15px">
      <label class="_onetmrpr"><input type="radio" name="iopls" id="onetime">&nbsp;<span>One Time</span></label>
       <label class="_onetmrpr"><input type="radio" name="iopls" id="permanent">&nbsp;<span>Permanent</span></label>
   </div></p></center>
      </div>
      <div class="modal-footer" style="justify-content:start">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="yesaloonax">Done</button>
      </div>
    </div>
  </div>
</div>
   <div class="modal" id="confirmsaloonmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 700px; float: left; left: 39%; margin-top: 450px;">
    <div class="modal-content">
       
      <div class="modal-body">
        <h4>Would the passenger like to have the saloon car permanently?</h4>
      
      </div>
      <div class="modal-footer" style="justify-content:start">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="yesaloon">Yes</button>
      </div>
    </div>
  </div>
</div>
   <div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Repeat Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <table class="table table-bordered" id="rttables" style="margin-top:0px">
         <tr><th>Day</th><th>Date</th><th>Going Time</th><th class="returnbokkingth">Return Time</th></tr>
         </table>
     <div class="row" style="display:none">
       <div class="col-sm-4">
        <label><input style="width:auto" id="isblockbooking" type="checkbox" ><span style="font-weight: bold;font-size:13px;position: relative;top:-2px;margin-left:5px">Block Booking</span></label>
       </div>
        <div class="col-sm-4">
          <input type="text" placeholder="From Date" id="blockfromdate">
        </div>
         <div class="col-sm-4">
          <input type="text"  placeholder="To Date" id="blocktodate">
        </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="savechanges">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <div class="modal" id="audiomodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:800px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Listen Audio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><img src="img/load.gif" id="audioloading" style="height:120px"></center>
         <table class="table table-bordered" id="audiotable" style="margin-top:0px">
     <tr><th>Date</th><th>Controller Name</th><th >Audio</th></tr>
     </table>
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
   <ul class='custom-menu'>
  <li data-action="view">View</li> 
  <li data-action="bandriver">Ban Driver</li> 

</ul>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

  <div class="modal" id="modala" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       
      <div class="modal-body">
         <b style='font-size:18px' id="msgdialog"></b>
      </div>
          <div class="modal-footer"  style="justify-content:center;"> 
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <div class="modal" id="modalmap" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:800px"  role="document">
    <div class="modal-content">
       
      <div class="modal-body">
       <div id="googleMap" style="width:100%;height:600px;"></div>
       </div>
          <div class="modal-footer" style="justify-content:center;">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   <!--------header end-------->
   
<div class="container" id="map-canvas" style="height:300px;display: none;"></div>
    <section class="inner_s_wrap">
      <div class="container-fluid mainctr"  >
        <div class="row" style="margin-bottom:30px">

          <div class="col-xl-4" style="max-width:39.5%;flex:0 0 39.5%; ">
            <div class="bxx_one">

              <div class="date_picker" id="dateShow">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <div class='input-group date'>
                 <img src="img/Artboard 17 copy.png" id="opendatepicker" >
                        <input style="margin-top:0px;font-size: 15px;font-weight: bold;" autocomplete="off" id="datepicker" placeholder="Select Booking Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <div class='input-group time' style="width:200px;float:right">
                                                <span style="font-size: 15px;margin-top: 0px;font-weight: bold;">Time</span>

                      <input type="text" autocomplete="off" style="width:38%;margin-top:0px;font-weight: bold;font-size: 13px;margin-right: 10px;height: 22px;"  placeholder="--:--" onkeypress="formatTime(this)" MaxLength="8"    id="timerx">
                         <img id="clockx" src="img/clock.png" style="width:18px;position:absolute;margin:3px 5px 4px 10px;height: auto;"> 
                         <div class="timer-box mtr-datepicker timer-box1" style="min-height:150px;">
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
                              </div>                              
							  <div id="barrowdownmin"  onclick="minminbkdate(this,'datepicker')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value divam" >AM</span> <span class="radio demoam" id="demoam"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:110px;justify-content: center;position: fixed;margin-left: 10px;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" style="margin-bottom:2px;" id="bookquote">
                <label class="col-sm-3" style="font-size:14;color:#fff"  >
                  <input checked type="radio" name="ax" class="chkcb chkcbvc" id="booking"> <span style="top: -4px;
    position: relative;">Booking</span>
                </label>
                
                <label class="col-sm-3" style="font-size:14;color:#fff"  >
                 
                  <input type="radio"  name="ax" class="chkcb chkcbvc" id="quotation"> <span style="top: -4px;
    position: relative;">Quotation</span>
                </label>
                <div class="col-sm-6" style="justify-content:end">
                <button type="button"   class="audiobutton" id="audiolisten"  ><i class="fa fa-music"></i> Audio</button>
                </div>
              </div>

              <div class="user_input_ro">
                <div class="row">
                  <div class="col-md-6">
                    <div>
                      <img style=" margin-top: 4px; margin-left: 10px;height: 18px;  width: auto;position: absolute;" src="img/businessman.png" class="wdth_user" >
                       <div class="plholder entername" style=" margin-top:-8px;margin-left:100px;"><span>Enter Name</span></div> 
                      <input type="text" style="margin-top:1px;padding-left:40px" id="fullname"  onkeyup="firstCapitalAlways(event);" placeholder="Enter Name" class="_reddc"  tabindex="-1" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="left_ic">
                         <div class="plholder entercontact" style=" margin-top:-8px;width: 185px;"><span>Enter Contact Number</span></div> 
                      <span id="starterxx" style="padding:0px;display:none;font-size:14px;margin-top:1px;display: none;">0</span><input style="padding-left:2px;margin-top:1px;margin-left: -7px;" type="text"  tabindex="-1"  class="_reddc" autocomplete="off" maxlength="11" onkeyup="searchbookingbymobile(this.value)"   autocomplete="off" id="mobile" placeholder="Enter Contact Number" data-aa="Enter Contact Number">
                      <div class="_mboption">
                      <img src="img/email.png" style="width: 20px" class="wdth">
                      <img src="img/phonecall.png" style="width: 17px; margin-right: 6px; padding-top: 0px;"  class="wdth_phn"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="address_wrap">
                <div class="extendeddiv"></div>
                <div class="row"  style="margin:0px;display:none;">
                 <div class="col-sm-1" style="padding:0px;max-width: 11.5%;flex: 0 0 11.5%;width:85px"></div> <div class="col-sm-1" style="text-align: center;flex: 0 0 3.333333%; max-width: 3.333333%;padding: 0px;margin-right: 5px;
    margin-left: 10px;">
</div>
                  <div class="col-md-6 " style=" padding:0px;padding-left:5px;max-width: calc(57.666667% - 70px);">
                    <input type="text"  style="margin-top:2px; "   autocomplete="off" id="addressax_" placeholder="House No. Flat, Block, Building, Restaurant, Shop">
                  </div></div><div class="clearfix"></div><div id="mklht" class="row"  style="margin-left: 7px;margin-right: -25px; width: 153%;">
                        <div class="col-sm-1" style="padding:0px;max-width: 6.9%;flex: 0 0 6.9%;margin-top:4px">
                         <div class="_ikmnpl "><img onclick="minusbn(this)" src="img/substract.png" class="minusbn"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="5" id="pickupwaitingtime"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"  ></div>
                         <div class="_ikmnpl mnjjxzl"> <img onclick="minusbn(this)" src="img/substract.png" class="minusbn"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="5"> <img src="img/Artboard 17 copy 4.png" class="plusbn"  onclick="plusbn(this)" > </div>
                         
                    </div>
                  <div class="col-sm-1" style="text-align: center;    flex: 0 0 2.5%;
    max-width: 2.5%;
    padding: 0px;
    margin-right: 5px;
    margin-left: -5px;">
                    <div>
                      <span class="dotsax">
                        <span class="_strty"><img src="img/a.png" class=" startgreen  one_r"  style="margin-top:-7px" ></span>
                        <span class='_lopepe'>*</span>
                        <span class='_lopepe'>*</span>
                        <span class='_lopepe'>*</span>
                        <span class='_lopepe'>*</span>
                        <span class='_lopepe'>*</span>
                        <span class='_lopepe'>*</span> 
                         <span class='_lopepe'>*</span> 
                          <span class='_lopepe'>*</span> 
                        <span style="margin-top:-6px"> <img src="img/b.png" class=" startgreen  one_r"  ></span>
                      </span>
                     </div>
                    </div>
                      <div class="col-sm-6" style="padding-right: 0px;flex: 0 0 55%; max-width: 55%;">
                      <div>
                        <div class="lcoptions">
                        <!--   <img src="img/arrow-down.png" class="drpdowncx"  />-->
                        <div class="mapsxboxd">
                        <img src="img/maps.png" class="mapsx pickupmap" />
                    </div>
                    </div>
                        
                       <div class="plholder pickuplocation"><span>Pickup Location</span></div> 
					   <div class="resulttry" onclick="showinpfld(this)"></div>
                      <input type="text"   onblur="reinitdbc(this,event)" style="margin-top:2px"  onkeyup="firstCapitalAlways(event);"  autocomplete="off" id="pickuplocation"  placeholder="Pickup Location"> 
                      <div class="lcdropdown pickupdrpdn"><div class="boldx allloading" style="display: none;">Loading...</div></div>
                      </div>
                    <div class="vias">
                      <div id="_startervia" >
                      <div style="display:inline">
                           
                     <div class="lcoptions">
                     <!--   <img src="img/arrow-down.png" class="drpdowncx"  />-->
                        <div class="mapsxboxd">
                         <img src="img/maps.png" class="mapsx _mapsx" onclick="showviamap(this)"/>
                    </div>
                    </div>
                     <div class="plholder viazdkk"><span>Drop Location</span></div>
                         <div class="resulttry" onclick="showinpfld(this)"></div>
                    <input type="text"  style="margin-top:2px"  class="viaaz via1" onkeyup="mklccall(this,event)" onblur="reinitdbc(this,event)" autocomplete="off" placeholder="Via">
                      <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div>
                    </div>
                    
                   </div>
                  </div>
                   <div> 
                     <div> 
                           
                       <div class="lcoptions">
                        <!--   <img src="img/arrow-down.png" class="drpdowncx"  />-->
                        <div class="mapsxboxd">
                        <img src="img/maps.png" class="mapsx dropmap" />
                    </div>
                    </div>
                     <div class="plholder droplocation"><span>Drop Location</span></div>
                         <div class="resulttry" onclick="showinpfld(this)"></div>
                      <input type="text"   onkeyup="firstCapitalAlways(event);"   onblur="reinitdbc(this,event)" style="margin-top:2px" autocomplete="off" id="droplocation" placeholder="Destination"> <div class="lcdropdown dropdrpdn"><div class="boldx allloading" style="display: none;">Loading...</div></div></div></div>
                   </div> 
                   <div class="col-sm-1" style="padding:0px;padding-left: 4px; max-width: 5.5%;  flex: 0 0 5.5%;margin-top: 4px;z-index:999">
                     <div class="_ikmn "><i style="color:#0fdee5;font-size: 16px;margin-left: 3px;" class="fa fa-envelope"></i></div>
                    <div class="_ikmn firstlcf"> <img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removeviax(this)"  ><img src="img/Artboard 17 copy 4.png" class="addcloseac  " onclick="newaddvia()" id="addvia" style="margin-left: 22px; width: 17px; margin-top: 2px;"></div>
                       <div class="_ikmn" id="reverselocation"><img src="img/Artboard 17 copy 6.png" class="addcloseac two_r"  ></div>
                   </div>
                    <div class="col-sm-3" style="padding:0px;padding-right:calc(0.2% + 8px);flex: 0 0 30%; max-width: 30%;margin-top: 4px;padding-left: 4px;z-index:999">
                         <div class="_ikmnp "> <input  onkeyup="firstCapitalAlways(event);"   type="text"   autocomplete="off"  id="pickupnote" class="_reddc"  placeholder="Enter Note"> </div>
                         <div class="_ikmnp mnjjxz"> <input  onkeyup="firstCapitalAlways(event);"   type="text"   autocomplete="off"   class="_reddc" placeholder="Enter Note"> </div>
                         <div class="_ikmnp "> <input  onkeyup="firstCapitalAlways(event);"   type="text"   autocomplete="off"  id="dropnote" class="_reddc"  placeholder="Enter Note"> </div>
                    </div>
                  </div>
                 <!-- <div class="col-md-1">
                    <div class="postn_img_left leftimg">
                      <img src="img/Artboard 17 copy 4.png" class="one_r" id="addvia">
                      <img src="img/Artboard 17 copy 6.png" class="two_r">
                    </div>
                  </div> -->
                  <div class="row" style="padding: 0px;"><div class="col-sm-12">
                    <div style="padding-left: 10px; padding-right: calc(6.2% + 3px);">
                        <div class="plholder pickuplocation" style=" margin-top:-8px;width: 180px;"><span>Pickup Location</span></div> 
<input type="text" style="margin-bottom:5px"  class="_reddc" autocomplete="off" id="notes" placeholder="Add notes for driver"  onkeyup="firstCapitalAlways(event);"  >
</div>
                  </div></div>
                  <div class="clearfix"></div>
<div class="row" style="padding:0px;margin-bottom: 5px;">

<div class="col-sm-2" style="flex: 0 0 22%; max-width: 22%;padding-right:0px; ">
<div class="flex_lugge" style="padding-left:10px">
                      <span  class="_dropdown"  style="width:100%;min-width: 130px;" >
                        <img src="img/Artboard 17 copy 7.png" style="    height: 14px;
    margin-left: -5px; width: auto;display: none;">
    <i class="fa fa-shopping-basket" style="margin-top: 6px; display: inline-block;"></i>
                        <label for="cars" class="mg_tb" style="margin:0px;padding:0px; margin-left:2px">H-Luggage</label>
                         
                    <span  class=" ddrrr" style=" position: absolute;
    width: 26px;background: transparent;right: 0px;"><i id="handluggage" class="_xmsg" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"  ></i> </span>
                      
                      </span>
                        <ul class="xdropdown"  style="width:calc( 100% - 40px );max-height: 285px;">
                        <li>0</li>

                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                  </ul>
                    </div>
    </div>
    <div class="col-sm-2"  style="flex: 0 0 22%; max-width: 22%;padding-right: 0px;">
 <div class="flex_lugge"  style="justify-content:left">
                      <span class="_dropdown" style="width:100%;min-width: 130px;" >
                        <img src="img/Artboard 17 copy 5.png" style="width:15px;margin-left:-5px;margin-top: -3px;display: none;">
                         <i class="fa fa-suitcase"></i>
                        <label for="cars" class="mg_tb" style="margin:0px;margin-top: 3px;padding:0px; margin-left:2px">Suitcase</label>
                              <span   class="  ddrrr"  ><i id="suitcase" class="_xmsg" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"  ></i></span>
                       
                      </span>
                        <ul class="xdropdown" style="width:calc( 100% - 40px );max-height: 285px;">
                                                <li>0</li>

                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                  </ul>
                    </div>
    </div>
    <div class="col-sm-2" style="flex: 0 0 22%; max-width: 22%;padding-right:0px;padding-left:20px">
     <div class="flex_lugge" style=" ">
                  <span class="_dropdown"  style="width:100%;min-width: 150px;">
                    <img src="img/Artboard 17 copy 2.png" style="padding: 2px;display: none;"> 
                        <i class="fa fa-users"></i>
                    <label for="cars">Passengers</label>
                    <span  class=" xpassengers ddrrr"><i id="passengers" class="_xmsg xpassengersa" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"  ></i>
</span>
                  </span>
                  <ul class="xdropdown xmapassengers">
                    <li>0</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>

                  </ul>
                </div>
</div>
<?php 
//if($ovcountrycode=="UK") {
if(true){
 ?>
    <div class="col-sm-3" style="flex: 0 0 34%; max-width: 34%;padding-left: 20px;padding-right: calc(7.3% + 3px);"><div class="flex_lugge" style="padding-right: calc(0.2% + 4px);">
                      <div class="_dropdown" style="width:100%;padding:1px;margin-top:4px;border: 1px solid #b2b2b2; border-radius: 7px;  background: #fff;height:25px">
                         <i class="fa fa-truck" style="margin-left:5px;font-size: 17px;"></i>
                        <label for="cars" class="mg_tb" id="_capabilityuj" style="padding:0px;margin:0px;margin-left:2px">Vehicle Type</label>
                         
                    <span   class=" ddrrrx" style=" position: absolute;
    right: 71px;"> <i class="fa fa-sort-desc down_arrow"></i> </span>
                      
                      </div>
                        <ul class="xdropdown  specialvehicle" style="width: calc(100% - 60px); max-height: 285px; margin-top:34px">
                             <li class="specialrequestimgchld specialrequestimg xmnormal"><img src="img/anormal.png" ><span>Normal</span> <input type="checkbox" class="chkcb"   id="normal"> <div class="mnbox"></div></li>
                             <li class="specialrequestimgchld specialrequestimg xmautorikshaw"><img src="img/aautorikshaw.png" ><span>Auto Rikshaw</span> <input type="checkbox" class="chkcb"   id="autorikshaw"> <div class="mnbox"></div></li>
                             <li class="specialrequestimgchld specialrequestimg xmmotorbike"><img src="img/amotorbike.png" ><span>Motorbike</span> <input type="checkbox" class="chkcb"   id="motorbike"> <div class="mnbox"></div></li>
                        <div style="display: none;">
                         <li class="specialrequestimg"><img src="img/Artboard 17 copy 14.png" ><span>Wheelchair</span> <input type="checkbox" class="chkcb"   id="wheelchair"> <div class="mnbox"></div></li>
                         <li class="specialrequestimg _xpets"><img src="img/Artboard 17 copy 16.png" ><span>Pets</span> <input type="checkbox"  class="chkcb"   id="pets">  <div class="mnbox"></div>
 <div class="images_checkbox animalsbox capotherbox" style="display:none;justify-content: center;padding: 0px;margin:0px;margin-top: 10px;">
                  <div class="row" style="margin: 0px;width: 100%;">
                <label class=" " style="font-size:14px;color:#000;padding-right:0px;display: flex;margin-bottom: 0px;">
                    <div class="_rdcoverradio"></div>
                  <input   type="radio" name="axcfv" class="chkcb chkcbvc" data-nm="Guard Dog" id="guarddog" > <span style="margin-left: 4px; margin-top: 2px;
    position: relative;">Guard Dog</span>
                </label>
                
                <label class=" " style="font-size:14px;color:#000;padding-right:0px;justify-content: center;display: flex;margin-bottom: 0px;">
                  <div class="_rdcoverradio"></div>
                  <input type="radio" data-nm="Animal Dog"  name="axcfv" class="chkcb chkcbvc"  id="animaldog" > <span style="margin-left: 4px; margin-top: 2px; position: relative;">Animal Dog</span>
                </label>
                  <label class=" " style=" display: flex;margin-bottom: 0px; justify-content: flex-end;font-size:14px;color:#000;">
                  <div class="_rdcoverradio"></div>
                  <input type="radio" data-nm="Cat"  name="axcfv" class="chkcb chkcbvc"  id="cat"> <span style="top: 0px;margin-left: 5px; margin-top: 2px; position: relative;">Cat</span>
                </label>
              </div>
                 
                  
                </div>
                         </li>
                    <li class="specialrequestimg"><img src="img/pram.png" ><span>Pram</span><input type="checkbox"  class="chkcb"    id="pram"> <div class="mnbox"></div></li>
                     <li class="specialrequestimg _xsaloon"><img src="img/fishing.png" ><span>Saloon</span>   <input type="checkbox"  class="chkcb"  id="lowvehicle">  <div class="mnbox"></div> </li>
                     <li class="specialrequestimg"><img src="img/bycicle.png" ><span>Bicycle</span> <input type="checkbox"  class="chkcb" id="bicycle"> <div class="mnbox"></div></li>
                      <li class="specialrequestimg"><img src="img/scooter.png" ><span>Scooter</span> <input type="checkbox"  class="chkcb"   id="scooter"> <div class="mnbox"></div></li>
                    <li class="specialrequestimg sboxes"><img src="img/box.png" ><span>Boxes</span> <input type="checkbox"  style="margin-left:2px" class="chkcb" id="boxes"><div class="mnbox"></div>
 <div class="images_checkbox boxesbox capotherbox" style="display:none;justify-content: center;margin-top: 10px;">
                <div class="row   "  style="margin: 0px;margin-bottom:10px; ">
           
                  <div class="col-sm-12" style=" margin-left:5px"> 
                      <select  style=" border:1px solid #eaeaea" class=" "  id="sizetype"> 
                      <option value="0">Select Size</option>
                       <option value="1">Large Size</option>
                        <option value="2">Small Size</option>
                      </select>
                   
                   
                  </div> 
                  <div  class="col-sm-12" style=" margin-left:5px;margin-top:5px"> 
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
            </div>
                     </li>
                    <li class="specialrequestimg"><img src="img/fishing.png" ><span>Fishing</span> <input type="checkbox"    class="chkcb" id="fishing"><div class="mnbox"></div> </li>
                     <li class="specialrequestimg _xxitems"><img src="img/fishing.png" ><span>Items</span> <input type="checkbox" class="chkcb" id="items"><div class="mnbox"></div>
                        <div class="images_checkbox itemsbox capotherbox" style="display:none;justify-content: center;margin-top:10px;">
                 <div class="row   "  style="margin: 0px; ">
                     
                  <div class="col-sm-12" style="justify-content: center;"> 
                    <input type="text" autocomplete="off" id="noofitems" placeholder="Enter Items" style="border:1px solid #eaeaea">
                  </div>
                 
                </div>
            </div>
                      </li>
                     <li class="specialrequestimg"><img src="img/fishing.png" ><span>Shopping</span>  <input type="checkbox"  class="chkcb"  id="shopping"> <div class="mnbox"></div> </li>
                    
                     <li class="specialrequestimg"><img src="img/fishing.png" ><span>High Vehicle</span>    <input type="checkbox"    class="chkcb"  id="highvehicle">  <div class="mnbox"></div> </li>
                    <li class="specialrequestimg"><img src="img/truck.png" ><span>Parcel</span>  <input type="checkbox"  class="chkcb"  id="parcel"><div class="mnbox"></div> </li> <div>
                     </ul>
                    </div></div>
                <?php } ?>
    </div>
    <div class="clearfix"></div>
    <div class="row" style="padding:0px;padding-bottom: 5px;padding-right: calc(3.2% + 10px);">
    <div class="col-sm-6" style="padding-left: 25px;"> <div style=" padding: 7px;  background: #000; border-radius: 10px;padding-bottom: 1px;">
                <div class="rpeat_top_bar_flex" >
                  <span class="bookings">
                    <img src="img/Artboard-17-copy-13.png">

                    Repeat Booking
                  </span>
                  <div  style="width:110px"><span class="on_off">OFF</span>
                 <div class="toggle-btn _repeatbooking">
  <input type="checkbox" class="cb-value repeatbooking" />
  <span class="round-btn"></span>
</div><span class="on_off" style="margin-left: 7px;">ON</span>
</div>

                </div>

                <div class="days_selected">
                  <span data-d="Mon" class="daya1" data-c="1">M</span>
                  <span data-d="Tue" class="daya2" data-c="2">T</span>
                  <span data-d="Wed" class="daya3" data-c="3">W</span>
                  <span data-d="Thu" class="daya4" data-c="4">T</span>
                  <span data-d="Fri" class="daya5" data-c="5">F</span>
                  <span data-d="Sat" class="daya6" data-c="6">S</span>
                  <span data-d="Sun" class="daya7" data-c="7">S</span>
                  <div class="btns_cnfrm repeatbookingedit"  >
                  <button type="button" style="background:#858585;padding:1px 10px;font-size: 13px" class="confrm" id="edittime">Edit</button>
              </div>
                </div>
</div>   </div>
<div class="col-sm-6" style="padding-left: 0px;"> <div style="padding-right:calc(2.2% + 8px)"><div style=" padding: 7px;  background: #000; border-radius: 10px;">

                <div class="rpeat_top_bar_flex">
                  <span class="bookings">
                    <img src="img/Artboard-17-copy-15.png">
                    Return Booking
                  </span>
                   <div style="width:110px"><span class="on_off">OFF</span>
                   <div class="toggle-btn _returnbooking" style="margin-right:6px">
  <input type="checkbox" class="cb-value returnbooking" />
  <span class="round-btn" style="margin-top:-0.03em"></span>
</div>
<span class="on_off">ON</span>
</div>
                </div>

                <div class="date_picker" style=" height:22px;margin-bottom: 2px;margin-top: 5px;">
                <div class="row isreturnx" style="display:none">
                  <div class="col-md-7">
                    <div class="form-group">
                      <div class="input-group date">
                 <img src="img/Artboard 17 copy.png" id="opendatepicker1">
                        <input data-date-format="dd/mm/yyyy" id="datepicker1" style="font-size: 15px;font-weight: bold;padding:0px 5px;height: 21px;" placeholder="Return Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group time" style="width:160px;float:right">
                                                <span style="font-size: 15px;font-weight: bold;">Time</span>

                        <input type="text" autocomplete="off" style="width:60%;font-size: 15px;font-weight: bold;height: 21px;" placeholder="00:00 AM" onkeypress="formatTime(this)" maxlength="8" id="timerx1">
                         <img id="clockx1" src="img/clock.png" style="width:18px;position:absolute;margin:2px 2px 4px 10px;height: auto;"> 
                           <div class="timer-box mtr-datepicker timer-box2">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" id="barrowup2" onclick="inchourbkdate(this,'datepicker1')"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" id="bdemohour2"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down" id="barrowdow2n"   onclick="minhourbkdate(this,'datepicker1')" ><span></span></div>

                            </div> 
                             <div class="mtr-input-slider"> 
                              <div class="arrow up"  id="barrowupmin2"  onclick="incminbkdate(this,'datepicker1')"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" id="bdemominute2"   data-value="10" maxlength="2" >
                              </div>                              <div id="barrowdownmin2"  onclick="minminbkdate(this,'datepicker1')"  class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value divAM">AM</span> <span class="radio demoam" id="demoam2"  ></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm2"  ></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;width: 100%;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div></div></div>


</div>
 <div class="clearfix"></div>
                  <div class="row" style=" margin: 0px;padding-right: calc(2.3% + 10px);">
                  <div class="col-md-6"  >
                    <div class="plholder flightnum" style=" margin-top:-8px; "><span>Pickup Location</span></div> 
<input type="text" id="flightnumber" style="padding-left: 8px;"    class="_reddc" placeholder="Flight Number"  onkeyup="firstCapitalAlways(event);"   autocomplete="off" class="input_flight">
                  </div>
                   <div class="col-md-6" style="padding-left: 0px;padding-right: calc(2.2% + 8px);">
<input type="text"  id="reference" style="padding-left: 8px;"     autocomplete="off" readonly placeholder="Reference" class="input_reference">
                  </div>
                </div>
                  <div class="clearfix"></div>
                <div class="row" style="justify-content: center;">
<div class="rpeat_days_bx">
                           
                
              

                <div class="mileage_pr" style="margin-top:0px">
                  <p class="m_on xmon">Kilometer<br><strong  class="xbbbl" id="ttlmileage">&nbsp;</strong></p>
                  <p class="m_on xmon" style="background-image:linear-gradient(to right, #87037c , #d701c5);margin-left:5px">Time<br><strong class="xbbbl" id="ttltime">&nbsp;</strong></p>
                  <p class="p_on xmon" style="margin-left:5px">Price<br><strong class="xbbbl">&nbsp;</strong></p>
                  <p class="f_on xmon" style="margin-left:5px" id="fixedbx" data-price="0.00" ><span class="fxtitle">Fixed</span> <strong class="xbbbl">&nbsp;</strong></p>
                  <div class="btns_cnfrm fixededitbox" style="padding-left:20px;display:none; margin-top:4px; width:220px">
                    <div style="position:absolute;margin-top: -7px;">
                    <div style="float: left;width: 140px;">
                  <span style="color: #000;position: absolute; font-size: 16px;  margin-left: 5px;margin-top: 10px;">Rs</span>
                <input type="text" autocomplete="off" style="padding-left:27px;margin-top: 10px;" class="_reddc" autocomplete="off" id="fixedprice" placeholder="Enter Fixed Price"> 
            </div>
                <button type="button" style="margin-left:10px;padding: 2px;height: 23px;margin-top: 10px;" class="confrm" id="addfixed"  >Confirm</button>
            </div>
           <!--  <div class="ispermanent" style="position:absolute;margin-left: 0px;margin-top: 30px;display: none;"><input style="width:14px;float:left; " type="checkbox" id="ispermanentfixedprice">&nbsp;<span style="float:left;margin-left: 5px;margin-top: 3px;">Permanent</span></div>-->
              </div>
             
                </div>

                
              </div>
                </div>
                </div>
               <div class="clearfix"></div>

              <div class="hand_luggage">
                
              

               
              
                <div style="display: none;">
                <div class="row" style="margin-left:0px;margin-right:0px;margin-top:-10px"><div class="alocat_d lst" style="width:100%">
                  <label class=" " style="width:110px">
                    <input type="checkbox" class="chkcb chkcbvc _am sms"> <span class="_bm">SMS</span>
                  </label>
                  <input type="text" style="width:100%" autocomplete="off" id="sms" disabled="true">
                </div>
            </div> <div class="clearfix"></div>
                <div class="row" style="margin-left:0px;margin-right:0px">
                <div class="alocat_d lst" style="width:100%">
                  <label class=" " style="width:110px">
                    <input type="checkbox" class="chkcb chkcbvc _am email"> <span class="_bm">Email</span>
                  </label>
                  <input type="email"  autocomplete="off" id="email" disabled="true">
                </div></div>
            </div>
              </div>

            </div>
          </div>


           <div class="col-xl-4" style="max-width:21%;flex:0 0 21%">
            <div class="rpeat_boking">
              
              <div class="rpeat_column rgbg_bg">
                <div class="bx_1 rgbg_p">
                  <span id="iused">0 Used</span>
                  <span id="icancelled">0 Cancelled</span>
                  <span id="inofare">0 No Fare</span>
                  <span id="irunner">0 Runner</span>
                </div>
                <div class="mg_bx1" style="white-space: nowrap;margin-right:5px;">
                  <span>&nbsp;</span>
                  <span>Ban Driver</span>
				  <span>&nbsp;</span><span>&nbsp;</span>
			       <input autocomplete="off" id="txtbandriver"  class="_reddc"   onkeyup="return searchbancallsign(this.value,event)" style="width:140px;padding-left:3px; border:1px solid blue;" type="text" autocomplete="off"> <span id="divbanbtn" style="display:none">  <button type="button" class="banbtn" id="yesban" style="margin-left: 5px;" onclick="bandriverformobile()" onmouseover="chgclr('Y');">Yes</button>&nbsp;&nbsp;&nbsp;<button type="button"  class="banbtn" id="noban" style="background: #a8a1a1" onclick="unbandriver()" onmouseover="chgclr('N');">No</button></span>
				   <div class="clearfix"></div>
                <div class="xbandriver xshow " style="width:260px;">
                    <div id="loading" class="boldx">Loading...</div>
                    <div id="dxbanlist">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                     </div>

                  </div>
			   </div>
                <div class="bx_1">
                  <span class="block" id="amountowed"  >&nbsp;</span>
                <!--  <span class="block"><img src="img/Artboard 46.png">Notes</span>
                  <span class="block"><img src="img/Artboard 455.png" style="width: 
                  18px;height: 18px;">Block </span>-->
				   <span class="block">&nbsp;</span>
                  <span class="block"><img src="img/Artboard 455.png" style="width: 
                  18px;height: 18px;">Block Customer</span>
                </div>
              </div>

           
              

            </div>
            <div class="notebox"></div>
            
             <div class="mapxdbox" id="mapxdbox"></div>
          </div>


           <div class="col-xl-4" style="max-width:39.5%;flex:0 0 39.5%;padding-right: 6px;padding-left: 0px;">
            <div class="atm_card_wrapper">

             <div class="" style="height: 336px;background: #ffffff3c;padding:5px 5px 8px 0px">

              <div class="table_s table_xd tabledrivers amdriverbnv">
                <table class="table" style="margin-top:0px">
                  <thead>
                    <tr>
                      <th class="no_bg"></th>
                       <th>Waiting</th>
                      <th>Distance</th>
                      
                     <th>Driver</th>
                      <th>Price</th>
                      <th>Vehicle</th>
                      <th>Time</th>
                     
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody id="driverlist">  </tbody>
                </table>
              </div>
             <!--   <div class="checkbox_yes amdriverbnv" style="margin-left:15px;color:white;">
                <label class="containerr">
                  <input type="checkbox" id="selectmultiplevehicles" >
                  <span class="checkmark"></span>
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Select Multiple Vehicles
              </div>-->
              <div class="row amdriverbnv" style="margin-top: 7px;margin-left: 17px;">
               
                <div   style="color:#fff;width:115px">Allocate driver</div>
                <div  class="col-sm-7">
                <div id="allocateddriverlist"></div><input autocomplete="off" id="allocatedriver"  class="_reddc"   onkeyup="return searchcallsign(this.value,event)" style="width:140px;padding-left: 3px;" type="text" autocomplete="off">
				<!--<div class="ispermanent" style="display: none;"><input style="width:9%;float:left;" type="checkbox" id="ispermanent">&nbsp;<span style="float:left;margin-left: 5px;"  >Permanent</span></div>-->
				<div class="clearfix"></div>
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
              </div>

              <div class="driverbox amdriverbnv" >
                <div class="row" style="margin:0px"><div class="col-sm-6">
              <div class="driver_bxxs">
                <span class="details_driv">
                  
                  <span class="user_pt" >
                    <img src="img/testimonialimage4.jpg" id="xprofilepic">
                  </span> 
                  
                </span>
                <span class="driver_details" style="width: 80%;">
                  
                  <p style="display: none;" >
                     
                    <span>Badge No</span>
                    <span>Call Sign</span> 
                  </p>
                  <p  > 
                    <span id="xdrivername"></span> 
                    <span id="xcallsign"></span> 
                  </p>
                  <p class="bg_c_two"  style="display: none;">
                    <span>Driver Name</span> 
                    <span>Rating</span> 
                  </p>
                  <p class="bg_c_two" style="margin-top:5px">
                    <span id="xbadgeno"></span> 
					 <i style="font-size: 16px;margin-left: 5px;cursor: pointer;" class="fa fa-phone"></i><i style="font-size: 16px;margin-left: 10px;cursor: pointer;" class="fa fa-envelope"></i>
                    <span ><img src="img/index.png" id="xstarrating" style="width:65px;display: none;"></span> 
                  </p>
                 
                </span>
              </div>
          </div><div class="col-sm-6" style="padding-left:0px">
              <div class="driver_bxxs">
                <span class="details_driv">
                 
                  <span class="user_pt"  >
                    <img src="img/testimonialimage4.jpg" id="xcarimage1">
                  </span>
                
                </span>
                <span class="driver_details" style="width:80%">
                  <p  style="display: none;">
                    <span>Colour</span>
                    <span>Make</span>
                    <span>Model</span>
                  </p>
                  <p   >
                    <span id="xcolor"></span>
                    <span id="xmake"></span>
                    <span id="xmodel"></span>
                  </p>
                  <p class="bg_c_two"  style="display: none;">
                    <span>Registration</span> 
                    <span>Plate No</span> 
                  </p>
                   <p class="bg_c_two" style="margin-top:5px;justify-content: center;">
                    <span id="xregistration"></span> 
                    <span id="xplateno" style="display:none;"></span> 
                  </p>
                  <div class="btns_dr " style="display:none;">
                    <button type="button" style="font-size: 17px;"> <strong style="display:block; ">0 m</strong></button>
                    <button type="button" style="font-size: 17px;" class="time">Time<strong  style="display:block;margin-top:5px">0 h</strong></button>
                  </div>
                </span>
              </div>
          </div></div>
          <div class="row" style="justify-content:center;"> <div class="btns_dr" style="margin-left: -20px;"  >
                    <button type="button" class="mnddrt" style="font-size: 14px;"><span>Distance : </span><b  >0 m</b></button>
                    <button type="button" style="font-size: 14px;margin-left: -10px;" class="time mnddrt"><span>Time : </span><b  >0 h</b></button>
                  </div></div>
</div>
              </div>

              <div class="atm_b">
                <div class="_cover" style="height: 85px;z-index:-1;"></div>
                <div class="row axdcvf" style=" margin-left:0px;">
                 <label class="col-sm-2 ccpaymenttype dmnkcash" style="flex: 0 0 18.666667%;  max-width: 18.666667%;" >
                  <div class="covercashcheck"></div>
                  <input checked="" type="radio" name="paymenttype" class="chkcbrd chkcbvc" id="cash"> <span  >Cash</span><i class="fa fa-sort-desc down_arrowcash"  ></i>
              
                  <ul class="xdropdown xmcash" style="width:100%">
                    <li>Cash</li>
                    <li>Money First</li> 
                  </ul>
                </label>
                
                <label class="col-sm-2 ccpaymenttype  _prepaidx" >
                
                  <input type="radio" name="paymenttype" class="chkcbrd chkcbvc" id="prepaid"> <span  >Pre-Paid</span>
                </label> 
<!--
                <label class="col-sm-2 ccpaymenttype _depositx" >
                
                  <input type="radio" name="paymenttype" class="chkcbrd chkcbvc" id="deposit"> <span  >Deposit</span>
                </label> -->
                 <label class="col-sm-5" style=" padding:0px 0px 0px 5px; margin-left: 5px;display:none"> 
                    <div class="flex_lugge" style=" ">
                  <span class="_dropdown"  style="width:100%;min-width: 150px;margin-top:0px">
                     
                        <i class="fa fa-university "></i>
                    <label for="cars" id="account">Select Account</label>
                    <span  class=" xpassengers ddrrr">   <i class="fa fa-sort-desc down_arrow"  ></i></span>
                  </span>
                  <ul class="xdropdown xaccount" style="width:100%">
                    <li>Richborough Nursing Home</li>
                    <li>Account 1</li>
                    <li>Account 2</li>
                    <li>Account 2</li>
                    <li>Un-Select</li>
                  </ul>
                </div>
                 </label>
              </div>
                 <div class="row  axdcvf" style="height:42px;z-index:-1">
				
                  <div class="col-md-12 creditcardbox" style="display: none;padding-left: 0px;margin-top:-10px;">
                    <div style="background: #ffffff4a;padding: 7px;border-radius: 7px;">
                        
                        <div class="row"><div class="col-sm-12">

                             <input type="text" class="cardinp depositamountbox" id="depositamount" style="width:70px" placeholder="Amount">
                             <input type="text" name="ccn" class="cardinp" style="padding-right:4px" maxlength="16" id="cardnumber" placeholder="XXXX XXXX XXXX XXXX" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                               <input class="cardinp" style="width: 113px"   type="text" style="padding-right:4px" onkeypress="return  enbname(event)" id="cardname" autocomplete="off" placeholder="Name On Card">
                             <input class="cardinp" style="width: 65px"  maxlength='5' placeholder="MM/YY" type="text" id="cardexpirydate" onkeyup="formatString(event);">
                               <input class="cardinp" style="width: 45px"   type="text" maxlength='3' autocomplete="off" placeholder="cvv" id="cardcvv" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                               <div class="btns_cnfrm " style="display: inline-block;margin-top: 0px;margin-left: 10px;">
                        <button type="button" class="confrm" id="processcreditcard" style="font-size:13px;padding:0px;width:100px">Process</button>
                        <span  class="pre-paid creditcarderror"></span>
                        <img src="img/load.gif" id="creditcardloading" style="width: 41px; margin-top: -25px;  position: absolute;display:none;">
                      </div>
                     
                </div>
             <div class="col-sm-3">
                    <div class="postn_bb">
                      
                      
                    </div>
                  </div></div>
                </div>
                  </div>
                 <div id="OldOwedshow" class="col-md-12 blink" style="color:red;padding-left:10px;position: absolute;margin-top:25px; margin-left:20px;">
				
				</div>
				<div id="Stampshow" class="col-md-12 " style="display:none; margin-left:500px;">
				<span class="stamp is-prebook">Active</span>
				</div>
                </div>
                
              </div>

              <div class="left_s_apacing" style="margin-top: 35px;">
               <!-- <div class="alocat_d lst">
                  <label class=" " style="width:110px">
                    <input type="checkbox" class="chkcb chkcbvc _am sms"> <span class="_bm">SMS</span>
                  </label>
                  <input type="text" autocomplete="off" id="sms" disabled="true">
                </div>
                <div class="alocat_d lst">
                  <label class=" " style="width:110px">
                    <input type="checkbox" class="chkcb chkcbvc _am email"> <span class="_bm">Email</span>
                  </label>
                  <input type="email" autocomplete="off" id="email" disabled="true">
                </div>-->
<img src="img/load.gif" style=" width: 55px; margin-top: -5px; position: absolute;display: none;" id="loadingaxd">
                <div class="btns_cnfrm btns_cnfrmcx">
                  <button type="button" id="cancel">Cancel</button>
                  <button type="button" class="confrm" id="confirm"  >Confirm</button>
              <button type="button" class="confrm" style="display:none" id="audit">Audit</button>
               

                </div>
                <span id="xerrormsgs"></span>
              </div>

            </div>
          </div>
</div></div> <div class="container-fluid" style="margin-top:-27px" >
<div class="row" style="line-height: 0px;margin-bottom: 10px;" >
<div class="col-sm-6">
  <div class="_bnx"><div class="crclgreen"></div>&nbsp;&nbsp;Active</div>
   <div class="_bnx"><div class="crcleblue"></div>&nbsp;&nbsp;Pre-Booking</div>
   <div class="_bnx"><div class="crcleorange"></div>&nbsp;&nbsp;Quotation</div>
    <div class="_bnx"><div class="crclegray"></div>&nbsp;&nbsp;Completed</div>
	<div class="_bnx"><div class="crclecan"></div>&nbsp;&nbsp;Cancelled</div>
	<div class="_bnx"><div class="crclenofare"></div>&nbsp;&nbsp;No Fare</div>
	<div class="_bnx"><div class="crclerunner"></div>&nbsp;&nbsp;Runner</div>
</div>

<div class="col-sm-6" style=" display: none; justify-content: flex-end;">
  <table class="_jobtable"><tr><td class="_tbcompletedjob">Completed : 0</td><td class="_tbcancelljob">Cancelled : 0</td><td class="_tbrunnerjobs">Runner : 0</td><td class="_tbappjobs">Call : 0 </td><td class="_tbcalljobs">App : 0</td></tr></table>
</div>
</div>
  <div class="row">
          <div class="col-md-12 px-0">
                 <div class="table_s full_wdth mntblsk" style="margin-top:-2px; overflow-y: auto;">
                 <table class="table vbgtable tableFixHead "  style="margin-top:0px;">
                  <thead>
                     <tr>
                      <th style="width:80px;display:none">Type<i></i></th>

                     
                      <th style="width:150px">Day<i></i></th>
                      <th style="width:170px">Date<i></i></th> <th style="width:110px">Time<i></i></th>
                      <th style="width:70px;display: none;">Plot<i></i></th>
                      <th style="width:20%">Pickup<i></i></th>
                      <th style="width:70px;display: none;">Plot<i></i></th>
                      <th style="width:20%">Drop Off<i></i></th>
                      <th style="width:180px">Vehicle Type<i></i></th>
                      <th style="width:50px">Pass<i></i></th>                    
                       
                     
                      <th style="width:200px">Price<i></i></th>
                      <th style="width:130px">Payment<i></i></th>
                     
                     <th style="width:150px">Driver<i></i></th>
                      <th style="width:400px">Controller<i></i></th>
            
  
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
    
<!--<th class="no_bg"> <label class="containerr"> <input type="radio" name="drivers">';
                    html+='  <span class="checkmark"></span> </label> </th> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>  
 
<script>
var JOBAMOUNT =100;
window.xhr=null;
window.driverbanid =-1;
window._xobj=null;
window.searchdriverlist=[];
window.searchdriverbanlist=[];
window._joblist=[];
window.isedit=false;
window.jobid="0";
window._cjob=null;
window._jobprice = null;
window.firstCapitalAlways= function (event) {
    var val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    $(event.target).val(firstLetterUpper + val.substr(1, val.length));
}
window.enbname=function(event) {
  var key = event.keyCode;
 
  return ((key >= 65 && key <= 90) || (key >= 97 && key <= 122) || key == 8|| key == 32);
};
window.clopitimer=function(ref,event){
    event.stopPropagation();
       dddr();
}
window.adheight=function(){
    var ht=$(window).height()-$(".mainctr").height(); 
    ht= ht-110; 
    $(".mntblsk").css("max-height",ht+"px");

}
window.bandriver=function(){
  if($(window._jobref).attr("data-driverid")=="0"){
      alert("Driver is not assign to this job.");
      return;
     }
 if(confirm("Do you want to ban driver?")){

     myajax({"api":"bandriver","type":"3","jobid":$(window._jobref).attr("data-jobid"),"driverid":$(window._jobref).attr("data-driverid"),"mobile":$(window._jobref).attr("data-mobile")},function( data, textStatus, jQxhr ){
                alert("Success");
              window.location.reload();               
           }); 
   }
}
window.bandriverformobile=function(){
	if(window.driverbanid ==-1 || $.trim($("#mobile").val()) == "")
		return;
 if(confirm("Do you want to ban driver?")){

     myajax({"api":"bandriver","jobid":"0","driverid":window.driverbanid ,"mobile":$.trim($("#mobile").val())},function( data, textStatus, jQxhr ){
                alert("Success");
              window.location.reload();               
           }); 
   }
}
window.bandriverexe=function(){
	if(window.driverbanid ==-1 || $.trim($("#mobile").val()) == "")
		return;
     myajax({"api":"bandriver","jobid":"0","driverid":window.driverbanid ,"mobile":$.trim($("#mobile").val())},function( data, textStatus, jQxhr ){
                alert("Success");
              window.location.reload();               
           }); 
}
<?php
if(isset($_GET['id'])){
?>

window.jobid = <?php echo $_GET['id']; ?>;
(function(){
     window._crrvia=1;
      
            $("#confirm,#cancel,.table_xd").show();
          $("#audit").hide();
       
      window.isedit=true;
       $("#pram,#wheelchair,#pets,#lowvehicle,#highvehicle,#items,#scooter,#fishing,#bicycle,#boxes,#shopping").removeAttr("disabled").prop("checked",false);
 $(".isreturnx,.itemsbox,.animalsbox,.boxesbox").hide();
 myajax( {"api":"getbookingbyid","id":window.jobid,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
  
   var callsign=data.data.callsign;
   $("#allocatedriver").val(callsign);
   var passengers=data.data.passengers;
   var ismultiplevehicles=data.data.ismultiplevehicles;
   window.ismultipledriver=window.ismultiplevehicles=(ismultiplevehicles=="1"); 
window._cjob=data.data; 
$("#mobile").val(crypMobile(data.data.mobile)).attr("data-mobile",data.data.mobile);;
$("#starter").show();
window.lojob(data.data);
 });
})();
<?php

}
?>
window.lojob=function(job){
    window.cashtype=job.cashtype;

    if(job.cashtype=="0"){
        $(".dmnkcash span").html("Cash");
    }
    else{
        $(".dmnkcash span").html("Money First");
    }
    window.issalooncheckparmanent=job.issalooncheckparmanent;
    var driveridx=job.driverid;
    // $("#ispermanent").prop("checked",(job.ispermanent=="1")); 
	  $(".axdcvf,.amdriverbnv").removeClass("hdnn");
if(window._cjob.isbooking=="1"){
  $("#booking").prop("checked",true);
  $(".axdcvf,.amdriverbnv").removeClass("hdnn");
  $("#fixedbx .fxtitle").html("Fixed");
  $("#fixedprice").val(job.fixedprice);
}
else{
 //   $("#quotation").prop("checked",true);
//$(".axdcvf,.amdriverbnv").addClass("hdnn");
$("#fixedbx .fxtitle").html("Quote");
$("#fixedprice").val(job.fixedprice);
}

$("#_startervia").find(".resulttry").html("").hide();
$("#_startervia").find("input").removeAttr("data-lat").removeAttr("data-lng").removeAttr("data-zipcode").val("");
$(".axtempl").remove();
$(".mnjjxzl").find("input").val("5");
$("._ikmnp input").val("");
$("#fixedbx").attr("data-price",job.fixedprice).find("strong").html("");
if(job.fixedprice > 0)
$("#fixedbx").attr("data-price",job.fixedprice).find("strong").html("Rs "+job.fixedprice);

   updateviaplaceholder();

window.pickuplat=job.pickuplatitude;
window.pickuplng=job.pickuplongitude;
window.pickupzipcode=job.pickupzipcode;
window.droplat=job.droplatitude;
window.droplng=job.droplongitude;
window.dropzipcode=job.dropzipcode;
window.bookingmileage=job.bookingmileage;
window.bookingmileagetime=job.bookingmileagetime;
 $("#ttlmileage").html(metersToMiles(window.bookingmileage).toFixed(2)+" km");        
 $("#ttltime").html(secondsToHms(window.bookingmileagetime).toLowerCase()); 
    var _unix=job.bdate.split("-");
          const today = new Date( _unix[2], _unix[1] - 1, _unix[0]);
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear(); 
 // $("#datepicker").val(window._daysname[today.getDay()]+", "+dd + '-'+mm+"-"+ yyyy);
  //  $("#timerx").val(window.tConvert(job.btime));
  //  $("#fullname").val(job.name);
    $("#addressax_").val(job.address);
    $("#pickuplocation").val(job.pickuplocation);
    $("#droplocation").val(job.droplocation);
    $("#pickupwaitingtime").val(job.pickupwaitingtime);
    $("#dropwaitingtime").val(job.dropwaitingtime);
    $("#pickupnote").val(job.pickupnote);
    $("#dropnote").val(job.dropnote);
    $("#notes").val(job.notes);
    $("#passengers").html(job.passengers);
    $("#handluggage").html(job.handluggage);
    $("#suitcase").html(job.suitcase);
    $("#flightnumber").val(job.flightnumber);
   // $("#reference").val(job.reference);
   getReference();
    $("#cardnumber,#cardname,#cardexpirydate,#cardcvv,#allocatedriver").val("");
    
    if(job.cardnumber!="0"){
          $("#cardnumber").val(job.cardnumber);
          $("#cardname").val(job.cardname);
           $("#cardexpirydate").val(job.cardmm+"/"+job.cardyy);
           //$("#cardcvv").val(job.cardcvv);
           if(job.ispaymentsuccess=="1"){
            $("#processcreditcard").hide();
            $(".creditcarderror").show().html("Pre-Paid");
           }
    }
    if(job.issms=="1"){
        $("#sms").val(job.sms).removeAttr("disabled");
    }
    else{
                $("#sms").val("").attr("disabled","true");

    }
    if(job.isemail=="1"){
        $("#email").val(job.email).removeAttr("disabled");
    }else{
                $("#email").val("").attr("disabled","true");

    }
	
		if(window.owedcounter==1){
			window.cashtype="1";
		$("#cash").parent().find("span").html("Money First");
                }
                else if(window.owedcounter==2){
                    $("#prepaid").prop("checked",true);
                     $(".creditcardbox").show();
                }
        window.isrepeatbooking=(job.isrepeatbooking=="1");
        window.isreturnbooking=(job.isreturnbooking=="1");
       /* if(window.isrepeatbooking){
          $(".repeatbooking").prop("checked",true);
          $("._repeatbooking").addClass("active");
        }
        else{
           $(".repeatbooking").prop("checked",false);
          $("._repeatbooking").removeClass("active");
        }
        $(".days_selected span").removeClass("active_c");
        $(job.days).each(function(x,y){

            $(".daya"+y).addClass("active_c")
             
        });
          if(job.isreturnbooking=="1"){
          $(".returnbooking").prop("checked",true);
          $("._returnbooking").addClass("active");
        }
        else{
           $(".returnbooking").prop("checked",false);
          $("._returnbooking").removeClass("active");
        }
        if(job.returnbookingdatetime!=""){
            $(".isreturnx").show();
             $("#datepicker1").val(job.rdate);
    $("#timerx1").val(window.tConvert(job.rtime));
        }*/
    if(job.iscash=="1"){
      $("#cash").prop("checked",true);
    }
    else  {
        if(job.isdeposit=="1"){
        //    $("#processcreditcard").show();
          //  $("#deposit").prop("checked",true);
           // $(".depositamountbox").show();
            //$("#depositamount").val(job.prepaidamount);
        }
        else{
      $("#prepaid").prop("checked",true);
      }
      $(".creditcardbox").show();
    }
     setTimeout(function(){ 
     window.ispet=(job.ispet=="1");
            $("#normal") .prop('checked', false); 
				 $("#autorikshaw") .prop('checked', false); 
				  $("#motorbike") .prop('checked', false);
			window.ispet=(job.ispet=="1");
			if(job.normal ==1)
			{
				window.firstselected=1;
			}
			else if(job.autorikshaw ==1)
			{
				window.firstselected=2;
			}
			else if(job.motorbike ==1)
			{
				window.firstselected=3;
			}
			else
			{
				window.firstselected=job.firstselected;
			}
			$("#normal") .prop('checked', false); 
			$("#autorikshaw") .prop('checked', false); 
			$("#motorbike") .prop('checked', false);					
										   
            $("#sizetype").val(job.boxessize);
            $("#sizehowmany").val(job.boxeshowmany);
            $("#noofitems").val(job.noofitems=="0"?"":job.noofitems);
            $("#shopping") .prop('checked', (job.shopping=="1"));
			$(".specialrequestimgchld:nth-of-type("+window.firstselected+")").addClass("active");
			if(window.firstselected==1){
                 $("#normal") .prop('checked', true); 
                 $("#_capabilityuj").html("Normal")
              // $("#motorbike,#autorikshaw").attr("disabled","true"); 
               $(".xmapassengers li").remove();
         for(var  i = 0;i<=20;i++){
 $(".xmapassengers").append("<li class='"+(job.passengers==i?"sctedd active":"")+"' onclick='_oppassenger(this)'>"+i+"</li>");
         }
            }
            else  if(window.firstselected==2){
                 $("#autorikshaw") .prop('checked', true); 
                  $("#_capabilityuj").html("Auto Rikshaw")
             //  $("#motorbike,#normal").attr("disabled","true"); 
               $(".xmapassengers li").remove();
         for(var  i = 0;i<=6;i++){
             $(".xmapassengers").append("<li  class='"+(job.passengers==i?"sctedd active":"")+"'  onclick='_oppassenger(this)'>"+i+"</li>");
         }
            }
              else  if(window.firstselected==3){
                 $("#motorbike") .prop('checked', true); 
                  $("#_capabilityuj").html("Motorbike")
             //  $("#normal,#autorikshaw").attr("disabled","true"); 
               $(".xmapassengers li").remove();
         for(var  i = 0;i<=1;i++){
             $(".xmapassengers").append("<li  class='"+(job.passengers==i?"sctedd active":"")+"' onclick='_oppassenger(this)'>"+i+"</li>");
         }
            }
            /*  if(window.firstselected==1){
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
                             $("#wheelchair,#pram,#items,#scooter,#fishing,#bicycle,#pets,#boxes").attr("disabled","true").prop("checked",false);

               $("#lowvehicle").prop("checked",(job.lowvehicle=="1"));
            $("#highvehicle").prop("checked",(job.highvehicle=="1")); 
            }
            
            
          }*/
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
          },400);
       var t="";
       $(job.pickuplocation.split(",")).each(function(x,y){
        if(x==0)
         t+="<span class='bluety'>"+y+"</span>";
        else t+=", "+y;
       });
       $("#pickuplocation").parent().find(".resulttry").html(t).show();
   
      var t="";
       $(job.droplocation.split(",")).each(function(x,y){
        if(x==0)
         t+="<span class='bluety'>"+y+"</span>";
        else t+=", "+y;
       });
       $("#droplocation").parent().find(".resulttry").html(t).show();

     if(job.via.length==1){
      $(".via1").attr("data-lat",job.via[0].lat).attr("data-lng",job.via[0].lng).attr("data-zipcode",job.via[0].zipcode).val(job.via[0].address);
      t="";
       $(job.via[0].address).each(function(x,y){
        if(x==0)
         t+="<span class='bluety'>"+y+"</span>";
        else t+=", "+y;
       });
        $(".via1").find(".resulttry").html(t).show();
    }
    else{
      var lenj=job.via.length;
      lenj--;
      for(var gg=0;gg<lenj;gg++){
        _addvia();
      }
       setTimeout(function(){
                
                $(".notebox").css("height",$("#mklht").height());
               },10);
    $(job.via).each(function(x,y){
        var mm=x;
        mm+=2;
        $("._ikmnpl:nth-of-type("+(mm)+")").find("input").val(y.waitingtime);
        $("._ikmnp:nth-of-type("+(mm)+")").find("input").val(y.note);
        var ref=$(".vias div:nth-child("+(++x)+")");
       ref.find("input").attr("data-lat",y.lat).attr("data-lng",y.lng).attr("data-zipcode",y.zipcode).val(y.address);
       var t="";
       $(y.address.split(",")).each(function(x,y){
        if(x==0)
         t+="<span class='bluety'>"+y+"</span>";
        else t+=", "+y;
       })
      
       ref.find(".resulttry").html(t).show();
    
    })
  }
  
  
 
if(driveridx=="0" ){
    driveridx="";
     $("#allocatedriver").val("");
window.driverid="0";
$(".driverbox").hide();
 }
  $("#allocateddriverlist").find("._allpoi").remove();
if(ismultiplevehicles=="1"){
     
   
  // $("#allocatedriver").hide(); 
   //$("#allocatedriver,.ispermanent").hide();
  // $("#selectmultiplevehicles").prop("checked",true);
  
 
}
else{
     if(driveridx==""){
                $(".driverbox").hide();
          }
          else{
            $("#allocatedriver").val(job.callsign);
         $(".driverbox,.xstarrating").show();
          }
        $("#allocatedriver").show();//$("#allocatedriver,.ispermanent").show();
       

}
   if(driveridx!=""){
  setTimeout(function(){
    window.getDriversByCallSign(driveridx,ismultiplevehicles,job.passengers);
   },100);
 }
 else{
    $(".sectdriver").remove();
     for(var i = 1;i<=4;i++){

                        html='<tr class="sectdriver" data-counter="'+i+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
             

                 }
 }

}


window.chgclr=function(choice){
 
if( choice == 'Y')
{
$("#yesban").css({"background-color":"#ffa800"});
$("#noban").css({"background-color":"#a8a1a1"});
$("#yesban").focus();
}
else
{
$("#yesban").css({"background-color":"#a8a1a1"});
$("#noban").css({"background-color":"#ffa800"});
$("#noban").focus();
}

}

window.hideStamp=function(){
	
	$("#Stampshow").html("");
	$("#Stampshow").hide();
}

window.showStamp=function(type){
	$("#Stampshow").show();
	$("#Stampshow").html("");
	if(type=="Act")
	{
		$("#Stampshow").html("<span class=\"stamp\">Active</span>");
	}
	else if(type=="Pre")
	{
		$("#Stampshow").html("<span class=\"stamp is-prebook\">Prebooking</span>");
	}
	else if(type=="Quo")
	{
		$("#Stampshow").html("<span class=\"stamp is-quote\">Quotation</span>");
	}
	else if(type=="Can")
	{
		$("#Stampshow").html("<span class=\"stamp is-cancel\">Cancelled</span>");
	}
	else if(type=="Nof")
	{
		$("#Stampshow").html("<span class=\"stamp is-nofare\">No-Fare</span>");
	}
	else if(type=="Run")
	{
		$("#Stampshow").html("<span class=\"stamp is-runner\">Runner</span>");
	}
	else if(type=="Com")
	{
		$("#Stampshow").html("<span class=\"stamp is-complete\">Completed</span>");
	}
	else {
			$("#Stampshow").hide();
	}
	
	
	
}

window.issalooncheckparmanent=0;
window.selectjob=function(ref,isview,inActive){
     $("._cover").hide();
      $("#tbd tr").removeClass("trselected");
      window.ispickuplcvalid=window.isdropvalid=true;
    $(ref).addClass("trselected");
      window._crrvia=1; 
     if(isview){
          $("#confirm,#cancel,.table_xd").hide();
          $("#audit").show();
      }
      else{
            $("#confirm,#cancel,.table_xd").show();
          $("#audit").hide();
      }
	  //   window.isedit=true;
      $("#audiolisten").show();
       $("#pram,#wheelchair,#pets,#lowvehicle,#highvehicle,#items,#scooter,#fishing,#bicycle,#boxes,#shopping").removeAttr("disabled").prop("checked",false);
 $(".isreturnx,.itemsbox,.animalsbox,.boxesbox,.depositamountbox").hide();
    $(ref).find("input").prop("checked",true);
    window.jobid=$(ref).attr("data-jobid")
   var driveridx=$(ref).attr("data-driverid");
   var callsign=$(ref).attr("data-callsign");
   var passengers=$(ref).attr("data-passengers");
   var ismultiplevehicles=$(ref).attr("data-ismultiplevehicles");
   window.ismultipledriver=window.ismultiplevehicles=(ismultiplevehicles=="1");
  var job=window._joblist.filter(function (entry) {
    return entry.id == jobid;
})[0];

window._cjob=job; 
window.lojob(job);
window._jobprice=job.jobprice;
window.editwhat=inActive;
if(inActive ==2)
{
//$("#dateShow").hide();
//$("#bookquote").css({"margin-top":"38px"});
  $("#booking").prop("checked",true);
}
else
{
//$("#dateShow").show();
//$("#bookquote").css({"margin-top":"0px"});
}
if(inActive==3)
{
	 $(".xmapassengers").show().parent().find("._dropdown").addClass("active");
	 window.amaddressref=true;
}
}
 window._addvia=function( ){

     window._crrvia++;
         
          $('<div class="_lothervia axtempl"><div style="display:inline">  <div class="lcoptions">  <img src="img/arrow-down.png" class="drpdowncx"  /> <div class="mapsxboxd"> <img src="img/maps.png" class="mapsx _mapsx" onclick="showviamap(this)"/> </div> </div><div class="plholder viazdkk"><span>Drop Location</span></div><div class="resulttry" onclick="showinpfld(this)"></div><input  style="margin-top:2px"  onblur="reinitdbc(this,event)"  onfocus="onviafocus(this)"  onkeyup="mklccall(this,event)"  type="text" class="viaaz via'+window._crrvia+' " autocomplete="off" placeholder="Via"> <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div></div> </div>').insertBefore("#_startervia");
         
         $('<div class="_ikmn  axtempl"><img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removevia(this,'+window._crrvia+')" ></div>').insertBefore(".firstlcf");
           $('<div class="_ikmnp  axtempl"> <input type="text"  onkeyup="firstCapitalAlways(event);"  autocomplete="off"   placeholder="Enter Note"> </div>').insertBefore(".mnjjxz");
           $('<div class="_ikmnpl  axtempl"> <img src="img/substract.png" class="minusbn" onclick="minusbn(this)"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" > <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"  > </div>').insertBefore(".mnjjxzl");

          updateviaplaceholder();
          add_dots();
 };
 window.hidedropdown=function(ref){
      $(".custom-menu").hide(100);

 }
 window.owedcounter=0;
 window.intervalref=null;
 window.blnk=function(elem){
   window.intervalref =  setInterval(function() {
        if (elem.css('visibility') == 'hidden') {
            elem.css('visibility', 'visible');
        } else {
            elem.css('visibility', 'hidden');
        }    
    }, 500);
 }
window.searchbookingbymobile=function(val){
    val=$.trim(val);
    if(val.length==0){
     $("#tbd").html("");
        return;
    }
    val=val;
    if(window.xhr!=null){
        window.xhr.abort()
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
    window._xobj=new Object();
    window._xobj["api"]="getbookingbymobile";
	window._xobj["adminCountryCode"]="<?php echo $_SESSION['COUNTRYCODE']; ?>";
    window._xobj["mobile"]=val; 
  window._xobj["datetime"]=dt;
$("#tbd tr").remove();
    
    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify(window._xobj),
    processData: false,
    success: function( data, textStatus, jQxhr ){
                window.xhr=null;
				$("#fullname").val("");
				if(data.data.nameAssociated !="")
				{
					$("#fullname").val(data.data.nameAssociated) ;
				}
               /*  if(window.intervalref!=null){
                        clearInterval(window.intervalref);
                    }*/
                if(data.data.owedamount!=0){
				//	 $("#amountowed").html("<b>Rs "+data.data.owedamount+" owed</b>");
                 //   blnk($("#amountowed"));
					$("#OldOwedshow").html("<b>Rs "+data.data.owedamount+" owed</b>");
                }
                else{ 
				// $("#amountowed").html("Rs "+data.data.owedamount+" owed");
                 //       $("#amountowed").css('visibility', 'visible');
						$("#OldOwedshow").html("&nbsp;");
                }
                window.owedcounter=data.data.owedcounter;
                if(window.owedcounter==1){
                     window.cashtype="1";
                     $("#cash").parent().find("span").html("Money First");
                }
                else if(window.owedcounter==2){
                    $("#prepaid").prop("checked",true);
                     $(".creditcardbox").show();
                }
            window._joblist=[];
            window.customerfixedprice=data.data.customerfixedprice;
            if(data.data.activebooking.length!=0)
            window._joblist=window._joblist.concat(data.data.activebooking);
            if(data.data.prebooking.length!=0)
            window._joblist=window._joblist.concat(data.data.prebooking);
            if(data.data.quotationbooking.length!=0)
            window._joblist=window._joblist.concat(data.data.quotationbooking);
            if(data.data.historybooking.length!=0)
            window._joblist=window._joblist.concat(data.data.historybooking);
			if(data.data.cancelbooking.length!=0)
            window._joblist=window._joblist.concat(data.data.cancelbooking);
			if(data.data.nofarebooking.length!=0)
            window._joblist=window._joblist.concat(data.data.nofarebooking);
			if(data.data.runnerbooking.length!=0)
            window._joblist=window._joblist.concat(data.data.runnerbooking);

            $("#iused").html(data.data.jobsdata.used+" Used");
            $("#icancelled").html(data.data.jobsdata.rejected+" Cancelled");
            $("#irunner").html(data.data.jobsdata.running+" Runner");
            $("#inofare").html(data.data.jobsdata.nofare+" No Fare");
            if(data.data.jobsdata.lastused!="")
            $("#ilastused").html(data.data.jobsdata.lastused).parent().show();
            else $("#ilastused").parent().hide();

  $(data.data.activebooking).each(function(x,y){

     var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

          /*if(y.wheelchair=="1"){
            extras="W/C"  
          }
           if(y.pets=="1"){
               if(extras!="") extras+=","
            extras+="PETS"  
            if(y.animaltype=="1"){
                extras+=","
                 extras+="GD"  

            }
            else if(y.animaltype=="2"){
                extras+=","
                 extras+="AD"  

            }
            else if(y.animaltype=="1"){
                extras+=","
                 extras+="CAT"  

            }
          }
           if(y.pram=="1"){
               if(extras!="") extras+=","
            extras+="PRAM"  
          }
            if(y.lowvehicle=="1"){
               if(extras!="") extras+=","
            extras+="LV"  
          }
            if(y.highvehicle=="1"){
               if(extras!="") extras+=","
            extras+="HV"  
          }*/
         html='<tr class="activebooking" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,0)" onmouseover=showStamp("Act") onmouseout="hideStamp()" data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
         //html+='<td><input type="radio" style="width:15px" name="booking" /></td>';
              // html+='<td>'+y.jobtype+'</td>';

      
         html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
            //   html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
          html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
      
        
         html+='<td>Rs '+y.jobprice+'</td>';
        html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
          $("#tbd").append(html);
       });  
        $(data.data.prebooking).each(function(x,y){
             var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")  extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")  extras="Motorbike";

          /*if(y.wheelchair=="1"){
            extras="W/C"  
          }
           if(y.pets=="1"){
               if(extras!="") extras+=","
            extras+="PETS"  
            if(y.animaltype=="1"){
                extras+=","
                 extras+="GD"  

            }
            else if(y.animaltype=="2"){
                extras+=","
                 extras+="AD"  

            }
            else if(y.animaltype=="1"){
                extras+=","
                 extras+="CAT"  

            }
          }
           if(y.pram=="1"){
               if(extras!="") extras+=","
            extras+="PRAM"  
          }
            if(y.lowvehicle=="1"){
               if(extras!="") extras+=","
            extras+="LV"  
          }
            if(y.highvehicle=="1"){
               if(extras!="") extras+=","
            extras+="HV"  
          }*/
         html='<tr class="prebooking" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,1)" onmouseover=showStamp("Pre") onmouseout="hideStamp()" data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
         //html+='<td><input type="radio" style="width:15px" name="booking" /></td>';
                    //html+='<td>'+y.jobtype+'</td>';

         html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
             //  html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
         html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
          

          
          html+='<td>Rs '+y.jobprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
             html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
        $("#tbd").append(html);
       });   
 $(data.data.quotationbooking).each(function(x,y){
          var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

          /*if(y.wheelchair=="1"){
            extras="W/C"  
          }
           if(y.pets=="1"){
               if(extras!="") extras+=","
            extras+="PETS"  
            if(y.animaltype=="1"){
                extras+=","
                 extras+="GD"  

            }
            else if(y.animaltype=="2"){
                extras+=","
                 extras+="AD"  

            }
            else if(y.animaltype=="1"){
                extras+=","
                 extras+="CAT"  

            }
          }
           if(y.pram=="1"){
               if(extras!="") extras+=","
            extras+="PRAM"  
          }
            if(y.lowvehicle=="1"){
               if(extras!="") extras+=","
            extras+="LV"  
          }
            if(y.highvehicle=="1"){
               if(extras!="") extras+=","
            extras+="HV"  
          }*/
         html='<tr class="quotation" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,2)"  data-jobid="'+y.id+'" onmouseover=showStamp("Quo") onmouseout="hideStamp()"  data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
      //   html+='<td><input type="radio" style="width:15px" name="booking" /></td>';
          //  html+='<td>'+y.jobtype+'</td>';

          html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
              // html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
           html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
   

          
           html+='<td>Rs '+y.fixedprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
             html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
        $("#tbd").append(html);
       });   
$(data.data.historybooking).each(function(x,y){
         var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

          /*if(y.wheelchair=="1"){
            extras="W/C"  
          }
           if(y.pets=="1"){
               if(extras!="") extras+=","
            extras+="PETS"  
            if(y.animaltype=="1"){
                extras+=","
                 extras+="GD"  

            }
            else if(y.animaltype=="2"){
                extras+=","
                 extras+="AD"  

            }
            else if(y.animaltype=="1"){
                extras+=","
                 extras+="CAT"  

            }
          }
           if(y.pram=="1"){
               if(extras!="") extras+=","
            extras+="PRAM"  
          }
            if(y.lowvehicle=="1"){
               if(extras!="") extras+=","
            extras+="LV"  
          }
            if(y.highvehicle=="1"){
               if(extras!="") extras+=","
            extras+="HV"  
          }*/
         html='<tr onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,3)" onmouseover=showStamp("Com") onmouseout="hideStamp()"  data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
        // html+='<td><input type="radio" style="width:15px" name="booking" /></td>';
          // html+='<td>'+y.jobtype+'</td>';

           html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
             //  html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
         html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
               
        
           html+='<td>Rs '+y.jobprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
       $("#tbd").append(html);
       }); 
$(data.data.cancelbooking).each(function(x,y){
         var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

         html='<tr class="cancelbooking" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,0)" onmouseover=showStamp("Can") onmouseout="hideStamp()"  data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
         html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
             //  html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
         html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
               
        
           html+='<td>Rs '+y.jobprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
       $("#tbd").append(html);
       }); 
$(data.data.nofarebooking).each(function(x,y){
         var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

         html='<tr class="nofarebooking" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,0)" onmouseover=showStamp("Nof") onmouseout="hideStamp()" data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
         html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
             //  html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
         html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
               
        
           html+='<td>Rs '+y.jobprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
       $("#tbd").append(html);
       }); 
$(data.data.runnerbooking).each(function(x,y){
         var extras="";
     if(y.normal=="1") extras="Normal";
     else if(y.autorikshaw=="1")   extras="Auto-Rikshaw";
     else if(y.motorcycle=="1")   extras="Motorbike";

         html='<tr class="runnerbooking" onmousedown="rgst(event,this)" data-mobile="'+y.mobile+'"   data-passengers="'+y.passengers+'"  data-ismultiplevehicles="'+y.ismultiplevehicles+'" onclick="hidedropdown(this)" ondblclick="selectjob(this,0,0)" onmouseover=showStamp("Run") onmouseout="hideStamp()" data-jobid="'+y.id+'"   data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'">';
         html+='<td>'+y.dayname+'</td>';
         html+='<td>'+y.bdate+'</td>';html+='<td>'+y.btime+'</td>';
              // html+='<td>'+y.pickupzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
             //  html+='<td>'+y.dropzipcode.split(" ")[0]+'</td>';
         html+='<td>'+y.droplocation+'</td>';
         html+='<td>'+extras+'</td>';
               html+='<td>'+y.passengers+'</td>';
               
        
           html+='<td>Rs '+y.jobprice+'</td>';
          html+='<td>'+(y.iscash=="1"?(y.cashtype=="0"?"Cash":"Money First"):"Pre-Paid")+'</td>';
               html+=' <td>'+y.callsign+'</td><td>'+(y.controllername==null?"":y.controllername)+'</td></tr>';
       $("#tbd").append(html);
       }); 
getReference();        
    },
    error: function( jqXhr, textStatus, errorThrown ){
         window.xhr=null;
        console.log( errorThrown );
    }
});
  setTimeout(function(){
      adheight();
  },10);
}
window.sectdriverasx=function(keycode){
if(keycode=="40"){
     var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xallocatedriver");
        var dxlist=$("#dxlist");
        if(xmpassengersx.is(":visible")){
            var _lcchildlengthax= dxlist.find("p").length;
            _lcchildlengthax--;
           dxlist.find("p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           dxlist.find("p").removeClass("active");
           if(hasclass)
             classcounter++;
       if(classcounter>_lcchildlengthax){
            classcounter=0;
            xmpassengersx.animate({scrollTop: '0px'}, 100);
        }
        if(classcounter==9){
                xmpassengersx.animate({scrollTop: '230px'}, 100);

        }
        else if(classcounter==18){
                xmpassengersx.animate({scrollTop: '300px'}, 100);

        }
        
         var vg=dxlist.children().eq(classcounter);
         $("#allocatedriver").html(vg.addClass("active").text());
		  window.selectedcount = classcounter;
  //    allocatedr(window.searchdriverlist[classcounter].driverid,2);
}

}
else if(keycode=='38'){

      var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xallocatedriver");
        var dxlist=$("#dxlist");
 
        if(xmpassengersx.is(":visible")){

            var _lcchildlengthax= dxlist.find("p").length;
            _lcchildlengthax--;
           dxlist.find("p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           dxlist.find("p").removeClass("active");
           if(hasclass)
             classcounter--;
         if(classcounter<0){
            classcounter=_lcchildlengthax;
            xmpassengersx.animate({scrollTop: '300px'}, 100);
        }
        if(classcounter==11){
                xmpassengersx.animate({scrollTop: '50px'}, 100);

        }
        else if(classcounter==2){
                xmpassengersx.animate({scrollTop: '0px'}, 100);

        }
        
         
         var vg=dxlist.children().eq(classcounter);
           $("#allocatedriver").html(vg.addClass("active").text());
		     window.selectedcount = classcounter;
   //   allocatedr(window.searchdriverlist[classcounter].driverid,2);
      
}
}
else if(keycode=='13'){
$(".xallocatedriver").hide();
if(window.selectedcount!=-1)
allocatedr(window.searchdriverlist[window.selectedcount].driverid,2);
//$("#confirm").focus();
 }
}
window.sectbandriverasx=function(keycode){
if(keycode=="40"){
     var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xbandriver");
        var dxlist=$("#dxbanlist");
        if(xmpassengersx.is(":visible")){
            var _lcchildlengthax= dxlist.find("p").length;
            _lcchildlengthax--;
           dxlist.find("p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           dxlist.find("p").removeClass("active");
           if(hasclass)
             classcounter++;
       if(classcounter>_lcchildlengthax){
            classcounter=0;
            xmpassengersx.animate({scrollTop: '0px'}, 100);
        }
        if(classcounter==9){
                xmpassengersx.animate({scrollTop: '230px'}, 100);

        }
        else if(classcounter==18){
                xmpassengersx.animate({scrollTop: '300px'}, 100);

        }
        
         var vg=dxlist.children().eq(classcounter);
         $("#txtbandriver").html(vg.addClass("active").text());
		  window.selectedbancount = classcounter;
  //    allocatedr(window.searchdriverlist[classcounter].driverid,2);
}

}
else if(keycode=='38'){

      var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xbandriver");
        var dxlist=$("#dxbanlist");
 
        if(xmpassengersx.is(":visible")){

            var _lcchildlengthax= dxlist.find("p").length;
            _lcchildlengthax--;
           dxlist.find("p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           dxlist.find("p").removeClass("active");
           if(hasclass)
             classcounter--;
         if(classcounter<0){
            classcounter=_lcchildlengthax;
            xmpassengersx.animate({scrollTop: '300px'}, 100);
        }
        if(classcounter==11){
                xmpassengersx.animate({scrollTop: '50px'}, 100);

        }
        else if(classcounter==2){
                xmpassengersx.animate({scrollTop: '0px'}, 100);

        }
        
         
         var vg=dxlist.children().eq(classcounter);
           $("#txtbandriver").html(vg.addClass("active").text());
		     window.selectedbancount = classcounter;
   //   allocatedr(window.searchdriverlist[classcounter].driverid,2);
      
}
}
else if(keycode=='13'){
$(".xbandriver").hide();
if(window.selectedbancount!=-1)
bandr(window.searchdriverbanlist[window.selectedbancount].driverid,2);
//$("#confirm").focus();
 }
}
window.searchcallsign=function(val,e){
    if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') {
         sectdriverasx(e.keyCode)
        return false;
    }
    
    if(val.length==0){
     $(".driverbox,.xallocatedriver ").hide();
        return;
    }
     val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    val=firstLetterUpper + val.substr(1, val.length);
    $(event.target).val(val);


    if(window.xhr!=null){
        window.xhr.abort()
    }
    var pickdate=$.trim($("#datepicker").val().split(",")[1]);
         var bookingtime=$.trim($("#timerx").val());
         const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
          if(bookingtime.length==0){
          bookingtime=h_ + ":" + m_;
         }
         else{
            bookingtime = $.trim(bookingtime.split(" ")[0]);
         }

         pickdate=pickdate+" "+bookingtime;
         var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
         var pets=$("#pets").is(":checked")?"1":"0";
         var pram=$("#pram").is(":checked")?"1":"0";
         var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
         var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
         var isDisabled = $('#lowvehicle').prop('disabled');
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
			   var mobile=$.trim($("#mobile").val());
         var iscapability="1";
          if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
            iscapability="0";
             }
 
        
    window._xobj=new Object();
    window._xobj["api"]="searchforcallsign";
    window._xobj["callsign"]=val;
    window._xobj["passengers"]=$("#passengers").html();
    window._xobj["pdate"]=pickdate;
    window._xobj["currentdate"]=getcurrentDateTime();
    window._xobj["highvehicle"]=highvehicle;
    window._xobj["lowvehicle"]=lowvehicle;
	window._xobj["mobile"]=mobile;
    window._xobj["pram"]=pram;
    window._xobj["pets"]=pets;
    window._xobj["wheelchair"]=wheelchair;
    window._xobj["iscapability"]=iscapability;
      window._xobj["bicycle"]=bicycle;
       window._xobj["items"]=items;
       window._xobj["scooter"]=scooter;
       window._xobj["boxes"]=boxes;
       window._xobj["fishing"]=fishing;
       window._xobj["shopping"]=shopping;
       window._xobj["noofitems"]=noofitems;
	   window._xobj["adminCountryCode"]="<?php echo $_SESSION['COUNTRYCODE']; ?>";
       window._xobj["size"]=size;
       window._xobj["howmany"]=howmany;
       window._xobj["lat"]=window.pickuplat;
        window._xobj["lng"]=window.pickuplng;
        window._xobj["normal"] = $("#normal").is(":checked")?"1":"0";
          window._xobj["autorikshaw"]=$("#autorikshaw").is(":checked")?"1":"0";
          window._xobj["motorbike"]=$("#motorbike").is(":checked")?"1":"0";
    $(".xallocatedriver").show().find("p").remove();
    $(".xallocatedriver #loading").show().html("Loading...");
    $(".driverbox").hide();

    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify(window._xobj),
    processData: false,
    success: function( data, textStatus, jQxhr ){
                window.xhr=null;
        window.searchdriverlist=data.data;
        /*if(window.searchdriverlist.length==1){
            allocatedr(window.searchdriverlist[0].driverid);

        }else*/ if(window.searchdriverlist.length>0){
                $(".xallocatedriver #loading").hide();

        $(window.searchdriverlist).each(function(x,y){
			var dlist_sign= "<p onclick='allocatedr("+y.driverid+",1)' data-id='"+y.driverid+"' data-callsign='"+y.callsign+"'>"+y.callsign;
			if(y.isonline == "1")
				dlist_sign+= "<span class='greenccr'></span>";
			else
				dlist_sign+= "<span class='redccr'></span>";
			if(window._jobprice !=null){
			var diff=(y.creditamount-(window._jobprice*0.2));
			if(diff <= 0){
				dlist_sign+= "<span class='blackccr'></span>";
				dlist_sign+= "<span class='credit'>(Rs. "+diff+")</span>";
			}
			}
			else
			{
				if(y.creditamount <= 0){
				dlist_sign+= "<span class='blackccr'></span>";
				dlist_sign+= "<span class='credit'>(Rs. "+y.creditamount+")</span>";
				}
			}
			dlist_sign+="<span>"+y.name+"</span></p>";
            $("#dxlist").append(dlist_sign);
     //   <span class='redccra'></span>
        });
    }
    else{
         $(".xallocatedriver #loading").show().html("No Driver Found !!");
         $(".driverbox").hide();


    }
    },
    error: function( jqXhr, textStatus, errorThrown ){
         window.xhr=null;
        console.log( errorThrown );
    }
});
    return true;
 
};
window.searchbancallsign=function(val,e){
	var mobile=$.trim($("#mobile").val());
	if(mobile.length ==0)
		return;
    if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') {
         sectbandriverasx(e.keyCode)
        return false;
    }
    
    if(val.length==0){
     $(".xbandriver").hide();
        return;
    }
     val = $(event.target).val();
    var firstLetterUpper = val[0] ? val[0].toUpperCase() : "";
    val=firstLetterUpper + val.substr(1, val.length);
    $(event.target).val(val);
	
$("#divbanbtn").hide();
    if(window.xhr!=null){
        window.xhr.abort()
    }
   
    
    window._xobj=new Object();
    window._xobj["api"]="searchforcallsignAll";
    window._xobj["callsign"]=val;
	window._xobj["mobile"]=mobile;
 	   window._xobj["adminCountryCode"]="<?php echo $_SESSION['COUNTRYCODE']; ?>";
      
    $(".xbandriver").show().find("p").remove();
    $(".xbandriver #loading").show().html("Loading...");
  
    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify(window._xobj),
    processData: false,
    success: function( data, textStatus, jQxhr ){
                window.xhr=null;
        window.searchdriverbanlist=data.data;
        /*if(window.searchdriverlist.length==1){
            allocatedr(window.searchdriverlist[0].driverid);

        }else*/ if(window.searchdriverbanlist.length>0){
                $(".xbandriver #loading").hide();

        $(window.searchdriverbanlist).each(function(x,y){
			var dlist_sign= "<p onclick='bandr("+y.driverid+",1)' data-id='"+y.driverid+"' data-callsign='"+y.callsign+"'>"+y.callsign;
			if(y.isonline == "1")
				dlist_sign+= "<span class='greenccr'></span>";
			else
				dlist_sign+= "<span class='redccr'></span>";
			if(window._jobprice !=null){
			var diff=(y.creditamount-(window._jobprice*0.2));
			if(diff <= 0){
				dlist_sign+= "<span class='blackccr'></span>";
				dlist_sign+= "<span class='credit'>(Rs. "+diff+")</span>";
			}
			}
			else
			{
				if(y.creditamount <= 0){
				dlist_sign+= "<span class='blackccr'></span>";
				dlist_sign+= "<span class='credit'>(Rs. "+y.creditamount+")</span>";
				}
			}
			dlist_sign+="<span>"+y.name+"</span></p>";
            $("#dxbanlist").append(dlist_sign);
     //   <span class='redccra'></span>
        });
    }
    else{
         $(".xbandriver #loading").show().html("No Driver Found !!");
     


    }
    },
    error: function( jqXhr, textStatus, errorThrown ){
         window.xhr=null;
        console.log( errorThrown );
    }
});
    return true;
 
};
window.allocatedr=function(driveridx,xx){
 
    var driver=window.searchdriverlist.filter(function (entry) {
    return entry.driverid == driveridx;
})[0];
  $("#allocatedriver").val(driver.callsign);
window.driverid=driveridx;
if(xx==1){
$(".xallocatedriver").hide(); 
//$("#confirm").focus();
}
$(".driverbox,.xstarrating").show();
 $("#xdrivername").html(driver.name);
  $("#xcolor").html(driver.color);
   $("#xmodel").html(driver.model);
 $("#xmake").html(driver.make);
    if(driver.lowvehicle=="1"){
                    $("#xvechile").html("Low Vechile"); 
                    }
                    else if(driver.highvehicle=="1"){
 $("#xvechile").html("Low Vechile");
                    }
 $("#xbadgeno").html("");
// $("#xbadgeno").html("Expected Time : "+driver.expectedtime);
$("#xplateno").html(driver.platnotxt);
$("#xregistration").html(driver.registration);
$("#xcallsign").html(driver.callsign);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);
$("#xcarimage1").attr("src",window._baseurl+"files/"+driver.carimage1);
}

window.bandr=function(driveridx,xx){
 
    var driver=window.searchdriverbanlist.filter(function (entry) {
    return entry.driverid == driveridx;
})[0];
  $("#txtbandriver").val(driver.callsign);
window.driverbanid=driveridx;
if(xx==1){
$(".xbandriver").hide(); 

//$("#confirm").focus();
}
$("#divbanbtn").show();
$("#yesban").focus();
$("#yesban").css({"background-color":"#ffa800"});
$("#noban").css({"background-color":"#a8a1a1"});
}

window.unbandriver=function()
{
	 $("#txtbandriver").val("");
	 $("#divbanbtn").hide();
}
</script>
    <script type="text/javascript">
      window._crrvia=1;
      window._baseurl="http://18.168.83.39/";
 $(window).resize(function(){
    adheight();
 });

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
      window.removevia=function(ref,cf){
        var index=($(ref).parent().index());
      
       $("._lothervia:nth-of-type("+index+")").remove();

        index++;
        $("._ikmnp:nth-of-type("+index+"),._ikmnpl:nth-of-type("+index+")").remove();
        $(ref).parent().remove();
        setTimeout(function(){
            var t=$(".vias").find("._lothervia").length;
             $(".notebox").css("height",$("#mklht").height());
               },10);
        updateviaplaceholder();
        remove_dots();
      }
       window.tConvert =function(time) {
  // Check correct time format and split into components
  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

  if (time.length > 1) { // If time format correct
    time = time.slice (1);  // Remove full string match value
    time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
    time[0] = +time[0] % 12 || 12; // Adjust hours
  }
  return time.join (''); // return adjusted time or original string
}
      window.updateviaplaceholder=function(){
          var counter=1;
           $(".vias").find("input").each(function(){
            $(this).attr("placeholder","Via "+counter);
            counter++;
           });

        }
        window.add_dots=function(){
          for(var i=1;i<=5;i++){ 
            $( "<span class='_lopepe'>*</span>" ).insertAfter( "._strty" );
          }
        }
         window.remove_dots=function(){
          for(var i=1;i<=6;i++){
            $(".dotsax").find("._lopepe:nth-child("+i+")").remove();
          }
          if($(".viaaz").length==0){
              for(var i=1;i<=3;i++){
            $(".dotsax").find("._lopepe:nth-child("+i+")").remove();
          } 
          }
        }
 
window.formatTime=function(timeInput) {

  intValidNum = timeInput.value;

  if (intValidNum < 24 && intValidNum.length == 2) {
      timeInput.value = timeInput.value + ":";
      return false;  
  }
  if (intValidNum == 24 && intValidNum.length == 2) {
      timeInput.value = timeInput.value.length - 2 + "0:";
      return false;
  }
  if (intValidNum > 24 && intValidNum.length == 2) {
      timeInput.value = "";
      return false;
  }

  if (intValidNum.length == 5 && intValidNum.slice(-2) < 60) {
    timeInput.value = timeInput.value + ":";
    return false;
  }
  if (intValidNum.length == 5 && intValidNum.slice(-2) > 60) {
    timeInput.value = timeInput.value.slice(0, 2) + ":";
    return false;
  }
  if (intValidNum.length == 5 && intValidNum.slice(-2) == 60) {
    timeInput.value = timeInput.value.slice(0, 2) + ":00:";
    return false;
  }


  if (intValidNum.length == 8 && intValidNum.slice(-2) > 60) {
    timeInput.value = timeInput.value.slice(0, 5) + ":";
    return false;
  }
  if (intValidNum.length == 8 && intValidNum.slice(-2) == 60) {
    timeInput.value = timeInput.value.slice(0, 5) + ":00";
    return false;
  }



}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
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
      if($.trim(this.value).length==0){
        $("#starter").hide();
      }
      else{
                $("#starter").show();

      }
    });
  });
}
window._isonetimeset=false;
function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
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
  $("#timerx").attr("placeholder",strTime);
  if(!window._isonetimeset){
      window._isonetimeset=true;
  $(".days_selected span").attr("data-goingtime",strTime).attr("data-returntime",strTime);
  }
  //$("#rttables tr td input").val((h + ":" + m+":"+s));
   setTimeout(startTimezz, 1000);
}
 
 window.opendriver=function(ref){
        var driveridx=$(ref).attr("data-driverid");
    var checkbox=$(ref).find("._pchke");
$(".xallocatedriver").hide();
var driver=window.driverlist.filter(function (entry) {
    return entry.driverid == driveridx;
})[0];
$(".driverbox,.xstarrating").show();
 
 $("#xdrivername").html(driver.name);
  $("#xcolor").html(driver.color);
   $("#xmodel").html(driver.model);
 $("#xmake").html(driver.make);
    if(driver.lowvehicle=="1"){
                    $("#xvechile").html("Low Vechile"); 
                    }
                    else if(driver.highvehicle=="1"){
 $("#xvechile").html("Low Vechile");
                    }
$("#xbadgeno").html("");
// $("#xbadgeno").html("Expected Time : "+driver.expectedtime);
 //$("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);
$("#xregistration").html(driver.registration)
 $("._allpoi").each(function(){
        if($(this).attr("data-counter")!=$(ref).attr("data-counter")){
             
            $(this).find("._pchke").prop("checked",false);
        }
        else{
            checkbox.prop("checked",!checkbox.is(":checked"));

        }
    });
setTimeout(function(){
     var anycheck=false;
    $("._allpoi").each(function(){
        if(!anycheck){
         anycheck=$(this).find("._pchke").is(":checked");
        }
    });
    if(!anycheck){
         $(".driverbox").hide();
    }
},400);
 }
 window.selectdriverfirst=function(driver){
    var driveridx=driver.driverid;
     $(".xallocatedriver").hide();
    if(!window.ismultipledriver){
$(".sectdriver").each(function(){
        if($(this).attr("data-counter")!=$(ref).attr("data-counter")){
            $(this).find(".checkboxmcv").prop("checked",false);
        }
        else{
            checkbox.prop("checked",!checkbox.is(":checked"));

        }
    });
    }
    else{
                    checkbox.prop("checked",!checkbox.is(":checked"));

    }

     
if(!window.ismultipledriver){
  $("#allocatedriver").val(driver.callsign);
$(".driverbox,.xstarrating").show();
}
else{
 
    $("#allocateddriverlist ._allpoi").remove();
    $(".checkboxmcv").each(function(){
        if($(this).is(":checked")){
            $("#allocateddriverlist").append("<div class='_allpoi' data-callsign='"+$(this).attr("data-callsign")+"'  onclick='opendriver(this)' data-driverid='"+$(this).attr("data-driverid")+"' ><div> <div class='_qwdc'></div> <input  class='_pchke' type='checkbox' /></div><input type='text' readonly value='"+$(this).attr("data-callsign")+"' /></div>");
          
        }
    });
    $("._allpoi").each(function(x,y){
        $(this).attr("data-counter",(++x));
    });
    
     

} 
window.driverid=driveridx;
$("#xcarimage1").attr("src",window._baseurl+"files/"+driver.carimage1);
 $("#xdrivername").html(driver.name);
  $("#xcolor").html(driver.color);
   $("#xmodel").html(driver.model);
 $("#xmake").html(driver.make);
    if(driver.lowvehicle=="1"){
                    $("#xvechile").html("Low Vechile"); 
                    }
                    else if(driver.highvehicle=="1"){
 $("#xvechile").html("Low Vechile");
                    }
					
$("#xbadgeno").html("");
// $("#xbadgeno").html("Expected Time : "+driver.expectedtime);
 //$("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
$("#xregistration").html(driver.registration);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);
setTimeout(function(){
var ischecked = (checkbox.is(":checked"));
if(driveridx=="0"||ischecked==false){
     $("#allocatedriver").val("");
window.driverid="0";
$(".driverbox").hide();
}},100);
}

window.selectdriver=function(ref){
    var driveridx=$(ref).attr("data-driverid");
    var checkbox=$(ref).find(".checkboxmcv");
    $(".xallocatedriver").hide();
    if(!window.ismultipledriver){
$(".sectdriver").each(function(){
        if($(this).attr("data-counter")!=$(ref).attr("data-counter")){
            $(this).find(".checkboxmcv").prop("checked",false);
        }
        else{
            checkbox.prop("checked",!checkbox.is(":checked"));

        }
    });
    }
    else{
                    checkbox.prop("checked",!checkbox.is(":checked"));

    }

    var driver=window.driverlist.filter(function (entry) {
    return entry.driverid == driveridx;
})[0];
if(!window.ismultipledriver){
  $("#allocatedriver").val(driver.callsign);
$(".driverbox,.xstarrating").show();
}
else{
 
    $("#allocateddriverlist ._allpoi").remove();
    $(".checkboxmcv").each(function(){
        if($(this).is(":checked")){
            $("#allocateddriverlist").append("<div class='_allpoi' data-callsign='"+$(this).attr("data-callsign")+"'  onclick='opendriver(this)' data-driverid='"+$(this).attr("data-driverid")+"' ><div> <div class='_qwdc'></div> <input  class='_pchke' type='checkbox' /></div><input type='text' readonly value='"+$(this).attr("data-callsign")+"' /></div>");
          
        }
    });
    $("._allpoi").each(function(x,y){
        $(this).attr("data-counter",(++x));
    });
    
     

} 
window.driverid=driveridx;
$("#xcarimage1").attr("src",window._baseurl+"files/"+driver.carimage1);
 $("#xdrivername").html(driver.name);
  $("#xcolor").html(driver.color);
   $("#xmodel").html(driver.model);
 $("#xmake").html(driver.make);
    if(driver.lowvehicle=="1"){
                    $("#xvechile").html("Low Vechile"); 
                    }
                    else if(driver.highvehicle=="1"){
 $("#xvechile").html("Low Vechile");
                    }
$("#xbadgeno").html("");
// $("#xbadgeno").html("Expected Time : "+driver.expectedtime);
 //$("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);

$("#xregistration").html(driver.registration);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);
setTimeout(function(){
var ischecked = (checkbox.is(":checked"));
if(driveridx=="0"||ischecked==false){
     $("#allocatedriver").val("");
window.driverid="0";
$(".driverbox").hide();
}},100);
}
window.driverlist=[];
window.isrepeatbooking=false;
window.isreturnbooking=false;

window.driverid=0;
window._jobref=null;
window.rgst=function(ev,ref){
     if(ev.which == 3)
      {
           window._jobref=ref; 
ev.preventDefault();
     var pagey=event.pageY;
     var windowheight=$(window).height()-10;
     if(pagey>=windowheight){
         pagey = pagey-60;
     }
     
    // Show contextmenu
    $(".custom-menu").finish().toggle(100).
    
    // In the right position (the mouse)
    
    css({
        top: pagey + "px",
        left: event.pageX + "px"
    }); 
       }
    }
    
       window.alphafirst="";
           window.alphasecond="";
           window.counter="";
           window.getReference=function(){
           myajax( {"api":"getreference"},function( data, textStatus, jQxhr ){
               window.alphafirst=data.data.alphafirst;
               window.alphasecond=data.data.alphasecond;
               window.counter=data.data.counter;
               $("#reference").val(window.alphafirst+window.alphasecond+window.counter);

           });
           }
           var ad=new Date();
           window._addate=ad.getDay();
           window.repeatedatearr=[];
       window.checkddt=function(ref){
        var dt=$.trim(ref.value).split(":");
        var cdate = new Date();
        var date = new Date();
        date.setHours(dt[0]);
        date.setMinutes(dt[1]);
 
      if(date.getTime()<cdate.getTime()){
        alert("Today's Return time should be greater than Current Time");

          let h = cdate.getHours();
  let m = cdate.getMinutes();
  let s = cdate.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
       }
       ref.value=h+":"+m;
     }
     window.removeviax=function(ref){
      if($("._lothervia").length!=0){
        var index=($(ref).parent().index());
 
        $("#_startervia").remove();
        var inl=$("._ikmnpl").length;
        
        $("._ikmnpl:nth-of-type("+inl+")").remove();
         index++;

        $("._ikmnp:nth-of-type("+index+")").remove();
       if($(ref).parent().hasClass("firstlcf")){
        index--;
         $("._ikmn:nth-of-type("+index+")").addClass("firstlcf").append('<img src="img/Artboard 17 copy 4.png" class="addcloseac  " onclick="newaddvia()" id="addvia" style="margin-left: 22px; width: 17px; margin-top: 2px;">').find(".addcloseaclose").attr("onclick","removeviax(this)");
         index--;
         $("._lothervia:nth-of-type("+index+")").attr("id","_startervia").removeClass("_lothervia").removeClass("axtempl");
       }
     
      $(ref).parent().remove();
        setTimeout(function(){
             updateviaplaceholder();

        remove_dots();
            var t=$(".vias").find("._lothervia").length;
             $(".notebox").css("height",$("#mklht").height());
               },10);
            
}
     }
     window.openaudiodialog=function(id){
      $("#audiomodal").modal("show");
      $("#audioloading").show();
      $("#audiotable").hide().find(".adrow").remove();
      myajax({"api":"getbookingcontrollerdetails","id":id},function( data, textStatus, jQxhr ){
          $(data.data).each(function(x,y){
               $("#audiotable").append("<tr class='adrow'><td>"+y.dayname+", "+y.bdate+" "+y.btime+"</td><td>"+y.controllername+"</td><td><audio controls  controlsList='nodownload'><source src='https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3'  type='audio/mp3'></audio> </td></tr>");
          });
          $("#audioloading").hide();
          $("#audiotable").show();
      });
     }
      window.istimeboxopen=false;
       window.minhour=function(ref){
        var dt=$.trim($(ref).parent().find(".demohour").val());
var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?"AM":"PM";
          dt--;
          if(dt<=0){
            dt=12;
          }
          if(dt==11){
             if(ampm=="PM"){
                $(ref).parent().parent().find(".demopm").removeClass("timeselected");
                $(ref).parent().parent().find(".demoam").addClass("timeselected")
            }
          }
           if(dt<10){
            dt="0"+dt
          }
 setTimeout(function(){
          $(ref).parent().find(".demohour").val(dt);

                    window.settmx($(ref).parent().parent().parent().parent())
                },20);

      }

window.minhourbkdate=function(ref,idx){
        $(ref).parent().parent().find(".demohour").focus().addClass("llfocus");
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
         var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?"AM":"PM";
          dt--;
          if(dt<=0){
            dt=12;
          }
		 if(dt==11 && dfgv12pm())
			  return;	
          if(dt==11){
             if(ampm=="PM"){
                $((idx=="datepicker"?"#demopm":"#demopm2")).removeClass("timeselected");
                $((idx=="datepicker"?"#demoam":"#demoam2")).addClass("timeselected")
            }
          }
           if(dt<10){
            dt="0"+dt
          }

          kk(ref,dt,idx);          

      }
      
	  window.dateNext=function(idx){
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");              
           var newDate = new Date( _date[2], _date[1] - 1, _date[0]);
		   
		    var today = new Date();
            var _dateToday = new Date(today.getFullYear(), today.getMonth(), today.getDate()).getTime();

            if(newDate.getTime()>_dateToday){
				return true;
			}
			else
			{
				return false;
			}
		  	  
	  }
	  	  window.datePrev=function(idx){
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");              
           var newDate = new Date( _date[2], _date[1] - 1, _date[0]);
		   
		    var today = new Date();
            var _dateToday = new Date(today.getFullYear(), today.getMonth(), today.getDate()).getTime();

            if(newDate.getTime()<_dateToday){
				return true;
			}
			else
			{
				return false;
			}
		  	  
	  }
      window.inchourbkdate=function(ref,idx){
         $(ref).parent().parent().find(".demohour").focus().addClass("llfocus");
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
         var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?"AM":"PM";
          dt++;
          if(dt>12){
            dt=1;
          }
          
          if(dt>11){
            console.log(dt+" "+ampm);
            dt=12
            if(ampm=="AM"){
                $((idx=="datepicker"?"#demoam":"#demoam2")).removeClass("timeselected");
                $((idx=="datepicker"?"#demopm":"#demopm2")).addClass("timeselected")
            }
            
          }
           if(dt<10){
            dt="0"+dt
          }
        
         kk(ref,dt,idx);
         

      }
      window.dfgv=function(){
        var today = new Date();
        return new Date(today.getFullYear(), today.getMonth(), today.getDate(), today.getHours(), today.getMinutes(), 0).getTime();
      }
	   window.timenow=function(idx,tt){
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");              
           var newDate = new Date( _date[2], _date[1] - 1, _date[0],tt[0],tt[1],0);
		   
		    if(newDate.getTime()<=dfgv()){
				return true;
			}
			else
			{
				return false;
			}
		  	  
	  }
	  
	   window.dfgv12pm=function(){
        var today = new Date();
		var time12 = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 11, 59, 0).getTime();
		if( time12 < dfgv())
        return true;
		else
		return false;
      }
      window.inchourrtdate=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt++;
          if(dt>12){
            dt=1;
          }
           if(dt<10){
            dt="0"+dt
          }
          kkra(ref,dt);

      }
       window.inchouraba=function(ref){
        var dt=$.trim($(ref).parent().find(".demohour").val());
          dt++;
          if(dt>12){
            dt=1;
          }
           if(dt<10){
            dt="0"+dt
          }
          
          $(ref).parent().find(".demohour").val(dt); 

      }
      window.inchour=function(ref){
        var dt=$.trim($(ref).parent().find(".demohour").val());
        var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?"AM":"PM";
          dt++;
          if(dt>12){
            dt=1;
          }

          if(dt>11){
            dt=12
            if(ampm=="AM"){
                $(ref).parent().parent().find(".demoam").removeClass("timeselected");
                $(ref).parent().parent().find(".demopm").addClass("timeselected")
            }
             
              $(ref).parent().parent().find(".demohour").val("12")
              
          }
           if(dt<10){
            dt="0"+dt
          }
          setTimeout(function(){
          $(ref).parent().find(".demohour").val(dt);
               window.settmx($(ref).parent().parent().parent().parent())
                },20);

      }
      window.kk=function(ref,dt,idx){
          var mn=$(ref).parent().parent().find(".demominute").val();
         
        var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?" AM":" PM";
          var _time = dt+":"+mn+ampm;
 
           
           _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");
           

          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);

            if(newDate.getTime()>=dfgv()){
             $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
           }
      }
       window.kkr=function(ref,dt,idx){
          var hr=$(ref).parent().parent().find(".demohour").val();
        var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");
          

          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
            
            if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          } 
      }
      window.kkra=function(ref,dt){
          var mn=$(ref).parent().parent().find(".demominute").html();
        var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?" AM":" PM";
          var _time = dt+":"+mn+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           
           var today=new Date();
          var newDate = new Date( today.getFullYear(), today.getMonth(), today.getDate(),_time[0],_time[1],0);
            
           if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          }
      }
       window.kkrb=function(ref,dt){
          var hr=$(ref).parent().parent().find(".demohour").val();
        var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
            var today=new Date();

          var newDate = new Date( today.getFullYear(), today.getMonth(), today.getDate(),_time[0],_time[1],0);
            
           if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").val(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          }
      }
        window.incminbkdate=function(ref,idx){ 
			$(ref).parent().parent().find(".demominute").focus().addClass("llfocus");
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        var hr=$.trim($(ref).parent().parent().find(".demohour").val());
         var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?"AM":"PM";
          dt++;
          if(dt>59){
            dt=1;
            hr++;
           
           

          } 
             if(dateNext(idx))
			 {
							   if(hr==12 && dt==1) {  hr=12; $(ref).parent().parent().find(".demominute").val("01");  dt=1;
					  if(ampm=="AM"){
						$((idx=="datepicker"?"#demoam":"#demoam2")).removeClass("timeselected");
						$((idx=="datepicker"?"#demopm":"#demopm2")).addClass("timeselected")
					}
					  }
					  else if(hr>12 && dt==1) {  hr=1; $(ref).parent().parent().find(".demominute").val("01");  dt=1;
					  if(ampm=="AM"){
						$((idx=="datepicker"?"#demoam":"#demoam2")).removeClass("timeselected");
						$((idx=="datepicker"?"#demopm":"#demopm2")).addClass("timeselected")
					}
					  }
			 }
			 else
			 {
				 
				 if(hr==12 && dt==1) {  
					 hr=11; 
				//	 $(ref).parent().parent().find(".demominute").val(""); 
					 dt=59;
					  if(ampm=="AM"){
						$((idx=="datepicker"?"#demoam":"#demoam2")).removeClass("timeselected");
						$((idx=="datepicker"?"#demopm":"#demopm2")).addClass("timeselected")
					}
					  }
					  else if(hr>12 && dt==1) {  hr=1; 
					  $(ref).parent().parent().find(".demominute").val("00");  
					  dt=0;
					  if(ampm=="AM"){
						$((idx=="datepicker"?"#demoam":"#demoam2")).removeClass("timeselected");
						$((idx=="datepicker"?"#demopm":"#demopm2")).addClass("timeselected")
					}
					  }
				 
				 
				 
				 
			 }
             $(ref).parent().parent().find(".demohour").val(hr)
          if(dt<10){
            dt="0"+dt
          }

           kkr(ref,dt,idx);

      }
       window.minminbkdate=function(ref,idx){
		   $(ref).parent().parent().find(".demominute").focus().addClass("llfocus");
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
         
          dt--;
          if(dt<=0){
            dt=59;
           
          }

            if(dt==59){
                dt=59;
                 var ampm=$((idx=="datepicker"?"#demoam":"#demoam2")).hasClass("timeselected")?" AM":" PM";
                var hr=$(ref).parent().parent().find(".demohour").val();
                hr--;
                if(hr<=0){
                    hr=12;
                    
                }
                 if(hr==11){
                     if($.trim(ampm)=="PM"){
                $((idx=="datepicker"?"#demopm":"#demopm2")).removeClass("timeselected");
                $((idx=="datepicker"?"#demoam":"#demoam2")).addClass("timeselected")
            }
                }
                $(ref).parent().parent().find(".demohour").val(hr);
          
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");
           
          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
             if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").val(dt);
           
          } 
            }
         
            
              if(dt<10){
            dt="0"+dt
          }
            kkr(ref,dt,idx);
      }
      window.incminrtdate=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
        
          dt++;
          if(dt>59){
            dt=1;
          }
          if(dt<10){
            dt="0"+dt
          }

            
           kkrb(ref,dt);

      }
       window.minminrtdate=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
           kkrb(ref,dt);
      }
      window.incmin=function(ref){
        var dt=$.trim($(ref).parent().find(".demominute").val());
         var hr=$.trim($(ref).parent().parent().find(".demohour").val());
         var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?"AM":"PM";
          dt++;
          if(dt>59){
            dt=1;
              hr++;
          } 
           if(hr==12 && dt==1) {  hr=12; $(ref).parent().parent().find(".demominute").val("01");  dt=1;
              if(ampm=="AM"){
                $(ref).parent().parent().find(".demoam").removeClass("timeselected");
                $(ref).parent().parent().find(".demopm").addClass("timeselected")
            }
              }
              else if(hr>12 && dt==1) {  hr=1; $(ref).parent().parent().find(".demominute").val("01");  dt=1;
              if(ampm=="AM"){
               $(ref).parent().parent().find(".demoam").removeClass("timeselected");
                $(ref).parent().parent().find(".demopm").addClass("timeselected")
            }
              }
              $(ref).parent().parent().find(".demohour").val(hr)
          if(dt<10){
            dt="0"+dt
          }
           setTimeout(function(){
          $(ref).parent().find(".demominute").val(dt);
           window.settmx($(ref).parent().parent().parent().parent())
       },20);

      }
       window.minmin=function(ref){
        var dt=$.trim($(ref).parent().find(".demominute").val());
          dt--;
          if(dt<=0){
            dt=59;
          }
            if(dt==59){
                dt=59;
                  var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?"AM":"PM";
                var hr=$(ref).parent().parent().find(".demohour").val();
                hr--;
                if(hr<=0){
                    hr=12;
                    
                }
                 if(hr==11){
                     if($.trim(ampm)=="PM"){
                $(ref).parent().parent().find(".demopm").removeClass("timeselected");
                $(ref).parent().parent().find(".demoam").addClass("timeselected")
            }
                }
                $(ref).parent().parent().find(".demohour").val(hr);
            
           $(ref).parent().find(".default-value-holder").val(dt);
           
           
            }
          if(dt<10){
            dt="0"+dt
          } setTimeout(function(){
          $(ref).parent().find(".demominute").val(dt);
          window.settmx($(ref).parent().parent().parent().parent())
      },20);
      }
      window.minhourrtdate =function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").val());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
          kkra(ref,dt);
      }
      window.settmx=function(ref){
        var hr=$(ref).find(".demohour").val();
        var mn=$(ref).find(".demominute").html();
         var ampm=$(ref).find(".demoam").hasClass("timeselected")?"AM":"PM";
        //$(ref).find("input[type=text]").val(hr+":"+mn+" "+ampm);
        return hr+":"+mn+" "+$.trim(ampm);
      }
      window.demoam=function(ref){
        $(ref).parent().parent().parent().find(".demopm").removeClass("timeselected");

        $(ref).addClass("timeselected");
         window.settmx($(ref).parent().parent().parent().parent().parent().parent().parent())
      }
      window.demopm=function(ref){
          $(ref).parent().parent().parent().find(".demoam").removeClass("timeselected");

        $(ref).addClass("timeselected");
         window.settmx($(ref).parent().parent().parent().parent().parent().parent().parent())
      }
    window.getplacedetails=function(ref,type){
        if($(ref).parent().hasClass("pickupdrpdn")) {
        $("#droplocation").focus().prev().hide();
        }
        else if($(ref).parent().hasClass("dropdrpdn")){
            $(".xmapassengers").show().parent().find("._dropdown").addClass("active");
        }
        
          $(ref).parent().hide();
          var prref=$(ref).parent().parent();
          var inpt=prref.find("input[type=text]");
          inpt.val($(ref).text());
          var _htmlk=$(ref).html();
          
        
          prref.find(".mapsx").show();
          prref.find(".resulttry").html($(ref).html()).show();
          window._isdrpshown=false;
           
          if(type==1){
                window.ispickuplcvalid=true;
          }
            else if(type==2){
                                window.isdropvalid=true;

            }
          myajax({"api":"getplacedetails","placeid":$(ref).attr("data-placeid")},function( data, textStatus, jQxhr ){

              if(type==1){
                    window.pickuplat=data.data.lat;
                    window.pickuplng=data.data.lng;
                    window.pickupzipcode=data.data.postalcode; 
                    printmap(window.pickuplat,window.pickuplng);
                    if(window.pickupzipcode!="UK"&&!inpt.val().includes(window.pickupzipcode)){
                       
                    inpt.val(inpt.val()+","+window.pickupzipcode);
                    prref.find(".resulttry").html(_htmlk+","+window.pickupzipcode);

                }
                    getDistance(); getDrivers();
              }
              else if(type==2){
                    window.droplat=data.data.lat;
                    window.droplng=data.data.lng;
                    window.dropzipcode=data.data.postalcode; 
                    printmap(window.droplat,window.droplng);
                    if(window.dropzipcode!="UK"&&!inpt.val().includes(window.dropzipcode)){
                    inpt.val(inpt.val()+","+window.dropzipcode);
                    prref.find(".resulttry").html(_htmlk+","+window.dropzipcode)
                }
                    getDistance();
              }
              else{
                 inpt.attr("data-zipcode",data.data.postalcode).attr("data-lat",data.data.lat).attr("data-lng",data.data.lng);
                 printmap(data.data.lat,data.data.lng);
                 if(data.data.postalcode!="UK"&&!inpt.val().includes(data.data.postalcode)){
                    inpt.val(inpt.val()+","+data.data.postalcode);
                    prref.find(".resulttry").html(_htmlk+","+data.data.postalcode)
                }
                 getDistance();
              }
          });
          }

          window.getplacedetailsbytext=function(placeid,type,ref){
             var prref=ref;
            var inpt=prref.find("input[type=text]");
             var _htmlk=ref.find(".resulttry").html();
             
             
          myajax({"api":"getplacedetails","placeid":placeid},function( data, textStatus, jQxhr ){
           
              if(type==1){
                    window.pickuplat=data.data.lat;
                    window.pickuplng=data.data.lng;
                    window.pickupzipcode=data.data.postalcode; 
                    if(window.pickupzipcode!="UK"&&!inpt.val().includes(window.pickupzipcode)){
                        
                    inpt.val(inpt.val()+","+window.pickupzipcode);
                    prref.find(".resulttry").html(_htmlk+","+window.pickupzipcode);

                }
                     printmap(window.pickuplat,window.pickuplng);
                    getDistance(); getDrivers();
              }
              else if(type==2){
                    window.droplat=data.data.lat;
                    window.droplng=data.data.lng;
                    window.dropzipcode=data.data.postalcode; 
                     if(window.dropzipcode!="UK"&&!inpt.val().includes(window.dropzipcode)){
                    inpt.val(inpt.val()+","+window.dropzipcode);
                    prref.find(".resulttry").html(_htmlk+","+window.dropzipcode)
                }
                     printmap(window.droplat,window.droplng);
                    getDistance();
              }
              else{
                 window.amaddressref.find("input[type=text]").attr("data-zipcode",data.data.postalcode).attr("data-lat",data.data.lat).attr("data-lng",data.data.lng);
                  if(data.data.postalcode!="UK"&&!inpt.val().includes(data.data.postalcode)){
                    inpt.val(inpt.val()+","+data.data.postalcode);
                    prref.find(".resulttry").html(_htmlk+","+data.data.postalcode)
                }
                    printmap(data.data.lat,data.data.lng);
                 getDistance();
              }
          });
          }
               document.onkeydown = checkKey;
window._lcchildlength=0;
window.dropplaceid=window.pickupplaceid=window.axxplaceid="0";
window.xattrytype=0;
window.__xsetaddr="";
window.viacountrpl=0;
window.dddr=function(){ 
    if($(".timer-box1").is(":visible")){
    var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour").val()+":"+$("#bdemominute").val()+ampm;
 
            $("#bdemominute").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#datepicker").val().split(",")[1]).split("-");
           

          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
          window.istimeboxopen=false;
            $(".timer-box1").hide();
            if(newDate.getTime()>=dfgv()){
              
           $("#timerx").val($("#bdemohour").val()+":"+$("#bdemominute").val()+" "+$.trim(ampm));
         
          }
          else{

            $("#errormodaldate").modal("show");
            $("#amerrorbxaxc").html("Booking Date and Time Should not be less than current Date and Time")
          }
      }
      else  if($(".timer-box2").is(":visible")){
    var ampm=$("#demoam2").hasClass("timeselected")?" AM":" PM";
               var _time = $("#bdemohour2").val()+":"+$("#bdemominute2").val()+" "+$.trim(ampm);
 
            $("#bdemominute2").removeClass("llfocus");
              _time=window.tofulltimedt(_time).split(":");
               window.istimeboxopen=false;
            $(".timer-box2").hide();
              if($.trim($("#datepicker1").val()).length==0) {
                $("#errormodaldate").modal("show");
            $("#amerrorbxaxc").html("Please Select Return Date");
            return;
              }
              
           var _date=$.trim($("#datepicker1").val().split(",")[1]).split("-");
           
          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
         
            if(newDate.getTime()>=dfgv()){
              
           $("#timerx1").val($("#bdemohour2").val()+":"+$("#bdemominute2").val()+" "+$.trim(ampm));
         
          }
          else{

            $("#errormodaldate").modal("show");
            $("#amerrorbxaxc").html("Booking Date and Time Should not be less than current Date and Time");
          }
      }
       else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){
                     var ampm=window.crtimerref.find(".demoam").hasClass("timeselected")?" AM":" PM";
               var _time = window.crtimerref.find(".demohour").val()+":"+window.crtimerref.find(".demominute").val()+ampm;
             
   
               window.istimeboxopen=false;
               window.crtimerref.hide().parent().find(".goingx").val(_time);
               window.crtimerref=null;
                }
            }


}
function checkKey(e) {

    e = e || window.event;
      
    if(e.keyCode=="27"){
            if($(".timer-box1").is(":visible")){
            window.istimeboxopen=false;
            $(".timer-box1").hide();
            $("#timerx").val("");

                return false;
            }
            else  if($(".timer-box2").is(":visible")){
            window.istimeboxopen=false;
            $(".timer-box2").hide();
            $("#timerx1").val("");

                return false;
            }
            else if(window.crtimerref!=null){
                e.preventDefault();
                e.stopPropagation();


              window.crtimerref.hide();  
                window.istimeboxopen=false;
               
                return false;
             
        }
        $("#cancelbk").modal("show");
        $("#yescancel").focus();
        return;
    }
    
    if(e.keyCode=="39"){
        if($("#cancelbk").hasClass("show")){
            $("#nocancel").focus();
            return;
        }
         if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
                $("#bdemominute").focus();
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                 
                  
                }

            return;
        }
        else  if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
                $("#bdemominute2").focus();
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                  
                }

            return;
        }
          else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){

                    if(window.crtimerref.find(".demohour").is(":focus")){
                        window.crtimerref.find(".demominute").focus();
                    }
                    return;
                }
            }
        var mobile=$.trim($("#mobile").val()).length;
        var pickuplocation =$.trim($("#pickuplocation").val()).length;
        var droplocation =$.trim($("#droplocation").val()).length;
        if(mobile==0&&pickuplocation==0&&droplocation==0){
        window.location.href="active.php";
        }
    }
     if(e.keyCode=="37"){
        if($("#cancelbk").hasClass("show")){
            $("#yescancel").focus();
            return;
        }
         if($(".timer-box1").is(":visible")){
             
             if (document.querySelector('.demohour') === document.activeElement) {
               
             }  
             else  if(document.querySelector('.demominute') === document.activeElement) {
                  $("#bdemohour").focus();
                  
                }

            return;
        }
         else if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
               
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                  $("#bdemohour2").focus();
                  
                }

            return;
        }

        else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){
                  
                    if(window.crtimerref.find(".demohour").is(":focus")){
                        
                    }
                    else  if(window.crtimerref.find(".demominute").is(":focus")) {
                    window.crtimerref.find(".demohour").focus();
                  
                }
                    return;
                }
            }
        var mobile=$.trim($("#mobile").val()).length;
        var pickuplocation =$.trim($("#pickuplocation").val()).length;
        var droplocation =$.trim($("#droplocation").val()).length;
        if(mobile==0&&pickuplocation==0&&droplocation==0){
        window.location.href="home.php";
        }
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
        else if($(".timer-box2").is(":visible")){
             
             if (document.querySelector('#bdemohour2') === document.activeElement) {
                inchourbkdate(document.getElementById("barrowup2"),'datepicker1');
             }  
             else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                 
                 incminbkdate(document.getElementById("barrowupmin2"),'datepicker1');
                }

            return;
        }
          else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){
                    if(window.crtimerref.find(".demohour").is(":focus")){
                       inchour(window.crtimerref.find(".hourup")); 
                    }
                    else if(window.crtimerref.find(".demominute").is(":focus")){
                       incmin(window.crtimerref.find(".minup")); 
                    }
                    
                    return;
                }
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

                minhourbkdate(document.getElementById("barrowup2"),'datepicker1');
             }  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                
                 minminbkdate(document.getElementById("barrowdownmin2"),'datepicker1');
                }


            return;
        }
          else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){
                      if(window.crtimerref.find(".demohour").is(":focus")){
                       minhour(window.crtimerref.find(".hourup")); 
                    }
                    else if(window.crtimerref.find(".demominute").is(":focus")){
                       minmin(window.crtimerref.find(".mindown")); 
                    }
                    
                    return;
                }
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
            else if($(".timer-box2").is(":visible")){
                 
                if (document.querySelector('#bdemohour2') === document.activeElement) {
                    $("#bdemominute2").focus().addClass("llfocus");
                    $("#bdemohour2").removeClass("llfocus");
                }
                  else  if(document.querySelector('#bdemominute2') === document.activeElement) {
                    
                 dddr();
                  
                } 
                return;
            }
              else if(window.crtimerref!=null){
                if(window.crtimerref.is(":visible")){
                     var ampm=window.crtimerref.find(".demoam").hasClass("timeselected")?" AM":" PM";
               var _time = window.crtimerref.find(".demohour").val()+":"+window.crtimerref.find(".demominute").val()+ampm;
             
   
               window.istimeboxopen=false;
               window.crtimerref.hide().parent().find(".goingx").val(_time);
               window.crtimerref=null;
               return;
                }
            }
        }
     
    if(!window.amaddressref) return;
    if (e.keyCode == '38') { 
         var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xmapassengers");
        if(xmpassengersx.is(":visible")){
            var _lcchildlengthax= xmpassengersx.find("li").length;
            _lcchildlengthax--;
           xmpassengersx.find("li").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           xmpassengersx.find("li").removeClass("active");
		   xmpassengersx.find("li").removeClass("sctedd");
           if(hasclass)
             classcounter--;
        if(classcounter<=0){
            classcounter=_lcchildlengthax;
            xmpassengersx.animate({scrollTop: '300px'}, 100);
        }
        if(classcounter==11){
                xmpassengersx.animate({scrollTop: '50px'}, 100);

        }
        else if(classcounter==2){
                xmpassengersx.animate({scrollTop: '0px'}, 100);

        }
         
         var vg=xmpassengersx.children().eq(classcounter);
         $(".xpassengersa").html(vg.addClass("active").text());
        
            return;
        }

          if($(".specialvehicle").is(":visible")){ 

             var indx=-1;
              if($(".xmnormal").hasClass("active")){
                indx=1;
              }
              else if($(".xmautorikshaw").hasClass("active")){
                indx=2;
              }
               else if($(".xmmotorbike").hasClass("active")){
                indx=3;
              }
                var pp=$(".xpassengersa").html();
               $(".specialrequestimgchld").removeClass("active").find("input[type=checkbox]").prop("checked",false);

              if(indx==-1){
                
                if(pp>6){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                   $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
            }
            else if(pp>1&&pp<=6){
                $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(2)").find("span").html());
                $(".specialrequestimgchld:nth-of-type(2)").addClass("active").find("input[type=checkbox]").prop("checked",true);
            }
            else{
                $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(3)").find("span").html());
                 $(".specialrequestimgchld:nth-of-type(3)").addClass("active").find("input[type=checkbox]").prop("checked",true);
            }
              }
              else{
               
                
             if(pp>6){
                $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                   $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
            }
            else if(pp>1&&pp<=6){
               
                if(indx==1){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(2)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(2)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else{
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
            }
            else  {
                 if(indx==1){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(3)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(3)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else if(indx==2){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else{
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(2)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(2)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                } 
            }
              }
            
            return;
         }
        window._lcchildlength = window.amaddressref.find(".lcdropdown p").length;
         if(!$(".lcdropdown").is(":visible")||_lcchildlength==0){ return; }
        var classcounter=0;
        var hasclass=false;
        window.amaddressref.find(".lcdropdown p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
        window.amaddressref.find(".lcdropdown p").removeClass("active");
   
         if(hasclass){
            
           // classcounter--;
        }
        else classcounter--;
           
        if(classcounter<=0){
            classcounter=window._lcchildlength;
        }
        
        window.amaddressref.find(".mapsx").show();
       var vg=window.amaddressref.find(".lcdropdown").children().eq(classcounter);
       var addr=vg.addClass("active").text();
       window.__xsetaddr=vg.addClass("active").html();
       window.amaddressref.find("input").val(addr);
       var attr = window.amaddressref.find("input").attr('id');

       if (typeof attr !== 'undefined' && attr !== false) {
        if(attr=="droplocation"){
            window.xattrytype=2;
            window.isdropvalid=true;
        window.dropplaceid=vg.attr("data-placeid");
         
       }
       else if(attr=="pickuplocation"){
        window.xattrytype=1;
        window.ispickuplcvalid=true;
         window.pickupplaceid=vg.attr("data-placeid");
       }
       else{
        if(window.amaddressref.find("input").hasClass("viaaz")){
        window.xattrytype=3;
        window.axxplaceid=vg.attr("data-placeid");
    }
       }
       }
        else{
         if(window.amaddressref.find("input").hasClass("viaaz")){
        window.xattrytype=3;
        window.axxplaceid=vg.attr("data-placeid");
    }
       }

    }
    else if (e.keyCode == '40') { 
        var classcounter=0;
        var hasclass=false;
        var xmpassengersx=$(".xmapassengers");
        if(xmpassengersx.is(":visible")){
            var _lcchildlengthax= xmpassengersx.find("li").length;
            _lcchildlengthax--;
           xmpassengersx.find("li").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
           xmpassengersx.find("li").removeClass("active");
		   xmpassengersx.find("li").removeClass("sctedd");
           if(hasclass)
             classcounter++;
        if(classcounter>_lcchildlengthax){
            classcounter=0;
            xmpassengersx.animate({scrollTop: '0px'}, 100);
        }
        if(classcounter==9){
                xmpassengersx.animate({scrollTop: '230px'}, 100);

        }
        else if(classcounter==18){
                xmpassengersx.animate({scrollTop: '300px'}, 100);

        }
         var vg=xmpassengersx.children().eq(classcounter);
         $(".xpassengersa").html(vg.addClass("active").text());
      
            return;
        }
          if($(".specialvehicle").is(":visible")){ 
             var indx=-1;
              if($(".xmnormal").hasClass("active")){
                indx=1;
              }
              else if($(".xmautorikshaw").hasClass("active")){
                indx=2;
              }
               else if($(".xmmotorbike").hasClass("active")){
                indx=3;
              }
               $(".specialrequestimgchld").removeClass("active").find("input[type=checkbox]").prop("checked",false);
              if(indx==-1){
                $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
              }
              else{
                var pp=$(".xpassengersa").html();
                
             if(pp>6){
                $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                   $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
            }
            else if(pp>1&&pp<=6){
               
                if(indx==1){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(2)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(2)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else{
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
            }
            else  {
                 if(indx==1){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(2)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(2)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else if(indx==2){
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(3)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(3)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                }
                else{
                    $("#_capabilityuj").html($(".specialrequestimgchld:nth-of-type(1)").find("span").html());
                      $(".specialrequestimgchld:nth-of-type(1)").addClass("active").find("input[type=checkbox]").prop("checked",true);
                } 
            }
              }
            
            return;
         }
         window._lcchildlength = window.amaddressref.find(".lcdropdown p").length;
        if(!$(".lcdropdown").is(":visible")||_lcchildlength==0){ return; }
        
        window.amaddressref.find(".lcdropdown p").each(function(x){
            if($(this).hasClass("active")){
                hasclass=true;
                classcounter=x;
            }
        });
        window.amaddressref.find(".lcdropdown p").removeClass("active");
         if(hasclass)
            classcounter+=2;
        else classcounter++;
        if(classcounter>window._lcchildlength){
            classcounter=1;
        }
       var vg=window.amaddressref.find(".lcdropdown").children().eq(classcounter);
       var addr=vg.addClass("active").text();
       window.__xsetaddr=vg.addClass("active").html();
       window.amaddressref.find("input").val(addr);
    
       window.amaddressref.find(".mapsx").show();
       var attr = window.amaddressref.find("input").attr('id');

       if (typeof attr !== 'undefined' && attr !== false) {
        if(attr=="droplocation"){
            window.xattrytype=2;
            window.isdropvalid=true;  
        window.dropplaceid=vg.attr("data-placeid");
         
       }
       else if(attr=="pickuplocation"){
        window.ispickuplcvalid=true;
        window.xattrytype=1;
         window.pickupplaceid=vg.attr("data-placeid");
       }
       else{
        if(window.amaddressref.find("input").hasClass("viaaz")){
        window.xattrytype=3;
        window.axxplaceid=vg.attr("data-placeid");
    }
       }
       }
        else{
            if(window.amaddressref.find("input").hasClass("viaaz")){
        window.xattrytype=3;
        window.axxplaceid=vg.attr("data-placeid");
    }
         
       }
     
    }
     else if (e.keyCode == '13') {

            if($("#errormodal").hasClass("show")){
               
                $("#errormodal").modal("hide");
                  if($("#quotation").is(":checked")){
                      var mkll=$.trim($("#fixedprice").val());
                if(mkll.length==0){
                 $("#fixedprice").focus();
                  return; 
                }
                  }
                if(window.errortype=="0")
                 $("#confirm").focus();
                return;
            }
		
        if($(".xmapassengers").is(":visible")){
            e.preventDefault();
            $(".xmapassengers").hide().parent().find("._dropdown").removeClass("active");
             $(".xmmotorbike,.xmautorikshaw").show();
            if($(".xpassengersa").html()>6){
                $(".xmmotorbike,.xmautorikshaw").hide();
            }
            else  if($(".xpassengersa").html()>1){
                $(".xmmotorbike").hide();
            }
			
            $(".specialvehicle").show().parent().find("._dropdown").addClass("active");
		//	$("#normal").prop('checked', true);
		//	$(".xmnormal").attr('selected',true);
        /*    if($("#booking").is(":checked")){ }
            else{
                $(".fixededitbox").show();
                 $("#fixedprice").focus();
            }*/
          var pass=$(".xpassengersa").html();
             var rs=window.customerfixedprice.filter(function (entry) {
    return entry.passengers == pass && entry.lat==window.pickuplat && entry.lng==window.pickuplng;
});
     /*      if(rs.length!=0){
            $("#fixedbx").attr("data-price",rs[0].fixedprice).find("strong").html("Rs "+rs[0].fixedprice);
            $("#fixedprice").val(rs[0].fixedprice);
           }
            else{
            $("#fixedbx").attr("data-price","0").find("strong").html("");
             $("#fixedprice").val("");
           }*/
        //    window.amaddressref=null;
            return;
        }
        if($(".specialvehicle").is(":visible")){ 
            $(".specialvehicle").hide().parent().find("._dropdown").removeClass("active");
			if($("#booking").is(":checked")){   
			
			}
            else{
                $(".fixededitbox").show();
                 $("#fixedprice").focus();
            }
			if($("#booking").is(":checked")){  
          setTimeout(function(){ 
             $("#confirm").focus();
            $("._cover").hide();
       },2000);
			}
            window.amaddressref=null;
            return;
        
			}
        if(window.amaddressref==null) return;


           window._isdrpshown=false; 
        if($(".lcdropdown").is(":visible")||window._lcchildlength!=0){
            $(".lcdropdown").hide();
          
            if(window.amaddressref.find(".pickupdrpdn").length!=0&&window.ispickuplcvalid) {
              /*  if($("#quotation").is(":checked")){
                    var vialln = ($(".vias > div").length);
                    window.viacountrpl=1;
                    $(".vias > div:nth-of-type("+window.viacountrpl+")").find("input").focus();
                }
                else{ $("#droplocation").focus().prev().hide();}*/
				$("#droplocation").focus().prev().hide();
        }
        else  if(window.amaddressref.find(".viaaz ").length!=0){
             var vialln = ($(".vias > div").length);
             window.viacountrpl++;
             if(window.viacountrpl>vialln){
                $("#droplocation").focus();
             }
             else{
             $(".vias > div:nth-of-type("+window.viacountrpl+")").find("input").focus();
         }
        }
        else if(window.amaddressref.find(".dropdrpdn").length!=0&&window.isdropvalid) {

              $(".xmapassengers").show().parent().find("._dropdown").addClass("active");
              $("#droplocation").blur();
        }
      
         if(window.__xsetaddr.length!=0)
        window.amaddressref.find(".resulttry").show().html(window.__xsetaddr);
        if(window.xattrytype==1)
        getplacedetailsbytext(window.pickupplaceid,1,window.amaddressref);
        else if(window.xattrytype==2)
        getplacedetailsbytext(window.dropplaceid,2,window.amaddressref);
        else if(window.xattrytype==3) getplacedetailsbytext(window.axxplaceid,0,window.amaddressref);
       
      }
     
     }
    else if (e.keyCode == '37') {
       // left arrow
    }
    else if (e.keyCode == '39') {
       // right arrow
    }

}
window.showinpfld=function(ref){

    $(ref).hide().next().show().focus();
}
window.reinitdbc=function(ref,e){
    e.stopPropagation();
    var aa = $.trim($(ref).prev().html());
    if(!window._isdrpshown&&aa.length!=0){
        $(ref).prev().show();
    }
    onviablur(ref);
}
window.minusbn=function(ref){
    ref=$(ref).parent().find("input[type=text]");
    var vl=$.trim(ref.val());
    vl=(vl.length==0?0:parseInt(vl));
    vl--;
    vl=(vl<=0?0:vl);
    ref.val(vl);
}
window.plusbn=function(ref){
    ref=$(ref).parent().find("input[type=text]");
    var vl=$.trim(ref.val());
    vl=(vl.length==0?0:parseInt(vl));
    vl++;
    ref.val(vl);
}
window.showviamap=function(ref){
     ref = $(ref).parent().parent().parent().find("input[type=text]");
      
     printmap(ref.attr("data-lat"),ref.attr("data-lng"))
}
window.onviafocus=function(ref){
    var txt = $(ref).attr("placeholder");
    $(ref).attr("placeholder","").parent().find(".plholder").show().html("<span>"+txt+"</span>");
 }
  window.onviablur=function(ref){
     var t =  $(ref).parent().find(".plholder").hide().text();
   $(ref).attr("placeholder",t)
 }
window._isdrpshown=false;
window.amaddressref=null;
window.errortype="0";
window.prepaidamount=0;
        window.__iscard="0";
        window.ispickuplcvalid=false;
        window.isdropvalid=false;
        window.cashtype="0";
        window.checkHR=function(ref){
             
        }
       $(function(){ 
        $("#bdemominute").click(function(){
            setTimeout(function(){
                 $("#bdemominute").focus();
            })
        })
         $("#bdemominute2").click(function(){
            setTimeout(function(){
                 $("#bdemominute2").focus();
            })
        })
 init();
 $.fn.setCursorPosition = function(pos) {
  this.each(function(index, elem) {
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  });
  return this;
};
 $("#fullname,#mobile,#notes,#flightnumber").blur(function(){ 
    onviablur(this);
 }).focus(function(){ 
      var txt = $(this).attr("placeholder");
    if(txt==""){ txt=$(this).attr("data-aa");}
    $(this).attr("placeholder","").parent().find(".plholder").show().html("<span>"+txt+"</span>");
 })
 $("#pickuplocation,#droplocation,.viaaz").focus(function(){
    var txt = $(this).attr("placeholder");
    $(this).attr("placeholder","").parent().find(".plholder").show().html("<span>"+txt+"</span>");
 }) 
 $("#mobile").keypress(function(e){
     
    if(e.keyCode=='13'){
        if(!window.ispickuplcvalid){
            $("#pickuplocation").focus();
        }
        else if(!window.isdropvalid){
            $("#droplocation").focus();
        }
         else if($(".xpassengersa").html()=="0"){
            $(".xmapassengers").show();
        }
        else{
            $(this).removeClass("errorbx");
            $("#confirm").focus();
        }
    }
 });
 $("#fixedbx").click(function(){
    if($("#quotation").is(":checked")){
        $('.fixededitbox').toggle();
        $("#fixedprice").focus();
        return;
    }
    if(!window.ispickuplcvalid) return;
    else if(!window.isdropvalid) return;
    else if($(".xpassengersa").html()=="0") return;
    $('.fixededitbox').toggle();
    $("#fixedprice").focus();
 })
 $("#clsxbtnax").click(function(e){
 
    $("#errormodal").modal("hide");
     if($("#quotation").is(":checked")){
                      var mkll=$.trim($("#fixedprice").val());
                if(mkll.length==0){
                 $("#fixedprice").focus();
                  return; 
                }
                  }
     
setTimeout(function(){ 
    if(window.errortype=="1")
        $("#mobile").focus();
    else if(window.errortype=="2")
         $("#pickuplocation").focus();
     else if(window.errortype=="3")
         $("#droplocation").focus();
 },100);

    
 });
 $("#quotation").click(function(){
 
$(".axdcvf").addClass("hdnn");
$("#fixedbx .fxtitle").html("Quote");
$("#confirm").html("Save Quote");
$("#confirm").css({"padding-left":"23px","padding-right":"23px"});
$(".amdriverbnv").addClass("hdnn");
 
$(".fixededitbox").show();
$("#fixedprice").attr("placeholder","Give Quote");
$("#pickuplocation").focus();
$("#dateShow").hide();
$("#bookquote").css({"margin-top":"38px"});

 });
 $("#booking").click(function(){
$("#fixedbx .fxtitle").html("Fixed");
$(".axdcvf").removeClass("hdnn");
$("#confirm").html("Confirm");
$("#confirm").css({"padding-left":"40px","padding-right":"40px"});
$(".amdriverbnv").removeClass("hdnn");
$("#fixedprice").attr("placeholder","Enter Fixed Price");
$(".fixededitbox").hide();
$("#dateShow").show();
$("#bookquote").css({"margin-top":"0px"});


 });
 $("#errormodal").keypress(function(){
$("#errormodal").modal("hide");
 //$("#confirm").focus();
 $(this).find("button").focus();
 })
  
 $("#fullname").focus().keypress(function(e){
        if(e.keyCode == '13'){
             $(".lcdropdown").hide();
          $("#pickuplocation").focus().prev().hide();
        }
      });
  $("#pickuplocation").keypress(function(e){

        if(e.keyCode == '13'&&window.ispickuplcvalid){

             $(".lcdropdown").hide();
            $("#droplocation").focus().prev().hide();

        }
      });
   $("#droplocation").keypress(function(e){

        if(e.keyCode == '13'&&window.isdropvalid){
             $(".lcdropdown").hide();
             $("#droplocation").blur();
            $(".xmapassengers ").show();

        }
      });
  $(".dmnkcash").click(function(e){
  e.preventDefault();
  if(window.owedcounter==2) return;
  
  $("#cash").prop("checked",true);
      $(".creditcardbox").hide();
 })
  
 $(".down_arrowcash").click(function(e) {
    e.stopPropagation();
    if(window.owedcounter==1|| window.owedcounter==2) return;
        $(".xmcash").toggle();

 })
  $("#audiolisten").click(function(){
    openaudiodialog(window.jobid);
 })
 $("#guarddog,#animaldog,#cat").change(function(){
    $("#_capabilityuj").html($(this).attr("data-nm"));
    setTimeout(function(){
    //$(".specialvehicle").hide();
},560);
 });
  $("#saloonno").change(function(){
      $("#permanent,#onetime") .attr("disabled","true");
 })
  $("#saloonyes").change(function(){
       $("#permanent,#onetime") .removeAttr("disabled");
 })
 $(".boxesbox,.itemsbox,.animalsbox ").click(function(e){
    e.stopPropagation();
 })
        $(".pickupmap").click(function(){ 
            printmap(window.pickuplat,window.pickuplng);
        });
         $(".dropmap").click(function(){ 
            printmap(window.droplat,window.droplng);
        })
        $("#processcreditcard").click(function(){
             window.prepaidamount=0;
            var cardnumber=$.trim($("#cardnumber").val());
            var cardname=$.trim($("#cardname").val());
            var cardexpirydate=$.trim($("#cardexpirydate").val());
            var cardcvv=$.trim($("#cardcvv").val());
            var mobile=$.trim($("#mobile").val());
			
              if(window.isedit){
                mobile=$.trim($("#mobile").attr("data-mobile"))
            }

            var depositamount=$.trim($("#depositamount").val());
			depositamount="5.00";
        /*    if(!$("#deposit").is(":checked")){
                depositamount="5.00";
            }
            else */if(depositamount.length==0){
                $(".creditcarderror").html("Enter Deposit Amount");
                return;
            }

            if(cardnumber.length==0){
                $(".creditcarderror").html("Enter Card Number")
            }
            else if(cardname.length==0){
                $(".creditcarderror").html("Enter Name of Card")
            }
            else if(cardexpirydate.length==0){
                $(".creditcarderror").html("Enter Expiry Date")
            }
            else if(cardcvv.length==0){
                $(".creditcarderror").html("Enter Card CVV")
            }
             
            else  {
                cardexpirydate=cardexpirydate.split("/");
                if(cardexpirydate.length!=2) {
                    $(".creditcarderror").html("Invalid Expiry Date");
                    return;
                }
            $("#creditcardloading").show();
            $("#processcreditcard,.creditcarderror").hide();
            
            depositamount=parseFloat(depositamount).toFixed(2);
           
            myajax({"api":"processcard","number":cardnumber,"mm":cardexpirydate[0],"yy":cardexpirydate[1],"cvv":cardcvv,"mobile":mobile,"cardname":cardname,"amount":depositamount},function( data, textStatus, jQxhr ){
                $("#creditcardloading").hide();
            
              if(data.status=="400"){
                $("#processcreditcard,.creditcarderror").show();
                $(".creditcarderror").html(data.message);
              }
              else{
                $(".creditcarderror").show();
                $("#processcreditcard").hide();
                $(".creditcarderror").html("Pre-Paid");
                window.__iscard="1";

                if(!$("#cash").is(":checked")){
                window.prepaidamount=depositamount;
               }
              }
               
           }); 
        }
        })
       $("#droplocation").keyup(function(e){
        window.amaddressref=$(this).parent();
           if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
           window.isdropvalid=false;
           window.__xsetaddr="";
          var q=$.trim($(this).val());
          var dropref=$(this).parent().find(".lcdropdown");
          var loadingref =  dropref.find(".allloading");
             clearTimeout(window.timeoutref);
          if(q.length!=0){
              dropref.find("p").remove();
                loadingref.show().html("Loading...");
                dropref.show();
                  if(window.xhr!=null){
        window.xhr.abort()
        }
  
    window.timeoutref=setTimeout(function(){
    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"getaddresssearch","countrycode":window.controllercountrycode,"lat":window.controllerlat,"lng":window.controllerlng,"q":q,"randomid":window._xmrandomid}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
        if(data.data.length!=0){
                                    loadingref.hide();
                                    window._isdrpshown=true;
        var postal_code=""
        $(data.data ).each(function(x,y){
             
            dropref.append("<p onclick='getplacedetails(this,2)' data-placeid='"+y.place_id+"' >"+y.description+postal_code+"</p>");
        });
         
    }
    else{
                        loadingref.show().html("No Result Found...");

    }
    }
    }); } ,1);
          }
          else{
              dropref.hide();
          }
       });
       window.timeoutref=setTimeout(function(){},1);
       $("#pickuplocation").keyup(function(e){
        window.amaddressref=$(this).parent();
           if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
           window.ispickuplcvalid=false;
            window.__xsetaddr="";
          var q=$.trim($(this).val());
          var dropref=$(this).parent().find(".lcdropdown");
          var loadingref =  dropref.find(".allloading");
          
            clearTimeout(window.timeoutref);
             
           
          if(q.length!=0){
              dropref.find("p").remove();
                loadingref.show().html("Loading...");
                dropref.show();
                  if(window.xhr!=null){
        window.xhr.abort()
        }
  
    window.timeoutref=setTimeout(function(){
        
    window.xhr = $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"getaddresssearch","countrycode":window.controllercountrycode,"lat":window.controllerlat,"lng":window.controllerlng,"q":q,"randomid":window._xmrandomid}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
        if(data.data.length!=0){
                                    loadingref.hide();
window._isdrpshown=true;
var postal_code=""
        $(data.data ).each(function(x,y){
            
            dropref.append("<p onclick='getplacedetails(this,1)' data-placeid='"+y.place_id+"' >"+y.description+postal_code+"</p>");
        });
         
    }
    else{
                        loadingref.show().html("No Result Found...");

    }
    }
    }); } ,1);
          }
          else{
              dropref.hide();
          }
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
        $(".time").click(function(e){
            e.stopPropagation();
    if($(this).find(".timer-box").hasClass("timer-box1")){
         $(this).find(".timer-box").show();
		if($(this).find(".demohour").is(":focus")){
			$("#bdemohour").focus().addClass("llfocus");
         }
		 else if($(this).find(".demominute").is(":focus")){
			$("#bdemominute").focus().addClass("llfocus");
         }
		 else
			{
				$("#bdemohour").focus().addClass("llfocus");
			}
		
    }
    else if($(this).find(".timer-box").hasClass("timer-box2")){
        if($.trim($("#datepicker1").val())==""){
        
           $("#amerrorbxreturn").html("Please Select Return Date");
        $("#errormodalreturn").modal("show");
        return;
    }
     $(this).find(".timer-box").show();
    $("#bdemohour2").focus().addClass("llfocus");
    }
     
    
       if(!window.istimeboxopen){
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
        $(this).find(".demohour").val(tt[0]);
        $(this).find(".demominute").val(tt[1]);
		 

				
      }
     }
      
         var idx = "datepicker";
      if(!dateNext(idx) && dfgv12pm())
		{
				 $(this).find(".demoam").hide();
				  $(this).find(".divam").hide();
		}
		else{
			$(this).find(".demoam").show();
			$(this).find(".divam").show();
		}
		
		if(datePrev(idx))
		{ 
			$(this).find(".demoam").show();
			$(this).find(".divam").show();
			  $(this).find(".demoam") .removeClass("timeselected");
			  $(this).find(".demopm") .removeClass("timeselected");
			  window.istimeboxopen=true;
			  return;
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
    var container = $(".xdropdown,.lcdropdown,.xallocatedriver, .xbandriver");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
    

});
         myajax({"api":"getalljobdetails","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
           $("._tbcompletedjob").html("Completed : "+data.data.used);
            $("._tbcancelljob").html("Cancelled : "+data.data.rejected);
            $("._tbappjobs").html("App : "+data.data.app);  
               $("._tbcalljobs").html("Call : "+data.data.call); 
            $("._tbrunnerjobs").html("Runner : "+data.data.running);        
              
           }); 
        
       $("#cash").change(function(){
      if($(this).is(":checked") ){
        $(".creditcardbox").hide();
      }
     });
      $("#prepaid").change(function(e){
        if(!window.ispickuplcvalid){
            e.preventDefault();
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  $("#cash").prop("checked",true);
                  return false;
        }
        else if(!window.isdropvalid){
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  return false;
        }
        $(".xmcash").hide();
      if($(this).is(":checked") ){
        $(".depositamountbox").hide();
        $(".creditcardbox").show();
      }
     });
   /*      $("#deposit").change(function(){
             
              if(window.owedcounter==2){
                $("#prepaid").prop("checked",true);

                return false;
              } 
             if(!window.ispickuplcvalid){
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  return;
        }
        else if(!window.isdropvalid){
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  return;
        }
             $(".xmcash").hide();
      if($(this).is(":checked") ){
         $(".depositamountbox").show();
        $(".creditcardbox").show();
      }
     });*/
       $('#audiomodal').on('hidden.bs.modal',function (){
           $("#audiotable .adrow").remove();
           });
           $("#savechanges").click(function(){
               window.repeatedatearr=[];
               $("._rowyu").each(function(){
                  rtime=$(this).find(".returningx").val();
                  rtime=rtime?rtime:"";
                   window.repeatedatearr.push({"day":$(this).attr("data-c"),"goingtime":$.trim($(this).find(".goingx").val()),"returntime":rtime});
                    $(".days_selected span:nth-child("+$(this).attr("data-c")+")").attr("data-goingtime",$.trim($(this).find(".goingx").val())).attr("data-returntime",rtime);

               });
                $('#modal').modal('hide');

           });
(function(){
    var counter=1;
     for(var i = 0;i<4;i++){

                        html='<tr class="sectdriver" data-counter="'+counter+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                   
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
                  counter++;

                 }
})();
window.getcurrentDateTimefxv=function(today){
   let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
return dd + '-'+mm+"-"+ yyyy; 
 
 }
 Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}
 function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
$("#edittime").click(function(){
    if($(".days_selected .active_c").length==0){
        $("#amerrorbxreturn").html("Please Select Day(s)");
        $("#errormodalreturn").modal("show")
    }
    else{
        if(window.isreturnbooking){
            $(".returnbokkingth").show();
        }else{
            $(".returnbokkingth").hide();
        }
const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  $("._rowyu").remove();
   var ad=new Date();
   var _addatexd=ad.getDay();
   var mnobhj=[];
        $(".days_selected .active_c").each(function(){
      var clss="";
      var action="";
      var timepk=$(".a12v").clone();
        var _dtt='20-12-2021',_unix;
        var secdat=parseInt($(this).attr("data-c"));
        var increasebyday=7-_addatexd;
      if(window._addate==secdat){
        clss="dayselectrow"; 
        action='onchange="checkddt(this)"';
        _dtt=getcurrentDateTimefxv(new Date());
        timepk.find(".alhour").find(".arrow.up").attr("onclick","inchour(this)");
        timepk.find(".alhour").find(".arrow.down").attr("onclick","minhour(this)");
         timepk.find(".alminute").find(".arrow.up").attr("onclick","incmin(this)");
        timepk.find(".alminute").find(".arrow.down").attr("onclick","minmin(this)");
      } 
        else if(secdat>window._addate){ 
        fday=secdat-window._addate;
        _dtt=getcurrentDateTimefxv(new Date().addDays(fday));   
        } else if(secdat<window._addate){ 
            fday=secdat+increasebyday;
        _dtt=getcurrentDateTimefxv(new Date().addDays(fday));       
        }
        _unix = _dtt.split("-");
    var newDate = new Date( _unix[2], _unix[1] - 1, _unix[0]);
    
    var rnd=getRandomInt(1000,9999);
    timepk.find(".timer-box").css("margin-top","0px");
    timepk.find(".demoam").attr("name","ampm"+rnd);
    timepk.find(".demopm").attr("name","ampm"+rnd);
    mnobhj.push({"clss":clss,"datac":$(this).attr("data-c"),"datad":$(this).attr("data-d"),"_dtt":_dtt,"_unix":newDate.getTime(),"goingtime":$(this).attr("data-goingtime"),"returntime":$(this).attr("data-returntime"),"timepkhtml":timepk.html(),"action":action});
  });
        $(mnobhj.sort(function(a, b) {
        return a._unix - b._unix;
    })).each(function(x,y){
             html='<tr class="_rowyu '+y.clss+'" data-c="'+y.datac+'"><td>'+y.datad+'</td><td>'+y._dtt+'</td><td class="time" onclick="opentmpk(this,event)"><input   style="width:calc(100% - 32px)" class="goingx"   type="text" value="'+y.goingtime+'" /><img   src="img/clock.png"   style="width:18px;position:absolute;margin:4px 5px 4px 10px;height: auto;">'+y.timepkhtml+'</td>';
            if(window.isreturnbooking){
        var rtime=y.returntime; 
        rtime=(rtime==""?(h+":"+m):rtime);
                html+='<td class="time" onclick="opentmpk(this,event)" ><input '+y.action+'style="width:calc(100% - 32px)"  class="returningx"  type="text" value="'+rtime+'" /><img     src="img/clock.png" style="width:18px;position:absolute;margin:4px 5px 4px 10px;height: auto;">'+y.timepkhtml+'</td>';
            }
            html+="</tr>";
            $("#rttables").append(html);
        });
        
   $('#modal').modal({show:true, keyboard: false});
    }
});
window.opentimeclockpicker=function(ref,e){
     
     e.stopPropagation();
    $(ref).prev() .clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
}).clockpicker('show')
            .clockpicker('toggleView', 'hours');
 
}

$("#fixedprice").keypress(function(e){

if(e.keyCode=='13'){
    var fixedprice=$.trim($("#fixedprice").val());
          if(fixedprice.length!=0){
            //$("#fixedbx").attr("data-price",(parseFloat(fixedprice).toFixed(2))).find("strong").html("£"+(parseFloat(fixedprice).toFixed(2)));
            
            $("#addfixed").focus();


          }
}
});
        $("#addfixed").click(function(){
          var fixedprice=$.trim($("#fixedprice").val());
          if(fixedprice.length!=0){
            $("#fixedbx").attr("data-price",(parseFloat(fixedprice))).find("strong").html("Rs "+(parseFloat(fixedprice)));
            if( window.editwhat==2 || $("#quotation").is(":checked")){
             $("#confirm").focus();
            }
          }
		  else{
			   $("#fixedbx").attr("data-price",(parseFloat("0"))).find("strong").html("");
			   $("#confirm").focus();
		  }
          $(".fixededitbox").toggle();
        });
       
   /*     $("#selectmultiplevehicles").change(function(){
            
                            window.ismultipledriver=window.ismultiplevehicles=($(this).is(":checked"));

                $("#allocateddriverlist ._allpoi").remove();
                
            getDrivers();
        });
        */
        $("#timerx").change(function(){
            getDrivers();
        })
     $(document).bind("contextmenu", function (event) {
    
   
    event.preventDefault();
     });
      
$(".custom-menu li").click(function(){
    
    // This is the triggered action name
    switch($(this).attr("data-action")) {
        
        // A case for each action. Your actions here
        case "view": selectjob(window._jobref,1,0);  break; 
        case "bandriver": bandriver();  break; 

    }
  
    // Hide it AFTER the action was triggered
    $(".custom-menu").hide(100);
  });
window.crtimerref=null;
  window.opentmpk=function(ref,e){
 var isvisiblex=false;
    $(".mlkiop").each(function(){
         if(!isvisiblex&&$(this).is(":visible")){
            isvisiblex=true;
         }
    });
 
    
$(".timer-box").hide();
    window.crtimerref=$(ref).find(".timer-box").show();

     e.stopPropagation();
     setTimeout(function(){ 

        window.crtimerref.find(".demohour").focus();
         },500);
       if(!window.istimeboxopen||isvisiblex){
           var timeval=$.trim($(ref).find("input[type=text]").val());
           if(timeval.length!=0){
            var t = timeval.split(" ");
             
      if(t[1]=="AM"){
          $(ref).find(".demoam").prop("checked",true).addClass("timeselected");
          $(ref).find(".demopm").prop("checked",false).removeClass("timeselected");

        }
        else{
           $(ref).find(".demoam").prop("checked",false).removeClass("timeselected");
          $(ref).find(".demopm").prop("checked",true).addClass("timeselected");
        }
        var tt=t[0].split(":");
        $(ref).find(".demohour").val(tt[0]);
        $(ref).find(".demominute").val(tt[1]);
      }
     }
     window.istimeboxopen=true;

 
  }
  window.tofulltimedt=function(time){ 
    if(!time) return "";
var hours = Number(time.match(/^(\d+)/)[1]);

var minutes = Number(time.match(/:(\d+)/)[1]);
var AMPM = $.trim(time.match(/\s(.*)$/)[1]);
if(AMPM == "PM" && hours<12) hours = hours+12;
if(AMPM == "AM" && hours==12) hours = hours-12;
var sHours = hours.toString();
var sMinutes = minutes.toString();
if(hours<10) sHours = "0" + sHours;
if(minutes<10) sMinutes = "0" + sMinutes;
return (sHours + ":" + sMinutes);
  }
  window.updatetm=function(ref,e){
       e.stopPropagation();
        $(ref).clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
}).clockpicker('show')
            .clockpicker('toggleView', 'hours');
  }
     /*    $('#clockx').click(function(e){
     e.stopPropagation();
    $("#timerx").clockpicker('show')
            .clockpicker('toggleView', 'hours');
});
          $('#clockx1').click(function(e){
     e.stopPropagation();
    $("#timerx1").clockpicker('show')
            .clockpicker('toggleView', 'hours');
});
         
$("#timerx,#timerx1").clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'
})*/
           $(".repeatbooking").change(function(){
              if($(this).is(":checked")){

              }     
              else{
                  $(".days_selected span").removeClass("active_c");
                   const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  
  $(".days_selected span").attr("data-goingtime",(h + ":" + m)).attr("data-returntime",(h + ":" + m));
              }
           });
           setInputFilter(document.getElementById("mobile"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
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
     setInputFilter(document.getElementById("noofitems"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
          setInputFilter(document.getElementById("fixedprice"), function(value) {
  return (new RegExp(/^\d*\.?\d*$/)).test(value); // Allow digits and '.' only, using a RegExp
}); 
             setInputFilter(document.getElementById("depositamount"), function(value) {
  return (new RegExp(/^\d*\.?\d*$/)).test(value); // Allow digits and '.' only, using a RegExp
}); 
          
             
       $(".returnbooking").change(function(){
        if($(this).is(":checked"))
        $(".isreturnx").show();
        else $(".isreturnx").hide();
       });
       
       $("#cancel,#yescancel").click(function(){
          
              window.location.href="new-booking.php";
                   
       });
           $("#confirm").click(function(){
            if($("#quotation").is(":checked")){
                var mkll=$.trim($("#fixedprice").val());
                if(mkll.length==0){
                 $("#errormodal").modal({"show":true});
                  $("#amerrorbx").html("Please Enter Quote Price");
                  $("#clsxbtnax").focus();
                  return; 
                }
            }
               var name=$.trim($("#fullname").val());
               var mobile=$.trim($("#mobile").val());
		/*	  
                 if(window.isedit){
                mobile=$.trim($("#mobile").attr("data-mobile"))
            }
*/
               var email=$.trim($("#email").val());
               var sms=$.trim($("#sms").val());
               var isemail=$(".email").is(":checked")?"1":"0";
               var issms=$(".sms").is(":checked")?"1":"0";
               var address=$.trim($("#addressax_").val());
               var pickuplocation=$.trim($("#pickuplocation").val());
               var droplocation=$.trim($("#droplocation").val());
               var notes=$.trim($("#notes").val());
               var passengers=$.trim($("#passengers").html());
               var handluggage=$.trim($("#handluggage").html());
               var suitcase=$.trim($("#suitcase").html());
               var vias=[];
               var isfieldempty=false;
               var viaval="";
               var ctrvia=2;
           //    if($(""))
               $(".vias input").each(function( ){
                
                   var viaval=$.trim($(this).val());
                   isfieldempty = (viaval.length==0);
           if(viaval.length!=0){
                   vias.push({"address":viaval,"lat":$(this).attr("data-lat"),"lng":$(this).attr("data-lng"),"zipcode":$(this).attr("data-zipcode"),"waitingtime":$("._ikmnpl:nth-of-type("+ctrvia+")").find("input").val(),"note":$("._ikmnp:nth-of-type("+ctrvia+")").find("input").val()});

         }
          ctrvia++;
               });
               vias = JSON.stringify(vias);
               var days=[];
               $(".days_selected .active_c").each(function(){
                  days.push($(this).attr("data-c")); 
               });
               var repeatbooking=$(".repeatbooking").is(":checked")?"1":"0";
               var returnbooking=$(".returnbooking").is(":checked")?"1":"0";
               if(returnbooking=="1"){
                var a=$.trim($("#datepicker1").val());
                var b=$.trim($("#timerx1").val());
                if(a.length==0){
                 $("#errormodal").modal({"show":true});
                  $("#amerrorbx").html("Please Select Return Date");
                  return; 
                }
                  if(b.length==0){
                 $("#errormodal").modal({"show":true});
                  $("#amerrorbx").html("Please Select Return Time");
                  return; 
                }
          
               }
               var bookingdate=$.trim($("#datepicker").val().split(",")[1]);
               var returningdate=$.trim($("#datepicker1").val().split(",")[1]);
			   var flightnumber=$.trim($("#flightnumber").val());
			   var reference=$.trim($("#reference").val());
               var cardnumber=$.trim($("#cardnumber").val());
               var cardname=$.trim($("#cardname").val());
               var cardexpirydate=$.trim($("#cardexpirydate").val());
               var cardcvv = $.trim($("#cardcvv").val());
               var notes=$.trim($("#notes").val());
               var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
               var pets=$("#pets").is(":checked")?"1":"0";
               var pram=$("#pram").is(":checked")?"1":"0";
               var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
               var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
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
               var isDisabled = $('#lowvehicle').prop('disabled');
               var allocatedriver=$.trim($("#allocatedriver").val());
               var issms=$(".sms").is(":checked")?"1":"0";
               var isemail=$(".email").is(":checked")?"1":"0";
               var sms=$.trim($("#sms").val());
               var email=$.trim($("#email").val());
               var pickupwaitingtime=$.trim($("#pickupwaitingtime").val());
               var dropwaitingtime=$.trim($("#dropwaitingtime").val());
               var pickupnote=$.trim($("#pickupnote").val());
               var dropnote=$.trim($("#dropnote").val());
         var bookingtime=window.tofulltimedt($.trim($("#timerx").val()));
         const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
         var crtdatetime=window._cxcdate+" "+h_ + ":" + m_ + ":" + s_;
          if(bookingtime.length==0){
          bookingtime=h_ + ":" + m_;
         }
         var returningtime=window.tofulltimedt($.trim($("#timerx1").val()));
         if(returningtime.length==0){
          returningtime=h_ + ":" + m_;
         }
         returningtime+=":00";
         bookingtime+=":00";
         if(repeatbooking=="1"){
               window.repeatedatearr=[];
                  $(".days_selected .active_c").each(function(){
                  var rtime=""; 
                  if(returnbooking=="1"){
                      rtime=returningtime;
                  }
                   window.repeatedatearr.push({"day":$(this).attr("data-c"),"goingtime":window.tofulltimedt($(this).attr("data-goingtime")),"returntime":window.tofulltimedt($(this).attr("data-returntime"))});
                 });
              
         }
               var obj=new Object();
               if(window.isedit && (window.editwhat==0 || window.editwhat==1) ){
               obj["api"]="editbooking";
             
           }
               else
               obj["api"]="newbookingnew";
      /*      if(window.isedit){
                mobile=$.trim($("#mobile").attr("data-mobile"))
            }*/
          $("#xerrormsgs").hide();
          obj["bookingcountry"]="<?php echo $_SESSION['COUNTRYCODE']; ?>";
          obj["issalooncheckparmanent"]=window.issalooncheckparmanent;
          obj["iscard"]=window.__iscard;
          obj["ispermanentfixedprice"]=($("#ispermanentfixedprice").is(":checked")?"1":"0");
          obj["normal"] = $("#normal").is(":checked")?"1":"0";
          obj["autorikshaw"]=$("#autorikshaw").is(":checked")?"1":"0";
          obj["motorbike"]=$("#motorbike").is(":checked")?"1":"0";
       obj["pickupwaitingtime"]=pickupwaitingtime;
       obj["dropwaitingtime"]=dropwaitingtime;
       obj["pickupnote"]=pickupnote;
       obj["dropnote"]=dropnote;
       obj["cashtype"]=window.cashtype;
       obj["bicycle"]=bicycle;
       obj["items"]=items;
       obj["scooter"]=scooter;
       obj["boxes"]=boxes;
       obj["fishing"]=fishing;
       obj["shopping"]=shopping;
       obj["noofitems"]=noofitems;
       obj["size"]=size;
       obj["howmany"]=howmany;
       obj["animaltype"]=($("#guarddog").is(":checked")?"1":($("#animaldog").is(":checked")?"2":"3"));
       obj["bookingmileage"]=window.bookingmileage;
       obj["bookingmileagetime"]=window.bookingmileagetime;
       obj["pickupzipcode"]=window.pickupzipcode;
       obj["dropzipcode"]=window.dropzipcode;
       obj["pickuplat"]=window.pickuplat;
       obj["pickuplng"]=window.pickuplng;
       obj["droplat"]=window.droplat;
       obj["droplng"]=window.droplng;
       obj["currentdatetime"]=crtdatetime;
	 
       obj["controllerid"]=localStorage.getItem("id");
       obj["ispermanent"]="0"//$("#ispermanent").is(":checked")?"1":"0";
       obj["isblockbooking"]=$("#isblockbooking").is(":checked")?"1":"0";
       obj["blockfromdate"]=$.trim($("#blockfromdate").val());
       obj["blocktodate"]=$.trim($("#blocktodate").val());
           obj["repeatdatearr"]=JSON.stringify(window.repeatedatearr);
           obj["addate"]=window._addate;
       obj["isbooking"]=$("#booking").is(":checked")?"1":"0";
       obj["fixedprice"]= $("#fixedbx").attr("data-price");
           obj["jobid"]=window.jobid;
           obj["issms"]=issms;
           obj["isemail"]=isemail;
           obj["sms"]=sms;
           obj["email"]=email;
               obj["isDisabled"]=isDisabled?"1":"0";
               obj["wheelchair"]=wheelchair;
               obj["pets"]=pets;
               obj["pram"]=pram;
            obj["ispet"]=window.ispet?"1":"0";
         obj["firstselected"]=window.firstselected;
               obj["lowvehicle"]=lowvehicle;
               obj["highvehicle"]=highvehicle;
               obj["bookingdate"]=bookingdate;
         obj["bookingtime"]=bookingtime;
               obj["name"]=name;
               obj["mobile"]=mobile;
               obj["email"]=email;
               obj["sms"]=sms;
               obj["allocatedriver"]=allocatedriver;
               obj["isemail"]=isemail;
               obj["issms"]=issms;
               obj["address"]=address;
               obj["pickuplocation"]=pickuplocation;
               obj["droplocation"]=droplocation;
               obj["notes"]=notes;
               obj["days"]=days.join(",");
               obj["passengers"]=passengers;
               obj["handluggage"]=handluggage;
               obj["suitcase"]=suitcase;
               obj["vias"]=vias;
               obj["isfieldempty"]=isfieldempty?"1":"0"
               obj["repeatbooking"]=repeatbooking;
               obj["returnbooking"]=returnbooking;
               obj["returningdate"]=returningdate;
         obj["returningtime"]=returningtime;
               obj["flightnumber"]=flightnumber;
               obj["reference"]=reference;
               obj["cardnumber"]=cardnumber;
               obj["cardname"]=cardname;
               obj["cardexpirydate"]=cardexpirydate;
               var f=cardexpirydate.split("/");
               obj["cardcvv"]=cardcvv;
               obj["cardmm"]=f[0];
               obj["cardyy"]=f[1];
               obj["driverid"]=window.driverid;
               obj["notes"]=notes;
               obj["alphafirst"]=window.alphafirst;
               obj["alphasecond"]=window.alphasecond;
               obj["counter"]=window.counter;
               obj["iscash"]=$("#cash").is(":checked")?"1":"0";
               obj["isprepaid"]=$("#prepaid").is(":checked")?"1":"0";//($("#deposit").is(":checked")?"1":"0");
               obj["isdeposit"]="0";//$("#deposit").is(":checked")?"1":"0";
               obj["prepaidamount"]=window.prepaidamount;
			   if(isedit && window.editwhat!=2)
			   {
				   if(obj["normal"] =="1" || (obj["autorikshaw"]=="1" && obj["passengers"] >=5))
				   {
					   obj["jobprice"]=JOBAMOUNT;
				   }
				   else if(obj["autorikshaw"]=="1")
				   {
					   obj["jobprice"]=JOBAMOUNT*0.75;
				   }
				   else if( obj["motorbike"]=="1")
				   {
					   obj["jobprice"]=JOBAMOUNT*0.50;
				   }
			   }
			   else if(window.editwhat==2)
			   {
				   obj["jobprice"]= obj["fixedprice"];
			   }
			   
      /*       if($("#selectmultiplevehicles").is(":checked")){
          obj["ismultiplevehicles"]="1";
          var callsignar=[];
          $("._allpoi").each(function(){
            callsignar.push($(this).attr("data-callsign"));
          });
           obj["callsign"]=callsignar.join(",");
         }
         else{*/
         obj["callsign"]=$.trim($("#allocatedriver").val());
          obj["ismultiplevehicles"]="0";


        // } 
         $("input").removeClass("errorbx");
         

          
             if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
           // alert("Please Select Capability");return;
             }
             
           $("#loadingaxd").show();
           $(".btns_cnfrmcx").hide();

                 myajax(obj,function( data, textStatus, jQxhr ){
                 if(data.status=="400"){
                     $("#loadingaxd").hide();
           $(".btns_cnfrmcx").show();
            $("#errormodal").modal({"show":true});
            $("#amerrorbx").html(data.message) ;
            window.errortype="0";
            if(data.message=="Please Enter Contact Number"){

                $("#mobile").addClass("errorbx");

                $("#errormodal").find("button").focus();
                window.errortype="1";
            }
            else if(data.message=="Please Enter Pickup Location"){
                  
                $("#errormodal").find("button").focus();
                window.errortype="2";
                
            }
             else if(data.message=="Please Enter Drop Location"){
                  
                $("#errormodal").find("button").focus();
                window.errortype="3";
                
            }
            else if(data.message=="Please Select Passengers"){
                 $("#errormodal").find("button").focus();
                window.errortype="4";
                $(".xmapassengers").show();
            }
            

            
                 }
                 else{
                      $("#loadingaxd").hide();
 
                     if($("#quotation").is(":checked")){
                        setTimeout(function(){
                         window.location.href="new-booking.php";
                     },1100);
                     }
                     else{
                       // alert(JSON.stringify(data.data));
                      window.location.href="active.php";
                     }
                 }
                 
             });
           });
             $('#sms,#fullname').on('input', function() {
  $(this).val($(this).val().replace(/[^a-z0-9 ]/gi, ''));
});
           $(".email").click(function(){
              $("#email").prop("disabled",!$(this).is(":checked"));
           });
            $(".sms").click(function(){
              $("#sms").prop("disabled",!$(this).is(":checked"));
           });
        
           $(".days_selected span").click(function(){
               
               if(window.isrepeatbooking){
                   $(this).toggleClass("active_c");
               }
               else{
                 /*$(".days_selected span").removeClass("active_c");
                 $(this).addClass("active_c");  */           
               }
                   
           });
 $('.cb-value').click(function() {
  var mainParent = $(this).parent('.toggle-btn');
  if($(mainParent).find('input.cb-value').is(':checked')) {
    $(mainParent).addClass('active');
    $(this).attr("checked", "checked");
    if($(this).hasClass("repeatbooking")){
        window.isrepeatbooking=true;
        $(".repeatbookingedit").show();
        $(".days_selected").addClass("selected");
    }
    else{
        
                window.isreturnbooking=true;

    }

  } else {
    $(mainParent).removeClass('active');
    $(this).removeAttr('checked');
if($(this).hasClass("repeatbooking")){
            $(".repeatbookingedit").hide();
 $(".days_selected").removeClass("selected");
        window.isrepeatbooking=false;
    }
else{
                window.isreturnbooking=false;

}   }
 
})
       window.isselected=false;
       window.ispet=false;
       window.firstselected=0;
       $("#wheelchair").change(function(){
        _wheelchair();
       })
       $("#pets").change(function(e){
         _pets();
       });
       $("#pram").change(function(){ 
        
        _pram()
       });
       $("#items").change(function(){
             _items();
       });
      $("#scooter").change(function(){
            _scooter();
       });
       $("#fishing").change(function(){
            _fishing();
       });
       $("#bicycle").change(function(){
             _bicycle();
       });
      
       $("#boxes").change(function(){
            _boxes();
       });
     
       $("#lowvehicle").change(function(){
         _lowvehichle();

       });
        $("#highvehicle").change(function(){
         _highvehicle();
       });
        window._highvehicle=function(){
            if($("#highvehicle").is(":checked")){
          $("#lowvehicle").prop("checked",false);
            $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");

         }
          else{
            if(!$("#lowvehicle").is(":checked")){
              $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");

            }
         }
 setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._lowvehichle=function(){

            if($("#lowvehicle").is(":checked")){
          $("#highvehicle").prop("checked",false);
           $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");
         }
         else{
            if(!$("#highvehicle").is(":checked")){
              $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");

            }
         }
 setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._items=function(){
              if(window.firstselected==0){
                window.firstselected=5; 
            }
           if($("#items").is(":checked")){
          $(".itemsbox").show(); 
                        $("#wheelchair,#lowvehicle,#highvehicle,#pram,#pets,#scooter,#fishing,#bicycle,#boxes").attr("disabled","true").prop("checked",false);

           }
           else{
               window.firstselected=0;
                $(".itemsbox").hide(); 
                $("#wheelchair,#lowvehicle,#highvehicle,#pram,#pets,#scooter,#fishing,#bicycle,#boxes").removeAttr("disabled");
           }
          setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._pets=function(){
             if(window.firstselected==0){
          window.firstselected=2;
          $(".animalsbox").show();
                  window.ispet=true;

        }
         if($("#pets").is(":checked")){
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
 setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._normal=function(){ 
             if(window.firstselected==0){
          window.firstselected=1;  
        }

        if($(".xpassengersa").html()=="0")
        $(".xpassengersa").html("20");
         $("#motorbike,#autorikshaw").prop("checked",false);
         $(".xmapassengers li").remove();
         for(var  i = 0;i<=20;i++){
             $(".xmapassengers").append("<li onclick='_oppassenger(this)'>"+i+"</li>");
         }
         if($("#normal").is(":checked")){
               // $("#motorbike,#autorikshaw").attr("disabled","true");
			    if($("#booking").is(":checked")){
             //    $(".specialvehicle").show().parent().find("._dropdown").addClass("active");;
			 
			 if(window.editwhat==2)
			 {
				  $(".fixededitbox").show();
                 $("#fixedprice").focus();
			 }
           
            }
            else{
                $(".fixededitbox").show();
                 $("#fixedprice").focus();
				
            }
            }
            else{
             	 $("#_capabilityuj").html("Vechile Type");
				 $(".xpassengersa").html("0");
                     window.firstselected=0;
              $("#motorbike,#autorikshaw").prop("checked",false);
                     
                 
            }
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
          window._autorikshaw=function(){
             if(window.firstselected==0){
          window.firstselected=2;  
        } if($(".xpassengersa").html()=="0"||parseInt($(".xpassengersa").html())>6)
        $(".xpassengersa").html("6");
        $(".xmapassengers li").remove();
         for(var  i = 0;i<=6;i++){
             $(".xmapassengers").append("<li onclick='_oppassenger(this)'>"+i+"</li>");
         }
         $("#motorbike,#normal").prop("checked",false);
         if($("#autorikshaw").is(":checked")){
               // $("#motorbike,#normal").attr("disabled","true");   
			   if($("#booking").is(":checked")){
             //    $(".specialvehicle").show().parent().find("._dropdown").addClass("active");;
			 if(window.editwhat==2)
			 {
				  $(".fixededitbox").show();
                 $("#fixedprice").focus();
			 }
           
            }
            else{
                $(".fixededitbox").show();
                 $("#fixedprice").focus();
				
            }
            }
            else{
                  $("#_capabilityuj").html("Vechile Type");
				  $(".xpassengersa").html("0");
                     window.firstselected=0;
              $("#motorbike,#normal").prop("checked",false);
                     
                 
            }
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
         window._motorbike=function(){
             if(window.firstselected==0){
          window.firstselected=2;  
        } if($(".xpassengersa").html()=="0"||parseInt($(".xpassengersa").html())>1)
        $(".xpassengersa").html("1");
        $(".xmapassengers li").remove();
         for(var  i = 0;i<=1;i++){
             $(".xmapassengers").append("<li onclick='_oppassenger(this)'>"+i+"</li>");
         }
         $("#autorikshaw,#normal").prop("checked",false);
         if($("#motorbike").is(":checked")){
               // $("#autorikshaw,#normal").attr("disabled","true");
			       if($("#booking").is(":checked")){
             //    $(".specialvehicle").show().parent().find("._dropdown").addClass("active");;
			 
			  if(window.editwhat==2)
			 {
				  $(".fixededitbox").show();
                 $("#fixedprice").focus();
			 }
           
            }
            else{
                $(".fixededitbox").show();
                 $("#fixedprice").focus();
				
            }
            }
            else{
                  $("#_capabilityuj").html("Vechile Type");
				  $(".xpassengersa").html("0");
                     window.firstselected=0;
              $("#autorikshaw,#normal").prop("checked",false);
                     
                 
            }
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._wheelchair=function(){
 if(window.firstselected==0){
          window.firstselected=1;$(".animalsbox").hide();
        }
        if(window.ispet&&window.firstselected==2){
          $("#pram").prop("checked",false);

          return;
        }
                window.ispet=false;

        if($("#wheelchair").is(":checked")){

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
        setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._fishing=function(){
              if(window.firstselected==0){
                window.firstselected=7; 
            }
            if($("#fishing").is(":checked")){
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
            
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._boxes=function(){
            if(window.firstselected==0){
                window.firstselected=8; 
            }
           if($("#boxes").is(":checked")){
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
           setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._scooter=function(){
              if(window.firstselected==0){
                window.firstselected=6; 
            }
            if($("#scooter").is(":checked")){
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
            
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._bicycle=function(){
             if(window.firstselected==0){
                window.firstselected=4; 
            }
            if($("#bicycle").is(":checked")){
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
            
            setTimeout(function(){prmb();
            getDrivers();
        },400);
        }
        window._pram=function(){
              if(window.firstselected==0){
          window.firstselected=3;$(".animalsbox").hide();
        }
         if(window.ispet&&window.firstselected==2){
          $("#wheelchair").prop("checked",false);

          return;
        }
               window.ispet=false;

        if($("#pram").is(":checked")){
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
            prmb();
            getDrivers();
        },400);
        }
        window.prmb=function(){
            var b = $("#wheelchair").is(":checked")||$("#pets").is(":checked")||$("#pram").is(":checked")||$("#lowvehicle").is(":checked")||$("#bicycle").is(":checked")||$("#scooter").is(":checked")||$("#boxes").is(":checked")||$("#fishing").is(":checked")||$("#items").is(":checked")||$("#shopping").is(":checked")||$("#highvehicle").is(":checked")||$("#parcel").is(":checked");
            if(!b){
               // $("#_capabilityuj").html("Requested Vehicles");
            }
        }
        window.__xcheck=null;
        window._oppassenger=function(ref){ 
              $("._cover").hide();
                 $(ref).parent().toggle();
                $(".xmapassengers li").removeClass("active");
                $(ref).parent().parent().find("._xmsg").html($(ref).html());
                if($("#booking").is(":checked")){
                 $(".specialvehicle").show().parent().find("._dropdown").addClass("active");
           
            }
            else{
              /*  $(".fixededitbox").show();
                 $("#fixedprice").focus();*/
				 $(".specialvehicle").show().parent().find("._dropdown").addClass("active");
            }
            var pass=$(".xpassengersa").html(); 
            $(".xmmotorbike,.xmautorikshaw").show();
            if(pass>6){
                 $(".xmmotorbike,.xmautorikshaw").hide();
            }
            else  if(pass>1) {
                $(".xmmotorbike").hide();
            }
              

             var rs=window.customerfixedprice.filter(function (entry) {
    return entry.passengers == pass && entry.lat==window.pickuplat && entry.lng==window.pickuplng;
});
    /*       if(rs.length!=0){
            $("#fixedbx").attr("data-price",rs[0].fixedprice).find("strong").html("Rs "+rs[0].fixedprice);
             $("#fixedprice").val(rs[0].fixedprice);
           }
           else{
            $("#fixedbx").attr("data-price","0").find("strong").html("");
             $("#fixedprice").val("");
           }
               */   
                  getDrivers(); 
                  getReference();
        }
        $(".xdropdown li").on("click",function(e){

            if($(this).parent().hasClass("xaccount")){
                 e.preventDefault(); 
                 if(!window.ispickuplcvalid){
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  return;
        }
        else if(!window.isdropvalid){
              $("#errormodala").modal({"show":true});
                  $("#amerrorbxa").html("You must fill out the necessary details before you select prepaid or deposit");
                  return;
        }
                  $(this).parent().toggle();
                    if($(this).html()!="Un-Select"){
                 $(".creditcardbox").hide();
                 $("#account").html($(this).html());
              //   $("#cash,#prepaid,#deposit").prop("disabled",true);
			   $("#cash,#prepaid").prop("disabled",true);
            }
            else{
                $("#account").html("Select Account");
                 //$("#cash,#prepaid,#deposit").prop("disabled",false);
				 $("#cash,#prepaid").prop("disabled",false);
            }
            }
             else  if($(this).parent().hasClass("xmcash")){
                    e.stopPropagation();
                    if(window.owedcounter==1) {
                         setTimeout(function(){
                          $(".xmcash").hide();
                      },200)
                        return;
                    }
                    if($(this).html()=="Cash"){
                        window.cashtype="0";
                    }
                    else{
                        window.cashtype="1";
                    }

                    $(".dmnkcash span").html($(this).html());
                    setTimeout(function(){
                          $(".xmcash").hide();
                      },200)
            } 
            else if($(this).parent().hasClass("specialvehicle")){
                e.preventDefault();
                var check=$(this).find("input[type=checkbox]");
                window.__xcheck=check;
                if($(this).hasClass("_xpets")||$(this).hasClass("sboxes")||$(this).hasClass("_xxitems")||$(this).hasClass("_xsaloon")){}
                else{
                $(this).parent().toggle();
                }
            
                if(check.prop("disabled")) {
                    return;
                }
                else  if($(this).hasClass("_xpets")){}
                else{
                      if($(this).index()==2){
                        
                         if($("#passengers").html()>1) return;

                    } else if($(this).index()==1){
                        
                        if($("#passengers").html()>6) return;

                    }
                 $(this).parent().parent().find(".mg_tb").html($(this).find("span").html());
                }
                if($(this).hasClass("_xsaloon")){}
                else if(check.is(":checked")){
                   check.prop("checked",false);
                }
                else{
                    if($(this).index()==2){
                         $(".driverbox").hide();
                         $("#allocatedriver").val("");
                         if($("#passengers").html()>1) return;

                    }
                    else  if($(this).index()==1){
                         $(".driverbox").hide();
                         $("#allocatedriver").val("");
                         if($("#passengers").html()>6) return;

                    }
                check.prop("checked",true);
                }
                $(".driverbox").hide();
                         $("#allocatedriver").val("");
                         $("#confirm").focus();
            $("._cover").hide();
                switch($(this).index()){
                    case 0:
                    _normal();
                    break;
                    case 1:
                    _autorikshaw();
                    break;
                    case 2:

                   
                    _motorbike();
                    break;
                    /*case 0: 
                    setTimeout(function(){_wheelchair()},140);
                    break;
                    case 1: 
                    setTimeout(function(){_pets()},140);
                    break;
                    case 2: 
                    setTimeout(function(){_pram()},140);
                    break;
                    case 3:
                    if(check.is(":checked")){
                        $("#confirmsaloonmodalax").modal("show");
                     $("#yesaloonax").focus();

                         $("#permanent,#onetime").prop("checked",false).attr("disabled","true");
                         $("#saloonno,#permanent").prop("checked",true);
                   $(this).parent().toggle();
                    
                    }
                    else{
                     $("#confirmsaloonmodal").modal("show");
                     $("#yesaloon").focus();
                    }
                    break;
                    case 4:
                    setTimeout(function(){_bicycle()},140);
                    break;
                    case 5:
                     setTimeout(function(){_scooter()},140);
                    break;
                    case 6:
                    setTimeout(function(){_boxes()},140);
                    break;
                    case 7:
                    setTimeout(function(){_fishing()},140);
                    break;
                    case 8:
                     setTimeout(function(){_items()},140);
                    break;
                   
                     case 10:
                     setTimeout(function(){_highvehicle()},140);
                    break;*/

                }
            }
            else  if($(this).parent().hasClass("xmapassengers")){ 

                $("._cover").hide();
                 $(this).parent().toggle();
                $(".xmapassengers li").removeClass("active");
                $(this).parent().parent().find("._xmsg").html($(this).html());
                if($("#booking").is(":checked")){
                 $(".specialvehicle").show().parent().find("._dropdown").addClass("active");;
           
            }
            else{
             /*   $(".fixededitbox").show();
                 $("#fixedprice").focus();*/
				 $(".specialvehicle").show().parent().find("._dropdown").addClass("active");;
            }
            var pass=$(".xpassengersa").html();
            $(".xmmotorbike,.xmautorikshaw").show();
            if(pass>6){
                 $(".xmmotorbike,.xmautorikshaw").hide();
            }
            else  if(pass>1) {
                $(".xmmotorbike").hide();
            }
              


             var rs=window.customerfixedprice.filter(function (entry) {
    return entry.passengers == pass && entry.lat==window.pickuplat && entry.lng==window.pickuplng;
});
     /*      if(rs.length!=0){
            $("#fixedbx").attr("data-price",rs[0].fixedprice).find("strong").html("Rs "+rs[0].fixedprice);
             $("#fixedprice").val(rs[0].fixedprice);
           }
           else{
            $("#fixedbx").attr("data-price","0").find("strong").html("");
             $("#fixedprice").val("");
           }
               */   
                  getDrivers(); 
                  getReference();
            }
             
            else{
            $(this).parent().parent().find("._xmsg").html($(this).html());
            $(this).parent().toggle();
            if($(this).parent().parent().find(".ddrrr").hasClass("xpassengers")){
             getDrivers();
             getReference();
            }
        }
        });
        $("#yesaloonax").click(function(){
            $("#confirmsaloonmodalax").modal("hide");
            window.__xcheck.prop("checked",false);
             setTimeout(function(){_lowvehichle()},140);
        });
        $("#yesaloon").click(function(){
            $("#confirmsaloonmodal").modal("hide");
            window.__xcheck.prop("checked",true).parent().parent().hide();
             setTimeout(function(){_lowvehichle()},140);
        });
        $("._dropdown").click(function(){
            $(this).addClass("active")
                       $(".xdropdown").hide(); 
                        window.amaddressref=$(this);
                        if($(this).parent().find(".xdropdown").hasClass("xshow")){
                             
                            $(this).parent().find(".xdropdown").removeClass("xshow").hide();

                        }
                        else{
                            $(this).parent().find(".xdropdown").addClass("xshow").show();
						

                        }
                        if($(this).parent().find(".xdropdown").hasClass("specialvehicle")){
							
							    var pass=$(".xpassengersa").html();
								$(".xmmotorbike,.xmautorikshaw").show();
								if(pass>6){
									 $(".xmmotorbike,.xmautorikshaw").hide();
								}
								else  if(pass>1) {
									$(".xmmotorbike").hide();
								}
                        }
        })
        $("#reverselocation").click(function(){

          var pickuplocation=$("#pickuplocation").val();
          var droplocation=$("#droplocation").val();
          var pickuplocationhtml=$("#pickuplocation").prev().html();
          var droplocationhtml=$("#droplocation").prev().html();
          $("#pickuplocation").val(droplocation).prev().html(droplocationhtml);
          $("#droplocation").val(pickuplocation).prev().html(pickuplocationhtml);
          var tmpdroplat=window.pickuplat;
          var tmpdroplng=window.pickuplng;
          var tmpdropzipcode=window.pickupzipcode;
          var tmppickuplat=window.droplat;
          var tmppickuplng=window.droplng;
          var tmppickupzipcode=window.dropzipcode;
          console.log(window.pickuplat+" "+window.pickuplng+" "+window.pickupzipcode)
          console.log(window.droplat+" "+window.droplng+" "+window.dropzipcode);
          window.pickuplat=tmppickuplat;
          window.pickuplng=tmppickuplng;
          window.pickupzipcode=tmppickupzipcode;
          window.droplat=tmpdroplat;
          window.droplng=tmpdroplng;
          window.dropzipcode=tmpdropzipcode;
          

        }); 
        window.newaddvia=function(){
           
             
            window._crrvia++;
         
          $('<div class="_lothervia  axtempl"> <div style="display:inline">  <div class="lcoptions"> <img src="img/arrow-down.png" class="drpdowncx"  />  <div class="mapsxboxd">  <img src="img/maps.png" class="mapsx _mapsx" onclick="showviamap(this)"/> </div> </div><div class="plholder viazdkk"><span>Drop Location</span></div><div class="resulttry" onclick="showinpfld(this)"></div><input  onblur="reinitdbc(this,event)" onkeyup="mklccall(this,event)" onfocus="onviafocus(this)" type="text" class="viaaz via'+window._crrvia+' " autocomplete="off" placeholder="Via"><div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div></div></div>').appendTo($(".vias"));
          $('<div class="_ikmn  axtempl"><img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removevia(this,'+window._crrvia+')" ></div>').insertBefore(".firstlcf");
           $('<div class="_ikmnp  axtempl"> <input type="text" onkeyup="firstCapitalAlways(event);" autocomplete="off"   placeholder="Enter Note"> </div>').appendTo($(".mnjjxz").parent());
           $('<div class="_ikmnpl  axtempl"> <img src="img/substract.png" class="minusbn" onclick="minusbn(this)"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="5"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"  > </div>').appendTo($(".mnjjxzl").parent());
               setTimeout(function(){
                $(".notebox").css("height",$("#mklht").height());
                $("#_startervia").addClass("_lothervia").addClass("axtempl").removeAttr("id").next().removeClass("_lothervia").removeClass("axtempl").attr("id","_startervia");
                $('.via'+window._crrvia).focus();
               },10);
              
          updateviaplaceholder();
          add_dots();
        };
        $('#datepicker,#datepicker1,#timerx,#timerx1').keydown(function(e){
         
            return false;
        });
         window.scfun=function(dateText){ 
            var _unix=dateText.split("-");
          const today = new Date( _unix[2], _unix[1] - 1, _unix[0]);
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear(); 
  $(this).val(window._daysname[today.getDay()].substr(0,3)+", "+dd + '-'+mm+"-"+ yyyy);
          }
          $('#datepicker1').datepicker({
          autoclose: true,
        todayHighlight: true,
        setDate:new Date(),minDate: 0, dateFormat: 'dd-mm-yy' ,onSelect:scfun });
         
     $('#datepicker').datepicker({
         
        autoclose: true,
        todayHighlight: true,setDate:new Date(),minDate: 0, dateFormat: 'dd-mm-yy',
          onSelect: function(dateText) {
            var _unix=dateText.split("-");
          const today = new Date( _unix[2], _unix[1] - 1, _unix[0]);
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear(); 
  $('#datepicker1').datepicker( "option", "minDate", today );
    $(this).val(window._daysname[today.getDay()]+", "+dd + '-'+mm+"-"+ yyyy);
  /*if($(".returnbooking").is(":checked")){
   
    var a=$("#datepicker").val().split(",")[1];
    var b=$("#datepicker1").val().split(",")[1];
    a=a.split("-");
    b=b.split("-");
    const bookingdate = new Date( a[2], a[1] - 1, a[0]);
    const returndate = new Date( b[2], b[1] - 1, b[0]);

    if(returndate.getTime()<bookingdate.getTime()){

            setTimeout(function(){
        alert("Return Date should be greater than or same as booking");
         
      
 var dd = String(bookingdate.getDate()).padStart(2, '0');
var mm = String(bookingdate.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = bookingdate.getFullYear(); 
    $('#datepicker1').val(window._daysname[today.getDay()].substr(0,3)+", "+dd + "-"+mm+"-"+ yyyy);
},400);
    }
  }
  else{
     $(this).val(window._daysname[today.getDay()]+", "+dd + '-'+mm+"-"+ yyyy);
  }*/
    }
    });    
  $('#blockfromdate,#blocktodate').datepicker({
         
        autoclose: true,
        todayHighlight: true,setDate:new Date(),minDate: 0, dateFormat: 'dd-mm-yy' 
    });
        $("#opendatepicker").click(function(){
                 $("#datepicker").datepicker("show");
        });
          $("#opendatepicker1").click(function(){
                 $("#datepicker1").datepicker("show");
        });
          const today = new Date();
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
window._cdate=dd + '-'+mm+"-"+ yyyy;
window._cxcdate=yyyy + '-'+mm+"-"+ dd;
    $('#datepicker').val(window._daysname[today.getDay()]+", "+window._cdate);
       // $('#datepicker1').val(window._daysname[today.getDay()].substr(0,3)+", "+window._cdate);

       });
 window._daysname = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
 window.getcurrentDateTime=function(){
 const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
window._cdate=dd + '-'+mm+"-"+ yyyy;
window._cxcdate=yyyy + '-'+mm+"-"+ dd;

  return window._cdate+" "+h + ":" + m;
 }
 function isInt(n){
    return Number(n) === n && n % 1 === 0;
}
 window.ismultipledriver=false;
    window.getDrivers=function(vf){
        _passengers=$("#passengers").html();
        
        var pklocation=($.trim($("#pickuplocation").val()));
        if(_passengers=="0"||pklocation.length==0){
            return;
        }

        window.ismultipledriver=false;

    /*    if($("#selectmultiplevehicles").is(":checked")){
            window.ismultipledriver=true;
            var dv=parseFloat(_passengers)/2;
            if(isInt(dv)){
                _passengers=dv;
            }
            else{
            var a=Math.floor(dv);
            var b = (a+1);
            var c = (a-1);
            _passengers=a+","+b+","+c;
            }
			$("#allocatedriver").hide();
       //  $("#allocatedriver,.ispermanent").hide();
        }
        else{*/
			 $("#allocatedriver").show();
           //  $("#allocatedriver,.ispermanent").show();

       // }
        var pickdate=$.trim($("#datepicker").val().split(",")[1]);
         var bookingtime=$.trim($("#timerx").val());
         const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
          if(bookingtime.length==0){
          bookingtime=h_ + ":" + m_;
         }
         pickdate=pickdate+" "+bookingtime;
         var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
         var pets=$("#pets").is(":checked")?"1":"0";
         var pram=$("#pram").is(":checked")?"1":"0";
         var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
         var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
         var isDisabled = $('#lowvehicle').prop('disabled');
         var mobile=$.trim($("#mobile").val());
           if(window.isedit){
                mobile=$.trim($("#mobile").attr("data-mobile"))
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
               var normal  = $("#normal").is(":checked")?"1":"0";
               var autorikshaw =$("#autorikshaw").is(":checked")?"1":"0";
               var motorbike =$("#motorbike").is(":checked")?"1":"0";
         var iscapability="1";
          if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
            iscapability="0";
             }
      var animaltype=($("#guarddog").is(":checked")?"1":($("#animaldog").is(":checked")?"2":"3"));
      var obj={"normal":normal,"autorikshaw":autorikshaw,"motorbike":motorbike,"animaltype":animaltype,"lat":window.pickuplat,"lng":window.pickuplng,"mobile":mobile,"highvehicle":highvehicle,"lowvehicle":lowvehicle,"pram":pram,"pets":pets,"wheelchair":wheelchair,"iscapability":iscapability,"pdate":pickdate,"currentdate":getcurrentDateTime(),"api":"getdrivers","status":"4","passengers":_passengers,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"};
       obj["bicycle"]=bicycle;
       obj["items"]=items;
       obj["scooter"]=scooter;
       obj["boxes"]=boxes;
       obj["fishing"]=fishing;
       obj["shopping"]=shopping;
       obj["noofitems"]=noofitems;
       obj["size"]=size;
       obj["howmany"]=howmany;
             myajax(obj,function( data, textStatus, jQxhr ){
                $(".sectdriver").remove();
                if(data.status=="400"){
                    
                     for(var i = 0;i<4;i++){

                        html='<tr class="sectdriver" data-counter="'+counter+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
                  counter++;

                 }
                    return;
                }
                 var html="";
                 window.driverlist=data.data.all;
                 var remaindrivers=4-window.driverlist.length;
                 var counter=1;
                 if(window.driverlist.length!=0){
                    selectdriverfirst(window.driverlist[0]);
                 }
                 $(data.data.all).each(function(x,y){
                    html='<tr class="sectdriver" data-counter="'+counter+'"  onclick="selectdriver(this)" data-driverid="'+y.driverid+'">';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'" class="checkboxmcv checkboxmcv'+y.driverid+'"><label class="lbl"> ';
          html+=' </label></th>';
          html+='<td>'+secondsToHms(parseInt(y.waitingtime)*60).toLowerCase()+'</td>';
                    html+='<td>'+metersToMiles(y.distance).toFixed(2)+' m</td>';
                   
                    html+='<td>'+y.callsign+'</td>';
                    html+='<td>4.5</td>';
                     html+='<td>'+y.make+'</td>';
          html+='<td>'+y.registration+'</td><td></td>';
          // html+='<td>'+secondsToHms(y.time).toLowerCase()+'</td>';
          html+='   </tr>';
                    $("#driverlist").append(html);
                     counter++;
                 });
                 for(var i = 0;i<remaindrivers;i++){

                        html='<tr class="sectdriver" data-counter="'+counter+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                  
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
                  counter++;

                 }
             });
    }




      window.getDriversByCallSign=function(callsign,ismultipledriver,_passengers){
         
     window.ismultiplevehicles=ismultipledriver;
 /*   if($("#selectmultiplevehicles").is(":checked")){
    
      var dv=parseFloat(_passengers)/2;
      if(isInt(dv)){
        _passengers=dv;
      }
      else{
      var a=Math.floor(dv);
      var b = (a+1);
      var c = (a-1);
      _passengers=a+","+b+","+c;
      }
     $("#allocatedriver").hide();
    }
    else{*/
       $("#allocatedriver").show();

  //  }
      var pickdate=$.trim($("#datepicker").val().split(",")[1]);
       var bookingtime=$.trim($("#timerx").val());
         const today = new Date();
         let h_ = today.getHours();
         let m_ = today.getMinutes();
         let s_ = today.getSeconds();
         m_ = checkTime(m_);
         s_ = checkTime(s_);
          if(bookingtime.length==0){
          bookingtime=h_ + ":" + m_;
         }
         pickdate=pickdate+" "+bookingtime;
         var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
         var pets=$("#pets").is(":checked")?"1":"0";
         var pram=$("#pram").is(":checked")?"1":"0";
         var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
         var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
         var isDisabled = $('#lowvehicle').prop('disabled');
         var iscapability="1";
          if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
            iscapability="0";
           } 
         myajax({ "highvehicle":highvehicle,"lowvehicle":lowvehicle,"pram":pram,"pets":pets,"wheelchair":wheelchair,"iscapability":iscapability,"pdate":pickdate,"currentdate":getcurrentDateTime(),"status":"4","passengers":_passengers,"api":"getdriversbycallsign","dids":callsign,"adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
             $(".sectdriver").remove();
         var html="";
         window.driverlist=data.data.driverlist;
          var isdriver=(data.data.drivers==null);

         
         var remaindrivers=4-data.data.all.length;
           var counter=1;
                 $(data.data.all).each(function(x,y){
                    html='<tr class="sectdriver" data-counter="'+counter+'"  onclick="selectdriver(this)" data-driverid="'+y.driverid+'">'; 
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'" class="checkboxmcv checkboxmcv'+y.driverid+'"><label class="lbl"> ';
          html+=' </label></th>';
          
          html+='<td>'+secondsToHms(parseInt(y.waitingtime)*60).toLowerCase()+'</td>';
                     html+='<td>'+metersToMiles(y.distance).toFixed(2)+' m</td>';
                   
                    html+='<td>'+y.callsign+'</td>';
                    html+='<td>4.5</td>';
                     html+='<td>'+y.make+'</td>';
          html+='<td>'+y.registration+'</td><td></td>';
          // html+='<td>'+secondsToHms(y.time).toLowerCase()+'</td>';
          html+='   </tr>';
                    $("#driverlist").append(html);
                     counter++;
                 });
          for(var i = 0;i<remaindrivers;i++){

                        html='<tr class="sectdriver" data-counter="'+counter+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                    html+='<td></td>';
                 
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
                  counter++;

                 }
 
if(!isdriver){
 
    var driver=data.data.drivers[0];

           if(ismultipledriver=="1"){
                $(".driverbox").hide();
        $("#allocatedriver").hide();
 
  $(data.data.drivers).each(function(x,y){
          $(".checkboxmcv"+y.driverid).prop("checked",true);

$("#allocateddriverlist").append("<div class='_allpoi' data-callsign='"+y.callsign+"'  onclick='opendriver(this)' data-driverid='"+y.driverid+"' ><div> <div class='_qwdc'></div> <input  class='_pchke' type='checkbox' /></div><input type='text' readonly value='"+y.callsign+"' /></div>");
  })
  
     $("._allpoi").each(function(x,y){
        $(this).attr("data-counter",(++x));
    });     }
          else{
            if(!driver){
        return;
    }
              $("#allocatedriver").show();

            $("#allocatedriver").val(driver.callsign);
$(".driverbox,.xstarrating").show();
 $("#xdrivername").html(driver.name);
  $("#xcolor").html(driver.color);
   $("#xmodel").html(driver.model);
 $("#xmake").html(driver.make);
  if(driver.lowvehicle=="1"){
          $("#xvechile").html("Low Vechile"); 
          }
          else if(driver.highvehicle=="1"){
 $("#xvechile").html("Low Vechile");
          }
$("#xbadgeno").html("");
// $("#xbadgeno").html("Expected Time : "+driver.expectedtime);
 //$("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);

$("#xregistration").html(driver.registration);
         
          
          }
}else{
                    $(".driverbox").hide();

}
         });
 
 
    }
    window.mncv=function(ref){
          vl=$.trim(ref.value);
          if(vl>12) ref.value="12";
        return true;
    }
     window.mncva=function(ref){
          vl=$.trim(ref.value);
          if(vl>59) ref.value="59";
        return true;
    }
    window.bn=function(e,ref){
        
        var keyCode = e.which;
    
 
    if ( (keyCode != 8 || keyCode ==32 ) && (keyCode < 48 || keyCode > 57)) { 
      return false;
    }
    else {
         
         
        return true;
    }
}
window.dmclk=function(ref){
    var r = $(ref).parent().parent().parent().find(".demohour").val();
    var ampm=$(ref).parent().parent().parent().find(".demoam").hasClass("timeselected")?"AM":"PM";
         
             
         
    setTimeout(function(){
         /*$(ref).parent().parent().parent().find(".demohour").val(r).attr("disabled",true);
         if(ampm=="PM"){
                $(ref).parent().parent().parent().find(".demoam").removeClass("timeselected");
                $(ref).parent().parent().parent().find(".demopm").addClass("timeselected")
            }*/
    $(ref).focus();
},10);
}


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
 <script>
  
        
      
    </script>
    <div class="a12v"  style="display:none">
 <div class="timer-box mtr-datepicker mlkiop timer-box3">
                          <div class="mtr-row">
                            <div class="mtr-input-slider  alhour">
                              <div class="arrow up hourup" onclick="inchour(this)"><span></span></div>
                              <div class="content">
<input type="text" class="default-value-holder demohour" onkeyup="mncv(this)"  onkeypress="return bn(event,this)"   data-value="10" maxlength="2"> 
                              </div>
                              <div class="arrow down hourdown"  onclick="minhour(this)" ><span></span></div>

                            </div>
                             <div class="mtr-input-slider alminute"> 
                              <div class="arrow up minup"  onclick="incmin(this)"><span></span></div>
 <div class="content">
<input type="text" class="default-value-holder demominute" onkeyup="mncva(this)" onkeypress="return bn(event,this)" onclick="dmclk(this)"  data-value="10" maxlength="2" >
                              </div>                              <div onclick="minmin(this)"  class="arrow down mindown"><span></span></div>

                            </div>
                            <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value divam">AM</span> <span class="radio demoam" onclick="demoam(this)"></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" onclick="demopm(this)"></span> </label></div></div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                           <div class="btns_cnfrm " style="margin-top:0px;justify-content: center;">
                          <button type="button" style="margin-left: 35px" onclick="clopitimer(this,event)" class="amclose" >Ok</button>
                      </div>
                         </div>
                       </div>

  </body>
</html>