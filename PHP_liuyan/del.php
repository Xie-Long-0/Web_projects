<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>删除留言</title>
</head>
<body>

	<h3>删除留言</h3><br>

	<?php
	$id = $_GET['id'];
	$info = file_get_contents("liuyan.txt");
	$lylist = explode("@@@", $info);
	unset($lylist[$id]);
	$newinfo = implode("@@@", $lylist);
	file_put_contents("liuyan.txt", $newinfo);

	?>

	<em>删除成功！</em>

</body>
</html>
