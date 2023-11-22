<?php

function createPdo($db_name, $host, $user, $password)
{

    $db = new PDO("mysql:dbname=" . $db_name . ";host=" . $host, $user, $password);
    return $db;
}

