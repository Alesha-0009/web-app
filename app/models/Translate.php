<?php
namespace app\models;

use engine\base\Model;

class Translate extends Model
{
    public function compareTranslate($params= [])
    {
        $sql = "SELECT trans FROM `translate` WHERE 
                word LIKE '%{$params['word']}%' 
                AND direction LIKE '%{$params['direction']}%'";

        return $this->db->column($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `translate`";
        return $this->db->row($sql);
    }

    public function add($params = [])
    {
        $sql = "INSERT INTO `translate` (`word`,`trans`,`direction`) 
                VALUES ('{$params['word']}','{$params['trans']}','{$params['direction']}')";

        return $this->db->query($sql);
    }

    public function getRowById($params = [])
    {
       $sql = "SELECT * FROM `translate` WHERE id = :id";
       return $this->db->row($sql,$params);
    }

    public function updateRow($params = [])
    {
        $sql = "UPDATE `translate` SET `word` = '{$params['word']}',
                `trans` = '{$params['trans']}',`direction` = '{$params['direction']}'
                WHERE id = {$params['id']}";

        return $this->db->query($sql);
    }

    public function deleteRow($params = [])
    {
        $sql = "DELETE FROM `translate` WHERE id = :id";
        return $this->db->query($sql,$params);
    }
}