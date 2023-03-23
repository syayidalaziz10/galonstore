<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = new Produk();
        $data = [
            'tampildata' => $produk->tampildata()->getResult()
        ];

        echo View('produk', $data);
    }
}
