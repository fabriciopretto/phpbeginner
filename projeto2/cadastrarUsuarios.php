<?php
session_start();
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

    <a href='menu.php'>Voltar ao menu</a>

    <h4>Cadastrar de usuários</h4>

    <?php
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $nome = $_SESSION['nome'];
        $sexo = $_SESSION['sexo'];
    } else {
        $id = 0;
        $nome = '';
        $sexo = '';
    }

    ?>

    <form name="login" method="post" action="salvarUsuario.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nome">Nome</label><br>
        <input type="text" value="<?php echo $nome; ?>" id="nome" name="nome" placeholder="nome"><br>
        <br>
        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha" placeholder="senha">
        <br>
        <br>
        <label for="sexo">Sexo</label><br>
        <select name="sexos" id="sexos">
            <option value="s">Selecione</option>
            <option value="f" <?php echo $sexo == 'f' ? 'selected' : '' ?>>Feminino</option>
            <option value="m" <?php echo $sexo == 'm' ? 'selected' : '' ?>>Masculino</option>
        </select>

        <br>
        <br>
        <input type="submit" value="Salvar">
    </form>


</body>

</html>