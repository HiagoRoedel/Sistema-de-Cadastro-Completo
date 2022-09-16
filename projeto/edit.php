<?php

    if(!empty($_GET['id'])){
        include_once('conexao.php');
        $id = $_GET['id'];
        $sqlSelect = "select * from tb_alunos where cod_aluno=$id";
        $result = $mysqli->query($sqlSelect);
    
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $endereco = $user_data['endereco'];
            $fone = $user_data['fone'];
            $bairro = $user_data['bairro'];
            $cidade = $user_data['cidade'];
            $cep = $user_data['cep'];
        }
    }
        else{
            header('location: menu4.php');        
        }
    } 
    else {
        header('location: menu4.php');        
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Update</title>
</head>
<style>
    *{
        text-align: center;
        justify-content: center;
    }
</style>
<body>

    <form action="saveEdit.php" method="post">
    Nome:<br><input type="text" name="nome" value="<?php echo $nome ?>"><br>
    Endereço:<br><input type="text" name="endereco" value="<?php echo $endereco ?>"><br>
    Telefone:<br><input type="text" name="fone" value="<?php echo $fone ?>"><br>
    Bairro:<br><input type="text" name="bairro" value="<?php echo $bairro ?>"><br>
    Cidade:<br><input type="text" name="cidade" value="<?php echo $cidade ?>"><br>
    CEP:<br><input type="text" name="cep" value="<?php echo $cep ?>"><br><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="update" id="update"><br><br>
    <div>
        <a href="menu4.php">Voltar</a>
    </div>
</form>
<br><br>

</body>
</html>