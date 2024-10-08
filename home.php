<?php require_once("validador_acesso.php"); 

    //sempre que usamos alguma coisa com $_SESSION precisamos iniciar a sessão com session_start(), mas nesse caso não é necessário pq a gente inicia uma sessão em validador_acesso.php, que está sendo requerido nesse script
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>

    <!-- Links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
    <header id="header">
        <div class="header-right">    
            <img src="assets/logo.png" alt="">
            <h2>App Help Desk</h2>
        </div>
        <a class="header-left" href="logoff.php">SAIR</a>
    </header>
    <main>
        <section id="main-menu">
            <div class="menu-header">
                <h2>Menu</h2>
            </div>
            <div class="menu-cards">
                <a href="abrir_chamado.php"><img src="assets/formulario_abrir_chamado.png" alt="Abrir Chamado"></a>
                <a href="consultar_chamado.php"><img src="assets/formulario_consultar_chamado.png" alt="Consultar Chamado"></a>
            </div>
        </section>
    </main>
</body>
</html>