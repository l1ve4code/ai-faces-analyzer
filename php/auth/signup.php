<?php

  session_start();

  require_once $_SERVER['DOCUMENT_ROOT']."/php/connection/connect.php";

  $login = $_POST["login"];
  $password = $_POST["password"];
  
  $query = pg_query($connect, "SELECT * FROM grinatom.user WHERE login = '".$login."' AND password = '".$password."'");
  
  if(pg_num_rows($query) > 0){
    $user = pg_fetch_assoc($query);
    $_SESSION["user"] = [
      "id" => $user["id"],
      "login" => $user["login"],
    ];
    header("Location: /");
  }
  else{
    header("Location: /");
  }
?>