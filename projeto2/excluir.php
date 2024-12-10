<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Excluir</h1>
    <?php
    $id = $_GET['id'];

    // abrir conexao com o banco
    $conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

    // consulta que sera executada
    $consulta = "delete from usuario where id = $id";

    // execucao da consulta preenchendo a variavel $resultado
    $resultado = pg_query($conexao, $consulta);

    if (pg_affected_rows($resultado) > 0) {
        echo 'Registro excluído com sucesso.';
        echo '<br>';
        echo "<a href='listarUsuarios.php'>Voltar para listagem</a>";
    } else {
        echo 'Erro ao tentar excluir registro.';
    }
    ?>
</body>

</html>