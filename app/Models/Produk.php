<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Produk extends Model{
        function __construct(){
            $this->db = db_connect();
        }
        function tampildata(){
            return $this->db->table('produk')->get();
        }
    }
