<?php

function createPost($db, $title, $photo, $maintext, $userId)
{
    $query = "INSERT INTO posts (title, photo, maintext, user_id) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    return $stmt->execute([$title, $photo, $maintext, $userId]);
}

function getPostById($db, $postId)
{
    $query = "SELECT * FROM posts WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$postId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllPosts($db)
{
    $query = "SELECT * FROM posts";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllPostsByUser($db,$userId)
{
    $query = "SELECT * FROM posts WHERE user_id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updatePost($db, $title, $photo, $maintext, $postId)
{
    if($photo){
        $query = "UPDATE posts SET title = ?, photo = ?, maintext = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$title, $photo, $maintext, $postId]);
    }else{
        $query = "UPDATE posts SET title = ?, maintext = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$title, $maintext, $postId]);
    }

}

function deletePostById($db, $postId)
{
    $query = "DELETE FROM posts WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$postId]);
}
