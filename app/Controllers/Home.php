<?php

namespace App\Controllers;

use App\Models\KehilanganModel;
use App\Models\TemuanModel;

class Home extends BaseController
{
    public function index()
    {
        $temuanModel = new TemuanModel();
        $data['temuans'] = $temuanModel->findAll();
        $model = new KehilanganModel();
        $data['kehilangan'] = $model->findAll();

        return view('home', $data);
    }
}
