<?php 
    //remover índices do array de sessão
    //unset() -> remove índices de qualquer array, incluindo GET ou POST

    session_start();
    //destruir a variável de sessão (remover todos os índices ao mesmo tempo)
    //session_destroy() -> remove todos os índices contidos dentro da global SESSION

    session_destroy(); //será destruída
    //forçar um novo redirecionamento
    header('Location: index.php');
?>