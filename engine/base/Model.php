<?php

namespace engine\base;

/**
 * Class Model
 * @package engine\base
 */
abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db;
    }
}