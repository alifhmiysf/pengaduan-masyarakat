<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;
use App\Models\MasyarakatModel;
use App\Models\PengaduanModel;

class PetugasController extends BaseController
{

    public function __construct()
    {
        $this->PetugasModel = new \App\Models\PetugasModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        $this->PengaduanModel = new \App\Models\PengaduanModel();
    }
    public function index()
    {
        // Mendapatkan semua data masyarakat
        $pengaduan = $this->PengaduanModel->findAll();

        // Cetak data untuk memeriksa struktur
        // print_r($pengaduan);

        $data = [
            'pengaduan' => $pengaduan,
        ];
        return view('petugas/index', $data);
    }


    public function tambahpetugas()
{
    // Mendapatkan semua data petugas
    $petugas = $this->PetugasModel->findAll();

    // Mengambil data dari formulir menggunakan request
    $data = $this->request->getPost();

    // Cetak data untuk memeriksa struktur
    // print_r($petugas);

    // Generate salt untuk keamanan password
    $salt = uniqid('', true);

    // Hash password dengan password_hash
    $password = password_hash($data['password'] . $salt,PASSWORD_BCRYPT);

    // Inisialisasi model PetugasModel
    $PetugasModel = new PetugasModel();

    // Menyimpan data ke database menggunakan model
    $PetugasModel->save([
        'nama_petugas' => $data['nama_petugas'],
        'username' => $data['username'],
        'password' => $password,
        'salt' => $salt,
        'telepon' => $data['telepon'],
        'level' => $data['level'], 
    ]);

    return redirect()->to('/admin/petugas')->with('success', 'Petugas added successfully');
}


    public function masyarakat()
    {
        // Mendapatkan semua data masyarakat
        $masyarakat = $this->MasyarakatModel->findAll();

        $data = [
            'masyarakat' => $masyarakat,
        ];

        return view('petugas/masyarakat', $data);
    }

    public function verifikasi()
    {
        return view('petugas/verifikasi');
    }
}
