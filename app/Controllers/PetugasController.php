<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PetugasController extends BaseController
{
    public function index()
    {
        return view('petugas/index');
    }
    public function masyarakat()
    {
        return view('petugas/masyarakat');
    }

    public function verifikasi()
    {
        return view('petugas/verifikasi');
    }
}
