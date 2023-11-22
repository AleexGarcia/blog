<?php

function createPdo($db_name, $host, $user, $password)
{
    try {
        $db = new PDO("mysql:dbname=" . $db_name . ";host=" . $host, $user, $password);
        return $db;
    } catch (PDOException $e) {
        echo "Erro ao tentar conectar ao banco de dados: " . $e->getMessage();
        die();
    }
}
