<?php

function bigPostComponent($id,$titulo,$img = 'assets/imgs/default.png')
{
    echo "<div class='big-post-card'>
            <div class='big-post-card__imagem'>
                <img src='{$img}'/>
            </div>
            <div class='big-post-card__conteudo'>
            <h3><a href='post.php?id={$id}'>{$titulo}</a></h3> 
            </div>
        </div>";

};

