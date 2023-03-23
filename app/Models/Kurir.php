<?php

namespace App\Models;

use CodeIgniter\Model;

class Kurir extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }
    function tampildata()
    {
        return $this->db->table('kurir')->get();
    }
}
