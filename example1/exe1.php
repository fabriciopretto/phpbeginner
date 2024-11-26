<!DOCTYPE html>
<html>

<body>
  <h1>Estamos aprendendo PHP!</h1>

  <?php
  $name = "Juca";
  $age = 20;

  if ($age >= 18) {
    echo 'É maior de idade.';
  } else {
    echo 'Não é de maior idade.';
  }

  echo 'Nome: ' . $name . '<br>';
  echo "Idade: ";
  echo $age;

  echo '<br>';
  printf('bola');
  echo '<br>';

  $soma = 0;
  for ($i = 0; $i < 10; $i++) {
    echo $i . ' - Opa <br>';
    $soma = $soma + $i;
  }

  echo 'Soma: ' . $soma . '<br>';

  $peso = 82;
  $altura = 1.77;
  $imc = $peso/($altura * $altura);

  echo 'IMC = ' . $imc;

  $idade = readline('Digite uma idade: ');
  echo 'idade lida: ' . $idade;

  ?>

  <input type='text' value='<?php echo $imc ?>'>

</body>

</html>
