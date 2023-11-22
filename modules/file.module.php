<?php


function movePhoto($photo){
    $photoName = time() . '.jpg';
    $localRef = "../../assets/imgs/posts/$photoName";
    move_uploaded_file($photo['tmp_name'], $localRef);
    $url = "./assets/imgs/posts/$photoName";
    return $url;
}

function deletePhoto($url) {
    $localRef = '../.'.$url;
    if (file_exists($localRef)) {
        if (unlink($localRef)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}