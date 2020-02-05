<?php
$caminho = shell_exec('pwd');

if (substr($caminho, 1, 4) == "home") {
	if (trim(substr($caminho, 6, -1)) == trim(shell_exec('whoami'))) {
		echo "sucesso\n";
	} else {
		echo "falhou\n";
	};
};
?>