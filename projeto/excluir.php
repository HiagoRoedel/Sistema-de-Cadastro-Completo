<?php

    session_start();

    include("conexao.php");

    $nome=$_POST['nome'];

    $sql="DELETE FROM tb_alunos WHERE nome='$nome'";
    $excluir = mysqli_query($mysqli, $sql);
    if(mysqli_insert_id($mysqli)){
        $_SESSION['exc'] = "<p style='color:red;'>Não foi possivel excluir aluno.</p>";
        header ("Location: menu3.php");
    }
    else{
        $_SESSION['exc'] = "<p style='color:green;'>Aluno excluido com sucesso!</p>";
        header ("Location: menu3.php");
    }
 
?>