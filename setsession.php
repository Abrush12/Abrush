<?php
session_start();
$postData = json_decode(file_get_contents("php://input"));
$_SESSION['ID'] =$postData->id;
$_SESSION['NAME']= $postData->name;
$_SESSION['FULLNAME']= $postData->fullname;
$_SESSION['ISLOGIN']="1";
$_SESSION['COUNTRYCODE']=$postData->countrycode;
setcookie("ISLOGIN", "1", time() + (3600 * 1000), "/");
echo json_encode(array("a"=>"1"));

?>