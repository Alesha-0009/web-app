<?php

namespace app\models;

use engine\base\Model;

/**
 * Class User
 * @package app\models
 */
class User extends Model
{
    public function getUser($params=[])
    {
        $sql = "SELECT * FROM users WHERE email= :email AND password = :password";
        return $this->db->row($sql,$params);
    }
}