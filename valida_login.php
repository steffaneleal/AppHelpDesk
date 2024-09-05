<?php 
    //iniciando o recurso de sessão
    session_start(); //importante que seja executado sempre antes de alguma instrução que emita alguma saída de dados para o navegador (tipo o echo) 

    // $_SESSION['x'] = 'Oi, sou um valor de sessão'; //pode criar valores para o $_SESSION (que é um array) em tempo de execução
    // print_r($_SESSION);

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false; //ela é declarada como false pq vai ser verdadeiro apenas se passar na condição do primeiro if (estar autenticado)
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    //usuários do sistema
    $usuarios_app = array(
        //por serem administrativos, conseguem visualizar todos os chamados
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1), 
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1), 
        //por serem de usuário, só conseguem visualizar os seus próprios chamados
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => 'abc', 'perfil_id' => 2),
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
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
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