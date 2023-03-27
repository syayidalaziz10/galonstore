<?php

namespace App\Controllers;

use App\Models\Kurir;
use CodeIgniter\Controller;

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

    public function create()
    {
        helper('form');

        $validation =  \Config\Services::validation();

        $model = new Kurir();
        if ($this->validate([
            'nama' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|max_lenght[10]',
            'no_telpon' => 'required|numeric',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ])) {
            $data = [
                'nama'  => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'no_telpon' => $this->request->getPost('no_telpon'),
                'password' => $this->request->getPost('password'),
                'id_level' => 2
            ];
            $model->save($data);
            return redirect()->to('/kurir');
        } else {
            return view('admin_create_kurir', ['validation' => $validation]);
        }
    }
}
