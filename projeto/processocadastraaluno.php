<?php

session_start();

include_once("conexao.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];  

$result_usuario = "INSERT INTO tb_alunos (nome, endereco, fone, bairro, cidade, cep) VALUES ('$nome', '$endereco', '$fone', '$bairro', '$cidade', '$cep')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
if(mysqli_insert_id($mysqli)){
    $_SESSION['msg'] = "<p style='color:green;'>Aluno cadastrado com sucesso</p>";
    header ("Location: menu2.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Aluno não foi cadastrado com sucesso</p>";
   header ("Location: menu2.php");
}
 ?>
