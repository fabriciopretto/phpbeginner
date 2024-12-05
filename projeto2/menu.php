<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ABC</title>
</head>

<body>
    <img src="img/logo40.png" alt="logotipo 4.0" width="90" height="70" />

    <h2>Sistema ABC</h2>

    <h4>Menu</h4>

    <a href='listarUsuarios.php'>Listar usuários</a> <br>
    <a href='cadastrarUsuarios.php'>Cadastrar usuários</a> <br>
</body>

</html>