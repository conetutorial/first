<?php
$list = [1, 2, 4, 5, 7, 8, 10, 11, 13, 14, 18, 20, 25, 26, 27, 30];

foreach ($list as $value) {
    if ($value%2 == 0) {
        echo "偶数:" . $value;
    } else {
        echo "奇数:" . $value;
    }
    echo "<br>";
}
?>