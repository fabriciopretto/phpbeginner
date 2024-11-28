<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Frase de acordo com o gênero</h1>

    <?php
    $genero = $_POST['sexos'];
    $frase = $_POST['frase'];

    if ($genero == 0) {
        echo 'Por favor, retorne e selecione uma opção.';
    } else if ($genero == 1) {
        echo 'Sra., ' . $frase;
    } else {
        echo 'Sr., ' . $frase;
    }

    ?>

    <br>
    <br>
    <a href='index.php'>Voltar ao menu</a>

</body>

</html>