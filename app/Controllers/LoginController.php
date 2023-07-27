<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    function index()
    {
        return view('login');
    }

    function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('email', $email)->first();

        if (empty($user)) return view('login', ['error' => 'Email atau kata sandi salah']);
        if (!password_verify($password ?? '', $user['password'])) return view('login', ['error' => 'Email atau kata sandi salah']);


        $session = session();
        $session->set([
            'id' => $user['id'],
            'email' => $user['email'],
            'logged_in' => true
        ]);

        // Redirect ke halaman dashboard atau halaman yang sesuai setelah login berhasil
        return redirect()->to(base_url('beranda'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        // Redirect ke halaman home setelah logout berhasil
        return redirect()->to(base_url());
    }
}
