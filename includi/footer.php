<?php
    include_once('conexao.php');
    if(!empty($_POST)){    
        $email = $_POST['email'];
        $msg = $_POST['mensagem'];
        $msg_contato = "INSERT INTO feedback(id, email, mensagem) VALUES ('','$email','$msg')";
        $resultado_msg_contato = mysqli_query($conn, $msg_contato);
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <?php include("includi/head.php")?>
    </head>
    <body>
        <?php $pegaLink = basename($_SERVER['SCRIPT_NAME']); ?>
        <div class="footer" >
        <div class="footer-content">
            <div class="footer-section about">
            <h1 class="logo-text russo" id="borda2"><span id="borda1">BAD</span>MOON</h1>
            <p>
                Obrigado por visualizar o site. Caso tenha críticas ou dúvidas para o site ou para o jogo, nos envie uma mensagem através dos seguintes contatos:
            </p>
            <div class="contact">
                <span><i class="fas fa-envelope"></i> &nbsp; projetobadmoon@gmail.com</span>
            </div>
            </div>

            <div class="footer-section links">
            <h2 class="russo">Links rápidos</h2>
            <br>
            <ul class="russo">
                <a class="x1" href="index.php"><li>Inicial</li></a>
                <a id="x2" href="Personagens.php"><li>Personagem</li></a>
                <a class="x1" href="nos.php"><li>Sobre</li></a>
            </ul>
            </div>
            <div class="footer-section contact-form" style="overflow: hidden;">
            <h2 class="russo">Contatos</h2>
            <br>
            <?php echo '<form action="'.$pegaLink.'" method="POST">' ?>
                <input type="email" name="email" class="text-input contact-input tamanho" placeholder="Seu Email">
                <textarea name="mensagem" class="text-input contact-input tamanho" placeholder="Sua Mensagem"></textarea>
                <button type="submit" class="btn col-4 direita">
                <i class="fas fa-envelope"></i>
                </button>
            </form>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; BAD MOON | Designed by SrXandecof
        </div>
        </div>
    
    </body>
</html>

