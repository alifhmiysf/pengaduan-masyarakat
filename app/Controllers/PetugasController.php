<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;

class PetugasController extends BaseController
{

    public function __construct()
    {
        $this->PetugasModel = new \App\Models\PetugasModel();
    }
    public function index()
    {
        // Mendapatkan semua data petugas
        $petugas = $this->PetugasModel->findAll();

        // Cetak data untuk memeriksa struktur
        // print_r($petugas);

        $data = [
            'petugas' => $petugas, // Use lowercase 'petugas' here
        ];
        return view('petugas/index', $data);
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
