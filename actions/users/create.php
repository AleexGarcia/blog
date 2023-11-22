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
$name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($email && $password && $name) {
  $state = createUser($db, $name, $email, $password);
  if ($state) {
    $user = getUserByEmailAndPassword($db, $email, $password);
    generateToken($user['name'], $user['user_id'], $user['user_type']);
  }
} else {
  header('Location: /blog/register.php?error=Inputs invalidos!');
  exit;
}
