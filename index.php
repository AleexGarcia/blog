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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/post-cards.css">
    <title>BLOG</title>
</head>

<body>
    <?php headerComponent($currentUser) ?>
    <main>
        <section class="posts">
            <?php
            require_once('./modules/post.module.php');
            require_once('./modules/pdo.module.php');
            $db = createPdo('db_sistema_blog', 'localhost', 'root', '');

            $posts = getAllPosts($db);
            if (!empty($posts)) {
                bigPostComponent($posts[0]['id'], $posts[0]['title'], $posts[0]['photo']);
                echo "<div class='small-posts'>";
                foreach ($posts as $index => $post) {
                    if ($index > 0 && $index < 5) {
                        smallPostComponent($post['id'], $post['title'], $post['photo']);
                    }
                }
                echo '</div>';
            } else {
                echo '<p>Erro ao acessar o servidor!</p>';
            }
            ?>
        </section>
        <?php if (sizeof($posts) > 5) { ?>
        <section class="other-posts">
            <h3>Mais postagens</h3>
            <div class="other-posts__cards">
                <?php
                if (!empty($posts)) {
                    foreach ($posts as $index => $post) {
                        if ($index >=  5) {
                            echo"<div class='other-card'>";
                            bigPostComponent($post['id'], $post['title'], $post['photo']);
                            echo"</div>";
                        }
                    }
                } else {
                    echo '<p>Erro ao acessar o servidor!</p>';
                }
                ?>
            </div>
        </section>
      <?php }  ?>
    </main>
    <?php footerComponent() ?>
</body>



</html>