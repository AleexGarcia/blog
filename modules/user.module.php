<?php

function createUser($db, $name, $email, $password)
{
    try {

        
        $user_type = 'editor';
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, email, password, user_type) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        return $stmt->execute([$name, $email, $hash_password, $user_type]);
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
           header('Location: /blog/register.php?error=Email já cadastrado!');
        } else {
            throw $e;
        }
    }
}

function getUserByEmailAndPassword($db, $email, $password)
{

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

function getAll($db)
{

    $query = "SELECT * FROM users";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function updateUser($db, $name, $password, $user_id)
{
    $query = "UPDATE users SET name = ?, password = ? WHERE user_id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $password, $user_id]);
}


function deleteUserById($db, $userId)
{
    $query = "DELETE FROM users WHERE user_id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId]);
}


function getUserById($db, $userId)
{
    $query = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

