<?php

namespace App\Controllers;
use App\Models\PengaduanModel;
use \Dompdf\Dompdf;
use App\Controllers\BaseController;

class LaporanController extends BaseController
{
    public function index()
    {
        return view('admin/laporan');
    }
}
