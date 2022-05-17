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
      <link rel="stylesheet" type="text/css" href="css/switch.css">
    <!-- JS files  -->
     <style type="text/css">
       @font-face {
       font-family: Butler;
       src: url('font/Butler_Bold.OTF');
       }
          .chkcb{width: 20px !important;
    height: 20px !important;
    margin-top: 25px;
    opacity: unset !important;}
    .chkcbvc{margin-top:0px;}
    body{background: #000 !important;overflow: hidden;}
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
    ._dropdown{cursor: pointer;}
    .xdropdown,.xallocatedriver,.lcdropdown{    z-index: 999;
    position: absolute;
    width: 158px;display: none;
    background: #fff;
    margin-top: 40px; 
    border: 1px solid #eaeaea;padding: 0px;max-height: 260px;
    overflow-y: auto;}
  .lcdropdown{width:calc(100% - 33px);margin-top:-15px;}
    .xdropdown{width: 177px;}
    .xdropdown li{font-weight: bold;}
    .xdropdown li,.xallocatedriver p,.lcdropdown p{display: block;
    border-bottom: 1px solid #eaeaea;
    padding: 1px 5px;cursor: pointer;font-size:15px;
    list-style-type: none;margin:0px;}
    .xdropdown li:hover,.xallocatedriver p:hover, .pac-item:hover,.lcdropdown p:hover,.lcdropdown p.active{background-color:#d9d9d9 !important;}
    .xallocatedriver{margin-top:0px;display: none;}
    .xallocatedriver .boldx,.lcdropdown .boldx{width: 100%;text-align: center;padding:10px;color:#000;font-weight: bold; display: none;}
    .xallocatedriver  p span{font-size: 12px;
    float: right;
    margin-top: 3px;}

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
 
    background: #29b360;
}
.table_s .table tbody tr.prebooking td,.table_s .table tbody tr.prebooking:hover{background:#29adb3}

.table_s .table tbody tr.quotation td,.table_s .table tbody tr.prebooking:hover{background:#f1a906}
.repeatbookingedit{    width: 50px;
    padding: 0px;
    margin: 0px;
    float: right;
    margin-right: 52px;
    margin-top: -1px;display:none;}
#rttables tr td{color:#000;padding: 5px;}
#rttables tr td input{border: 1px solid #eaeaea;}
._bnx{float: left;margin-left: 10px;color: #fff;font-size: 14px;}
.crclgreen{width: 10px;height: 10px;border-radius: 10px;background: #29b360;float: left;
    margin-top: 5px;}
    .crcleblue{width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: 5px;
      background: #29adb3;
    }
    .crcleorange{width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: 5px;
      background: #f1a906;
    }
    .crclegray{
      width: 10px;height: 10px;border-radius: 10px; float: left;
    margin-top: 5px;
      background: #8b8989;
    }
.table_s.full_wdth{margin-top: 0px;}
.dayselectrow{background: #fdc2c2;}
#modal input[type='text']{border: 1px solid #eaeaea;
    padding: 4px;}
.ispermanent{    width: 150px;
    color: #fff;
    margin-left: 20px;
    display: inline-block;
    cursor: pointer;;
  }
.trselected td,.trselected:hover td,.trselected:hover{background: #000 !important;}
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
.rpeat_images_chkbox img{width: 35px;}
.days_selected{margin-top:7px;} 
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
    font-size: 14px;margin-top: 4px;
        position: absolute;
    width: calc(100% - 14px);
    background: #fff;
    border-radius: 10px;
    padding: 1px 10px;
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
    width: 60px;
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
    .one_rab{width: 13px;margin-top: 5px;}
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
</style>
<script >
   
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
window.randomIntFromInterval=function(min, max) { // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min)+""+Math.floor(Math.random() * (max - min + 1) + min);
}

window._xmrandomid=randomIntFromInterval(100000,999999);
  window.timeoutref=setTimeout(function(){},1);
    window.mklccall=function(ref,e){
          if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
       
    
    window.amaddressref=$(ref).parent();
     var q=$.trim(ref.value);
     if(q.length==0){
            $(ref).removeAttr("data-lat").removeAttr("data-lng");
            getDistance();
         }
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
    $(data.data.sort(function(a, b) {
        return a.distancesfromcurrent - b.distancesfromcurrent;
    })).each(function(x,y){
      dropref.append("<p onclick='getplacedetails(this,0)' data-placeid='"+y.place_id+"' >"+y.description+"</p>");
    });
     
  }
  else{
            loadingref.show().html("No Result Found...");

  }
  }
    });},900);
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
              $("#ttlmileage").html(metersToMiles(data.data.distance).toFixed(2)+" m");        
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
        
 const defaultBounds = {
  north: parseFloat(center.lat) + 0.05,
  south: parseFloat(center.lat) - 0.05,
  east: parseFloat(center.lng) + 0.05,
  west: parseFloat(center.lng) - 0.05,
};
 
 
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
    <title>Home</title>
  </head>
  <body>

    <!---header start---------->
   <?php
    include "header.php";
   ?>
   <!--------header end-------->
     <style>._jobtable{margin-top: 0px}</style>
 <ul class='custom-menu'>
  <li data-action="cancel">Cancel</li>  

</ul>
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
     <div class="row">
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
 <div class="modal" id="errormodal" tabindex="-1" role="dialog">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><h3 id="merrorp"></h3></center>
         
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <section class="inner_s_wrap">
       <div class="container-fluid mainctr" >
        <div class="row" style="margin-bottom:30px">

          <div class="col-xl-4" style="max-width:39.5%;flex:0 0 39.5%; ">
            <div class="_cover"></div>
            <div class="bxx_one">

              <div class="date_picker">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <div class="input-group date">
                 <img src="img/Artboard 17 copy.png" id="opendatepicker">
                        <input style="margin-top:0px;font-size: 15px;font-weight: bold;" autocomplete="off" id="datepicker" placeholder="Select Booking Date" class="hasDatepicker">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group time" style="width:200px;float:right">
                                                <span style="font-size: 15px;margin-top: 0px;font-weight: bold;">Time</span>

                      <input type="text" style="width:50%;margin-top:0px;font-weight: bold;font-size: 15px;" placeholder="10:34 AM" onkeypress="formatTime(this)" maxlength="8" id="timerx">
                         <img id="clockx" src="img/clock.png" style="width:18px;position:absolute;margin:4px 5px 4px 10px;height: auto;"> 
                         <div class="timer-box mtr-datepicker" style="display: none;">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" onclick="inchourbkdate(this,'datepicker')"><span></span></div>
                              <div class="content">
<div class="default-value-holder demohour" data-value="10">10</div>
                              </div>
                              <div class="arrow down" onclick="minhourbkdate(this,'datepicker')"><span></span></div>

                            </div>
                             <div class="mtr-input-slider"> 
                              <div class="arrow up" onclick="incminbkdate(this,'datepicker')"><span></span></div>
 <div class="content">
<div class="default-value-holder demominute" data-value="10">34</div>
                              </div>                              <div onclick="minminbkdate(this,'datepicker')" class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam timeselected" id="demoam"></span> </label></div><div class="clearfix"></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm"></span> </label></div></div>
                            </div>
                          </div>
                          <div class="btns_cnfrm " style="margin-top:0px">
                          <button type="button" style="margin-left: 13px" onclick="clopitimer(this,event)" class="amclose">Close</button>
                      </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" style="margin-bottom:2px;">
                <label class="col-sm-3" style="font-size:14;color:#fff">
                  <input checked="" type="radio" name="ax" class="chkcb chkcbvc" id="booking"> <span style="top: -4px;
    position: relative;">Booking</span>
                </label>
                
                <label class="col-sm-3" style="font-size:14;color:#fff">
                 
                  <input type="radio" name="ax" class="chkcb chkcbvc" id="quotation"> <span style="top: -4px;
    position: relative;">Quotation</span>
                </label>
              </div>

              <div class="user_input_ro">
                <div class="row">
                  <div class="col-md-6">
                    <span>
                      <img style="height: 20px;  width: auto;" src="img/businessman.png" class="wdth_user">
                      <input type="text" style="margin-top:1px" id="fullname" placeholder="Enter Name" autocomplete="off">
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span class="left_ic">
                      <span id="starter" style="padding:0px;display:none;font-size:14px;margin-top:1px">0</span><input style="padding-left:0px;margin-top:1px" type="text" autocomplete="off" maxlength="11" onkeyup="searchbookingbymobile(this.value)" id="mobile" placeholder="Enter Mobile">
                      <img src="img/email.png" style="width: 23px" class="wdth">
                      <img src="img/phonecall.png" style="width: 19px;  padding-top: 0px;" class="wdth_phn">
                    </span>
                  </div>
                </div>
              </div>

              <div class="address_wrap">
                <div class="row" style="margin:0px">
                 <div class="col-sm-1" style="padding:0px;max-width: 11.5%;flex: 0 0 11.5%;width:85px"></div> <div class="col-sm-1" style="text-align: center;flex: 0 0 3.333333%; max-width: 3.333333%;padding: 0px;margin-right: 5px;
    margin-left: 10px;">
</div>
                  <div class="col-md-6 " style=" padding:0px;padding-left:5px;max-width: calc(57.666667% - 70px);">
                    <input type="text" style="margin-top:2px; " autocomplete="off" id="addressax_" placeholder="House No. Flat, Block, Building, Restaurant, Shop">
                  </div></div><div class="clearfix"></div><div class="row" style="margin-left: 7px;margin-right: -25px;">
                        <div class="col-sm-1" style="padding:0px;max-width: 11.5%;flex: 0 0 11.5%;margin-top:4px">
                         <div class="_ikmnpl "><img onclick="minusbn(this)" src="img/substract.png" class="minusbn"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="0" id="pickupwaitingtime"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"></div>
                         <div class="_ikmnpl mnjjxzl"> <img onclick="minusbn(this)" src="img/substract.png" class="minusbn"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="0"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"> </div>
                         <div class="_ikmnpl " style="display: none;"> <img src="img/substract.png" onclick="minusbn(this)" class="minusbn"> <input type="text" style="margin-top: 2px; margin-left: 9px;" id="dropwaitingtime" autocomplete="off" value="0"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"> </div>
                    </div>
                  <div class="col-sm-1" style="text-align: center;    flex: 0 0 2.5%;
    max-width: 2.5%;
    padding: 0px;
    margin-right: 5px;
    margin-left: -5px;">
                    <div>
                      <span class="dotsax">
                        <span class="_strty"><img src="img/a.png" class=" startgreen  one_r" style="margin-top:-7px"></span>
                        <span class="_lopepe">*</span>
                        <span class="_lopepe">*</span>
                        <span class="_lopepe">*</span>
                        <span class="_lopepe">*</span>
                        <span class="_lopepe">*</span>
                        <span class="_lopepe">*</span> 
                         <span class="_lopepe">*</span> 
                          <span class="_lopepe">*</span> 
                        <span style="margin-top:-6px"> <img src="img/b.png" class=" startgreen  one_r"></span>
                      </span>
                     </div>
                    </div>
                      <div class="col-sm-6" style="padding-right: 0px;max-width: calc(57.666667% - 70px)">
            <div>
                        <div class="resulttry" onclick="showinpfld(this)"></div>
                      <input type="text" onblur="reinitdbc(this,event)" style="margin-top:2px" autocomplete="off" id="pickuplocation" placeholder="Pickup Location"> 
            <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div>
            </div>
                    <div class="vias">
                      <div id="_startervia">
            <div style="display:inline">
                         <div class="resulttry" onclick="showinpfld(this)"></div>
                    <input type="text" style="margin-top:2px" class="viaaz via1" onkeyup="mklccall(this,event)" onblur="reinitdbc(this,event)" autocomplete="off" placeholder="Via">
            <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div>
          </div>
                    
                   </div>
                  </div>
                   <div> 
                     <div> 
                         <div class="resulttry" onclick="showinpfld(this)"></div>
                      <input type="text" onblur="reinitdbc(this,event)" style="margin-top:2px" autocomplete="off" id="droplocation" placeholder="Drop Location"> <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div></div></div>
                   </div> 
                   <div class="col-sm-1" style="padding:0px;padding-left: 4px; max-width: 6.5%;  flex: 0 0 6.5%;    margin-top: 4px;">
                     <div class="_ikmn "></div>
                    <div class="_ikmn firstlcf"> <img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removeviax(this)"><img src="img/Artboard 17 copy 4.png" class="addcloseac  " id="addvia" style="margin-left: 22px; width: 17px; margin-top: 2px;"></div>
                       <div class="_ikmn" id="reverselocation"><img src="img/Artboard 17 copy 6.png" class="addcloseac two_r"></div>
                   </div>
                    <div class="col-sm-3" style="padding:0px;padding-right:calc(0.2% + 8px);flex: 0 0 28%; max-width: 28%;margin-top: 4px;padding-left: 4px;">
                         <div class="_ikmnp "> <input type="text" autocomplete="off" id="pickupnote" placeholder="Enter Note"> </div>
                         <div class="_ikmnp mnjjxz"> <input type="text" autocomplete="off" placeholder="Enter Note"> </div>
                         <div class="_ikmnp "> <input type="text" autocomplete="off" id="dropnote" placeholder="Enter Note"> </div>
                    </div>
                  </div>
                 <!-- <div class="col-md-1">
                    <div class="postn_img_left leftimg">
                      <img src="img/Artboard 17 copy 4.png" class="one_r" id="addvia">
                      <img src="img/Artboard 17 copy 6.png" class="two_r">
                    </div>
                  </div> -->
                </div>
               
<div class="clearfix"></div>
              <div class="hand_luggage">
                <input type="text" autocomplete="off" id="notes" placeholder="Add notes for driver">
                <div class="flex_lugge">
                  <span class="_dropdown" style="width:200px">
                    <img src="img/Artboard 17 copy 2.png" style="padding: 2px;">
                    <label for="cars">Passengers</label>
                    <span class=" xpassengers ddrrr"><i id="passengers" class="_xmsg" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"></i>
</span>
                  </span>
                  <ul class="xdropdown">
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
                <div class="row">
                    <div class="col-md-2"></div>
                  <div class="col-md-4">
                    <div class="flex_lugge" style="justify-content:right">
                      <span class="_dropdown" style="width:200px">
                        <img src="img/Artboard 17 copy 7.png" style="height: 20px; width: auto;">
                        <label for="cars" class="mg_tb" style="padding:0px">Hand Luggage</label>
                         
                    <span id="handluggage" class=" ddrrr"><i id="handluggage" class="_xmsg" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"></i> </span>
                      
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
                  <div class="col-md-4">          
                    <div class="flex_lugge" style="justify-content:left">
                      <span class="_dropdown" style="width:200px">
                        <img src="img/Artboard 17 copy 5.png" style="width:18px">
                        <label for="cars" class="mg_tb" style="margin: 4px 10px;padding: 0px">Suitcase</label>
                              <span id="suitcase" class="  ddrrr"><i id="suitcase" class="_xmsg" style="font-style:normal;">0</i>  <i class="fa fa-sort-desc down_arrow"></i></span>
                       
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
                </div>

                <div class="clearfix"></div>
                  <div class="row" style="margin-top:15px">
                  <div class="col-md-6">
<input type="text" id="flightnumber" placeholder="Flight Number" autocomplete="off" class="input_flight">
                  </div>
                   <div class="col-md-6">
<input type="text" id="reference" autocomplete="off" readonly="" placeholder="Reference" class="input_reference">
                  </div>
                </div>
              </div>

            </div>
          </div>


           <div class="col-xl-4" style="max-width:21%;flex:0 0 21%">
            <div class="_cover"></div>
            <div class="rpeat_boking">
              
              <div class="rpeat_column rgbg_bg">
                <div class="bx_1 rgbg_p">
                  <span id="iused">0 Used</span>
                  <span id="icancelled">0 Cancelled</span>
                  <span id="inofare">0 No Fare</span>
                  <span id="irunner">0 Runner</span>
                </div>
                <div class="bx_1 mg_bx1">
                  <span>Rating<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  <span style="display:none"><img src="img/Artboard 17 copy.png"><span id="ilastused">13-02-2021 Last Used</span></span>
                </div>
                <div class="bx_1">
                  <span class="block"><img src="img/Artboard 47.png">Amount Owed</span>
                  <span class="block"><img src="img/Artboard 46.png">Notes</span>
                  <span class="block"><img src="img/Artboard 455.png" style="width: 
                  18px;height: 18px;">Block</span>
                </div>
              </div>

             
             <div class="rpeat_column mt_checkboxs" style="margin-top: 10px;"> 

                <div class="images_checkbox">
                  <div class="rpeat_images_chkbox">
                    <span>
                      <img src="img/Artboard 17 copy 14.png">
                      <p>WheelChair</p>
                    </span>
                    <label class="containerr" style="padding-left: 0px;">
                      <input type="checkbox" class="chkcb" style="margin-left:2px" id="wheelchair">
                      
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox">
                   
                    <span>
                      <img src="img/Artboard 17 copy 16.png">
                      <p>Pets</p>
                    </span>
                       <label class="containerr" style="padding-left: 0;">
                      <input type="checkbox" class="chkcb" style="margin-left:0px" id="pets"> 
                    </label>
                  
                  </div>
                  <div class="rpeat_images_chkbox">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Pram</p>
                    </span>
                    <label class="containerr" style="padding-left: 0;">
                      <input type="checkbox" style="margin-left:2px" class="chkcb" id="pram"> 
                    </label>
                  </div>
 <div class="rpeat_images_chkbox" style="margin-right:13px">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Bicycle </p>
                    </span>
                    <label class="containerr" style="padding-left: 0;">
                      <input type="checkbox" style="margin-left:2px" class="chkcb" id="bicycle"> 
                    </label>
                  </div>

                </div>
          <div class="images_checkbox animalsbox capotherbox" style="display:none;justify-content: center;">
                  <div class="row" style="margin: 0px;width: 100%;">
                <label class="col-sm-4" style="font-size:14px;color:#000;padding-right:0px;display: flex;">
                  <input checked="" type="radio" name="axcfv" class="chkcb chkcbvc" id="guarddog"> <span style="margin-left: 4px; 
    position: relative;">Guard Dog</span>
                </label>
                
                <label class="col-sm-4" style="font-size:14px;color:#000;padding-right:0px;justify-content: center;display: flex;">
                 
                  <input type="radio" name="axcfv" class="chkcb chkcbvc" id="animaldog"> <span style="margin-left: 4px;  position: relative;">Animal Dog</span>
                </label>
                  <label class="col-sm-4" style=" display: flex; justify-content: flex-end;font-size:14px;color:#000;">
                 
                  <input type="radio" name="axcfv" class="chkcb chkcbvc" id="cat"> <span style="top: 0px;margin-left: 5px;  position: relative;">Cat</span>
                </label>
              </div>
                  
                  
                </div>
                 <div class="images_checkbox">
                  <div class="rpeat_images_chkbox">
                    <span style="margin-left:calc(10% + 1px)">
                      <img src="img/Artboard 17 copy 14.png">
                      <p>Items</p>
                    </span>
                    <label class="containerr" style="padding-left: 5px;">
                      <input type="checkbox" class="chkcb" id="items">
                      
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox">
                   
                    <span style="margin-left: calc(22% + 1px);">
                      <img src="img/Artboard 17 copy 16.png">
                      <p>Scooter </p>
                    </span>
                       <label class="containerr" style="padding-left: 0;">
                      <input type="checkbox" class="chkcb" style="margin-left:2px" id="scooter"> 
                    </label>
                  
                  </div>
                  <div class="rpeat_images_chkbox">
                    
                    <span style="margin-left:calc(12% + 1px)">
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Boxes</p>
                    </span>
                    <label class="containerr" style="padding-left: 0;">
                      <input type="checkbox" style="margin-left:2px" class="chkcb" id="boxes"> 
                    </label>
                  </div>
 <div class="rpeat_images_chkbox" style="margin-right:13px">
                    
                    <span>
                      <img src="img/Artboard 17 copy 18.png">
                      <p>Fishing</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox" style="margin-left:-10px" class="chkcb" id="fishing"> 
                    </label>
                  </div>

                </div>
                 <div class="images_checkbox boxesbox capotherbox" style="display:none;justify-content: center;">
                <div class="row   " style="margin: 0px;margin-bottom:10px; ">
                     <div class="col-sm-1"></div>
                  <div class="col-sm-4"> 
                      <select style=" border:1px solid #eaeaea" class=" " id="sizetype"> 
            <option value="0">Select Size</option>
             <option value="1">Large Size</option>
              <option value="2">Small Size</option>
            </select>
                   
                   
                  </div><div class="col-sm-1"></div>
                  <div class="col-sm-4"> 
                    <select style=" border:1px solid #eaeaea" class=" " id="sizehowmany"> 
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
                 <div class="images_checkbox itemsbox capotherbox" style="display:none;justify-content: center;">
         <div class="row   " style="margin: 0px;margin-bottom:10px; ">
                     <div class="col-sm-2"></div>
                  <div class="col-sm-8"> 
                    <input type="text" autocomplete="off" id="noofitems" placeholder="Enter Items" style="border:1px solid #eaeaea">
                  </div>
                 
                </div>
            </div>
                <div class="images_checkbox  ">
                      <div class="rpeat_images_chkbox">
                    
                    <span>
                      <img src="img/Artboard 42.png">
                      <p>Parcel</p>
                    </span>
                    <label class="containerr">
                      <input type="checkbox" style="  top: -12px;" class="chkcb" id="parcel"> 
                    </label>
                  </div>
                      <div class="rpeat_images_chkbox">
                   
                    <span>
                      <img src="img/Artboard 42.png">
                      <p>Shopping</p>
                    </span>
                     <label class="containerr">
                      <input type="checkbox" style="margin-left: -12px; top: -12px;" class="chkcb" id="shopping"> 
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox">
                   
                    <span style="margin-left:calc(-13% + 1px)">
                      <img src="img/Artboard 42.png">
                      <p>Salon</p>
                    </span>
                     <label class="containerr">
                      <input type="checkbox" style="margin-left: -5px; top: -12px;" class="chkcb" id="lowvehicle"> 
                    </label>
                  </div>
                  <div class="rpeat_images_chkbox" style="margin-right: 15px;">
                    
                    <span>
                      <img src="img/Artboard 43.png">
                      <p>HV</p>
                    </span> 
                    <label class="containerr">
                      <input type="checkbox" style="margin-left: -5px; top: -12px;" class="chkcb" id="highvehicle">
                      
                    </label>
                  </div>
                </div>

              </div>
               <div class="rpeat_days_bx">
                <div style=" padding: 7px;  background: #646464; border-radius: 10px;padding-bottom: 1px;">
                <div class="rpeat_top_bar_flex">
                  <span class="bookings">
                    <img src="img/Artboard-17-copy-13.png">

                    Repeat Booking
                  </span>
                  <div style="width:110px"><span class="on_off">OFF</span>
                 <div class="toggle-btn _repeatbooking">
  <input type="checkbox" class="cb-value repeatbooking">
  <span class="round-btn"></span>
</div><span class="on_off">ON</span>
</div>

                </div>

                <div class="days_selected">
                  <span data-d="Mon" class="daya1" data-c="1" data-goingtime="10:33 AM" data-returntime="10:33 AM">M</span>
                  <span data-d="Tue" class="daya2" data-c="2" data-goingtime="10:33 AM" data-returntime="10:33 AM">T</span>
                  <span data-d="Wed" class="daya3" data-c="3" data-goingtime="10:33 AM" data-returntime="10:33 AM">W</span>
                  <span data-d="Thu" class="daya4" data-c="4" data-goingtime="10:33 AM" data-returntime="10:33 AM">T</span>
                  <span data-d="Fri" class="daya5" data-c="5" data-goingtime="10:33 AM" data-returntime="10:33 AM">F</span>
                  <span data-d="Sat" class="daya6" data-c="6" data-goingtime="10:33 AM" data-returntime="10:33 AM">S</span>
                  <span data-d="Sun" class="daya7" data-c="7" data-goingtime="10:33 AM" data-returntime="10:33 AM">S</span>
                  <div class="btns_cnfrm repeatbookingedit">
                 <button type="button" style="background:#858585" class="confrm" id="edittime">Edit</button>
              </div>
                </div>
</div>                <div style=" padding: 7px; margin-top:10px; background: #646464; border-radius: 10px;">

                <div class="rpeat_top_bar_flex">
                  <span class="bookings">
                    <img src="img/Artboard-17-copy-15.png">
                    Return Booking
                  </span>
                   <div style="width:110px"><span class="on_off">OFF</span>
                   <div class="toggle-btn _returnbooking" style="margin-right:6px">
  <input type="checkbox" class="cb-value returnbooking">
  <span class="round-btn" style="margin-top:-0.03em"></span>
</div>
<span class="on_off">ON</span>
</div>
                </div>

                <div class="date_picker" style=" height:25px;margin-bottom: 2px;margin-top: 5px;">
                <div class="row isreturnx" style="display:none">
                  <div class="col-md-7">
                    <div class="form-group">
                      <div class="input-group date">
                 <img src="img/Artboard 17 copy.png" id="opendatepicker1">
                        <input data-date-format="dd/mm/yyyy" id="datepicker1" style="font-size: 15px;font-weight: bold;padding:0px 10px" placeholder="Select Returning Date" class="hasDatepicker">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group time" style="width:160px;float:right">
                                                <span style="font-size: 15px;font-weight: bold;">Time</span>

                      <input type="text" style="width:65%;font-size: 15px;font-weight: bold;" placeholder="10:34 AM" onkeypress="formatTime(this)" maxlength="8" id="timerx1">
                         <img id="clockx1" src="img/clock.png" style="width:18px;position:absolute;margin:3px 5px 4px 10px;height: auto;"> 
                          <div class="timer-box mtr-datepicker" style="display: none;">
                          <div class="mtr-row">
                            <div class="mtr-input-slider">
                              <div class="arrow up" onclick="inchourbkdate(this,'datepicker1')"><span></span></div>
                              <div class="content">
<div class="default-value-holder demohour" data-value="10">10</div>
                              </div>
                              <div class="arrow down" onclick="minhourbkdate(this,'datepicker1')"><span></span></div>

                            </div>
                             <div class="mtr-input-slider"> 
                              <div class="arrow up" onclick="incminbkdate(this,'datepicker1')"><span></span></div>
 <div class="content">
<div class="default-value-holder demominute" data-value="10">34</div>
                              </div>                              <div onclick="minminbkdate(this,'datepicker1')" class="arrow down"><span></span></div>

                            </div>
                             <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam timeselected" id="demoam1"></span> </label></div><div class="clearfix"></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" id="demopm1"></span> </label></div></div>
                            </div>
                          </div>
                           <div class="btns_cnfrm " style="margin-top: 0px;">
                          <button type="button" style="margin-left: 13px" onclick="clopitimer(this,event)" class="amclose">Close</button>
                      </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
                
              

                <div class="mileage_pr" style="margin-top:10px">
                  <p class="m_on xmon">Mileage<br><strong class="xbbbl" id="ttlmileage">0 m</strong></p>
                  <p class="m_on xmon" style="background-image:linear-gradient(to right, #87037c , #d701c5);margin-left:5px">Time<br><strong class="xbbbl" id="ttltime">0 h</strong></p>
                  <p class="p_on xmon" style="margin-left:5px">Price<br><strong class="xbbbl">£5.00</strong></p>
                  <p class="f_on xmon" style="margin-left:5px" id="fixedbx" data-price="5.00" onclick="$('.fixededitbox').toggle()">Fixed<br><strong class="xbbbl">£5.00</strong></p>
                </div>
 
                <div class="btns_cnfrm fixededitbox" style="padding-left:0px;display:none;width:85%;margin-top:4px;margin-bottom:19px">
                  <span style="color: #000;position: absolute; font-size: 18px;  margin-left: 5px;">£</span>
                <input type="text" autocomplete="off" style="padding-left:19px" id="fixedprice" placeholder="Enter Fixed Price">
                <button type="button" style="margin-left:10px" class="confrm" id="addfixed">Confirm</button>
              </div>
              </div>

            </div>
          </div>


           <div class="col-xl-4" style="max-width:39.5%;flex:0 0 39.5%">

            <div class="atm_card_wrapper">
             <div>
             <div class="_cover"></div>

              <div class="table_s table_xd tabledrivers">
                <table class="table" style="margin-top:0px">
                  <thead>
                    <tr>
                      <th class="no_bg"></th>
                       <th>Waiting</th>
                      <th>Distance</th>
                      <th>Time</th>
                      <th>Driver</th>
                      <th>Rating</th>
                      <th>Vechile</th>
                      <th>Registration</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody id="driverlist">  <tr class="sectdriver" data-counter="1"><th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl"> </label></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>   </tr><tr class="sectdriver" data-counter="2"><th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl"> </label></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>   </tr><tr class="sectdriver" data-counter="3"><th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl"> </label></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>   </tr><tr class="sectdriver" data-counter="4"><th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl"> </label></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>   </tr></tbody>
                </table>
              </div>
                <div class="checkbox_yes" style="margin-left:15px;">
                <label class="containerr">
                  <input type="checkbox" id="selectmultiplevehicles">
                  <span class="checkmark"></span>Select Multiple Vehicles
                </label>
              </div>
              <div class="row" style="margin-top: 15px;margin-left: 17px;">
               
                <div style="color:#fff;width:115px">Allocate driver</div>
                <div class="col-sm-7">
                <div id="allocateddriverlist"></div><input autocomplete="off" id="allocatedriver" onkeyup="searchcallsign(this.value)" style="width:140px" type="text"><div class="ispermanent"><input style="width:14%" type="checkbox" id="ispermanent"><span>Permanent</span></div><div class="clearfix"></div>
                <div class="xallocatedriver xshow " style="width:260px">
                    <div id="loading" class="boldx">Loading...</div>
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                     

                  </div>
              </div>
              </div>

              <div class="driverbox">
                <div class="row" style="margin:0px"><div class="col-sm-6">
              <div class="driver_bxxs">
                <span class="details_driv">
                  <img src="img/index.png">
                  <span class="user_pt">
                    <img src="img/testimonialimage4.jpg" id="xprofilepic">
                  </span> 
                  <p id="xdrivername">Rahul Kumar</p>
                </span>
                <span class="driver_details" style="width: 60%;">
                  
                  <p class="bg_c_two">
                     
                    <span>Badge No</span>
                    <span>Call Sign</span> 
                  </p>
                  <p class="bg_c_three"> 
                    <span id="xbadgeno">25455</span>
                    <span id="xcallsign">55664</span> 
                  </p>
                  <div class="btns_dr">
                    <button type="button" style="font-size: 14px;">Distance<strong style="display:block;margin-top:5px">2.5 M</strong></button>
                    <button type="button" style="font-size: 14px;" class="time">Time<strong style="display:block;margin-top:5px">2 Hours</strong></button>
                  </div>
                </span>
              </div>
          </div><div class="col-sm-6">
              <div class="driver_bxxs">
                <span class="details_driv">
                 
                  <span class="user_pt" style="margin-top:25px">
                    <img src="img/testimonialimage4.jpg" id="xcarimage1">
                  </span>
                
                </span>
                <span class="driver_details">
                  <p>
                    <span>Colour</span>
                    <span>Make</span>
                    <span>Model</span>
                  </p>
                  <p class="bg_c_one">
                    <span id="xcolor">Black</span>
                    <span id="xmake">Suv</span>
                    <span id="xmodel">2009</span>
                  </p>
                  <p class="bg_c_two">
                    <span>Registration</span> 
                    <span>Plate No</span> 
                  </p>
                  <p class="bg_c_three">
                    <span id="xregistration">12345</span> 
                    <span id="xplateno">55664</span> 
                  </p>
                  <div class="btns_dr" style="display:none;">
                    <button type="button" style="font-size: 17px;">Distance<strong style="display:block;margin-top:5px">2.5 M</strong></button>
                    <button type="button" style="font-size: 17px;" class="time">Time<strong style="display:block;margin-top:5px">2 Hours</strong></button>
                  </div>
                </span>
              </div>
          </div></div>
</div>
              

              <div class="atm_b">
                <div class="row" style="margin-top:25px;margin-left:15px;">
                <label class="col-sm-2" style="font-size:14;color:#fff;padding:4px 0px 0px 5px;border-radius: 5px;background: #ffffff4a;">
                  <input checked="" type="radio" name="paymenttype" class="chkcb chkcbvc" id="cash"> <span style="top: -4px;
    position: relative;">Cash</span>
                </label>
                
                <label class="col-sm-2" style="font-size:14;color:#fff;padding:4px 0px 0px 5px;border-radius: 5px;background: #ffffff4a;margin-left: 5px;">
                 
                  <input type="radio" name="paymenttype" class="chkcb chkcbvc" id="prepaid"> <span style="top: -4px;
    position: relative;">Pre-Paid</span>
                </label> 
              </div>
                <div class="row creditcardbox" style="display: none;margin-left:5px">
                  <div class="col-md-9">
                    <div style="background: #ffffff4a;padding: 7px;border-radius: 26px;">
                        <div class="row"><div class="col-sm-9">
                    <div class="img_input">
                      <img src="img/Artboard-44.png" style="margin-left:0px">
                      <div class="on_img_imk">
                        <div class="atm_one">
                 <input type="text" name="ccn" style="padding-right:4px" maxlength="16" id="cardnumber" placeholder="XXXX XXXX XXXX XXXX" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                        <div class="atm_one">
                          <input type="text" style="padding-right:4px" onkeypress="return /[a-z]/i.test(event.key)" id="cardname" autocomplete="off" placeholder="Name On Card">
                             <input maxlength="5" placeholder="Expiry Date" type="text" id="cardexpirydate" onkeyup="formatString(event);">
                        </div>
                        <div class="atm_one">
                            <input type="text" maxlength="3" autocomplete="off" placeholder="CVV" id="cardcvv" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                      </div>
                    </div>
                </div>
             <div class="col-sm-3">
                    <div class="postn_bb">
                      <div class="top_icons">
                        <img src="img/Artboard-49.png">
                          
                        <img src="img/Artboard-50.png">
                      </div>
                      <div class="centred_btn">
                        <button type="button" style="font-size:13px">Process</button>
                        <p class="pre-paid">Pre-Paid</p>
                      </div>
                    </div>
                  </div></div>
                </div>
                  </div>
                 
                </div>
                
              </div>

              <div class="left_s_apacing">
                <div class="alocat_d lst">
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
                </div>
            </div>
<img src="img/load.gif" style="width:90px;display: none;" id="loadingaxd">
                <div class="btns_cnfrm btns_cnfrmcx">
                  <button type="button" id="cancel" style="display:none">Cancel</button>
                  <button type="button" class="confrm" id="confirm" style="display:none">Confirm</button>
              <button type="button" class="confrm"   style="display:none;z-index:999" id="edit">Edit</button>
               

                </div>
                <span id="xerrormsgs"></span>
              </div>

            </div>
          </div>
</div></div>
      <div class="container-fluid">
        <div class="row"> 
          
           

          <div class="col-md-12 px-0">
            <div class="table_bg_bar" style="margin-top:12px">
              <div class="flex_bar_tbl">
                  
                <div class="">
                  <ul>
                    <li class="nav_a active"><a href="">All</a></li>
                    <li class="nav_a"><a href="">Allocated</a></li>
                    <li class="nav_a"><a href="">Remaining</a></li>
                  </ul>
                </div>

                <div class="Pickups_serach">
                  <input type="text" name="" placeholder="Pick Up">
                  <span><i class="fa fa-search"></i></span>
                </div>

                <div class="Pickups_serach">
                  <input type="text" name="" placeholder="Driver">
                  <span><i class="fa fa-search"></i></span>
                </div>

                <div class="Pickups_serach mnday_p">
                  <div class="form-group">
                      <div class='input-group date'>
                        <img src="img/Artboard 17 copy.png">
                        <input data-date-format="dd/mm/yyyy" id="datepicker">
                      </div>
                    </div>
                  <span><i class="fa fa-search"></i></span>
                </div>

              </div>
            </div>
            <div class="table_s full_wdth mntblsk" style="margin-top:30px;overflow-y: auto;">
               <table class="table vbgtable" style="margin-top:0px;"  >
                  <thead>
                    <tr>
                      <th>Job Type<i></i></th>

                      <th>Time<i></i></th>
                      <th>Date<i></i></th>
                      <th>Plot<i></i></th>
                      <th style="width:20%">Pickup<i></i></th>
                      <th>Plot<i></i></th>
                      <th style="width:20%">Drop Off<i></i></th>
                      <th>Pass<i></i></th>                    
            <th>Extras<i></i></th>
                      <th>Driver<i></i></th>
                      <th style="width:75px">Price<i></i></th>
                      <th>Payment<i></i></th>
                      <th>Rating<i></i></th>       
                    
                      <th>Controller<i></i></th>
            <th>Flight<i></i></th>
  <th>Status<i></i></th>
                      <th>Audio</th>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
 <script>
window.xhr=null;
window._xobj=null;
window.searchdriverlist=[];
window._joblist=[];
window.isedit=false;
window.jobid="0";
window._cjob=null;
window.clopitimer=function(ref,event){
    event.stopPropagation();
      $(ref).parent().parent().hide();
    window.istimeboxopen=false;
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


window.lojob=function(job){
    $("#cancel,#confirm").hide();
    $("#edit").show();
  $("._temprmpl").remove();
  $(".mnjjxzl").find("input").val("0");
  $(".mnjjxz").find("input").val("");
  $("#_startervia").find("input").val("").removeAttr("data-lat").removeAttr("data-lng").removeAttr("data-zipcode").prev().hide().html("");
  $("#mobile").val(job.mobile.substr(1,job.mobile.length));
  $("#starter").show();
  $(".creditcardbox").hide();
    var driveridx=job.driverid;
     $("#ispermanent").prop("checked",(job.ispermanent=="1"));
if(window._cjob.isbooking=="1"){
  $("#booking").prop("checked",true);
}
else{
    $("#quotation").prop("checked",true);

}

$("#fixedbx").attr("data-price",job.fixedprice).find("span").html("£"+job.fixedprice);
var lendots=$("._mmmj").length;
if(lendots!=0){
  $("._mmmj").remove();
   updateviaplaceholder();
        remove_dots();
}
window.pickuplat=job.pickuplatitude;
window.pickuplng=job.pickuplongitude;
window.pickupzipcode=job.pickupzipcode;
window.droplat=job.droplatitude;
window.droplng=job.droplongitude;
window.dropzipcode=job.dropzipcode;
window.bookingmileage=job.bookingmileage;
window.bookingmileagetime=job.bookingmileagetime;
 $("#ttlmileage").html(metersToMiles(window.bookingmileage).toFixed(2)+" m");        
 $("#ttltime").html(secondsToHms(window.bookingmileagetime).toLowerCase()); 
    var _unix=job.bdate.split("-");
          const today = new Date( _unix[2], _unix[1] - 1, _unix[0]);
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear(); 
  $("#datepicker").val(window._daysname[today.getDay()]+", "+dd + '-'+mm+"-"+ yyyy);
    $("#timerx").val(window.tConvert(job.btime));
    $("#fullname").val(job.name);
    $("#allocatedriver").val(job.callsign);
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
    $("#reference").val(job.reference);
    if(job.cardnumber!="0"){
          $("#cardnumber").val(job.cardnumber);
          $("#cardname").val(job.cardname);
           $("#cardexpirydate").val(job.cardmm+"/"+job.cardyy);
           $("#cardcvv").val(job.cardcvv);
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
      $("#prepaid").prop("checked",true);
      $(".creditcardbox").show();
    }
     setTimeout(function(){
     window.ispet=(job.ispet=="1");
            window.firstselected=job.firstselected;
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
       $(job.via[0].address.split(",")).each(function(x,y){
        if(x==0)
         t+="<span class='bluety'>"+y+"</span>";
        else t+=", "+y;
       });
        $(".via1").prev().html(t).show();
    }
    else{
      var lenj=job.via.length;
      lenj--;
      for(var gg=0;gg<lenj;gg++){
        _addvia();
      }
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
     
   
   $("#allocatedriver,.ispermanent").hide();
   $("#selectmultiplevehicles").prop("checked",true);
  
 
}
else{
     if(driveridx==""){
                $(".driverbox").hide();
          }
          else{
          $(".driverbox").show();
          }
        $("#allocatedriver,.ispermanent").show();
       

}
   setTimeout(function(){
      adheight();
  },10);
  setTimeout(function(){
    window.getDriversByCallSign(driveridx,ismultiplevehicles,job.passengers);
   },400);
 

}
window.selectjob=function(ref,isview){
      $("#tbd tr").removeClass("trselected");

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
      window.isedit=true;
       $("#pram,#wheelchair,#pets,#lowvehicle,#highvehicle,#items,#scooter,#fishing,#bicycle,#boxes,#shopping").removeAttr("disabled").prop("checked",false);
 $(".isreturnx,.itemsbox,.animalsbox,.boxesbox").hide();
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
}

 window._addvia=function(){

     window._crrvia++;
         
          $('<div class="_lothervia _temprmpl"><div style="display:inline"> <div class="resulttry" onclick="showinpfld(this)"></div><input  style="margin-top:2px"  onblur="reinitdbc(this,event)"  onkeyup="mklccall(this,event)"  type="text" class="viaaz via'+window._crrvia+' " autocomplete="off" placeholder="Via"> <div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div></div> </div>').insertBefore("#_startervia");
         
         $('<div class="_ikmn _temprmpl"><img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removevia(this,'+window._crrvia+')" ></div>').insertBefore(".firstlcf");
           $('<div class="_ikmnp _temprmpl"> <input type="text"   autocomplete="off"   placeholder="Enter Note"> </div>').insertBefore(".mnjjxz");
           $('<div class="_ikmnpl  _temprmpl"> <img src="img/substract.png" class="minusbn" onclick="minusbn(this)"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="0"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"  > </div>').insertBefore(".mnjjxzl");
          updateviaplaceholder();
          add_dots();
 };
 window.hidedropdown=function(ref){
      $(".custom-menu").hide(100);

 }
 window.searchcallsign=function(val){
    val=$.trim(val);
    if(val.length==0){
     $(".driverbox,.xallocatedriver ").hide();
        return;
    }
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
       window._xobj["size"]=size;
       window._xobj["howmany"]=howmany;
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
            $(".xallocatedriver").append("<p onclick='allocatedr("+y.driverid+")' data-id='"+y.driverid+"' data-callsign='"+y.callsign+"'>"+y.callsign+"<span>"+y.name+"</span></p>");
        
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
 
};
window.allocatedr=function(driveridx){
 
    var driver=window.searchdriverlist.filter(function (entry) {
    return entry.driverid == driveridx;
})[0];
  $("#allocatedriver").val(driver.callsign);
window.driverid=driveridx;
$(".xallocatedriver").hide();
$(".driverbox").show();
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
 $("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
$("#xregistration").html(driver.registration);
$("#xcallsign").html(driver.callsign);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);
$("#xcarimage1").attr("src",window._baseurl+"files/"+driver.carimage1);
}
 </script>
    <script type="text/javascript">
    window._crrvia=1;
      window._baseurl="http://18.168.83.39/";
      window.removevia=function(ref,cf){
        var index=($(ref).parent().index());
      
       $("._lothervia:nth-of-type("+index+")").remove();

        index++;
        $("._ikmnp:nth-of-type("+index+"),._ikmnpl:nth-of-type("+index+")").remove();
        $(ref).parent().remove();
        
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
            $( "<span class='_lopepe _temprmpl'>*</span>" ).insertAfter( "._strty" );
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
 
  window.checkTime=function(i) {
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
 $(".demohour").html(hours);
 $(".demominute").html(minutes);
 if(ampm=="AM"){
  $(".demoam").addClass("timeselected");
      $(".demopm").removeClass("timeselected")

 }
 else{
   $(".demoam").removeClass("timeselected");
    $(".demopm").addClass("timeselected")

 }
}
  $("#timerx,#timerx1").attr("placeholder",strTime);
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
 $(".driverbox").show();
 
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
 $("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);

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
  $(".driverbox").show();
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
 $("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
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
         index++;
        $("._ikmnp:nth-of-type("+index+"),._ikmnpl:nth-of-type("+index+")").remove();
      $(ref).parent().remove();
        remove_dots();
}
     }

 window.openaudiodialog=function(ref,id){
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
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt--;
          if(dt<=0){
            dt=12;
          }
           if(dt<10){
            dt="0"+dt
          }
          $(ref).parent().find(".default-value-holder").html(dt);
                    window.settmx($(ref).parent().parent().parent().parent())

      }

window.minhourbkdate=function(ref,idx){
        
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
        
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
         
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
        
          dt++;
          if(dt>12){
            dt=1;
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
      window.inchour=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt++;
          if(dt>12){
            dt=1;
          }
           if(dt<10){
            dt="0"+dt
          }
          $(ref).parent().find(".default-value-holder").html(dt);
                    window.settmx($(ref).parent().parent().parent().parent())

      }
      window.kk=function(ref,dt,idx){
          var mn=$(ref).parent().parent().find(".demominute").html();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = dt+":"+mn+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");
           

          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
            
           if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").html(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          }
      }
       window.kkr=function(ref,dt,idx){
          var hr=$(ref).parent().parent().find(".demohour").html();
        var ampm=$("#demoam").hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
           var _date=$.trim($("#"+idx).val().split(",")[1]).split("-");
           

          var newDate = new Date( _date[2], _date[1] - 1, _date[0],_time[0],_time[1],0);
            
           if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").html(dt);
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
           $(ref).parent().find(".default-value-holder").html(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          }
      }
       window.kkrb=function(ref,dt){
          var hr=$(ref).parent().parent().find(".demohour").html();
        var ampm=$(ref).parent().parent().find(".demoam").hasClass("timeselected")?" AM":" PM";
          var _time = hr+":"+dt+ampm;

           
           _time=window.tofulltimedt(_time).split(":");
            var today=new Date();

          var newDate = new Date( today.getFullYear(), today.getMonth(), today.getDate(),_time[0],_time[1],0);
            
           if(newDate.getTime()>=dfgv()){
           $(ref).parent().find(".default-value-holder").html(dt);
           window.settmx($(ref).parent().parent().parent().parent());
          }
      }
        window.incminbkdate=function(ref,idx){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
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
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
            kkr(ref,dt,idx);
      }
      window.incminrtdate=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
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
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
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
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt++;
          if(dt>59){
            dt=1;
          }
          if(dt<10){
            dt="0"+dt
          }
          $(ref).parent().find(".default-value-holder").html(dt);
           window.settmx($(ref).parent().parent().parent().parent())

      }
       window.minmin=function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
          dt--;
          if(dt<=0){
            dt=59;
          }
          if(dt<10){
            dt="0"+dt
          }
          $(ref).parent().find(".default-value-holder").html(dt);
          window.settmx($(ref).parent().parent().parent().parent())
      }
      window.minhourrtdate =function(ref){
        var dt=$.trim($(ref).parent().find(".default-value-holder").html());
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
        var hr=$(ref).find(".demohour").html();
        var mn=$(ref).find(".demominute").html();
         var ampm=$(ref).find(".demoam").hasClass("timeselected")?"AM":"PM";
        $(ref).find("input[type=text]").val(hr+":"+mn+" "+ampm);
        return hr+":"+mn+" "+ampm;
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
      $(ref).parent().hide();
      var inpt=$(ref).parent().parent().find("input[type=text]");
      inpt.val($(ref).text());
          $(ref).parent().parent().find(".resulttry").html($(ref).html()).show();
          window._isdrpshown=false;
      myajax({"api":"getplacedetails","placeid":$(ref).attr("data-placeid")},function( data, textStatus, jQxhr ){
        if(type==1){
            window.pickuplat=data.data.lat;
          window.pickuplng=data.data.lng;
          window.pickupzipcode=data.data.postalcode; 
          getDistance(); getDrivers();
        }
        else if(type==2){
            window.droplat=data.data.lat;
          window.droplng=data.data.lng;
          window.dropzipcode=data.data.postalcode; 
          getDistance();
        }
        else{
         inpt.attr("data-zipcode",data.data.postalcode).attr("data-lat",data.data.lat).attr("data-lng",data.data.lng);
         getDistance();
        }
      });
      }

          window.getplacedetailsbytext=function(placeid,type){
           
          myajax({"api":"getplacedetails","placeid":placeid},function( data, textStatus, jQxhr ){
              if(type==1){
                    window.pickuplat=data.data.lat;
                    window.pickuplng=data.data.lng;
                    window.pickupzipcode=data.data.postalcode; 
                    getDistance(); getDrivers();
              }
              else if(type==2){
                    window.droplat=data.data.lat;
                    window.droplng=data.data.lng;
                    window.dropzipcode=data.data.postalcode; 
                    getDistance();
              }
              else{
                 window.amaddressref.find("input[type=text]").attr("data-zipcode",data.data.postalcode).attr("data-lat",data.data.lat).attr("data-lng",data.data.lng);
                 getDistance();
              }
          });
          }

             document.onkeydown = checkKey;
window._lcchildlength=0;
window.dropplaceid=window.pickupplaceid=window.axxplaceid="0";
window.xattrytype=0;
window.__xsetaddr="";
window.jobcounter=-1;
window.kmjob=function(){
    var cntr=window.jobcounter;
    cntr++;
    var ref=$("#tbd tr:nth-of-type("+cntr+")");
    $("#tbd tr").removeClass("trselected");

    ref.addClass("trselected");
      window._crrvia=1;
       
            $("#confirm,#cancel,.table_xd").show();
          $("#audit").hide();
      
      window.isedit=true;
       $("#pram,#wheelchair,#pets,#lowvehicle,#highvehicle,#items,#scooter,#fishing,#bicycle,#boxes,#shopping").removeAttr("disabled").prop("checked",false);
 $(".isreturnx,.itemsbox,.animalsbox,.boxesbox").hide();
    $(ref).find("input").prop("checked",true);
    window.jobid=ref.attr("data-jobid")
   var driveridx=ref.attr("data-driverid");
   var callsign=ref.attr("data-callsign");
   var passengers=ref.attr("data-passengers");
   var ismultiplevehicles=ref.attr("data-ismultiplevehicles");
   window.ismultipledriver=window.ismultiplevehicles=(ismultiplevehicles=="1");
    window._cjob=window._joblist[jobcounter];
 lojob(window._cjob);
}
function checkKey(e) {

    e = e || window.event;
    
    if (e.keyCode == '38') {
      if(!window.amaddressref) {
        window.jobcounter--;
        if(window.jobcounter<0){
        window.jobcounter=window._joblist.length;
        window.jobcounter--;
       }
       
        kmjob();
        return;
      }
        window._lcchildlength = window.amaddressref.find(".lcdropdown p").length;
         if(!$(".lcdropdown").is(":visible")||_lcchildlength==0){ 
           window.jobcounter--;
        if(window.jobcounter<0){
        window.jobcounter=window._joblist.length;
       }
       
        kmjob();
          return; 
        }
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
        
       var vg=window.amaddressref.find(".lcdropdown").children().eq(classcounter);
       var addr=vg.addClass("active").text();
       window.__xsetaddr=vg.addClass("active").html();
       window.amaddressref.find("input").val(addr);
       var attr = window.amaddressref.find("input").attr('id');

       if (typeof attr !== 'undefined' && attr !== false) {
        if(attr=="droplocation"){
            window.xattrytype=2;
        window.dropplaceid=vg.attr("data-placeid");
         
       }
       else if(attr=="pickuplocation"){
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
    else if (e.keyCode == '40') {
        if(!window.amaddressref) {
        window.jobcounter++;
        if(window.jobcounter>=window._joblist.length){
           window.jobcounter=0 
        }
        kmjob();
        return;
      }
         window._lcchildlength = window.amaddressref.find(".lcdropdown p").length;
        if(!$(".lcdropdown").is(":visible")||_lcchildlength==0){ 
            window.jobcounter++;
        if(window.jobcounter>=window._joblist.length){
           window.jobcounter=0 
        }
        kmjob();
            return;
             }
        var classcounter=0;
        var hasclass=false;
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
       var attr = window.amaddressref.find("input").attr('id');

       if (typeof attr !== 'undefined' && attr !== false) {
        if(attr=="droplocation"){
            window.xattrytype=2;
        window.dropplaceid=vg.attr("data-placeid");
         
       }
       else if(attr=="pickuplocation"){
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
      if(!window.amaddressref) return;
           window._isdrpshown=false;
        if($(".lcdropdown").is(":visible")||window._lcchildlength!=0){
        $(".lcdropdown").hide();
        
        window.amaddressref.find(".resulttry").show().html(window.__xsetaddr);
        if(window.xattrytype==1)
        getplacedetailsbytext(window.pickupplaceid,1);
        else if(window.xattrytype==2)
        getplacedetailsbytext(window.dropplaceid,2);
        else if(window.xattrytype==3) getplacedetailsbytext(window.axxplaceid,0);
       
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
window.adheight=function(){
    var ht=$(window).height()-$(".mainctr").height();
    ht= ht-175;
    $(".mntblsk").css("max-height",ht+"px");
 

}
window._isdrpshown=false;
 $(function(){ 
 init(); adheight();
  $(window).resize(function(){
    adheight();
 })
 $("#edit").click(function(){
    $("._cover").hide();
    $(this).hide();
    $("#confirm,#cancel").show();
 })
        window.amaddressref=null;
     $("#droplocation").keyup(function(e){
        window.amaddressref=$(this).parent();
           if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
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
    $(data.data.sort(function(a, b) {
        return a.distancesfromcurrent - b.distancesfromcurrent;
    })).each(function(x,y){
      dropref.append("<p onclick='getplacedetails(this,2)' data-placeid='"+y.place_id+"' >"+y.description+"</p>");
    });
     
  }
  else{
            loadingref.show().html("No Result Found...");

  }
  }
  });},900);
      }
      else{
        dropref.hide();
      }
     });
     $("#pickuplocation").keyup(function(e){
        window.amaddressref=$(this).parent();
           if(e.keyCode == '38'||e.keyCode == '40'||e.keyCode == '13') return true;
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
    $(data.data.sort(function(a, b) {
        return a.distancesfromcurrent - b.distancesfromcurrent;
    })).each(function(x,y){
      dropref.append("<p onclick='getplacedetails(this,1)' data-placeid='"+y.place_id+"' >"+y.description+"</p>");
    });
     
  }
  else{
            loadingref.show().html("No Result Found...");

  }
  }
  });},900);
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
    $(this).find(".timer-box").show();

     e.stopPropagation();
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
        $(this).find(".demohour").html(tt[0]);
        $(this).find(".demominute").html(tt[1]);
      }
     }
     window.istimeboxopen=true;

});
       $(".time").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $(".timer-box").hide();
    window.istimeboxopen=false;
});
         myajax({"api":"getalljobdetails"},function( data, textStatus, jQxhr ){
           $("._tbcompletedjob").html("Completed : "+data.data.used);
            $("._tbcancelljob").html("Cancelled : "+data.data.rejected);
            $("._tbappjobs").html("App : "+data.data.app);  
               $("._tbcalljobs").html("Call : "+data.data.call); 
            $("._tbrunnerjobs").html("Runner : "+data.data.running);        
              
           }); 
       $("#cash").change(function(){
      if($(this).is(":checked")){
        $(".creditcardbox").hide();
      }
     });
      $("#prepaid").change(function(){
      if($(this).is(":checked")){
        $(".creditcardbox").show();
      }
     });
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
     $(".sectdriver").remove();
     for(var i = 0;i<4;i++){

                        html='<tr class="sectdriver" data-counter="'+counter+'"  >';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" class="checkboxmcv"><label class="lbl">';
          html+=' </label></th>';
          html+='<td></td>';
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
        alert("Please Select Day(s)");
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
        timepk.find(".alhour").find(".arrow.up").attr("onclick","inchourrtdate(this)");
        timepk.find(".alhour").find(".arrow.down").attr("onclick","minhourrtdate(this)");
         timepk.find(".alminute").find(".arrow.up").attr("onclick","incminrtdate(this)");
        timepk.find(".alminute").find(".arrow.down").attr("onclick","minminrtdate(this)");
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
        
    $('#modal').modal('show');
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
        $("#addfixed").click(function(){
          var fixedprice=$.trim($("#fixedprice").val());
          if(fixedprice.length!=0){
            $("#fixedbx").attr("data-price",(parseFloat(fixedprice).toFixed(2))).find("strong").html("£"+(parseFloat(fixedprice).toFixed(2)));
          }
          $(".fixededitbox").toggle();
        });
       
        $("#selectmultiplevehicles").change(function(){
            
                            window.ismultipledriver=window.ismultiplevehicles=($(this).is(":checked"));

                $("#allocateddriverlist ._allpoi").remove();
                
            getDrivers();
        });
        
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
        case "view": selectjob(window._jobref,1);  break; 
        case "bandriver": bandriver();  break; 

    }
  
    // Hide it AFTER the action was triggered
    $(".custom-menu").hide(100);
  });
  window.opentmpk=function(ref,e){
 var isvisiblex=false;
    $(".mlkiop").each(function(){
         if(!isvisiblex&&$(this).is(":visible")){
            isvisiblex=true;
         }
    });
 
    
$(".timer-box").hide();
    $(ref).find(".timer-box").show();

     e.stopPropagation();
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
        $(ref).find(".demohour").html(tt[0]);
        $(ref).find(".demominute").html(tt[1]);
      }
     }
     window.istimeboxopen=true;

 
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
     setInputFilter(document.getElementById("noofitems"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
          setInputFilter(document.getElementById("fixedprice"), function(value) {
  return /^\d*\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
       $(".returnbooking").change(function(){
        if($(this).is(":checked"))
        $(".isreturnx").show();
        else $(".isreturnx").hide();
       });
       
       $("#cancel").click(function(){
          
              window.location.reload();
                   
       });
           $("#confirm").click(function(){
               var name=$.trim($("#fullname").val());
               var mobile=$.trim($("#mobile").val());
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
               if(window.isedit)
               obj["api"]="editbooking";
               else
               obj["api"]="newbookingnew";
      $("#xerrormsgs").hide();
     obj["pickupwaitingtime"]=pickupwaitingtime;
       obj["dropwaitingtime"]=dropwaitingtime;
       obj["pickupnote"]=pickupnote;
       obj["dropnote"]=dropnote;
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
       obj["ispermanent"]=$("#ispermanent").is(":checked")?"1":"0";
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
               obj["cardcvv"]=cardcvv;
               obj["driverid"]=window.driverid;
               obj["notes"]=notes;
               obj["alphafirst"]=window.alphafirst;
               obj["alphasecond"]=window.alphasecond;
               obj["counter"]=window.counter;
               obj["iscash"]=$("#cash").is(":checked")?"1":"0";
               obj["isprepaid"]=$("#prepaid").is(":checked")?"1":"0";

             if($("#selectmultiplevehicles").is(":checked")){
          obj["ismultiplevehicles"]="1";
          var callsignar=[];
          $("._allpoi").each(function(){
            callsignar.push($(this).attr("data-callsign"));
          });
           obj["callsign"]=callsignar.join(",");
         }
         else{
         obj["callsign"]=$.trim($("#allocatedriver").val());
          obj["ismultiplevehicles"]="0";


         } 

          
      
             if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
           // alert("Please Select Capability");return;
             }
             
           $("#loadingaxd").show();
           $(".btns_cnfrmcx").hide();
                 myajax(obj,function( data, textStatus, jQxhr ){
                 if(data.status=="400"){
                     $("#loadingaxd").hide();
           $(".btns_cnfrmcx").show();
              //      $("#merrorp").html(data.message);
           //$("#errormodal").modal({"show":true});
           //alert(data.message);
            $("#xerrormsgs").html(data.message).show();
                 }
                 else{
                      $("#loadingaxd").hide();
                       $("#xerrormsgs").html("Success").show();

                     if(window.isedit){
                        setTimeout(function(){
                          window.location.reload();
                     },1100);
                     }
                     else{
                  window.location.reload();
                     }
                 }
                 
             });
           });
             $('#sms,#fullname').on('input', function() {
  $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
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
    }
    else{
        
                window.isreturnbooking=true;

    }

  } else {
    $(mainParent).removeClass('active');
    $(this).removeAttr('checked');
if($(this).hasClass("repeatbooking")){
            $(".repeatbookingedit").hide();

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
           $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");
         }
         else{
            if(!$("#highvehicle").is(":checked")){
              $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");

            }
         }
 setTimeout(function(){
            getDrivers();
        },400);

       });
        $("#highvehicle").change(function(){
         if($(this).is(":checked")){
          $("#lowvehicle").prop("checked",false);
            $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").attr("disabled","true");

         }
          else{
            if(!$("#lowvehicle").is(":checked")){
              $("#wheelchair,#pets,#pram,#bicycle,#items,#scooter,#boxes,#fishing").removeAttr("disabled");

            }
         }
 setTimeout(function(){
            getDrivers();
        },400);
       })
        $(".xdropdown li").click(function(){
            $(this).parent().parent().find("._xmsg").html($(this).html());
            $(this).parent().toggle();
            if($(this).parent().parent().find("._xmsg").hasClass("xpassengers")){
             getDrivers();
             getReference();
            }
        })
        $("._dropdown").click(function(){
                        $(".xdropdown").hide();
                        if($(this).parent().find(".xdropdown").hasClass("xshow")){
                            $(this).parent().find(".xdropdown").removeClass("xshow").hide();

                        }
                        else{
                            $(this).parent().find(".xdropdown").addClass("xshow").show();

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
        $("#addvia").click(function(){ 
            window._crrvia++;
         
          $('<div class="_lothervia _temprmpl"><div style="display:inline"><div class="resulttry" onclick="showinpfld(this)"></div><input  onblur="reinitdbc(this,event)" onkeyup="mklccall(this,event)"  type="text" class="viaaz via'+window._crrvia+' " autocomplete="off" placeholder="Via"><div class="lcdropdown"><div class="boldx allloading" style="display: none;">Loading...</div></div></div></div>').insertBefore("#_startervia");
          $('<div class="_ikmn _temprmpl"><img src="img/closenew.png" class="one_rab addcloseaclose" onclick="removevia(this,'+window._crrvia+')" ></div>').insertBefore(".firstlcf");
           $('<div class="_ikmnp _temprmpl"> <input type="text"  autocomplete="off"   placeholder="Enter Note"> </div>').insertBefore(".mnjjxz");
           $('<div class="_ikmnpl _temprmpl"> <img src="img/substract.png" class="minusbn" onclick="minusbn(this)"> <input type="text" style="margin-top: 2px; margin-left: 9px;" autocomplete="off" value="0"> <img src="img/Artboard 17 copy 4.png" class="plusbn" onclick="plusbn(this)"  > </div>').insertBefore(".mnjjxzl");
               
          updateviaplaceholder();
          add_dots();
        });
        $('#datepicker,#datepicker1,#timerx,#timerx1').keypress(function(){
            return false;
        })
     $('#datepicker,#datepicker1').datepicker({
         
        autoclose: true,
        todayHighlight: true,setDate:new Date(),minDate: 0, dateFormat: 'dd-mm-yy',
          onSelect: function(dateText) {
            var _unix=dateText.split("-");
          const today = new Date( _unix[2], _unix[1] - 1, _unix[0]);
 var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear(); 
  $(this).val(window._daysname[today.getDay()]+", "+dd + '-'+mm+"-"+ yyyy);
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
    $('#datepicker,#datepicker1').val(window._daysname[today.getDay()]+", "+window._cdate);
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
        window.ismultipledriver=false;
        if($("#selectmultiplevehicles").is(":checked")){
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
         $("#allocatedriver,.ispermanent").hide();
        }
        else{
             $("#allocatedriver,.ispermanent").show();

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
         pickdate=pickdate+" "+bookingtime;
         var wheelchair=$("#wheelchair").is(":checked")?"1":"0";
         var pets=$("#pets").is(":checked")?"1":"0";
         var pram=$("#pram").is(":checked")?"1":"0";
         var lowvehicle=$("#lowvehicle").is(":checked")?"1":"0";
         var highvehicle=$("#highvehicle").is(":checked")?"1":"0";
         var isDisabled = $('#lowvehicle').prop('disabled');
         var mobile=$.trim($("#mobile").val());
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
         var iscapability="1";
          if(!isDisabled&&lowvehicle=="0"&&highvehicle=="0"&&(wheelchair=="0"||pets=="0"||pram=="0")){
            iscapability="0";
             }
      var animaltype=($("#guarddog").is(":checked")?"1":($("#animaldog").is(":checked")?"2":"3"));
      var obj={"animaltype":animaltype,"lat":window.pickuplat,"lng":window.pickuplng,"mobile":mobile,"highvehicle":highvehicle,"lowvehicle":lowvehicle,"pram":pram,"pets":pets,"wheelchair":wheelchair,"iscapability":iscapability,"pdate":pickdate,"currentdate":getcurrentDateTime(),"api":"getdrivers","status":"4","passengers":_passengers};
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
                 $(data.data.all).each(function(x,y){
                    html='<tr class="sectdriver" data-counter="'+counter+'"  onclick="selectdriver(this)" data-driverid="'+y.driverid+'">';
          html+='<th class="no_bg"> <input type="checkbox" name="driverlists" data-driverid="'+y.driverid+'" data-callsign="'+y.callsign+'" class="checkboxmcv checkboxmcv'+y.driverid+'"><label class="lbl"> ';
          html+=' </label></th>';

          html+='<td>'+secondsToHms(parseInt(y.waitingtime)*60).toLowerCase()+'</td>';
                    html+='<td>'+metersToMiles(y.distance).toFixed(2)+' m</td>';
                    html+='<td>'+secondsToHms(y.time).toLowerCase()+'</td>';
                    html+='<td>'+y.callsign+'</td>';
                    html+='<td>4.5</td>';
                     html+='<td>'+y.make+'</td>';
          html+='<td>'+y.registration+'</td><td></td>   </tr>';
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
                     html+='<td></td>';
          html+='<td></td><td></td>   </tr>';
                    $("#driverlist").append(html);
                  counter++;

                 }
             });
    }




      window.getDriversByCallSign=function(callsign,ismultipledriver,_passengers){
      
     window.ismultiplevehicles=ismultipledriver;
    if($("#selectmultiplevehicles").is(":checked")){
    
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
    else{
       $("#allocatedriver").show();

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


         myajax({ "highvehicle":highvehicle,"lowvehicle":lowvehicle,"pram":pram,"pets":pets,"wheelchair":wheelchair,"iscapability":iscapability,"pdate":pickdate,"currentdate":getcurrentDateTime(),"status":"4","passengers":_passengers,"api":"getdriversbycallsign","dids":callsign},function( data, textStatus, jQxhr ){
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
                    html+='<td>'+secondsToHms(y.time).toLowerCase()+'</td>';
                    html+='<td>'+y.callsign+'</td>';
                    html+='<td>4.5</td>';
                     html+='<td>'+y.make+'</td>';
          html+='<td>'+y.registration+'</td><td></td>   </tr>';
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
 $(".driverbox").show();
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
 $("#xbadgeno").html(driver.badgenotxt);
$("#xplateno").html(driver.platnotxt);
 $("#xprofilepic").attr("src",window._baseurl+driver.image);

         
          
          }
}else{
                    $(".driverbox").hide();

}
         });
 
 
    }















//----------------
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
window.ismultiplevehicles=false;
window.isclicked=false;
 
    window.ismultipledriver=false;


  
  
  
    window.jobid=0;
        $(function(){
            myajax({"api":"getalljobdetails"},function( data, textStatus, jQxhr ){
           $("._tbcompletedjob").html("Completed : "+data.data.used);
            $("._tbcancelljob").html("Cancelled : "+data.data.rejected);
            $("._tbappjobs").html("App : "+data.data.app);  
               $("._tbcalljobs").html("Call : "+data.data.call); 
            $("._tbrunnerjobs").html("Runner : "+data.data.running);        
              
           });
   
     
    
       
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
      myajax( {"api":"getfuturebooking","datetime":dt},function( data, textStatus, jQxhr ){
        var html="";
    window._joblist=data.data;
       $(data.data).each(function(x,y){
      var extras="";
      if(y.wheelchair=="1"){
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
      }
       html='<tr data-passenger="'+y.passengers+'" data-bookingdatetime="'+y.bdate+" "+y.btime+'" data-ismultiplevehicles="'+y.ismultiplevehicles+'"  data-driverid="'+y.driverid+'"  onclick="selectjob(this)"   data-jobid="'+y.id+'"    data-callsign="'+y.callsign+'">';
         //html+='<td><input type="radio" style="width:15px" name="booking" /></td>';
         html+='<td>'+y.jobtype+'</td>';

         html+='<td>'+y.btime+'</td>';
         html+='<td>'+y.dayname+", "+y.bdate+'</td>';
               html+='<td>'+y.prepickupzipcode+'</td>';
         html+='<td>'+y.pickuplocation+'</td>';
               html+='<td>'+y.predropzipcode+'</td>';
         html+='<td>'+y.droplocation+'</td>';
               html+='<td>'+y.passengers+'</td>';
       html+='<td>'+extras+'</td>';

               html+='<td>'+y.callsign+'</td>';
         html+='<td>£5.00</td>';
          html+='<td>'+(y.iscash=="1"?"Cash": "Pre-Paid")+'</td>';
               html+='<td>4.5</td><td>'+(y.controllername==null?"":y.controllername)+'</td><td>'+y.flightnumber+'</td><td>'+y.status+'</td><td onclick="openaudiodialog(this,'+y.id+')"><i class="fa fa-play  "></i></td></tr>';
         $("#tbd").append(html);
       });
    });
  });
      
    </script>


   <div class="a12v"  style="display:none">
 <div class="timer-box mtr-datepicker mlkiop">
                          <div class="mtr-row">
                            <div class="mtr-input-slider  alhour">
                              <div class="arrow up" onclick="inchour(this)"><span></span></div>
                              <div class="content">
<div class="default-value-holder demohour" data-value="10"><div class="default-value demohour" data-value="10">10</div></div>
                              </div>
                              <div class="arrow down"  onclick="minhour(this)" ><span></span></div>

                            </div>
                             <div class="mtr-input-slider alminute"> 
                              <div class="arrow up"  onclick="incmin(this)"><span></span></div>
 <div class="content">
<div class="default-value-holder demominute" data-value="10"><div class="default-value demominute" data-value="10">10</div></div>
                              </div>                              <div onclick="minmin(this)"  class="arrow down"><span></span></div>

                            </div>
                            <div class="mtr-input-radio"> 
<div style="margin-top: 32px;
    margin-left: 9px;"><div><label for="demo-radio-ampm-AM"><span class="value">AM</span> <span class="radio demoam" onclick="demoam(this)"></span> </label></div><div class='clearfix'></div><div><label for="demo-radio-ampm-PM"><span class="value">PM</span><span class="radio demopm" onclick="demopm(this)"></span> </label></div></div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                           <div class="btns_cnfrm " style="margin-top:0px">
                          <button type="button" style="margin-left: 13px" onclick="clopitimer(this,event)" class="amclose" >Close</button>
                      </div>
                         </div>
                       </div>
  </body>
</html>