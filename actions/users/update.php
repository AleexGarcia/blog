<?php
require_once('../../modules/user.module.php');
require_once('../../modules/auth.module.php');
require_once('../../modules/pdo.module.php');

$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_type =  filter_input(INPUT_POST, 'user_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$db = createPdo('db_sistema_blog','localhost','root','');

if ($email && $password && $name && $user_id && $user_type) {

    $state = updateUser($db, $name, $email, $password, $user_id);
    if ($state) {
      generateToken($name, $user_id, $user_type);
    }
} else {
    header('Location: /blog/editar-perfil.php?error=Inputs invalidos!');
    exit;
}
