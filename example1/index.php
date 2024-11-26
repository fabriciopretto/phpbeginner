<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aprendendo PHP</h1>

    <?php
    $idade = 23;
    $nome = "Juca Bala";

    echo 'Nome da pessoa: ' . $nome;
    echo '<br>';
    echo 'Idade: ' . $idade;
    echo '<br>';

    if ($idade >= 18) {
        echo 'A pessoa é de maior.';
    } else {
        echo 'A pessoa é de menor.';
    }

    echo '<br>';
    echo '<br>';

    for ($i = 0; $i < 10; $i++) {
        echo 'Opa ... <br>';
    }

    ?>

    <!-- comentario -->
    <input type="text" value="<?php echo $nome ?>">

    <hr>
    <form method="post" action="cadastro.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">

        <input type="submit" value="Enviar">
    </form>
    <hr>

    <h3>Outro título</h3>
    <p>Alguma coisa</p>
    <p>Outra coisa</p>



</body>

</html>