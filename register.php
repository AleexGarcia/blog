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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <title>Cadastro</title>
</head>

<body>
    <?php 
        headerComponent($currentUser);
    ?>
    <main>
        <form class="auth" action="./actions/users/create.php" method="post">
            <legend>Cadastrar</legend>
            <label for="name">
                Nome:
                <input id="name" name="name" type="text">
            </label>
            <label for="email">
                Email:
                <input id="email" name="email" type="email">
            </label>
            <label for="password">
                Senha:
                <input id="password" name="password" type="password">
            </label>
            <div>
                <button class="button" type="submit">Cadastrar</button>
                <a href="login.php">Ja possui cadastro? </a>
            </div>
            <?php errorComponent() ?>
        </form>
    </main>
    <?php 
    footerComponent();
    ?>
</body>

</html>