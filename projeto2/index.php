<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ABC</title>

    <style>
        #login {
            align-items: center;
            text-align: center;
        }
    </style>

</head>

<body>
    <img src="img/logo40.png" alt="logotipo 4.0" width="90" height="70" />

    <div id="login">
        <h3>Bem-vindo ao sistema ABC</h3>

        <h5>Autenticação</h5>


        <form name="login" method="post" action="login.php">
            <!-- <label for="usuario">Usuário</label><br> -->
            <input type="text" id="usuario" name="usuario" placeholder="usuário"><br>
            <br>
            <!-- <label for="senha">Senha</label><br> -->
            <input type="password" id="senha" name="senha" placeholder="senha">

            <br>
            <br>
            <input type="submit" value="Acessar">
        </form>

    </div>


</body>

</html>