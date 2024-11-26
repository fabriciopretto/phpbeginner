<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>
    <h1>Página do IMC</h1>

    <?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    echo 'IMC: ' . round($imc, 4);
    ?>

    <br>
    <br>
    <a href='index.php'>Voltar ao menu</a>

</body>

</html>