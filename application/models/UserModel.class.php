<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018-04-09
 * Time: 19:03
 */
class UserModel extends Model
{

    protected $table = 'wa_admin';
    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function getUsers(){

        $sql = "select * from $this->table";

        $users = $this->db->getAll($sql);

        return $users;

    }

}