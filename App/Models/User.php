<?php

namespace App\Models;

use App\Connection;
use MF\Model\Model;

class User extends Model
{

    public function insertUser()
    {
    }

    public function getUsers()
    {

        $sql = "SELECT id, nome, email FROM usuarios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }
}
