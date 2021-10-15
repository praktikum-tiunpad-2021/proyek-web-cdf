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
        <form action="#" method="POST">
            <section id="npm-input">
                <label for="npm">NPM</label>
                <input type="text" name="npm">
            </section>
            <section id="password-input">
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
                <span id="visibility" class="material-icons">visibility</span>
            </section>
            <button id="login" type="submit">Login</button>
        </form>
        <script src="assets/scripts/showPassword.js"></script>
    </body>
</html>