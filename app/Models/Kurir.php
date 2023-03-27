<?php

namespace App\Models;

use CodeIgniter\Model;

class Kurir extends Model
{

    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'username', 'password', 'no_telpon', 'email', 'id_level'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('user')->where('id_level', 2)->get();
    }
}
