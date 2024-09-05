<?php require_once("validador_acesso.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Abrir Chamado</title>

    <!-- links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/abrir_chamado.css">
</head>
<body>
    <header id="header">
        <div class="header-right">    
            <img src="assets/logo.png" alt="">
            <h2>App Help Desk</h2>
        </div>
        <a class="header-left" href="index.php">SAIR</a>
    </header>
    <main>
        <section id="main-form">
            <div class="form-abertura-chamado">
                <h2>Abertura de chamado</h2>
            </div>
            <form action="registra_chamado.php" method="post">
                <label class="form-label" for="titulo">Título</label>
                <input class="form-titulo" type="text" name="titulo" id="titulo" placeholder="Título">
                <label class="form-label" for="categoria">Categoria</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option value="criacao_usuario">Criação Usuário</option>
                    <option value="impressora">Impressora</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="rede">Rede</option>
                </select>
                <label class="form-label" for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-descricao" rows="3"></textarea>
                <div class="form-buttons">
                    <a class="form-buttons1" href="home.php">Voltar</a>    
                    <input class="form-buttons2" type="submit" value="Abrir">
                </div>
            </form>
        </section>
    </main>
</body>
</html>