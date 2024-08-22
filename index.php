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
            <form action="valida_login.php" method="get">
                <input class="form-input" type="email" name="form-email" id="form-email" placeholder="E-mail"> <!-- placeholder coloca o "label" dentro do input -->
                <input class="form-input" type="password" name="form-password" id="form-password" placeholder="Senha">
                <input class="form-button" type="submit" value="Entrar">
            </form>
        </section>
    </main>
</body>
</html>