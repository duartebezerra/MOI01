<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Menu Principal</title>

<link rel="stylesheet" href="painel.css">

<script src="painel.js" defer></script>

</head>

<body>

<div class="container">

    <div class="painel">

        <div class="topo">

            <h1>Menu Principal</h1>

        </div>

        <div class="usuario">

            <div>

                <h2>
                    Olá,
                    <?php echo $_SESSION['usuario']; ?>
                </h2>

                <p>Bem-vindo ao sistema</p>

            </div>

            <a href="logout.php" class="btn-sair">
                Sair
            </a>

        </div>

        <h2 class="titulo-opcoes">
            O que deseja fazer?
        </h2>

        <div class="cards">

            <a href="usuarios.php" class="card">
                <h3>Usuários</h3>
                <p>Gerenciar usuários</p>
            </a>

            <a href="cadastros.php" class="card">
                <h3>Cadastros</h3>
                <p>Consultar registros</p>
            </a>

            <a href="relatorios.php" class="card">
                <h3>Relatórios</h3>
                <p>Visualizar relatórios</p>
            </a>

            <a href="configuracoes.php" class="card">
                <h3>Configurações</h3>
                <p>Preferências do sistema</p>
            </a>

            <a href="ajuda.php" class="card">
                <h3>Ajuda</h3>
                <p>Suporte e documentação</p>
            </a>

            <a href="sobre.php" class="card">
                <h3>Sobre</h3>
                <p>Informações do sistema</p>
            </a>

        </div>

        <div class="rodape">

            <span id="dataAtual"></span>

            <span id="horaAtual"></span>

        </div>

    </div>

</div>

</body>
</html>