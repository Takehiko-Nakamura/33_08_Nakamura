<?php
$id = $_GET["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false){
  errorMsg($stmt);
}else{
    $view = $stmt->fetch();
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

    .result-btn{
        color: #fff;
        background: #00aaff;
        margin: 2px;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 0 4px 0 #00aaff;
        cursor: pointer;
    }
    
    .result-btn:hover{
        opacity: 0.8;
    }

    table {
        margin:0 auto;
        width: 80%;
        border-collapse: collapse;
        font-size: 16px;
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
    }

    td input[type=text]{
        width: 100%;
        line-height: 30px;
    }

    td input[type=mail]{
        width: 100%;
        line-height: 30px;
    }

    textarea {
        width: 100%;
        height: 100px;
        resize: none;
    }

    ul {
        display: flex;
        justify-content: center;
        list-style: none;
    }

    ul li {
        color: #fff;
        background: #00aaff;
        margin: 2px;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 0 4px 0 #00aaff;
        cursor: pointer;
    }
    
    ul li:hover{
        opacity: 0.8;
    }

</style>

<title>アンケート編集入力</title>

</head>
<body>
    <p><a href="select.php"><input type="button" class="result-btn" value="アンケート結果表示"></a></p>
    <form action="reread.php" method="POST">
        <table>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" value="<?=$view["name"]?>" required></td>
            </tr>
            <tr>
                <th>カナ</th>
                <td><input type="text" name="kana" value="<?=$view["kana"]?>" required></td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td><input type="text" name="postalcode" value="<?=$view["postalcode"]?>" required></td>
            </tr>
            <tr>
                <th>住所</th>
                <td><input type="text" name="address" value="<?=$view["address"]?>" required></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="mail" name="mail" value="<?=$view["mail"]?>" required></td>
            </tr>
            <tr>
                <th>志望動機</th>
                <td>
                <label><input type="radio" name="motive" value="チーズで起業をしたい" 
                <?php if($view["motive"]=="チーズで起業をしたい"){echo 'checked';} ?> required>チーズで起業をしたい</label><br>
                <label><input type="radio" name="motive" value="チーズ系企業に就職・転職したい" 
                <?php if($view["motive"]=="チーズ系企業に就職・転職したい"){echo 'checked';} ?> required>チーズ系企業に就職・転職したい</label><br>
                <label><input type="radio" name="motive" value="チーズと関わる仕事をしており、仕事に生かしたい"  
                <?php if($view["motive"]=="チーズと関わる仕事をしており、仕事に生かしたい"){echo 'checked';} ?> required>チーズと関わる仕事をしており、仕事に生かしたい</label><br>
                <label><input type="radio" name="motive" value="チーズの教養を身につけたい" 
                <?php if($view["motive"]=="チーズの教養を身につけたい"){echo 'checked';} ?> required>チーズの教養を身につけたい</label><br>
                </td>
            </tr>
            <tr>
                <th>メッセージ</th>
                <td><textarea name="message" value="<?=$view["message"]?>" required></textarea></td>
            </tr>
        </table>
        <ul>
            <li><input type="submit" value="編集内容確認"></li>
            <li><input type="reset" value="リセット"></li>
        </ul>
        <input type="hidden" name="id" value="<?=$view["id"]?>">
    </form>
</body>
</html>