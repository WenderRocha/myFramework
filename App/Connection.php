<?php

namespace App;

class Connection
{
    public static function getDb()
    {
        try {

            $conn = new \PDO("mysql:host=localhost;dbname=marketdrop;charset=utf8", "root", "");
            return $conn;
        } catch (\PDOException $error) {
            echo "Erro ao conectar ao banco de dados {$error->getMessage()}";
        }
    }
}