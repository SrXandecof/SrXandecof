<?php include_once('conexao.php');?>

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
            $consulta = "SELECT * FROM feedback";
            $con = mysqli_query($conn, $consulta);
            while($dado = mysqli_fetch_assoc($con)) {
        ?>
        <center>
            <div class="pedaco">
                <div class="row">
                    <div class="email col">
                      <?php echo "Nome: " . $dado['nome'] . "<br>"; ?>  
                    </div>
                    <div class="email col">
                      <?php echo "E-mail: " . $dado['email'] . "<br>"; ?>  
                    </div>
                    <div class="id col">
                        <?php echo "Data: " . $dado['data'] . "<br>";?>
                    </div>
                </div>
                <hr>
                <div class="comentario">
                   <?php echo "Mensagem: " . $dado['mensagem'] . "<br>"; } ?>
                </div>
            </div>
        </center>
        <?php include("includi/footer.php")?>
    </body>
</html>