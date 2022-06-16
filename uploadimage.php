<?php
ini_set('upload_max_filesize', '128M');
ini_set('post_max_size', '128M');
ini_set('max_execution_time','300');
ini_set('max_input_time','240');
function sendFile($file_name_with_full_path,$title){
	$cFile=null;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file_name_with_full_path);
} else { // 
  $cFile = '@' . realpath($file_name_with_full_path);
}
$post = array('title' => $title,'file_contents'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://18.168.83.39/api/v1/emara/uploadimage.php");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$result=curl_exec($ch);
curl_close ($ch);
return $result;
}

function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}




$path = "uploads/"; 
$todayunix=strtotime(date("d")."-".date("m")."-".date("Y"));
 
$file_name = $_FILES["file1"]["name"];

$file_tmp =$_FILES["file1"]["tmp_name"]; 
$a = explode(".",$file_name);
$type=end($a);
$new_name = rand().time().".".$type;
$new_name1 = rand().time().".".$type;
$new_name2 = rand().time().".".$type;

move_uploaded_file($file_tmp,$path.$new_name);


$source_img = $path.$new_name; 
$destination_img = $path.$new_name1;

$d = compress($source_img, $destination_img, 90);
unlink($source_img);
 $dir = dirname(__FILE__) ."/". $d;
$rr = sendFile($dir,$new_name1);
echo  $new_name1;

?>