<?php require_once("validador_acesso.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Consultar Chamado</title>
    
    <!-- links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/consultar_chamado.css">
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
        <section id="main-container">
            <div class="consulta-header">
                <h2>Consulta de chamado</h2>
            </div>
            <div class="consulta-cards">
                <div class="consulta-card">
                    <div class="card-body">
                        <h5 class="card-title">Título do chamado...</h5>
                        <h6 class="card-subtitle">Categoria</h6>
                        <p class="card-text">Descrição do chamado...</p>
                    </div>
                </div>
                <div class="consulta-card">
                    <div class="card-body">
                        <h5 class="card-title">Título do chamado...</h5>
                        <h6 class="card-subtitle">Categoria</h6>
                        <p class="card-text">Descrição do chamado...</p>
                    </div>
                </div>
            </div>
            <div class="consultas">
                <a class="voltar-button" href="home.php">Voltar</a>
            </div>
        </section>
    </main>
    <script>
        let chamadosAbertos = false;

        window.onload = function(){
            const consultaCards = document.querySelectorAll('.consulta-card');

            //Esconder todos os cards inicialmente
            consultaCards.forEach(card => {
                card.style.display = 'none';
            });

            //Se houver chamados abertos, mostrar os cards
            if(chamadosAbertos){
                consultaCards.forEach(card => {
                    card.style.display = 'block';
                });
            }
        }
    </script>
</body>
</html>