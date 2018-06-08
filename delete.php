<?php
// アンケート削除

$id   = $_GET["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
  exit("SQLエラー:".$error[2]);
}else{
  header("Location: select.php");
  exit;
}
?>
