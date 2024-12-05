<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexos'];

    // conexao
    $conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

    if ($id == 0) {
        // consulta
        $consulta = "insert into usuario values (default, '$nome', '$senha', '$sexo');";
    } else {
        $consulta = "update usuario set nome = '$nome', senha = '$senha', sexo = '$sexo' where id = $id";
    }

    // execucao da consulta
    $resultado = pg_query($conexao, $consulta);

    // teste de retorno: se deu certo 'msg de sucesso'
    if (pg_affected_rows($resultado) > 0) {
        echo 'Registro salvo com sucesso.';
        echo '<br>';
        echo "<a href='menu.php'>Voltar ao menu</a>";
    } else {
        echo 'Erro ao tentar salvar registro.';
    }

    // session_destroy();

    ?>

</body>

</html>