<?php
require_once('../../modules/user.module.php');
require_once('../../modules/auth.module.php');
require_once('../../modules/pdo.module.php');

$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$current_user_type =  filter_input(INPUT_POST, 'current_user_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_type_to_update =  filter_input(INPUT_POST, 'user_type_to_update', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$db = createPdo('db_sistema_blog', 'localhost', 'root', '');
//editor
if ($email && $password && $name && $user_id && $current_user_type) {
  if ($user_type_to_update) {
    updateUser($db, $name, $email, $password, $user_id, $user_type_to_update);
    if (isset($_GET['isUpdateProfile'])) {
      generateToken($name, $user_id, $user_type_to_update);
    }else{
      header('Location: /blog/gerenciar-usuarios.php');
      exit;
    }
  } else {
    $state = updateUser($db, $name, $email, $password, $user_id);
    if ($state) {
      generateToken($name, $user_id, $current_user_type);
    }
  }
} else {
  header('Location: /blog/editar-perfil.php?error=Inputs invalidos!');
  exit;
}
