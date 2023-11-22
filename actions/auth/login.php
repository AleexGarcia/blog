<?php
require_once('../../modules/pdo.module.php');
require_once('../../modules/auth.module.php');
require_once('../../modules/user.module.php');

$db_name = 'db_sistema_blog';
$host = 'localhost';
$user = 'root';
$password = '';

$db = createPdo($db_name, $host, $user, $password);
$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($email && $password) {
    $user = getUserByEmailAndPassword($db, $email, $password);
    if ($user) {
        generateToken($user['name'], $user['user_id'], $user['user_type']);
    } else {
        header('Location: /blog/login.php?error=Usuário não encontrado!');
        exit;
    }
} else {
    header('Location: /blog/login.php?error=Inputs invalidos!');
    exit;
}
