<?php

$invalid=false;
if(isset($_GET["invalid"])) {
    $invalid=settype($_GET["invalid"], "boolean");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles/login.css">
    </head>
    <body>
        <a href="/">
            <img id="logo" src="assets/img/gopher.png" alt="Logo Gopher" width="150" height="150">
        </a>
        <main>
            <header>
                <h1>Selamat datang Gopher</h1>
                <h2>Login</h2>
            </header>
            <form action="/validateLogin" method="POST">
                <section id="npm-input" class="inputs">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm">
                </section>
                <section id="password-input" class="inputs">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password">
                    <span id="visibility" class="material-icons">visibility</span>
                </section>

                <?php if($invalid) : ?>
                    <p id="invalid">NPM atau password ada yang salah</p>
                <?php endif; ?>

                <button id="login" type="submit">Login</button>
            </form>
        </main>

        <script src="assets/scripts/showPassword.js"></script>
    </body>
</html>