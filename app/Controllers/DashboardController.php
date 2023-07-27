<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url('login'));
        }

        // Tampilkan halaman dashboard
        return view('dashboard/index');
    }

    private function isLoggedIn()
    {
        $session = session();

        return $session->get('logged_in') === true;
    }
    public function beranda()
    {
        $temuanModel = new \App\Models\TemuanModel();
        $temuanData = $temuanModel->findAll();

        $kehilanganModel = new \App\Models\KehilanganModel();
        $kehilanganData = $kehilanganModel->findAll();

        $data = [
            'temuan' => $temuanData,
            'kehilangan' => $kehilanganData
        ];

        return view('dashboard/beranda', $data);
    }
}
