<?php
session_start();
require('db_init.php');
$id = $_GET['p'];        // chat.htmlで指定したクエリパラメータを引数として取得できます

$chat = $db->query("select * from chat where id='$id' order by id desc");
$row = $chat->rowCount();
while($r = $chat->fetch()){
	$name = $r['name'];
        $message = $r['message'];
?>

<!doctype html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
	$content = <<<EOD
	<p>
	<b> $row </b>: $name さん<br />
	$message
	</p>
EOD;        // 注意！

	echo $content;
	$row--;
}
?>

</body>
</html>
