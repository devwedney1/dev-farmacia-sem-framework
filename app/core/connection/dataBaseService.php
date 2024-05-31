<?php

class DatabaseConnection
{
    private static $instance;

    public static function getConnection($host, $user, $pass, $dbName)
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new \PDO("postgres:host=$host;dbname=$dbName, $user, $pass");
            }

            return self::$instance;
        } catch (PDOException $e) {
            return "Erro na conexão: " . $e->getMessage();
        }
    }
}
