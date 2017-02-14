<?php
// 設定値を変数に入れておく
$dsn = 'mysql:dbname=lecture;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = null;

// mysqlへの接続を確立
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 実行したいSQLを定義
$sql = 'SELECT * FROM users WHERE email = :email';

// 評価
$sth = $dbh->prepare($sql);

// 実行
$sth->execute([
    'email' => $_GET['email'],
]);

// データ取得
$list = $sth->fetchAll(PDO::FETCH_ASSOC);

// データ表示
echo "<pre>";
print_r($list);
echo "</pre>";
