<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/post.component.php');

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/post-page.css">
    <title>Post</title>
</head>

<body>
    <?php headerComponent($currentUser) ?>
    <?php
    require_once('./modules/post.module.php');
    require_once('./modules/pdo.module.php');
    $db = createPdo('db_sistema_blog', 'localhost', 'root', '');
    $post_id = $_GET['id'];
    $post = getPostById($db, $post_id);
    ?>
    <main>
        <section class="post-page">
            <a href="./index.php">Voltar</a>
            <div class="conteudo-principal">
                <?php postComponent($post) ?>
            </div>
        </section>
        <section class="comentarios">
            <h2>Comentarios: </h2>
            <form class="comentario-form" id="comentario_form" action="./actions/posts/comentarios/create.php" method="post">
                <?php
                if ($currentUser) {
                    echo "<input hidden name='user_id' type='text' value='{$currentUser['user_id']}'>";
                }
                echo "<input hidden name='post_id' type='text' value='{$post_id}'>"
                ?>
                <textarea id="comentario" required name="comentario" cols="30" rows="5" maxlength="250"></textarea>
                <button class="button" type="submit">Adicionar comentário</button>
            </form>
            <ul class="comentarios__list">
                <?php
                require_once('./modules/commentaries.module.php');
                $commentaties = getAllCommentsByPostId($db, $post_id);
                if (!empty($commentaties)) {
                    foreach ($commentaties as $comment) {
                        echo  "<li>
                            <p>{$comment['comentario']}</p>";
                       if($currentUser) echo "<a href='./actions/posts/comentarios/delete.php?post_id={$post_id}&id={$comment['id']}'>Excluir</a>";
                        echo "</li>";
                    }
                }
                ?>
            </ul>
        </section>
    </main>
    <?php footerComponent() ?>
</body>
</html>