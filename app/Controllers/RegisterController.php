<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }
    function store()
    {
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password
        ];

        if (!isset($data['password'])) return redirect()->to(base_url('/register'));

        $model = new UserModel();
        $model = $model->insert(array_merge($data, ['password' => password_hash($data['password'] ?? '', PASSWORD_BCRYPT)]));

        return view('login');
    }
}
