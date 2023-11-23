<?php
    require_once('../../modules/pdo.module.php');
    require_once('../../modules/user.module.php');
    require_once('../../modules/post.module.php');

    $db = createPdo('db_sistema_blog','localhost','root','');
    $user_id = isset($_GET['id']) ? $_GET['id'] : null;

    if($user_id){
        deletePostsByUserId($db,$user_id);
        deleteUserById($db,$user_id);
        header('Location: /blog/gerenciar-usuarios.php');
        exit;
    }else{
        header('Location: /blog/gerenciar-usuarios.php?error=$Erro ao passar o id!');
        exit;
    }