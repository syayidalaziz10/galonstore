<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Pesanan extends Model{
        function __construct(){
            $this->db = db_connect();
        }
        function tampildata(){
            return $this->db->table('pesanan')->get();
        }
    }
