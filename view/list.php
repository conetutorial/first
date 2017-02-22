<?php
// 閾値「1.00」を超えていたら「true」を返す
function isExceedsOver($average)
{
    return $average >= 1.00;
}


// 設定値を変数に入れておく
$dsn = 'mysql:dbname=lecture;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = null;

// mysqlへの接続を確立
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 実行したいSQLを定義
$sql = 'SELECT * FROM load_average ORDER BY created DESC';

// 実行
$sth = $dbh->query($sql);

// データ取得
$list = $sth->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログデータ表示サンプル</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                ログデータ表示サンプルhtml
            </a>
        </div>
    </div>
</nav>
<div class="container">
    <h1>ロードアベレージ</h1>
    <p>(直近15分のみを1時間置きに記録)</p>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>load average</th>
                <th>記録日時</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $value): ?>
            <tr<?= isExceedsOver($value['average']) ? ' class="danger"' : '' ?>>
                <td><?= htmlspecialchars(number_format($value['average'], 2)) ?></td>
                <td><?= htmlspecialchars(date('Y年m月d日 H時i分s秒' , strtotime($value['created']))) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>