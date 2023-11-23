<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('./modules/auth.module.php');
$currentUser = isValidSession();
require_once('./components/header.component.php');
require_once('./components/footer.component.php');
require_once('./components/error.component.php');
require_once('./components/user.component.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Gerenciar Usuários</title>
</head>

<body>
    <?php
    headerComponent($currentUser);
    ?>
    <main>
        <div>
            <?php 
                require_once('./modules/pdo.module.php');
                require_once('./modules/user.module.php');
                $db = createPdo('db_sistema_blog','localhost','root','');
                $users = getAll($db);
                if(!empty($users)){
                    foreach($users as $user){
                        userComponent($user);
                    }
                }else{
                    echo "<p>Erro no servidor!</p>";
                }
            ?>
        </div>
    </main>
    <?php 
    footerComponent();
    ?>
</body>

</html>