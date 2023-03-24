<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = new Pesanan();
        $data = [
            'tampildata' => $pesanan->tampildata()->getResult()
        ];

        echo View('pesanan', $data);
    }
}
