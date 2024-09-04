<?php 
    session_start();

    //se $_SESSION['autenticado'] não existe ou for diferente de 'SIM', redireciona pro index.php
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        //força o redirecionamento da página
        header('Location: index.php?login=erro2'); //mudei para erro2 pra tratar de jeito diferente do erro que aparece quando usuário ou senha é inválido
    }
    
?>
