<?php

session_start();

  # includes the autoloader for libraries installed with composer
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT']."/php/connection/connect.php";
# imports the Google Cloud client library
use Google\Cloud\Vision\VisionClient;

$vision = new VisionClient(['keyFile' => json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/key.json"), true)]);

$familyPhotoResource = fopen($_FILES["image"]["tmp_name"], "r");

$image = $vision->image($familyPhotoResource, ['FACE_DETECTION', "WEB_DETECTION"]);
$result = $vision->annotate($image);

if($result){
  $imagetoken = random_int(111111, 99999999);
  move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg");
  $name = date("F d Y H:i:s.", filectime($_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg"));
  $id = $_SESSION["user"]["id"];
  pg_query($connect, "INSERT INTO grinatom.images (img_src, data, user_id) VALUES ('".$imagetoken."', '".$name."', '".$id."')");
}else{
  die();
}

header("Location: /");

?>