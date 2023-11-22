<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/error.component.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
        <form class="auth" action="./actions/auth/login.php" method="post">
            <legend>Entrar</legend>
            <label for="email">
                Email:
                <input id="email" name="email" type="email">
            </label>
            <label for="password">
                Senha:
                <input id="password" name="password" type="password">
            </label>
            <div>
                <button class="button" type="submit">Login</button>
                <a href="register.php">Não é cadastrado?</a>
            </div>
            <?php errorComponent() ?>
        </form>
    </main>
    <?php 
    footerComponent();
    ?>
</body>

</html>