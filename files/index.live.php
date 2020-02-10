<?php
$directory = trim(shell_exec('pwd'))."/";
$directory_name = htmlspecialchars($_POST['directory_name']);
$complete_directory = trim($directory).trim($directory_name);

//Verifying if the user have the permissions to change something.

if (substr($complete_directory, 1, 4) == "home") {
	if (trim(substr($complete_directory, 6, -1)) == trim(shell_exec('whoami'))) {
		echo "sucesso\n";
		//Verify if are special chars.
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $complete_directory)) {
           echo "Caracter especial detectado.";
        }
        else {

            # Encrypt
            $cipher = "aes-128-gcm";

            if (in_array($cipher, openssl_get_cipher_methods())) {

                $ivlen = openssl_cipher_iv_length($cipher);
                $iv = openssl_random_pseudo_bytes($ivlen);
                $ciphertext = openssl_encrypt($complete_directory, $cipher, $key, $options=0, $iv, $tag);

                $original_directory = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);

                echo $original_directory."\n";
            }

            file_put_contents("path.txt", $original_directory);
        }
	} else {
		echo "Você não tem permissão para realizar alterações neste diretório.\n";
	};
};
?>