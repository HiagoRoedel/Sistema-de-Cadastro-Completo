<?php
    include_once('conexao.php'); 
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $fone = $_POST['fone'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
    
        $sqlUpdate = "UPDATE tb_alunos SET nome='$nome', endereco='$endereco', fone='$fone', bairro='$bairro', cidade='$cidade', cep='$cep' 
        where cod_aluno='$id'";
        $result = $mysqli->query($sqlUpdate);
    }
         header('Location: menu4.php');      
?>