<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?> <?php
$status=1;
if(isset($_GET['status'])){
  $status="2,3";
}
 
?><!doctype html>
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
    <!-- JS files  -->
           <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"> 
    <style type="text/css">
   body,#tabs{
    background-color:black;border-color:#000;
  }
           #tbd tr td,#tbdpending  tr td{border-top:transparent !important;}
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
     .pagination a{color:#fff !important;}
     
  .rowax{background: #363636;}

  .table td, .table th{padding:0px !important;}


         .btn-grad {background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC  51%, #02AAB0  100%)}
         .btn-grad {
           margin: 10px;
    padding: 3px 10px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white; 
    border-radius: 2px;
    display: block;
    border: 1px solid #02AAB0;
}
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
         .btn-grada {border-color:#D31027;background-image: linear-gradient(to right, #D31027 0%, #EA384D  51%, #D31027  100%)}
         

          .btn-grada:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
  .ui-tabs-nav.ui-widget-header{border-color: #000;
    background: #000;}
  ..ui-tabs .ui-tabs-nav .ui-tabs-anchor{color:#cfcfcf;}
  .ui-tabs .ui-tabs-nav li.ui-tabs-active{
        background: transparent;
    border-color: transparent;
    font-weight: bold;
  }
  .ui-tabs .ui-tabs-nav li.ui-tabs-active a{color:#ffffff;}
  .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
        background: transparent;
    border: transparent;
     
  }
  .table{margin-top: 0px !important;}
    .rowaxnoshow{background: #363636;}
    #tbdnoshow tr td, #tbdpending tr td {
    border-top: transparent !important;
}
 .ui-state-default a:link{color: #bcbcbc}
    </style>


   <title>Abrush Empire - EMARA</title>
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
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="search_labels">
              
              <div class="search_inpt_flx">
                <span class="labels_search">Date from and to</span>
                <span class="inputs_search">
                  <div style="width:48%;float:left;">
                  <input type="text" id="fromdate" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepicker">
                </div>
                  <div style="width:48%;float:left;margin-left: 10px;">
                  <input type="text" id="todate" style="width:100%" class="hlf_f  ">
                  <img src="img/Artboard 17 copy.png" style=" width: 22px;  position: absolute; margin-left: -29px;" id="opendatepicker1">
                </div>
                </span>
              </div>

                

              <div class="search_inpt_flx">
                <span class="labels_search">Name</span>
                <span class="inputs_search">
                  <input type="text" id="name">
                </span>
              </div>
  <div class="search_inpt_flx">
                <span class="labels_search">Vehicle Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xall" name="xvehicletype" ></label> 
                  <label style="color:#fff;margin-left: 10px">Normal <input type="radio" id="xnormal"  name="xvehicletype" ></label> 
                  <label style="color:#fff;margin-left: 10px">Auto-Rikshaw <input type="radio" id="xautorikshaw" name="xvehicletype" ></label> 
                  <label style="color:#fff;margin-left: 10px">Motorbike <input type="radio" id="xmotorbike" name="xvehicletype"   ></label> 
                </span>
              </div>
              

               

              

             
              <div class="btns_cnfrm btns_cnfrmcx"> 

                  <button style="margin-left: 155px;height: 25px;" type="button" class="confrm" id="search">Search</button>
                  <img src="img/load.gif" id="loadinggif" style="width:40px;float: left;margin-top: -7px;">
             

                </div>
            </div>
          </div>
  </div>
<div class="row">
  <div class="col-lg-12">
    <div class="main-box clearfix" style="margin-top:20px">
      <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Appointments</a></li>
    <li><a href="#tabs-2">No Show</a></li> 
  </ul>
  <div id="tabs-1">
      <div class="table-responsive">
        <table class="table user-list" style="width:calc(100% - 20px)">
         
          <tbody id="tbd">  
            
            
           
          </tbody>
        </table>
      </div>
    </div>
<div id="tabs-2">
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
          <tbody id="tbdnoshow">  
            
            
           
          </tbody>
        </table>
      
      </div>  </div>
  </div>
     
    </div>
  </div>
</div>
</div>
    </section>
    <div style="display:none">
    </div>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>  
  
  <script>
    window.issearch=false;
    window.timerref=null;
 window.status=<?php echo $status; ?>;
  window._baseurl="http://18.168.83.39/";
      $(function(){ 
          $("#opendatepicker").click(function(){
                 $("#fromdate").datepicker("show");
        });
          $("#opendatepicker1").click(function(){
                 $("#todate").datepicker("show");
        });
          $("#xall").change(function(){
            
            $("._namex").show();
             
        });
           $("#xnormal").change(function(){
            $("._namex").hide();
            $(".rowax").each(function(){
              if($(this).attr("data-normal")=="1"){
                $(this).show();
              }
            });
          });
              $("#xautorikshaw").change(function(){
            $("._namex").hide();
            $(".rowax").each(function(){
              if($(this).attr("data-autorikshaw")=="1"){
                $(this).show();
              }
            })
          });
             $("#xmotorbike").change(function(){
            $("._namex").hide();
            $(".rowax").each(function(){
              if($(this).attr("data-motorbike")=="1"){
                $(this).show();
              }
            })
          });
     

         $( "#tabs" ).tabs();
        $("#search").click(function(){
          var fromdate = $.trim($("#fromdate").val());
          var todate = $.trim($("#todate").val());

          if(window.timerref){
            clearTimeout(window.timerref);
          }
          $("#loadinggif").show();
          ll(fromdate,todate);
        })
        $("#name").keyup(function(){
          window.issearch=true;
          var name=$.trim($(this).val());
          
          if(name.length==0){
            $("._namex").show();
          }
          else{
            
             $("._namex").hide().each(function(){
               
              if($(this).attr("data-name").toLowerCase().startsWith(name)){
                $(this).show();
              }
             });


          }
        }) 
         $('#fromdate,#todate').datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0",
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    });
        window.ll=function(fromdate,todate){
          if(window.issearch) return;

      myajax( {"api":"allappointments","fromdate":fromdate,"todate":todate,"status":"<?php echo $status; ?>"},function( data, textStatus, jQxhr ){
         $("#loadinggif").hide();
         var _clone;
         var tbd=$("#tbd");  
     if(data.data.all.length==0){
       $(".pagination").hide();
     }
     $(".rowspls,.rowax").remove()
         $(data.data.all).each(function(x,y){


          _clone ='<tr class="rowax _namex" data-name="'+y.name+'"  data-normal="'+y.normal+'"  data-motorbike="'+y.motorbike+'" data-autorikshaw="'+y.autorikshaw+'"><td style="width:150px">'
          _clone+='<center><img style="height:30px;margin-top:0px;margin-bottom:4px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></center></td>';
          _clone+='<td><b style="font-size:18px">'+y.name+'&nbsp;&nbsp;<span style="color:#ffd800">';
if(y.normal=="1")
  _clone+='(Normal)';
  else if(y.autorikshaw=="1")
  _clone+='(Auto-Rikshaw)';  
  else if(y.motorbike=="1")
  _clone+='(Motorbike)';    
          _clone+='</span></b></td>';
          _clone+='<td><b>'+y.phone+'</b><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
           
        _clone+='<td class="_createdate">'+y.createdate+' '+y.createtime+'</td>';

            _clone+='<td style="width: 30%;">';
            _clone+='<img   src="img/load.gif" class="_loading">';
      if(y.type==3){
       _clone+='<a  href="javascript:void(0)" class="accept _mxicon">Pending</a>';
      }
      else if(y.type==4){
        _clone+='<a  href="javascript:void(0)" class="accept _mxicon">Done</a>';

      }
      else{
        _clone+='<a  href="drivers.php?id='+y.uid+'" class="btn-grad _mxicon">View</a>';
      }
           _clone+='    </td> </tr><tr  class="rowspls" style="height:10px"><td colspan="5"></td></tr>';
          
          tbd.append(_clone);
         });
         if(fromdate.length==0&&todate.length==0)
         window.timerref=setTimeout(function(){ll("","")},10000);
    });
    }
    ll("","");

     myajax( {"api":"allappointmentsnoshow"},function( data, textStatus, jQxhr ){
         $("#loadinggif").hide();
         var _clone;
         var tbd=$("#tbdnoshow");  
     
     $(".rowsplsnoshow,.rowaxnoshow").remove()
         $(data.data.all).each(function(x,y){


          _clone ='<tr class="rowaxnoshow  "  ><td style="width:150px">'
          _clone+='<center><img style="height:30px;margin-top:0px;margin-bottom:4px;border-radius:50px" class="_profilepic" src="'+window._baseurl+y.image+'" alt=""></center></td>';
          _clone+='<td><b style="font-size:18px">'+y.name+'&nbsp;&nbsp;<span style="color:#ffd800"> </span></b></td>';
          _clone+='<td style="width:100px"><b>'+prmobile(y.phone)+'</b></td>';
          _clone+='<td><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
     
        _clone+='<td class="_createdate">'+y.createdate+' '+y.createtime+'</td>';

            _clone+='<td style="width: 30%;">';
            _clone+='<img   src="img/load.gif" class="_loading">';
      
        _clone+='<a  href="javascript:void(0)" class="accept _mxicon">No Show</a>';

       
           _clone+='    </td> </tr><tr  class="rowsplsnoshow" style="height:10px"><td colspan="5"></td></tr>';
          
          tbd.append(_clone);
         });
        
    });
      });
window.prmobile=function(mobile){
  var tt=  mobile.substr(0,1);
  return tt=="0"?mobile:"0"+mobile;
}
      window.accept=function(ref){
        if(confirm("Do you want to accept?")) 
        {
          var id=$(ref).attr("data-id");
          $(ref).parent().find("._loading").show();
          $(ref).parent().find("._mxicon").hide();
           myajax({"api":"updateappointmentsatus","uid":id,"status":"1"},function( data, textStatus, jQxhr ){
            if(data.status=="200"){
              window.location.href="drivers.php?id="+id;
            }
            else{
              $(ref).parent().find("._loading").hide();
                  $(ref).parent().find("._mxicon").show();
              alert("Please Try Again");
            }
           });
       }
        }
      


    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
   

  </body>
</html>