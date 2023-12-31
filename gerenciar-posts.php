<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/error.component.php');
require_once('./components/big-post.component.php');
isLoggedIn($currentUser);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <link rel="stylesheet" href="./assets/css/post-cards.css">
    <link rel="stylesheet" href="./assets/css/gerenciar-posts.css">
    <title>Gerenciar Posts</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
        <section>
            <div class="top-box">
                <h1>Gerenciar postagens</h1>
                <a class="button" href="./criar-post.php">Criar novo post</a>
            </div>
            <div>
                <div>
                    <?php errorComponent() ?>
                    <h1>Meus posts</h1>
                    <div class="posts-list">
                        <?php
                        require_once('./modules/pdo.module.php');
                        require_once('./modules/post.module.php');
                        $db = createPdo('db_sistema_blog', 'localhost', 'root', '');
                        if ($currentUser['user_type'] == 'admin') {
                            $allposts = getAllPosts($db);
                        }

                        $myPosts = getAllPostsByUser($db, $currentUser['user_id']);

                        if (!empty($myPosts)) {
                            foreach ($myPosts as $index => $post) {
                        ?>
                                <div class="gerenciar-post-card">
                                    <div class="controls">
                                        <a href='./editar-post.php?id=<?php echo $post['id']; ?>'><img src='./assets/imgs/editar.svg' alt='Editar' /></a>
                                        <a href='./actions/posts/delete.php?id=<?php echo $post['id']; ?>'><img src='./assets/imgs/lixeira.svg' alt='Excluir' /></a>
                                    </div>
                                    <?php bigPostComponent($post['id'], $post['title'], $post['photo']); ?>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <p>Não há nenhum post realizado.</p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                if ($currentUser['user_type'] == 'admin') {
                    $allposts = getAllPosts($db);
                ?>
                    <div>
                        <h1>Todos os posts</h1>
                        <div class="posts-list">
                            <?php if (!empty($allposts)) {
                                foreach ($allposts as $index => $post) {
                            ?>
                                    <div class="gerenciar-post-card">
                                        <div class="controls">
                                            <a href='./editar-post.php?id=<?php echo $post['id']; ?>'><img src='./assets/imgs/editar.svg' alt='Editar' /></a>
                                            <a href='./actions/posts/delete.php?id=<?php echo $post['id']; ?>'><img src='./assets/imgs/lixeira.svg' alt='Excluir' /></a>
                                        </div>
                                        <?php bigPostComponent($post['id'], $post['title'], $post['photo']); ?>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <p>Não há nenhum post realizado.</p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php
    footerComponent();
    ?>
</body>

</html>