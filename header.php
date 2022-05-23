 <?php 
 

 
$basename= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
 
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

$ovcountrycode= ip_info()["country_code"];
 ?>
   <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
 <style>  ._xnopadding{padding: 0px !important;}
body{   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important; } .xmcash li,.xaccount  li{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif, sans-serif !important;} .xmcash li,.xaccount li{font-weight: normal;} .xaccount  li:last-child{font-weight: bold;}
#ntmessages a{border-bottom: 1px solid #eaeaea;}
</style>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

 <script>

 $(function(){
    $("#playaudio").click(function(){
         setTimeout(function(){
            document.getElementById("myAudio").play();
        },10);
    })
      getnoti(); 
    <?php  if($basename=="appointmenta.php"){ ?>
deletenoti();

    <?php } else { ?> /* getnoti();*/ <?php } ?>    

$("#yeswecall").click(function(){
    $(this).parent().find("button").hide();
    $(this).parent().find("img").show();
  myajax( {"api":(window.iscall?"wecall":"nofare"),"id":window._lllid,"jobid":window._llljobid,"uid":window._llluid},function( data, textStatus, jQxhr ){
     $("#headermodalwecall").modal("hide");
  $("#erromodalmsgf").modal({"show":true});
  $("#xerrormsgf").html("Success");
  window.location.href="dispatched.php?jobid="+window._llljobid;
    checknoti();
  });
})
 });
 window._lllid=0;
 window._llljobid=0;
 window._llluid=0;
 window.iscall=false;
 window.wewillcall=function(ref){
     window.iscall=true;
    window._lllid = $(ref).attr("data-id");
    window._llljobid = $(ref).attr("data-jobid");
    window._llluid = $(ref).attr("data-uid");
       $("#yeswecall").parent().find("button").show();
     $("#yeswecall").parent().find("img").hide();
    $("#headermodalwecall").modal("show");
    $("#xerrorppk").html('Do you want to confirm "We will call"?');
 }
  window.nofare=function(ref){
     window.iscall=false;
    window._lllid = $(ref).attr("data-id");
    window._llljobid = $(ref).attr("data-jobid");
    window._llluid = $(ref).attr("data-uid");
      $("#yeswecall").parent().find("button").show();
     $("#yeswecall").parent().find("img").hide();
    $("#headermodalwecall").modal("show");
    $("#xerrorppk").html('Do you want to confirm "No Fare"?');
 }
 window.getnoti=function(){
      myajax( {"api":"getappointmentnotifications","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
          if(data.data.notificationcounter.length!=0){
              $(".notificationax").show().html(data.data.notificationcounter.length);
            
               if(data.data.notificationcounter.length==0){
                 $(".notificationax").hide();
            }
         $("#ntmessages a").remove();
      $(data.data.notificationcounter).each(function(x,y){
        if(y.type=="0"){
         $("#ntmessages").append('<a  style="padding-top:10px;padding-bottom:10px"   class="dropdown-item" href="appoinment.php?status=3&isappointment=1">'+y.msg+'</a>');
        }
        else{
            $("#ntmessages").append('<a class="dropdown-item btns_cnfrm " style="display:block;margin-left:0px;padding-left:10px;margin-top:0px" href="javascript:void(0)">'+y.msg+'<br><button style="width:110px;padding:0px;margin-top:13px" data-uid="'+y.uid+'"  data-jobid="'+y.jobid+'"  data-id="'+y.id+'" onclick="wewillcall(this)">We will call</button>&nbsp;&nbsp;<button style="width:110px;padding:0px" class="confrm" data-uid="'+y.uid+'"  data-jobid="'+y.jobid+'"  data-id="'+y.id+'" onclick="nofare(this)">No Fare</button></a>'); 
        }
      })
          } 
           if(data.data.notificationcounter.length==0){
                 $(".notificationax").hide();
            }
           if(data.data.apcount.length!=0){
            $("#apcount").html("("+data.data.apcount.length+")");
           }
           else{
            $("#apcount").html("");
           }
           if(data.data.soundnoti.length!=0){
             $("#playaudio").click();upnotisound();
           }
          checknoti();
      });
 }
 window.deletenoti=function() {
       myajax( {"api":"deleteappointmentnotifications"},function( data, textStatus, jQxhr ){ 
              checknoti();

      }); 
 } 
  window.upnotisound=function() {
       myajax( {"api":"updateappointmentnotificationssound"},function( data, textStatus, jQxhr ){ 
              

      }); 
 } 
 window.checknoti=function(){
     myajax( {"api":"getappointmentnotifications","adminCountryCode":"<?php echo $_SESSION['COUNTRYCODE']; ?>"},function( data, textStatus, jQxhr ){
          if(data.data.notificationcounter.length!=0){

        $(".notificationax").show().html(data.data.notificationcounter.length);
       
        
         $("#ntmessages a").remove();
      $(data.data.notificationcounter).each(function(x,y){
        if(y.type=="0"){
         $("#ntmessages").append('<a  style="padding-top:10px;padding-bottom:10px"  class="dropdown-item" href="appoinment.php?status=3&isappointment=1">'+y.msg+'</a>');
        }
        else{
               $("#ntmessages").append('<a class="dropdown-item btns_cnfrm " style="display:block;margin-left:0px;padding-left:10px;margin-top:0px" href="javascript:void(0)">'+y.msg+'<br><button style="width:110px;padding:0px;margin-top:13px" data-uid="'+y.uid+'"  data-jobid="'+y.jobid+'"  data-id="'+y.id+'" onclick="wewillcall(this)">We will call</button>&nbsp;&nbsp;<button style="width:110px;padding:0px" class="confrm" data-uid="'+y.uid+'"  data-jobid="'+y.jobid+'"  data-id="'+y.id+'" onclick="nofare(this)">No Fare</button></a>');
        }
      })
      }
         if(data.data.notificationcounter.length==0){
                 $(".notificationax").hide();
            }
        if(data.data.apcount.length!=0){
            $("#apcount").html("("+data.data.apcount.length+")");
           }
           else{
            $("#apcount").html("");
           }
           if(data.data.soundnoti.length!=0){
            $("#playaudio").click();
            upnotisound();
           }
           setTimeout(checknoti,5000);
      }); 
 }
  window.myajax=function(_obj,fnc){
          $.ajax({
    url: 'api.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify(_obj),
    processData: false,
    success: fnc,
    error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
    }
});
      }
function confirmExit() {
	logout();
	
}

 $(window).on('mouseover', (function () {
        window.onbeforeunload = null;
    }));
    $(window).on('mouseout', (function () {
        window.onbeforeunload = confirmExit;
    }));


window.logout=function(){
      var username=$.trim(<?php echo $_SESSION['ID'];?>);
        $.ajax({

    url: 'logout.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify({"api":"adminlogout","username":username}),
    processData: false,
    success: function( data, textStatus, jQxhr ){
      if(data.status=="200"){
			window.location.href="index.php";
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
 </script>
  <div class="modal" id="erromodalmsgf" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px;margin-top:140px" role="document">
    <div class="modal-content">
       
      <div class="modal-body">
        <center><h4 id="xerrormsgf"></h3>

        </center>
       
      </div>
      <div class="modal-footer" style="justify-content:center;">
         
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <div class="modal" id="headermodalwecall" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px;margin-top:140px" role="document">
    <div class="modal-content">
       
      <div class="modal-body">
        <center><h4 id="xerrorppk">Do you want to confirm "We will call"?</h3>

        </center>
       
      </div>
      <div class="modal-footer" style="justify-content: center;">
         <img src="img/load.gif" style="width:60px;display:none"  />
           <button type="button" class="btn btn-primary" id="yeswecall">Ok</button>
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <button id="playaudio" style="position: absolute;left: -1000px;"></button>
 <audio id="myAudio"     style="background-color: rgb(0, 0, 0); position: absolute;  left: -1000px;"> 
  <source src="ny.mp3" type="audio/mpeg"> 
</audio>
 <style> .nav-itemx:after{opacity: 0 !important;}
.nav-itemx a{cursor: default;}
</style>
 <section class="header_wrap">
      <div class="navigation-wrap start-header start-style">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <nav class="navbar navbar-expand-md navbar-light">  
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto py-4 py-md-0">
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  nav-itemx" style="padding-right: 35px;" >
                      <a class="nav-link" href="javascript:void(0)"><img style="height: 45px; position: absolute;  margin-top: -18px; margin-left: -10px;" src="img/Artboard-10.png"></a>
                    </li>
                   
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='home.php'?'active':''; ?>" >
                      <a class="nav-link" href="home.php"> Home</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4   <?php echo $basename=='new-booking.php'?'active':''; ?>">
                      <a class="nav-link" href="new-booking.php">New Booking</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='active.php'?'active':''; ?>">
                      <a class="nav-link" href="active.php">Active</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='dispatched.php'?'active':''; ?>">
                      <a class="nav-link" href="dispatched.php">Dispatched</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='pre-booking.php'?'active':''; ?>">
                      <a class="nav-link" href="pre-booking.php">Pre-Booking</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='appoinment.php'?'active':''; ?>">
                      <a class="nav-link" href="appoinment.php?status=3">Details</a>
                    </li>
                    <li style="display:none" class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='earnings.php'?'active':''; ?>">
                      <a class="nav-link" href="earnings.php">Earnings</a>
                    </li>
                   
                     
                    <li style="display: none;"> class="nav-item pl-4 pl-md-0 ml-0 ml-md-4  <?php echo $basename=='appointmenta.php'?'active':''; ?>">
                      <a class="nav-link" href="appointmenta.php">Appointment <b id="apcount"></b></a>
                    </li>
                  </ul>
                </div>
               <!--<a class="navbar-brand" href="appointmenta.php"> <span style="display:none;position:absolute;margin-top: -10px;margin-left: 20px;" class="badge badge-light notificationax">0</span><img src="img/callcenter.png" alt=""></a> 
                     <a class="navbar-brand" href="#"><img src="img/Artboard 17.png" alt=""></a>-->
              <div class="profile_user">  
                 
                  <div class="dropdown">
                    <button class="btn btn-secondary  " style="background: transparent;  border: none;padding:4px 12px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="height: auto;width: auto;display:none;position:absolute;margin-top: 0px;margin-left: 20px;background-color:#ff8e42" class="badge badge-light notificationax">0</span>
                       <img src="img/callcenter.png" style="height:32px;">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="ntmessages">
                     <a class="dropdown-item" href="javascript:void(0)">No Notifications</a>
                     </div>
                  </div>
                </div>
              <div class="profile_user">  
                 
                  <div class="dropdown">
                    <button class="btn btn-secondary  " style="background: transparent;  border: none;padding:4px 12px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img src="img/Artboard 17.png" style="height:32px;">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <!--<a class="dropdown-item" href="appoinment.php">Add New Driver</a>-->

                     </div>
                  </div>
                </div>
                <div class="profile_user">  
                  <span>
                    <img src="img/testimonialimage4.jpg">
                  </span>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="fullname_name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['FULLNAME']; ?></button>
                    <div class="dropdown-menu" aria-labelledby="fullname_name"> 
                       <a class="dropdown-item" href="changepassword.php">Change Password</a>

                      <a class="dropdown-item" onclick="logout()"  >Logout</a>
					 
                    </div>
                  </div>
                </div>
                </nav>    
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      (function(){
        document.getElementById("fullname_name").innerHTML = localStorage.getItem("fullname");
      })();
    </script>