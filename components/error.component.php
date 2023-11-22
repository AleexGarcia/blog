<?php 

    function errorComponent(){
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            echo"<p class='mensagem-error'>{$error}</p>";
        }
    }