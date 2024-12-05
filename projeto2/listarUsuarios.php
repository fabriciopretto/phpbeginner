<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>

<body>
    <img src="img/logo40.png" alt="logotipo 4.0" width="90" height="70" />

    <h2>Sistema ABC</h2>

    <a href='menu.php'>Voltar ao menu</a>

    <h4>Listagem de usuários</h4>

    <?php
    $conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

    // if ($conexao) {
    //     echo 'Conexão realizada com sucesso.';
    // } else {
    //     echo 'Erro ao tentar conectar no banco de dados.';
    // }

    $consulta = 'select * from usuario';
    $resultado = pg_query($conexao, $consulta);

    ?>
    <table>
        <th>Id</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Ações</th>
        <?php
        while ($linha = pg_fetch_array($resultado)) {
        ?>
            <tr>
                <td><?php echo $linha[0] ?></td>
                <td><?php echo $linha[1] ?></td>
                <td><?php echo $linha[3] ?></td>
                <td><input type="button" onclick="location.href='editar.php?id=<?php echo $linha[0];?>'" value="Editar" /><input type="button" onclick="location.href='excluir.php?id=<?php echo $linha[0];?>';" value="Excluir" /></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>