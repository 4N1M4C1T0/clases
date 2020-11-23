<?php

class Database
{
    public static function Connect()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=trabajo2;charset=utf8', 'root', '2110');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}