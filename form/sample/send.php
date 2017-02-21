<pre><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "\$_POST\n";
	print_r($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
	echo "\$_GET\n";
	print_r($_GET);
}

echo "-----------------\n";

echo "\$_REQUEST\n";
print_r($_REQUEST);

?></pre>