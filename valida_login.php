<?php 
    //iniciando o recurso de sessão
    session_start(); //importante que seja executado sempre antes de alguma instrução que emita alguma saída de dados para o navegador (tipo o echo) 

    // $_SESSION['x'] = 'Oi, sou um valor de sessão'; //pode criar valores para o $_SESSION (que é um array) em tempo de execução
    // print_r($_SESSION);

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false; //ela é declarada como false pq vai ser verdadeiro apenas se passar na condição do primeiro if (estar autenticado)


    //usuários do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'), 
        array('email' => 'user@teste.com.br', 'senha' => 'abcd')
    );

    //laço de repetição para identificar se as credenciais se encontram no "banco"
    // foreach($usuarios_app as $user){
    //     echo "Usuário app: " . $user['email'] . ' / ' . $user['senha'];
    //     echo "<br>";
    //     echo "Usuário form: " . $_POST['email'] . ' / ' . $_POST['senha'];

    //     echo "<hr>";
    // }

    //ver se a autenticação bate
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){ //verifica se o e-mail e a senha do $_POST (passado pelo usuário) batem com as informações do $user (nosso "banco" improvisado)
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo "Usuário autenticado";
        $_SESSION['autenticado'] = 'SIM';
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); //função que retorna uma página, nesse caso a função vai levar de volta para o index pq não foi possível ser autenticado
    }

    // print_r($_POST);
    // echo "<br>";
    // echo $_POST["email"];
    // echo "<br>";
    // echo $_POST["senha"];
?>