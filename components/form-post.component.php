<?php
function formPostComponent($action, $currentUser, $post = null)
{
    if ($post) {
        echo "
            <form class='form-post' action='{$action}' method='post' enctype='multipart/form-data'>
            <legend>Edite uma nova postagem: </legend>
            <input hidden name='post_id' type='number' value='{$post['id']}'>
            <input hidden name='url' type='text' value='{$post['photo']}'>
            <div class='form-post-box'>
            <label for='title'>Titulo:</label>
            <input id='title' name='title' value='{$post['title']}' type='text'>
            </div>
            <div class='form-post-box__img'>
            <div>
                <img src='{$post['photo']}'>
            </div>
            <input accept='image/png, image/jpeg' id='photo' name='photo' type='file'>
            </div>
            <div class='form-post-box maintext'>
            <label for='maintext'>Conteúdo principal:</label>
            <textarea name='maintext' id='maintext' cols='30' rows='10'>{$post['maintext']}</textarea>
            </div>
            <button class='button' type='submit'>Salvar postagem</button>";
        errorComponent();
        echo "</form>";
    } else {
        echo "
        <form class='form-post' action='{$action}' method='post' enctype='multipart/form-data'>
        <legend>Crie uma nova postagem: </legend>
        <input hidden name='user_id' type='number' value='{$currentUser['user_id']}'>
        <div class='form-post-box'>
        <label for='title'>Titulo:</label>
        <input id='title' name='title'type='text'>
        </div>
        <div class='form-post-box__img'>
        <div>
            <img src='./assets/imgs/default.png'>
        </div>
        <input accept='image/png, image/jpeg' id='photo' name='photo' type='file'>
        </div>
        <div class='form-post-box maintext'>
        <label for='maintext'>Conteúdo principal:</label>
        <textarea name='maintext' id='maintext' cols='30' rows='10'></textarea>
        </div>
        <button class='button' type='submit'>Salvar postagem</button>";
        errorComponent();
        echo "</form>";
    }
}
