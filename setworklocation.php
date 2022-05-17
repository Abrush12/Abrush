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
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="main-box clearfix">
       
     <div class="form-group">
   <label for="country" style="color: #fff !important; ">Select Country</label>      
        
             <!-- country codes (ISO 3166) and Dial codes. -->
<select name="countryCode" id="country" class="form-control">
    <option value="" data-c="" selected>Select Country</option>

  <option value="UK" data-c="44"  >UK (+44)</option>
  <option value="US" data-c="1">USA (+1)</option>
  <optgroup label="Other countries">
    <option value="DZ" data-c="213">Algeria (+213)</option>
    <option value="AD" data-c="376">Andorra (+376)</option>
    <option value="AO" data-c="244">Angola (+244)</option>
    <option value="AI" data-c="1264">Anguilla (+1264)</option>
    <option value="AG" data-c="1268">Antigua &amp; Barbuda (+1268)</option>
    <option value="AR" data-c="54">Argentina (+54)</option>
    <option value="AM" data-c="374">Armenia (+374)</option>
    <option value="AW" data-c="297">Aruba (+297)</option>
    <option value="AU" data-c="61">Australia (+61)</option>
    <option value="AT" data-c="43">Austria (+43)</option>
    <option value="AZ" data-c="994">Azerbaijan (+994)</option>
    <option value="BS" data-c="1242">Bahamas (+1242)</option>
    <option value="BH" data-c="973">Bahrain (+973)</option>
    <option value="BD" data-c="880">Bangladesh (+880)</option>
    <option value="BB" data-c="1246">Barbados (+1246)</option>
    <option value="BY" data-c="375">Belarus (+375)</option>
    <option value="BE" data-c="32">Belgium (+32)</option>
    <option value="BZ" data-c="501">Belize (+501)</option>
    <option value="BJ" data-c="229">Benin (+229)</option>
    <option value="BM" data-c="1441">Bermuda (+1441)</option>
    <option value="BT" data-c="975">Bhutan (+975)</option>
    <option value="BO" data-c="591">Bolivia (+591)</option>
    <option value="BA" data-c="387">Bosnia Herzegovina (+387)</option>
    <option value="BW" data-c="267">Botswana (+267)</option>
    <option value="BR" data-c="55">Brazil (+55)</option>
    <option value="BN" data-c="673">Brunei (+673)</option>
    <option value="BG" data-c="359">Bulgaria (+359)</option>
    <option value="BF" data-c="226">Burkina Faso (+226)</option>
    <option value="BI" data-c="257">Burundi (+257)</option>
    <option value="KH" data-c="855">Cambodia (+855)</option>
    <option value="CM" data-c="237">Cameroon (+237)</option>
    <option value="CA" data-c="1">Canada (+1)</option>
    <option value="CV" data-c="238">Cape Verde Islands (+238)</option>
    <option value="KY" data-c="1345">Cayman Islands (+1345)</option>
    <option value="CF" data-c="236">Central African Republic (+236)</option>
    <option value="CL" data-c="56">Chile (+56)</option>
    <option value="CN" data-c="86">China (+86)</option>
    <option value="CO" data-c="57">Colombia (+57)</option>
    <option value="KM" data-c="269">Comoros (+269)</option>
    <option value="CG" data-c="242">Congo (+242)</option>
    <option value="CK" data-c="682">Cook Islands (+682)</option>
    <option value="CR" data-c="506">Costa Rica (+506)</option>
    <option value="HR" data-c="385">Croatia (+385)</option>
    <option value="CU" data-c="53">Cuba (+53)</option>
    <option value="CY" data-c="90392">Cyprus North (+90392)</option>
    <option value="CY" data-c="357">Cyprus South (+357)</option>
    <option value="CZ" data-c="42">Czech Republic (+42)</option>
    <option value="DK" data-c="45">Denmark (+45)</option>
    <option value="DJ" data-c="253">Djibouti (+253)</option>
    <option value="DM" data-c="1809">Dominica (+1809)</option>
    <option value="DO" data-c="1809">Dominican Republic (+1809)</option>
    <option value="EC" data-c="593">Ecuador (+593)</option>
    <option value="EG" data-c="20">Egypt (+20)</option>
    <option value="SV" data-c="503">El Salvador (+503)</option>
    <option value="GQ" data-c="240">Equatorial Guinea (+240)</option>
    <option value="ER" data-c="291">Eritrea (+291)</option>
    <option value="EE" data-c="372">Estonia (+372)</option>
    <option value="ET" data-c="251">Ethiopia (+251)</option>
    <option value="FK" data-c="500">Falkland Islands (+500)</option>
    <option value="FO" data-c="298">Faroe Islands (+298)</option>
    <option value="FJ" data-c="679">Fiji (+679)</option>
    <option value="FI" data-c="358">Finland (+358)</option>
    <option value="FR" data-c="33">France (+33)</option>
    <option value="GF" data-c="594">French Guiana (+594)</option>
    <option value="PF" data-c="689">French Polynesia (+689)</option>
    <option value="GA" data-c="241">Gabon (+241)</option>
    <option value="GM" data-c="220">Gambia (+220)</option>
    <option value="GE" data-c="7880">Georgia (+7880)</option>
    <option value="DE" data-c="49">Germany (+49)</option>
    <option value="GH" data-c="233">Ghana (+233)</option>
    <option value="GI" data-c="350">Gibraltar (+350)</option>
    <option value="GR" data-c="30">Greece (+30)</option>
    <option value="GL" data-c="299">Greenland (+299)</option>
    <option value="GD" data-c="1473">Grenada (+1473)</option>
    <option value="GP" data-c="590">Guadeloupe (+590)</option>
    <option value="GU" data-c="671">Guam (+671)</option>
    <option value="GT" data-c="502">Guatemala (+502)</option>
    <option value="GN" data-c="224">Guinea (+224)</option>
    <option value="GW" data-c="245">Guinea - Bissau (+245)</option>
    <option value="GY" data-c="592">Guyana (+592)</option>
    <option value="HT" data-c="509">Haiti (+509)</option>
    <option value="HN" data-c="504">Honduras (+504)</option>
    <option value="HK" data-c="852">Hong Kong (+852)</option>
    <option value="HU" data-c="36">Hungary (+36)</option>
    <option value="IS" data-c="354">Iceland (+354)</option>
    <option value="IN" data-c="91">India (+91)</option>
    <option value="ID" data-c="62">Indonesia (+62)</option>
    <option value="IR" data-c="98">Iran (+98)</option>
    <option value="IQ" data-c="964">Iraq (+964)</option>
    <option value="IE" data-c="353">Ireland (+353)</option>
    <option value="IL" data-c="972">Israel (+972)</option>
    <option value="IT" data-c="39">Italy (+39)</option>
    <option value="JM" data-c="1876">Jamaica (+1876)</option>
    <option value="JP" data-c="81">Japan (+81)</option>
    <option value="JO" data-c="962">Jordan (+962)</option>
    <option value="KZ" data-c="7">Kazakhstan (+7)</option>
    <option value="KE" data-c="254">Kenya (+254)</option>
    <option value="KI" data-c="686">Kiribati (+686)</option>
    <option value="KP" data-c="850">Korea North (+850)</option>
    <option value="KR" data-c="82">Korea South (+82)</option>
    <option value="KW" data-c="965">Kuwait (+965)</option>
    <option value="KG" data-c="996">Kyrgyzstan (+996)</option>
    <option value="LA" data-c="856">Laos (+856)</option>
    <option value="LV" data-c="371">Latvia (+371)</option>
    <option value="LB" data-c="961">Lebanon (+961)</option>
    <option value="LS" data-c="266">Lesotho (+266)</option>
    <option value="LR" data-c="231">Liberia (+231)</option>
    <option value="LY" data-c="218">Libya (+218)</option>
    <option value="LI" data-c="417">Liechtenstein (+417)</option>
    <option value="LT" data-c="370">Lithuania (+370)</option>
    <option value="LU" data-c="352">Luxembourg (+352)</option>
    <option value="MO" data-c="853">Macao (+853)</option>
    <option value="MK" data-c="389">Macedonia (+389)</option>
    <option value="MG" data-c="261">Madagascar (+261)</option>
    <option value="MW" data-c="265">Malawi (+265)</option>
    <option value="MY" data-c="60">Malaysia (+60)</option>
    <option value="MV" data-c="960">Maldives (+960)</option>
    <option value="ML" data-c="223">Mali (+223)</option>
    <option value="MT" data-c="356">Malta (+356)</option>
    <option value="MH" data-c="692">Marshall Islands (+692)</option>
    <option value="MQ" data-c="596">Martinique (+596)</option>
    <option value="MR" data-c="222">Mauritania (+222)</option>
    <option value="YT" data-c="269">Mayotte (+269)</option>
    <option value="MX" data-c="52">Mexico (+52)</option>
    <option value="FM" data-c="691">Micronesia (+691)</option>
    <option value="MD" data-c="373">Moldova (+373)</option>
    <option value="MC" data-c="377">Monaco (+377)</option>
    <option value="MN" data-c="976">Mongolia (+976)</option>
    <option value="MS" data-c="1664">Montserrat (+1664)</option>
    <option value="MA" data-c="212">Morocco (+212)</option>
    <option value="MZ" data-c="258">Mozambique (+258)</option>
    <option value="MN" data-c="95">Myanmar (+95)</option>
    <option value="NA" data-c="264">Namibia (+264)</option>
    <option value="NR" data-c="674">Nauru (+674)</option>
    <option value="NP" data-c="977">Nepal (+977)</option>
    <option value="NL" data-c="31">Netherlands (+31)</option>
    <option value="NC" data-c="687">New Caledonia (+687)</option>
    <option value="NZ" data-c="64">New Zealand (+64)</option>
    <option value="NI" data-c="505">Nicaragua (+505)</option>
    <option value="NE" data-c="227">Niger (+227)</option>
    <option value="NG" data-c="234">Nigeria (+234)</option>
    <option value="NU" data-c="683">Niue (+683)</option>
    <option value="NF" data-c="672">Norfolk Islands (+672)</option>
    <option value="NP" data-c="670">Northern Marianas (+670)</option>
    <option value="NO" data-c="47">Norway (+47)</option>
    <option value="OM" data-c="968">Oman (+968)</option>
    <option value="PW" data-c="680">Palau (+680)</option>
    <option value="PA" data-c="507">Panama (+507)</option>
    <option value="PG" data-c="675">Papua New Guinea (+675)</option>
    <option value="PY" data-c="595">Paraguay (+595)</option>
    <option value="PE" data-c="51">Peru (+51)</option>
    <option value="PH" data-c="63">Philippines (+63)</option>
    <option value="PL" data-c="48">Poland (+48)</option>
    <option value="PT" data-c="351">Portugal (+351)</option>
    <option value="PR" data-c="1787">Puerto Rico (+1787)</option>
    <option value="QA" data-c="974">Qatar (+974)</option>
    <option value="RE" data-c="262">Reunion (+262)</option>
    <option value="RO" data-c="40">Romania (+40)</option>
    <option value="RU" data-c="7">Russia (+7)</option>
    <option value="RW" data-c="250">Rwanda (+250)</option>
    <option value="SM" data-c="378">San Marino (+378)</option>
    <option value="ST" data-c="239">Sao Tome &amp; Principe (+239)</option>
    <option value="SA" data-c="966">Saudi Arabia (+966)</option>
    <option value="SN" data-c="221">Senegal (+221)</option>
    <option value="CS" data-c="381">Serbia (+381)</option>
    <option value="SC" data-c="248">Seychelles (+248)</option>
    <option value="SL" data-c="232">Sierra Leone (+232)</option>
    <option value="SG" data-c="65">Singapore (+65)</option>
    <option value="SK" data-c="421">Slovak Republic (+421)</option>
    <option value="SI" data-c="386">Slovenia (+386)</option>
    <option value="SB" data-c="677">Solomon Islands (+677)</option>
    <option value="SO" data-c="252">Somalia (+252)</option>
    <option value="ZA" data-c="27">South Africa (+27)</option>
    <option value="ES" data-c="34">Spain (+34)</option>
    <option value="LK" data-c="94">Sri Lanka (+94)</option>
    <option value="SH" data-c="290">St. Helena (+290)</option>
    <option value="KN" data-c="1869">St. Kitts (+1869)</option>
    <option value="SC" data-c="1758">St. Lucia (+1758)</option>
    <option value="SD" data-c="249">Sudan (+249)</option>
    <option value="SR" data-c="597">Suriname (+597)</option>
    <option value="SZ" data-c="268">Swaziland (+268)</option>
    <option value="SE" data-c="46">Sweden (+46)</option>
    <option value="CH" data-c="41">Switzerland (+41)</option>
    <option value="SI" data-c="963">Syria (+963)</option>
    <option value="TW" data-c="886">Taiwan (+886)</option>
    <option value="TJ" data-c="7">Tajikstan (+7)</option>
    <option value="TH" data-c="66">Thailand (+66)</option>
    <option value="TG" data-c="228">Togo (+228)</option>
    <option value="TO" data-c="676">Tonga (+676)</option>
    <option value="TT" data-c="1868">Trinidad &amp; Tobago (+1868)</option>
    <option value="TN" data-c="216">Tunisia (+216)</option>
    <option value="TR" data-c="90">Turkey (+90)</option>
    <option value="TM" data-c="7">Turkmenistan (+7)</option>
    <option value="TM" data-c="993">Turkmenistan (+993)</option>
    <option value="TC" data-c="1649">Turks &amp; Caicos Islands (+1649)</option>
    <option value="TV" data-c="688">Tuvalu (+688)</option>
    <option value="UG" data-c="256">Uganda (+256)</option>
    <!-- <option value="GB" data-c="44">UK (+44)</option> -->
    <option value="UA" data-c="380">Ukraine (+380)</option>
    <option value="AE" data-c="971">United Arab Emirates (+971)</option>
    <option value="UY" data-c="598">Uruguay (+598)</option>
    <!-- <option value="US" data-c="1">USA (+1)</option> -->
    <option value="UZ" data-c="7">Uzbekistan (+7)</option>
    <option value="VU" data-c="678">Vanuatu (+678)</option>
    <option value="VA" data-c="379">Vatican City (+379)</option>
    <option value="VE" data-c="58">Venezuela (+58)</option>
    <option value="VN" data-c="84">Vietnam (+84)</option>
    <option value="VG" data-c="84">Virgin Islands - British (+1284)</option>
    <option value="VI" data-c="84">Virgin Islands - US (+1340)</option>
    <option value="WF" data-c="681">Wallis &amp; Futuna (+681)</option>
    <option value="YE" data-c="969">Yemen (North)(+969)</option>
    <option value="YE" data-c="967">Yemen (South)(+967)</option>
    <option value="ZM" data-c="260">Zambia (+260)</option>
    <option value="ZW" data-c="263">Zimbabwe (+263)</option>
  </optgroup>
</select>
  </div>
   <div class="form-group" style="margin-top:20px">
    <label for="area" style="color:#fff">Enter Location</label>
    <input type="text" class="form-control" id="area"  >
     
  </div>
  <div class="form-group" style="margin-top:20px">
    <button class="btn btn-primary" id="save">Update</button>
     
  </div>
    </div>
  </div>
</div>
</div>
    </section>
    <div style="display:none">
    </div>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAwicx6Q8Mq6Vag2nXWIA3nHY54bN4spi0"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
   <script>
$(function(){
   myajax({"api":"getadminuserlocation","uid":localStorage.getItem("id")},function( data, textStatus, jQxhr ){
                $("#country").val(data.data.countrycode).change();
                $("#area").val(data.data.officeadderss); 
                  setLocation({
  types: ['(regions)'],
  componentRestrictions: {country: [data.data.countrycode]}
 });     
           }); 
  $("#save").click(function(){
    var address=$.trim($("#area").val());
    var code=$("#country option:selected").val();
    if(code==""){
      alert("Please Select Country");
      return;
    }
    if(address.length==0){
      alert("Please Enter Location");return;
    }
    myajax({"api":"updateadminuserlocation","officeadderss":address,"countrycode":code,"uid":localStorage.getItem("id")},function( data, textStatus, jQxhr ){
              alert("Success");            
			  window.location.reload();
           }); 
  })
  $("#country").change(function(){
    var code=$("#country option:selected").val();
    $("#area").val("");


    setLocation({
  types: ['(regions)'],
  componentRestrictions: {country: [code]}
 });
  })
});
window.locationa=null;
window.locationltr=null;
window.setLocation=function(options){
 
if(!options) options={}
 if(window.locationa!=null)
 {
   google.maps.event.removeListener(window.locationltr);
 google.maps.event.clearInstanceListeners(window.locationa);
 }

 var input = document.getElementById('area');
 
window.locationa = new google.maps.places.Autocomplete(input,options);
window.locationltr = google.maps.event.addListener(window.locationa, 'places_changed', function() {
alert("S");
    });
 
}
 google.maps.event.addDomListener(window, 'load', setLocation);

   </script>

  </body>
</html>