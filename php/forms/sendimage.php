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

  move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/php/forms/get.jpg");
  exec("second.py");

  if($result){
    $msg = exec("main.py 2>&1");
    $msg = str_replace("[", "", $msg);
    $msg = str_replace("]", "", $msg);
    $msg = str_replace(", ", ":", $msg);
    $msg = explode(":", $msg);
    if($msg[0] == "True"){
      $imagetoken = random_int(111111, 99999999);
      copy($_SERVER['DOCUMENT_ROOT']."/php/forms/get.jpg", $_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg");
      $name = date("F d Y H:i:s.", filectime($_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg"));
      $id = $_SESSION["user"]["id"];
      pg_query($connect, "INSERT INTO grinatom.images (img_src, data, user_id, name) VALUES ('".$imagetoken."', '".$name."', '".$id."', 'Иван Веденин')");
    }
    else if($msg[1] == "True"){
      $imagetoken = random_int(111111, 99999999);
      copy($_SERVER['DOCUMENT_ROOT']."/php/forms/get.jpg", $_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg");
      $name = date("F d Y H:i:s.", filectime($_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg"));
      $id = $_SESSION["user"]["id"];
      pg_query($connect, "INSERT INTO grinatom.images (img_src, data, user_id, name) VALUES ('".$imagetoken."', '".$name."', '".$id."', 'Артем Грибанов')");
    }
    else{
      $imagetoken = random_int(111111, 99999999);
      copy($_SERVER['DOCUMENT_ROOT']."/php/forms/get.jpg", $_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg");
      $name = date("F d Y H:i:s.", filectime($_SERVER['DOCUMENT_ROOT']."/php/files/".$imagetoken.".jpg"));
      $id = $_SESSION["user"]["id"];
      pg_query($connect, "INSERT INTO grinatom.images (img_src, data, user_id, name) VALUES ('".$imagetoken."', '".$name."', '".$id."', '')");
    }
  }else{
    die();
  }

  header("Location: /");

?>