<?php
	$directory = trim(shell_exec('pwd'))."/";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<form action="index.live.php" method="post">
	Informe aqui o diretório a ser corrigido: <input type="text" name="directory_name"><br>
	<input type="submit">
</body>
</html>