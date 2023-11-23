<?php
function userComponent($user)
{
    echo "
    <div class='user-card'>
    <div class='controls'>
    <a href='./editar-perfil.php?id={$user['user_id']}'><img src='./assets/imgs/editar.svg' alt='Excluir' /></a>
    <a href='./actions/users/delete.php?id={$user['user_id']}'><img src='./assets/imgs/lixeira.svg' alt='Excluir' /></a>
    </div>
        <ul class='user-info'>
            <li class='user-name'>{$user['name']}</li>
            <li class='user-email'>{$user['email']}</li>
            <li class='user-email'>{$user['user_type']}</li>
        </ul>
    </div>";
}
