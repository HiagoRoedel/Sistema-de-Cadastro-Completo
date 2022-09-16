<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="menus.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!--header começo-->
    <header>
        <div class="left">
            <h3>MENU</h3>
        </div>

        <div class="right">
            <a href="index.php" class="sair_btn">SAIR</a>
        </div>
    </header>
    <!--header final-->

    <!--sidebar começo-->
    <div class="sidebar">
        <center>
            <h2>
                <?php
                session_start(); 
                include_once('conexao.php'); 
                echo $_SESSION['nome']; 
                ?>
            </h2>
        </center>
                <a href="menu.php"><ion-icon name="desktop-outline"></ion-icon><span>Painel</span></a>
                <a href="menu2.php"><ion-icon name="person-add"></ion-icon><span>Cadastrar aluno</span></a>
                <a href="menu3.php"><ion-icon name="person-remove"></ion-icon><span>Excluir aluno</span></a>
                <a href="menu4.php"><ion-icon name="reader"></ion-icon><span>Listar alunos</span></a>
    </div>
    <!--sidebar final-->

        <div class="meio base">
            <h3>BEM-VINDO</h3>
        </div>  
    </body>
</html>