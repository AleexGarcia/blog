<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/big-post.component.php');
require_once('./components/small-post.component.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BLOG</title>
</head>

<body>
    <?php headerComponent($currentUser) ?>
    <main>
        <section class="posts">
            <?php
            bigPostComponent(1, 'Titulo - 1');
            echo "<div class='small-posts'>";
                smallPostComponent(2, 'Titulo - 2');
                smallPostComponent(3, 'Titulo - 3');
                smallPostComponent(4, 'Titulo - 4');
                smallPostComponent(5, 'Titulo - 5');
            echo '</div>';
            ?>
        </section>
    </main>
    <?php footerComponent() ?>
</body>



</html>