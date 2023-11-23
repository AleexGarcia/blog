<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/error.component.php');
require_once('./components/small-post.component.php');
require_once('./components/form-post.component.php');
isLoggedIn($currentUser);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <link rel="stylesheet" href="./assets/css/form-post.css">
    <title>Criar Postagem</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
       <?php formPostComponent('./actions/posts/create.php',$currentUser) ?>
    </main>
    <?php
    footerComponent();
    ?>
</body>

</html>