<?php

function smallPostComponent($id,$titulo,$img = 'assets/imgs/default.png')
{
    echo "<div class='small-post-card'>
            <div class='small-post-card__imagem'>
                <img src='{$img}'/>
            </div>
            <div class='small-post-card__conteudo'>
            <h3><a href='post.php?id={$id}'>{$titulo}</a></h3> 
            </div>
        </div>";

};

