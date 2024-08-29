<?php 
    session_start();

    //se $_SESSION['autenticado'] não existe ou for diferente de 'SIM', redireciona pro index.php
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        //força o redirecionamento da página
        header('Location: index.php?login=erro2'); //mudei para erro2 pra tratar de jeito diferente do erro que aparece quando usuário ou senha é inválido
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Abrir Chamado</title>

    <!-- links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/abrir-chamado.css">
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
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
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
                <input class="form-descricao" type="text" placeholder="Descrição">
                <div class="form-buttons">
                    <input class="form-buttons1" type="submit" value="Voltar">    
                    <input class="form-buttons2" type="submit" value="Abrir">
                </div>
            </form>
        </section>
    </main>
</body>
</html>