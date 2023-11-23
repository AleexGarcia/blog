<?php

require_once('../../../modules/pdo.module.php');
require_once('../../../modules/commentaries.module.php');


$db = createPdo('db_sistema_blog', 'localhost', 'root', '');
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$postId = filter_input(INPUT_POST, 'post_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);



if ($comentario && $postId) {
    createComment($db, $comentario, $postId, $user_id);
    header("Location: /blog/post.php?id={$postId}");
    exit;
}else{
    header("Location: /blog/post.php?id={$postId}&error=parametrosinvalidos");
    exit;
}
