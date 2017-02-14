<?php
// 設定値を変数に入れておく
$dsn = 'mysql:dbname=lecture;host=127.0.0.1';
$user = 'root';
$password = null;

// mysqlへの接続を確立
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 実行したいSQLを定義
$sql = 'SELECT * FROM users';

// 実行
$sth = $dbh->query($sql);

// データ取得
$list = $sth->fetchAll(PDO::FETCH_ASSOC);

// データ表示
echo "<pre>";
print_r($list);
echo "</pre>";
