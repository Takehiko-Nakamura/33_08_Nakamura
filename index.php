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

<title>アンケート入力</title>

</head>
<body>
    <p><a href="select.php"><input type="button" class="result-btn" value="アンケート結果表示"></a></p>
    <form action="read.php" method="POST">
        <table>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" placeholder="山田太郎" required></td>
            </tr>
            <tr>
                <th>カナ</th>
                <td><input type="text" name="kana" placeholder="ヤマダタロウ" required></td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td><input type="text" name="postalcode"placeholder="107-0061" required></td>
            </tr>
            <tr>
                <th>住所</th>
                <td><input type="text" name="address"placeholder="東京都港区青山3-5-6" required></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="mail" name="mail" placeholder="cheese@cheese.com" required></td>
            </tr>
            <tr>
                <th>志望動機</th>
                <td>
                <label><input type="radio" name="motive" value="チーズで起業をしたい" required>チーズで起業をしたい</label><br>
                <label><input type="radio" name="motive" value="チーズ系企業に就職・転職したい" required>チーズ系企業に就職・転職したい</label><br>
                <label><input type="radio" name="motive" value="チーズと関わる仕事をしており、仕事に生かしたい" required>チーズと関わる仕事をしており、仕事に生かしたい</label><br>
                <label><input type="radio" name="motive" value="チーズの教養を身につけたい" required>チーズの教養を身につけたい</label><br>
                </td>
            </tr>
            <tr>
                <th>メッセージ</th>
                <td><textarea name="message" placeholder="メッセージをお願いします" required></textarea></td>
            </tr>
        </table>
        <ul>
            <li><input type="submit" value="入力内容確認"></li>
            <li><input type="reset" value="リセット"></li>
        </ul>
    </form>
</body>
</html>