<?php
session_start();

$id = $_GET['id'];

// abrir conexao com o banco
$conexao = pg_connect("host=localhost port=5432 dbname=espaco40 user=postgres password=postgres");

// consulta que sera executada
$consulta = "select * from usuario where id = $id";

// execucao da consulta preenchendo a variavel $resultado
$resultado = pg_query($conexao, $consulta);

if ($registro = pg_fetch_array($resultado)) {
    // echo 'Sucesso. Acesse o menu do sistema ';
    // echo '<br>';
    // echo "<a href='menu.php'>Menu</a>";
    $_SESSION['id'] = $registro[0];
    $_SESSION['nome'] = $registro[1];
    $_SESSION['sexo'] = $registro[3];

    header('Location: cadastrarUsuarios.php');
} else {

    echo 'Erro: Usuário ou senha não encontrados. ';
    echo '<br>';
    echo "<a href='menu.php'>Voltar ao login</a>";
}
