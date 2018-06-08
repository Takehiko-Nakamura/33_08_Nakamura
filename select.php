<?php
include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if($status==false) {
    errorMsg($stmt);
    exit("SQLエラー:".$error[2]);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= 
    "<tr>
    <td>".$result["indate"]."</td>
    <td>".$result["name"]."</td>
    <td>".$result["kana"]."</td>
    <td>".$result["postalcode"]."</td>
    <td>".$result["address"]."</td>
    <td>".$result["mail"]."</td>
    <td>".$result["motive"]."</td>
    <td>".$result["message"]."</td>
    <td><a href=reindex.php?id=".$result["id"].">更新</a></td> 
    <td><a href=delete.php?id=".$result["id"].">削除</a></td> 
    </tr>";
  }
}

?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/reset.css">

<style>
  p{
      text-align: center;
      margin-top: 24px;
  }

  .entry-btn{
      color: #fff;
      background: #00aaff;
      margin: 2px;
      padding: 7px;
      border-radius: 5px;
      box-shadow: 0 4px 0 #00aaff;
      cursor: pointer;
  }
    
  .entry-btn:hover{
      opacity: 0.8;
  }

  table {
      margin:0 auto;
      width: 80%;
      border-collapse: collapse;
      font-size: 12px;
      margin-top: 24px;
      margin-bottom: 24px;
  }

  th {
      border: #e3e3e3 1px solid;
      text-align: left;
      vertical-align: middle;
      background: #f7f7f7;
      padding: 10px;
      font-weight: bold;
      line-height: 30px;
      width: 20%;
  }

  td {
      border: #e3e3e3 1px solid;
      text-align: left;
      vertical-align: middle;
      padding: 10px;
      line-height: 30px;
      width: 80%;
      word-break: keep-all;
  }

</style>

<title>アンケート結果表示</title>

</head>
<body>
  <p><a href="index.php"><input type="button" class="entry-btn" value="アンケート入力画面"></a></p>
  <table>
      <tr>
        <th>日時</th>
        <th>名前</th>
        <th>カナ</th>
        <th>郵便番号</th>
        <th>住所</th>
        <th>メールアドレス</th>
        <th>志望動機</th>
        <th>メッセージ</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
        <?= $view ?>
</body>
</html>
