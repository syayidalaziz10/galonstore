<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $data = [
            'tampildata' => $user->tampildata()->getResult()
        ];

        echo view('user', $data);
    }
}
