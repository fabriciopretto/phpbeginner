<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de opções</title>
</head>

<body>

    <h1>Menu de opções</h1>

    <h3>IMC</h3>
    <form name='menu' method='post' action='imc.php'>
        <label for="peso">Peso</label><br>
        <input type="text" id="peso" name="peso"><br>

        <label for="altura">Altura</label><br>
        <input type="text" id="altura" name="altura">

        <input type='submit' value='Calcular'>
    </form>

    <hr>
    <h3>Produtos</h3>
    <form name='menu' method='post' action='produtos.php'>
        <table>
            <th>Qtde</th>
            <th>Valor</th>
            <tr>
                <td><input type='text' name='qtde1'></td>
                <td><input type='text' name='valor1'></td>
            </tr>
            <tr>
                <td><input type='text' name='qtde2'></td>
                <td><input type='text' name='valor2'></td>
            </tr>
            <tr>
                <td><input type='text' name='qtde3'></td>
                <td><input type='text' name='valor3'></td>
            </tr>
        </table>

        <br>
        <input type='submit' value='Calcular'>
    </form>

    <hr>
    <h3>Sexo e Frase</h3>
    <form name='menu' method='post' action='sexos.php'>
        <select name="sexos" id="sexos">
            <option value="0">Selecione</option>
            <option value="1">Feminino</option>
            <option value="2">Masculino</option>
        </select>
        <input type='text' name='frase'>
        <br>
        <input type='submit' value='Processar'>
    </form>

</body>

</html>