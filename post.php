<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php headerComponent($currentUser) ?>
    <?php
    $id = $_GET['id'];
    ?>
    <main>
        <section class="post-page">
            <a href="./index.php">Voltar</a>
            <div class="conteudo-principal">
                <h2>Titulo</h2>
                <img class="conteudo-principal__img" src="./assets/imgs/default.png" alt="">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos impedit eligendi magni quae inventore reiciendis, saepe repellendus iure fugit possimus veniam repudiandae quos quis aliquam incidunt suscipit placeat vero harum.
                </p>

            </div>
        </section>
        <section class="comentarios">
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
        </section>
    </main>
    <?php footerComponent() ?>
</body>

</html>