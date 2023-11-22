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
        <section>
            <div>
                <h1>Gerenciar postagens</h1>
                <a class="button" href="">Criar novo post</a>
            </div>
            <div>
                <h3>Seus posts</h3>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    echo '<div>';
                    smallPostComponent(1, 'teste');
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>
    <?php
    footerComponent();
    ?>
</body>

</html>