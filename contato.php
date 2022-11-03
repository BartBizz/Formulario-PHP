<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Dúvidas</title>
        <style>
            .cor{
                background-color: black;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Dúvidas</h1>
        <form action="enviar_email.php" method="post">
            <label for="nome">Digite seu nome</label>
            <input type="text" required name="nome"/><br><br>
            <label for="email">Digite seu e-mail</label>
            <input type="email" required name="email"/><br><br>
            <label for="mensagem">Digite sua mensagem</label>
            <textarea name="mensagem"></textarea><br><br>
            <button type="submit">Enviar</button>
        </center>
        </form>
    </body>
</html>