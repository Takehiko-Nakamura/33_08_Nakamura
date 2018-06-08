<?php
// アンケート編集送信

if (
  !isset ($_POST["name"]) || $_POST["name"] == "" ||
  !isset ($_POST["kana"]) || $_POST["kana"] == "" ||
  !isset ($_POST["postalcode"]) || $_POST["postalcode"] == "" ||
  !isset ($_POST["address"]) || $_POST["address"] == "" ||
  !isset ($_POST["mail"]) || $_POST["mail"] == "" ||
  !isset ($_POST["motive"]) || $_POST["motive"] == "" ||
  !isset ($_POST["message"]) || $_POST["message"] == ""
){
  exit('<a href="select.php">index.php</a>');
}

$name       = $_POST["name"];
$kana       = $_POST["kana"];
$postalcode = $_POST["postalcode"];
$address    = $_POST["address"];
$mail       = $_POST["mail"];
$motive     = $_POST["motive"];
$message    = $_POST["message"];
$id         = $_POST["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE gs_bm_table SET name=:a1, kana=:a2, postalcode=:a3, address=:a4, mail=:a5, motive=:a6, message=:a7 WHERE id=:id");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $kana, PDO::PARAM_STR);
$stmt->bindValue(':a3', $postalcode, PDO::PARAM_STR);
$stmt->bindValue(':a4', $address, PDO::PARAM_STR);
$stmt->bindValue(':a5', $mail, PDO::PARAM_STR);
$stmt->bindValue(':a6', $motive, PDO::PARAM_STR);
$stmt->bindValue(':a7', $message, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
}else{
  header("Location: select.php");
}
?>
