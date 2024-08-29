<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>

    <!--Links CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header id="header">
        <div class="header-right">    
            <img src="assets/logo.png" alt="">
            <h2>App Help Desk</h2>
        </div>
    </header>

    <main>
        <section id="main-form">
            <div class="form-login">
                <h2>Login</h2>
            </div>

            <form action="valida_login.php" method="post">
                <input class="form-input" type="email" name="email" id="email" placeholder="E-mail"> <!-- placeholder coloca o "label" dentro do input -->
                <input class="form-input" type="password" name="senha" id="senha" placeholder="Senha">
                
                <!-- para se der erro na autenticação, redirecionar para essa parte -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?> <!-- isset() verifica se um determinado índice de um array está setado, ou seja, definida e não nula  -->
                    <div class="text-danger" style="color: red; font-size:medium;">
                        Usuário ou senha inválido(s).
                    </div>
                <?php } ?> <!-- fechamento do if do bloco de php anterior  -->
                     
                <input class="form-button" type="submit" value="Entrar">
            </form>
        </section>
    </main>
</body>
</html>