<?php
session_start();
require('db_init.php');
$id = $_GET['p'];        // chat.html�Ŏw�肵���N�G���p�����[�^�������Ƃ��Ď擾�ł��܂�

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
	<b> $row </b>: $name ����<br />
	$message
	</p>
EOD;        // ���ӁI

	echo $content;
	$row--;
}
?>

</body>
</html>
