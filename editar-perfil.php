<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/error.component.php');
isLoggedIn($currentUser);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/editar-perfil.css">
    <title>Editar perfil</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
        <?php 
        require_once('./modules/pdo.module.php');
        require_once('./modules/user.module.php');
        $db = createPdo('db_sistema_blog','localhost','root','');
        $id = isset($_GET['id']) ? $_GET['id'] : $currentUser['user_id'];
        $user = getUserById($db, $id);
        ?>
        <form class="editar-perfil" action="./actions/users/update.php" method="post">
            <legend>Atualizar perfil</legend>
            <input hidden name="user_id" type="number" value="<?php echo $user['user_id'] ?>">
            <input hidden name="user_type" type="text" value="<?php echo $user['user_type'] ?>">
            <div class="editar-perfil__input-box">
                <label for="name">Nome:</label>
                <input value="<?php echo $user['name']  ?>" id="name" name="name" type="text">
            </div>
            <div class="editar-perfil__input-box">
                <label for="email">Email:</label>
                <input value="<?php echo $user['email'] ?>" id="email" name="email" type="email">
            </div>
            <div class="editar-perfil__input-box">
                <label for="password">Nova senha:</label>
                <input id="password" name="password" type="password">
            </div>
            <button class="button" type="submit">Salvar alterações</button>
            <?php errorComponent() ?>
        </form>
    </main>
    <?php
    footerComponent();
    ?>
</body>

</html>