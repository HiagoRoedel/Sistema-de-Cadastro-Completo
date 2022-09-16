<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="menutabela.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!--header começo-->
        <header class="header-menu">
            <div class="left">
                <h3>MENU</h3>
            </div>
            <div class="right">
                <a href="index.php" class="sair_btn" style="color: white">SAIR</a>
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
            <a href="menu.php" style="color: white"><ion-icon name="desktop-outline"></ion-icon><span>Painel</span></a>
            <a href="menu2.php" style="color: white"><ion-icon name="person-add"></ion-icon><span>Cadastrar aluno</span></a>
            <a href="menu3.php" style="color: white"><ion-icon name="person-remove"></ion-icon><span>Excluir aluno</span></a>
            <a href="menu4.php" style="color: white"><ion-icon name="reader"></ion-icon><span>Listar alunos</span></a>
    </div>
    <!--sidebar final-->
    
    <div class="meio align-table-center">
        
        <?php
            include_once('conexao.php');
            $sql = "select * from tb_alunos order by cod_aluno desc";
            $result = $mysqli->query($sql);           
        ?>

<div class="m-5">
    <table class="table text-white table-bg">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Fone</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">CEP</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['cod_aluno']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['fone']."</td>";
                        echo "<td>".$user_data['bairro']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['cep']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-dark' href='edit.php?id=$user_data[cod_aluno]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
</div>
</body>
</html>

    
