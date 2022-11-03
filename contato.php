<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Dúvidas</title>
        <style>
            .cor{
                background-color: blueviolet;
            }
            .color{
                color: blueviolet;
            }
            .btn{
                color:white;
                background-color: violet;
                border-color: violet;
            }
        </style>
    </head>
    <body bgcolor="f4978e">
        <center>
            
        <h1 class="color">Dúvidas</h1>
        
        <form action="enviar_email.php" method="post">
            <label class="color" for="nome">Digite seu nome</label>
            <input type="text" required name="nome"/><br><br>
            <label class="color" for="email">Digite seu e-mail</label>
            <input type="email" required name="email"/><br><br>
            <label class="color" for="mensagem">Digite sua mensagem</label>
            <textarea name="mensagem"></textarea><br><br>
            <button class="btn"type="submit">Enviar</button>
        </center>
        </form>
    </body>
</html>