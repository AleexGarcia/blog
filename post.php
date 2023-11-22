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
              <?php  postComponent($post) ?>
            </div>
        </section>
        <!-- <section class="comentarios">
            <h2>Comentarios: </h2>
            <form action="" method="post">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button class="button" type="submit">Adicionar comentário</button>
            </form>
            <ul class="comentarios__list">
                <li>
                    <p>Comentario</p>
                </li>
                <li>
                    <p>Comentario</p>
                </li>
                <li>
                    <p>Comentario</p>
                </li>
            </ul>
        </section> -->
    </main>
    <?php footerComponent() ?>
</body>

</html>