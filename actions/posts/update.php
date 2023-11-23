<?php

require_once('../../modules/pdo.module.php');
require_once('../../modules/post.module.php');
require_once('../../modules/file.module.php');

$db = createPdo('db_sistema_blog', 'localhost', 'root', '');

$post_id = filter_input(INPUT_POST, 'post_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$currentImage = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$maintext = filter_input(INPUT_POST, 'maintext', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$photo = $_FILES['photo'];

if ($photo['name'] != NULL) {
    if($post_id && $title && $maintext && $currentImage){
        $url =  movePhoto($photo);
        updatePost($db,$title,$url,$maintext,$post_id);
        deletePhoto($currentImage);
        header('Location: /blog/index.php');
        exit;
    }else{
        header('Location: /blog/editar-post.php?error=Inputs invalidos!');
        exit;
    }
}else{
    if($post_id && $title && $maintext ){
        updatePost($db,$title,null,$maintext,$post_id);
        header('Location: /blog/index.php');
        exit;
    }else{
      header('Location: /blog/editar-post.php?error=Inputs invalidos!');
        exit;
    }
}
