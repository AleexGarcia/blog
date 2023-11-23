<?php

function postComponent($post)
{
    if ($post) {
        $maintext = nl2br($post['maintext']);
        echo "
            <h2>{$post['title']}</h2>
            <img class='conteudo-principal__img' src='{$post['photo']}' alt='Ilustração da postagem'>
            <p>{$maintext}</p>";
    } else {
        echo '<p>ID invalido! Post não encontrado!</p>';
    }
}
