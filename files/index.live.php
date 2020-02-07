<?php
$directory = trim(shell_exec('pwd'))."/";
$directory_name = htmlspecialchars($_POST['directory_name']);
$complete_directory = trim($directory).trim($directory_name);

//Verifying if the user have the permitions to change anything.

if (substr($complete_directory, 1, 4) == "home") {
	if (trim(substr($complete_directory, 6, -1)) == trim(shell_exec('whoami'))) {
		echo "sucesso\n";
		//Verify if are special Chars.
	} else {
		echo "Você não tem permissão para realizar alterações neste diretório.\n";
	};
};

?>