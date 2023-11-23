<?php

function logout()
{
    session_start();
    session_destroy();
    header("Location: /blog/index.php");
    exit;
}

function generateToken($name, $user_id, $user_type)
{
    $secretKey = 'key-muito-muito-muito-secreta-mesmo';
    $tokenData = [
        'user_id' => $user_id,
        'username' => $name,
        'user_type' => $user_type
    ];

    // Codificar os dados em JSON e, em seguida, em base64
    $tokenDataEncoded = base64_encode(json_encode($tokenData));

    // Criar hash usando HMAC (sha256)
    $hash = hash_hmac('sha256', $tokenDataEncoded, $secretKey);

    // Concatenar dados codificados e hash para formar o token
    $token = $tokenDataEncoded . '.' . $hash;
    session_start();
    $_SESSION['token'] = $token;
    header('Location: /blog/index.php');
    exit;
   
}

function verifyToken($token, $secretKey)
{
    // Separar o token e o hash
    list($tokenData, $hash) = explode('.', $token, 2);

    // Verificar o hash
    $expectedHash = hash_hmac('sha256', $tokenData, $secretKey);

    if ($hash === $expectedHash) {
        // Decodificar os dados do token
        $decodedData = json_decode(base64_decode($tokenData), true);

        // Retornar os dados decodificados
        return $decodedData;
    }

    header('Location: /index.php');
    exit;
}


function isValidSession()
{
    $secretKey = 'key-muito-muito-muito-secreta-mesmo';
    if (isset($_SESSION['token'])) {
        $token = $_SESSION['token'];
        return verifyToken($token,$secretKey);
    }
    return null;
}

function isLoggedIn($currentUser)
{
    if(!$currentUser){
        header('Location: /blog/index.php');
        exit;
    }
}


