<?php
include ('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])){

    if (strlen($_POST['usuario']) == 0){
        echo "Preencha o seu usuario";

    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha a sua senha:";
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
                
            if(!isset($_SESSION)) {
            session_start();
        } 
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: menu.php");

    } else {
        echo "<p style='color:red;'>FALHA AO LOGAR! USUARIO OU SENHA INCORRETOS.</p>";
           }
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<div id="login">
<body>
<form class="form" action="" method="POST">  
        <p>
        <div class="card-content">
        <div class="area-input">
        <input type="text" name="usuario" placeholder="Usuario" required>
        </div>
        </p>
        <p>
        <div class="area-input">
        <input type="password" name="senha" placeholder="Senha" required>
        </div>
        </div>
        </p>
            <p>
            <div class="botao">
            <button type="submit" class="botao">Entrar</button>
            </div>
            </p>
    </form>
    </div>
</body>
</html>