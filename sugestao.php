<!DOCTYPE html>
<html>
    <head>
    <?php include("includi/head.php")?>
    </head>
    <body>
    	<br>
    	<br>
    	<br>
<?php
    include('conexao.php');
    $sql = mysql_query("SELECT * FROM `feedback` WHERE 1");

    while ($exibe = $mysql_fetcj_assoc($sql))

    echo $exibe["id"]."/";
	echo $exibe["email"]."/";
	echo $exibe["mensagem"];
 
?>
<?php include("includi/footer.php")?>
<?php include("includi/menu.php")?>
    </body>
</html>

