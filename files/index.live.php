<html>
<body>
    <form name="form" action="" method="get">
        <input type="text" name="user" id="user">
        </br>
    </br>
	<input type="text" name="directory" id="directory">
    </br></br>
    <button type="button">Aplicar</button>
    </form>

<?php
    $_GET['user'];
    $_GET['directory'];
    
    if ($user != 0 || $user < 3) {
        echo "Inválido";
    }
    else {
        if ($directory <= 0) {
            $directory = "public_html";
        }
    }
?>
</body>
</html>
