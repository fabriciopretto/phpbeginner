<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <h1>Produtos: Lista e Total</h1>

    <?php
    $qtde1 = $_POST['qtde1'];
    $qtde2 = $_POST['qtde2'];
    $qtde3 = $_POST['qtde3'];

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    echo 'Lista de produtos <br><br>';

    echo 'Produtos <br>';
    echo $qtde1 . ' - ' . $valor1 . '<br>';
    echo $qtde2 . ' - ' . $valor2 . '<br>';
    echo $qtde3 . ' - ' . $valor3 . '<br>';

    $total = $qtde1 * $valor1 + $qtde2 * $valor2 + $qtde3 * $valor3;

    echo '<br>';
    echo 'Total da compra: ' . $total;

    ?>

    <br>
    <br>
    <a href='index.php'>Voltar ao menu</a>
</body>

</html>