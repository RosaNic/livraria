<?php

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$setor','$login','$senha')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";

?>