<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/reset.css">

<style>

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

<title>アンケート入力確認</title>

</head>
<body>
    <form action="insert.php" method="POST">
        <table>
            <tr>
                <th>名前</th>
                <td><?php echo $_POST["name"]; ?></td>
            </tr>
            <tr>
                <th>カナ</th>
                <td><?php echo $_POST["kana"]; ?></td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td><?php echo $_POST["postalcode"]; ?></td>
            </tr>
            <tr>
                <th>住所</th>
                <td><?php echo $_POST["address"]; ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php echo $_POST["mail"]; ?></td>
            </tr>
            <tr>
                <th>志望動機</th>
                <td><?php echo $_POST["motive"]; ?></td>
            </tr>
            <tr>
                <th>メッセージ</th>
                <td><?php echo $_POST["message"]; ?></td>
            </tr>
        </table>
        <ul>
            <li><input type="button" onclick="javascript:window.history.back(-1);return false;" value="戻る"></li>
            <li><input type="submit" value="送信"></li>
        </ul>
        <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
        <input type="hidden" name="kana" value="<?php echo $_POST["kana"]; ?>">
        <input type="hidden" name="postalcode" value="<?php echo $_POST["postalcode"]; ?>">
        <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
        <input type="hidden" name="mail" value="<?php echo $_POST["mail"]; ?>">
        <input type="hidden" name="motive" value="<?php echo $_POST["motive"]; ?>">
        <input type="hidden" name="message" value="<?php echo $_POST["message"]; ?>">
    </form>
</body>
</html>