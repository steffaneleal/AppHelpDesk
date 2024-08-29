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
    <title>App Help Desk - Consultar Chamado</title>
    
    <!-- links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/consulta-chamado.css">
</head>
<body>
    <header id="header">
        <div class="header-right">    
            <img src="assets/logo.png" alt="">
            <a href="index.php"><h2>App Help Desk</h2></a>
        </div>
        <a class="header-left" href="index.php">SAIR</a>
    </header>
    <main>
        <section id="main-container">
            <div class="consulta-header">
                <h2>Consulta de chamado</h2>
            </div>
            <div class="consultas">
                <a href="home.php"><input class="consultas-button" type="submit" value="Voltar"></a>
            </div>
        </section>
    </main>
</body>
</html>