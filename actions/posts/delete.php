<?php
    require_once('../../modules/pdo.module.php');
    require_once('../../modules/post.module.php');
    require_once('../../modules/file.module.php');

    $db = createPdo('db_sistema_blog', 'localhost', 'root', '');

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if($id){
        $post = getPostById($db,$id);
        $url = $post['photo'];
        deletePostById($db,$id);
        deletePhoto($url);
        header('Location: /blog/gerenciar-posts.php');
        exit;
    }else{
        header('Location: /blog/gerenciar-posts.php?error=Erro ao deletar post!');
    }