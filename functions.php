<?php

function db_conn(){
  try {
    return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした:'.$e->getMessage());
  }
}

function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit("SQLエラー:".$error[2]);
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}


?>
