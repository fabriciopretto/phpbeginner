<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #novo {
            margin: 5px;
            width: 250px;
        }

        #tudo {
            margin: 10px;
            font-size: 10pt;
        }
    </style>
</head>

<body>

    <!-- <img src="img/logo40.png" alt="logotipo 4.0" width="90" height="70" />

    <h2>Sistema ABC</h2>

    <a href='menu.php'>Voltar ao menu</a> -->
    <br>
    <input type="button" id="novo" class="btn btn-primary btn-sm" onclick="location.href='cadastrarUsuarios.php'" value="Novo" />

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
    <div id="tudo">
        <h4>Listagem de usuários</h4>

        <table class="table table-sm">
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
                    <td><input type="button" class="btn btn-info" onclick="location.href='editar.php?id=<?php echo $linha[0]; ?>'" value="Editar" />&nbsp;<input type="button" class="btn btn-danger" onclick="location.href='excluir.php?id=<?php echo $linha[0]; ?>';" value="Excluir" /></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>