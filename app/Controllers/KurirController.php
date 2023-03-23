<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Kurir;

class KurirController extends Controller
{
    public function index()
    {
        $kurir = new Kurir();
        $data = [
            'tampildata' => $kurir->tampildata()->getResult()
        ];

        echo view('kurir', $data);
    }
}
