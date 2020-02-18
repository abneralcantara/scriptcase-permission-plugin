<?php

include "functions.lang.php";
include "index.php";
include "functions.util.php";

$original_directory = openssl_decrypt($array_aux[0], $array_aux[1], $array_aux[2], $options=0, $array_aux[3], $array_aux[4]);

$directory = trim(shell_exec('pwd'))."/";
$total_directory = trim($directory).trim($original_directory);

// Verifying if the user have the permissions to change something.

if (substr($total_directory, 1, 4) == "home") {
	if (trim(substr($total_directory, 6, -1)) == trim(shell_exec('whoami'))) {
        
		// Verify if are special chars.
        
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $total_directory)) {
           specialChars();
        }
        else {
            shell_exec('./bin/script.sh $total_directory');
        };

	} else {
		doNotHavePermission();
	}
}
?>