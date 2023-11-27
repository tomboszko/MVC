<?php

class Database
{
    private static $connection = null;

    public static function getConnection()
    {
        if (self::$connection === null) {
            $host = 'localhost';
            $db = 'MVC';
            $user = 'toms';
            $pass = 'root';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            self::$connection = new PDO($dsn, $user, $pass, $options);
        }

        return self::$connection;
    }
}