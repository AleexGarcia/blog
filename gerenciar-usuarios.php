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
    <title>Gerenciar Usuários</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
        
    </main>
    <?php 
    footerComponent();
    ?>
</body>

</html>