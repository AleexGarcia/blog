<?php

require_once('../../modules/pdo.module.php');
require_once('../../modules/post.module.php');
require_once('../../modules/file.module.php');

$db = createPdo('db_sistema_blog', 'localhost', 'root', '');

$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$maintext = filter_input(INPUT_POST, 'maintext', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$photo = $_FILES['photo'];

if ($photo['name'] != NULL && $user_id && $title && $maintext ) {
    $maintext = nl2br($maintext);
    $url =  movePhoto($photo);
    createPost($db,$title,$url,$maintext,$user_id);
    header('Location: /blog/index.php');
}else{
    header('Location: /blog/criar-post.php?error=Inputs invalidos!');
}

