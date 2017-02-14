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

// 複数件取得
$sth->execute([
    'email' => $_GET['email'],
]);

$list = $sth->fetchAll(PDO::FETCH_ASSOC);

// 1件のみ取得
$sth->execute([
    'email' => $_GET['email'],
]);
$row = $sth->fetch(PDO::FETCH_ASSOC);

// 1件の1カラムのみ取得
$sql = 'SELECT name FROM users WHERE email = :email';
$sth = $dbh->prepare($sql);

$sth->execute([
    'email' => $_GET['email'],
]);
$column = $sth->fetchColumn();


// データ表示
echo "<pre>";
print_r($list);
echo "---------\n";
print_r($row);
echo "---------\n";
print_r($column);
echo "</pre>";
