<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>

<body>
    <h1>Listagem de usuários</h1>

    <?php
    $conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

    if ($conexao) {
        echo 'Conexão realizada com sucesso.';
    } else {
        echo 'Erro ao tentar conectar no banco de dados.';
    }

    echo '<br>';

    $consulta = 'select * from usuario';
    $resultado = pg_query($conexao, $consulta);

    while ($linha = pg_fetch_array($resultado)) {
        echo $linha [0] . ' - ' . $linha [1] . ' - ' . $linha [3] . '<br>';
    }

    ?>

</body>

</html>