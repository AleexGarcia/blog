<?php 

function createComment($db, $comment, $postId, $userId)
{
    $query = "INSERT INTO comentaries (comentario, post_id, user_id) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    return $stmt->execute([$comment, $postId, $userId]);
}

function getCommentById($db, $commentId)
{
    $query = "SELECT * FROM comentaries WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$commentId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllCommentsByPostId($db, $postId)
{
    $query = "SELECT * FROM comentaries WHERE post_id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$postId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateComment($db, $comment, $commentId)
{
    $query = "UPDATE comentaries SET comentario = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$comment, $commentId]);
}

function deleteCommentById($db, $commentId)
{
    $query = "DELETE FROM comentaries WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$commentId]);
}