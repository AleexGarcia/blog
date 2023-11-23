<?php

require_once('../../../modules/pdo.module.php');
require_once('../../../modules/commentaries.module.php');


$db = createPdo('db_sistema_blog', 'localhost', 'root', '');

if (isset($_GET['id']) && isset($_GET['post_id'])) {
    $commentId = $_GET['id'];
    $postId = $_GET['post_id'];
    deleteCommentById($db,$commentId);
    header("Location: /blog/post.php?id={$postId}");
    exit;
}else{
    header("Location: /blog/post.php?id={$postId}&error=parametrosinvalidos");
    exit;
}
