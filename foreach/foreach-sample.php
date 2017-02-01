<?php
// 配列を定義
$list = ['Pen', 'Pineapple', 'Apple', 'Pen'];

foreach($list as $value) {
    // 文字列の0番目から1文字だけ出力する
    // ↑処理を値の数だけ繰り返す
    echo substr($value, 0, 1);
}
// PPAPと表示される
?>