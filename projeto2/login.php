<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // abrir conexao com o banco
    $conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

    // consulta que sera executada
    $consulta = "select * from usuario where nome = '$usuario' and senha = '$senha'";

    // execucao da consulta preenchendo a variavel $resultado
    $resultado = pg_query($conexao, $consulta);

    if ($registro = pg_fetch_array($resultado)) {
        echo 'Sucesso. acesse o menu do sistema ';
        echo "<a href='menu.php'>Menu</a>";
    } else {
        echo 'Erro: Usuário ou senha não encontrados. ';
        echo "<a href='index.php'>Voltar ao login</a>";
    }

    ?>

</body>

</html>