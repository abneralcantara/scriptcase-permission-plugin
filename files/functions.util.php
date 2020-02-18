<?php
    function crypto($complete_directory) {
        $cipher = "aes-128-gcm";

    	if (in_array($cipher, openssl_get_cipher_methods())) {
    		$ivlen = openssl_cipher_iv_length($cipher);
    		$iv = openssl_random_pseudo_bytes($ivlen);
    		$ciphertext = openssl_encrypt($complete_directory, $cipher, $key, $options=0, $iv, $tag);
            
            return array($ciphertext, $cipher, $key, $iv, $tag);
        }
    }

?>