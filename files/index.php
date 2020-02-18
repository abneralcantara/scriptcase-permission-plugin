
<?php
	include "/templates/index.html";
	include "function.util.php";

	$directory_name = htmlspecialchars($_POST['directory_name']);

	if ($directory_name == "") {
		$complete_directory = "public_html";
		$array_aux = crypto($complete_directory);
		reader('Location: index.live.php');
	} else {
		$array_aux = crypto($complete_directory);
		reader('Location: index.live.php');
		}
?>