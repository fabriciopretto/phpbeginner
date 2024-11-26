<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de alguma coisa</h1>

    <?php
    $nome_usuario = $_POST["fname"];
    $ultimo_nome = $_POST["lname"];
    echo 'Nome do usuário: ' . $nome_usuario . '<br>';
    echo 'Último nome: ' . $ultimo_nome;

    ?>
</body>



</html>