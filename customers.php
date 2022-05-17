<?php 
session_start();
  if(!isset($_SESSION['ISLOGIN'])){
   echo "<script> window.location.href='index.php';</script>";
  exit();
}  
?> 
<?php
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JS files  -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

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
    .ui-widget-header{border-color: #000;
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
    font-size: 13px;
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
         .owed{  
    float: left;
    font-size: 15px;}
    body{overflow-x: hidden}
     .ui-datepicker-header.ui-widget-header{
        border: 1px solid #dddddd;
    background: #e9e9e9;
    color: #333333;
    font-weight: bold;
}
.ui-datepicker-calendar .ui-state-default.ui-state-active{color: #000;font-weight: bold;}
     #loadinggif{display: none;}
     .table.user-list{margin-top: 5px !important;}
     #creditamounttable tr th,#creditamounttable tr td{padding: 5px !important;color: #000;}
     .table.user-list tr th,.table.user-list tr th span{border-top: none;border-bottom: none;font-weight: bold;font-size: 17px }
      .table.user-list tr th{padding: 20px 0px}
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
   <div class="modal" id="creditmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Credit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p id="creditdrivername"></p>

        </center>
         <div class="row" style="margin-bottom:2px;">
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold;text-align: right;">
                  <input style="width:auto;" checked="" type="radio" name="ax" class="chkcb chkcbvc" id="creditcash"> <span style="top: -1px;
    position: relative;font-size: 19px">Cash</span>
                </label>
                
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold">
                 
                  <input style="width:auto;"  type="radio" name="ax" class="chkcb chkcbvc" id="creditprepaid"> <span style="top: -  px;
    position: relative;font-size: 19px">Prepaid</span>
                </label>
              </div>
        <div class="row"><div class="col-sm-9">
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Credit Amount</label>
    <input type="number" style="padding:18px" class="form-control" id="creditamount"  >
   </div>
 </div><div class="col-sm-3"><img src="img/load.gif" id="creditloading" style="margin-top:25px;width: 50px;display: none;" /><button style="margin-top:31px" type="button" class="btn btn-primary" id="savecredit">Save Credit</button>
</div></div>
<table class="table table-bordered" id="creditamounttable"><thead>
  <tr><th>Date</th><th>Credit</th><th>Type</th><th>Controller</th></tr>
</thead><tbody></tbody>
</table>
      </div>
       
    </div>
  </div>
</div>
   <div class="modal" id="transfermodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p id="ddrivername"></p>

        </center>
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Transfer Amount</label>
    <input type="number" class="form-control" id="transferamount"  >
   </div>
      </div>
      <div class="modal-footer">
        <img src="img/load.gif" style="width:60px;display:none" class="transferloading" />
     <button type="button" class="btn btn-primary" id="savetransfer">Submit</button>

      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
 <div class="modal" id="erromodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px;margin-top:140px" role="document">
    <div class="modal-content">
       
      <div class="modal-body">
        <center><h4 id="xerror"></h3>

        </center>
       
      </div>
      <div class="modal-footer">
         
      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div class="modal" id="depositmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width:600px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deposit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p id="dcdrivername"></p>

        </center>
        <div class="row" style="margin-bottom:2px;">
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold;text-align: right;">
                  <input style="width:auto;" checked="" type="radio" name="ax" class="chkcb chkcbvc" id="cash"> <span style="top: -1px;
    position: relative;font-size: 19px">Cash</span>
                </label>
                
                <label class="col-sm-6" style="font-size:14;color:#000;font-weight: bold">
                 
                  <input style="width:auto;"  type="radio" name="ax" class="chkcb chkcbvc" id="prepaid"> <span style="top: -  px;
    position: relative;font-size: 19px">Prepaid</span>
                </label>
              </div>
<br>
 
      <div class="form-group">
    <label for="exampleInputEmail1">Enter Deposit Amount</label>
    <input type="number" class="form-control" id="depositamount"  >
   </div>
      </div>
      <div class="modal-footer">
        <img src="img/load.gif" style="width:60px;display:none" class="transferloading" />
     <button type="button" class="btn btn-primary" id="savedeposit">Submit</button>

      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<section class="inner_s_wrap">
<div class="fluid-container">
  <div class="row">
    <div class=" col-md-6 ">
            <div class="search_labels">
              
              
                
               
                 <div class="search_inpt_flx">
                <span class="labels_search">Select Type</span>
                <span class="inputs_search">
                  <label style="color:#fff">All <input type="radio" checked id="xall" name="xvehicletype" ></label> 
                  <label style="color:#fff;margin-left: 10px">App <input type="radio" id="xapp"  name="xvehicletype" ></label> 
                  <label style="color:#fff;margin-left: 10px">Call <input type="radio" id="xcall" name="xvehicletype" ></label> 
                  
                </span>
              </div>
                
 
 
              

               

              

             
              <div class="btns_cnfrm btns_cnfrmcx"> 

                  <button style="margin-left: 155px;height: 25px;visibility: hidden;" type="button" class="confrm" id="search">Search</button>
                  <img src="img/load.gif" id="loadinggif" style="width:40px;float: left;margin-top: -7px;">
             

                </div>
            </div>
          </div><div class=" col-md-6 "><h4 id="xttlpayment" style="color:#fff;text-align: right;margin-right: 50px;margin-top: 29px;"></h4></div>
  </div>
<div class="row">
  <div class="col-lg-12">
    <div class="main-box clearfix">
 
   <div class="table-responsive">
        <table class="table user-list">
         <thead>
            <tr>
              <th><span>Picture</span></th>
              <th><span>Name</span></th>
              <th ><span>Phone</span></th> 
              <th ><span>Call / Message</span></th> 
              <th ><span>Used</span></th> 
              <th ><span>Last Used</span></th> 
              <th ><span>Spent</span></th> 
              <th ><span>Affiliate</span></th> 
              <th><span>Type</span></th> 
            </tr>
          </thead> 
          <tbody id="tbd">  
            
            
           
          </tbody>
        </table>
     
      </div>
  
   
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
  document.onkeydown = checkKey;
  function checkKey(e) {

    e = e || window.event;
 
    if(e.keyCode=="39"){
         
        window.location.href="earnings.php";
        
    }
     if(e.keyCode=="37"){ 
             window.location.href="pre-booking.php";
           
        
      }
  }
</script>
  <script>
     function crypMobile(mobile){
    if((mobile).length>6){
      a = mobile.substr(0,3);
      len=mobile.length;
      st = len-3;
      b = mobile.substr(st,len);
      mobile=a+"******"+b;
    }
    return mobile;
   }
      window.checkTime=function(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
window.driverid=0;
 
 
     
    
 window.status=<?php echo $status; ?>;
  window._baseurl="http://18.168.83.39/";
  window.xcontrollernamea="0";
      $(function(){
         
        
        $("input[name='xvehicletype']").change(function(){
          ll(1);
        });
        

        // $("#xcontrollername").append("<option value='0'>Select Controller</option>")
          myajax( {"api":"getcontrollerlist" },function( data, textStatus, jQxhr ){
            var _ctrlid=localStorage.getItem("id");
            $(data.data).each(function(x,y){

              $("#xcontrollername").append("<option "+(_ctrlid==y.id?"selected":"")+"  value='"+y.id+"'>"+y.fullname+"</option>")
            });
             ll(0);
              $("#xcontrollername").change(function(){
          window.xcontrollernamea=$(this).val();
          ll(1);
        });
          });
        $("#search").click(function(){
          $("#loadinggif").show();
          ll(1);
        })
         $('#registrationdate').datepicker({
        weekStart: 1,  changeYear: true,yearRange: "-100:+0",
        daysOfWeekHighlighted: "6,0",
        autoclose: true,dateFormat: 'dd-mm-yy',
        todayHighlight: true
    }).change(function(){
      setTimeout(function(){
        ll(1);
      },500)
      
    }); 
        $("#savedeposit").click(function(){
          var ref=$(this);
          var transferamount = $.trim($("#depositamount").val());
          if(transferamount.length!=0){
           transferamount = parseFloat(transferamount);
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
        ref.parent().find("button").hide();
        ref.parent().find("img").show();
        var iscash=$("#cash").is(":checked")?"1":"0";
        var isprepaid=$("#prepaid").is(":checked")?"1":"0"
              myajax( {"api":"depositdriveramount","driverid":window.driverid,"amount":transferamount,"datetime":dt,"iscash":iscash,"isprepaid":isprepaid},function( data, textStatus, jQxhr ){
                if(data.status=="400"){
                   ref.parent().find("button").show();
                   ref.parent().find("img").hide();
                  alert(data.alert);
                  return;
                }
                $("#transfermodal").modal("hide");
                setTimeout(function(){
                 alert("Success");
                 window.location.reload();
                },400)
            });
           }
        });
        $("#savetransfer").click(function(){
          var transferamount = $.trim($("#transferamount").val());
          if(transferamount.length!=0){
           transferamount = parseFloat(transferamount);
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
        $(this).parent().find("button").hide();
        $(this).parent().find("img").show();

              myajax( {"api":"transferdriveramount","driverid":window.driverid,"amount":transferamount,"datetime":dt},function( data, textStatus, jQxhr ){
                $("#transfermodal").modal("hide");
                setTimeout(function(){
                 alert("Success");
                 window.location.reload();
                },400)
            });
           }
        });
       
            $( "#tabs" ).tabs();
window.timerref=null;
window.alldriverlist=[];
window.ll=function(xnj){ 
  var type="2";
  if(xnj==1){
  if($("#xapp").is(":checked")){
    type="1";
  }
  else  if($("#xcall").is(":checked")){
    type="0";
  }
}
   $("#loadinggif").show(); 
      myajax( {"api":"getcustomersdetails","type":type },function( data, textStatus, jQxhr ){
        $("#loadinggif").hide();
         $(".rowax,.rowspls").remove();
         var _clone;
         var tbd=$("#tbd"); 

     
      
     
         $(data.data).each(function(x,y){
         

          _clone ='<tr  class="rowax rowaxdriver" > ';
          if(y.image!=""){
          _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='http://18.168.83.39/"+y.image+"'></td>";
        }
        else{
           _clone+="<td><img style='margin-left:20px;height:30px;width:30px;margin-top:0px;border-radius:50px' src='img/Artboard-10.png'></td>";
        }
          _clone+='<td><b style="font-size:18px;margin-left:15px">'+y.name+'</td>';
          _clone+='<td style="font-size:18px"><b>'+crypMobile(y.mobile)+'</b></td>';
          _clone+='<td><i style="font-size: 17px;margin-left: 11px;" class="fa fa-phone"><i style="font-size: 17px;margin-left: 10px;" class="fa fa-envelope"></i></td>';
        _clone+='<td><b style="font-size:18px;margin-left:15px">'+y.used+'</td>';
        _clone+='<td><b style="font-size:18px;margin-left:15px">'+y.lastused+'</td>';
        _clone+='<td><b style="font-size:18px;margin-left:15px">Rs '+y.spent+'</td>';
        _clone+='<td><b style="font-size:18px;margin-left:15px"></td>';
         _clone+='<td style="font-size:18px"><b>';
         if(y.isapp=="1") _clone+="App";
         else _clone+="Call";
         _clone+='</b></td>';
             
            _clone+='</tr></tr><tr  class="rowspls" style="height:10px"><td colspan="3"></td></tr>';
          
          tbd.append(_clone);
         });
  
     
     
       
    });
    };
   
      });
      window.accept=function(ref){
        if(confirm("Do you want to accept?")) 
        {
          var id=$(ref).attr("data-id");
          $(ref).parent().find("._loading").show();
          $(ref).parent().find("._mxicon").hide();
          /* myajax({"api":"updateappointmentsatus","uid":id,"status":"1"},function( data, textStatus, jQxhr ){
            if(data.status=="200"){
              window.location.href="drivers.php?id="+id;
            }
            else{
              $(ref).parent().find("._loading").hide();
                  $(ref).parent().find("._mxicon").show();
              alert("Please Try Again");
            }
           });*/
       }
        }
     



    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
</html>