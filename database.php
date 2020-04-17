<?php

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}

function connect()
{
    $dsn = 'mysql:host=otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=oib115zny150btge;charset=utf8mb4;';
    $username = 'uw951052y6bjf31x';
    $password = 'plk0b8l7420qmd4b';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;
}