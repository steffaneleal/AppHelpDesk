<?php require_once("validador_acesso.php"); ?>

<?php 
    //chamados
    $chamados = array();

    //abrir o arquivo.hd
    //assim como no valida_login.php, o certo seria $arquivo = fopen('../../app_help_desk/arquivo.hd', 'r');
    $arquivo = fopen('arquivo.hd', 'r'); //mudamos o parâmetro de 'a' para 'r' pq aqui queremos apenas ler

    //enquanto houver registros (linhas) a serem recuperados
    while(!feof($arquivo)){ //feof testa pelo fim de um arquivo (EOF - END OF FILE)
        //linhas
        $registro = fgets($arquivo); //já que estamos recuperando cada uma das linhas do arquivo, precisamos atribuí-las a uma variável para que possam ser recuperadas depois
        $chamados[] = $registro;
    }

    //fechar o arquivo aberto
    fclose($arquivo);
?>

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
                <?php foreach($chamados as $chamado){ ?>

                    <?php
                        $chamado_dados = explode('#', $chamado);

                        //lógica para caso o perfil não seja admnistrativo
                        if($_SESSION['perfil_id'] == 2){
                            //só vamos exibir o chamado se ele for criado pelo usuário
                            if($_SESSION['id'] != $chamado_dados[0]){ 
                                continue; // continua para a próxima parte do código
                            }
                        }

                        if(count($chamado_dados) < 3){
                            continue;
                        }
                    ?>
                    <div class="consulta-card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $chamado_dados[1]?></h5> <!-- aqui não começa no índice 0 pq o 0 agora contém os ids -->
                            <h6 class="card-subtitle"><?php echo $chamado_dados[2]?></h6>
                            <p class="card-text"><?php echo $chamado_dados[3]?></p>
                        </div>
                    </div>

                <?php }?>
            </div>
            <div class="consultas">
                <a class="voltar-button" href="home.php">Voltar</a>
            </div>
        </section>
    </main>
</body>
</html>