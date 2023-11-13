<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TanggapanModel;
use App\Models\PengaduanModel;

class AdminController extends BaseController
{



    // Model instances
    protected $TanggapanModel;
    protected $PengaduanModel;

    public function __construct()
    {
        // Load models in the constructor
        $this->TanggapanModel = new TanggapanModel();
        $this->PengaduanModel = new PengaduanModel();
        $this->TanggapanModel = new TanggapanModel();
        $this->PetugasModel = new \App\Models\PetugasModel();
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        return view('admin/index');
    }

    // public function verval()
    // {
    //     return view('admin/verifikasi');
    // }

    public function petugas()
    {
        // Mendapatkan semua data petugas
        $petugas = $this->PetugasModel->findAll();

        // Cetak data untuk memeriksa struktur
        // print_r($petugas);

        $data = [
            'petugas' => $petugas, // Use lowercase 'petugas' here
        ];
        return view('admin/petugas', $data);
    }

    public function masyarakat()
    {
        return view('admin/masyarakat');
    }



    //     public function tanggapan()
    // {
    //     // Ambil data dari formulir
    //     $tanggal_tanggapan = $this->request->getPost('tanggal_tanggapan');
    //     $tanggapan = $this->request->getPost('tanggapan');
    //     $id_petugas = $this->request->getPost('id_petugas');

    //     // Validasi formulir
    //     $validationRules = [
    //         'tanggal_tanggapan' => 'required|valid_date',
    //         'tanggapan' => 'required',
    //         'id_petugas' => 'required|numeric',
    //     ];

    //     $validation = \Config\Services::validation();

    //     if (!$validation->run($this->request->getPost(), $validationRules)) {
    //         // Tangani kesalahan validasi
    //         return redirect()->back()->withInput()->with('error', $validation->listErrors());
    //     }

    //     // Persiapkan data untuk disimpan
    //     $data = [
    //         'tanggal_tanggapan' => esc($tanggal_tanggapan),
    //         'tanggapan' => esc($tanggapan),
    //         'id_petugas' => (int) $id_petugas,
    //     ];

    //     // Lakukan penyisipan data
    //     if (!$this->TanggapanModel->insert($data)) {
    //         // Tangani kesalahan penyisipan
    //         log_message('error', 'Gagal menyimpan data tanggapan.');
    //         return redirect()->to('/admin')->with('error', 'Gagal menyimpan data tanggapan.');
    //     }

    //     // Berhasil disimpan, kembalikan ke halaman admin dengan pesan sukses
    //     return redirect()->to('/admin')->with('success', 'Data tanggapan berhasil disimpan.');
    // }

    public function Tanggapan($id_pengaduan = null)
    {
        $tanggal_tanggapan = $this->request->getPost('tanggal_tanggapan');
        $tanggapan = $this->request->getPost('tanggapan');
        $id_petugas = $this->request->getPost('id_petugas');

        // Validasi formulir
        $validationRules = [
            'tanggal_tanggapan' => 'required|valid_date',
            'tanggapan' => 'required',
            'id_petugas' => 'required|numeric',
        ];

        $validation = \Config\Services::validation();

        $validation->setRules($validationRules);

        if (!$validation->run($this->request->getPost())) {
            // Tangani kesalahan validasi
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        // Persiapkan data untuk disimpan
        $data = [
            'id_pengaduan' => $id_pengaduan,
            'tanggal_tanggapan' => esc($tanggal_tanggapan),
            'tanggapan' => esc($tanggapan),
            'id_petugas' => (int) $id_petugas,
        ];

        // Lakukan penyisipan data tanggapan
        if (!$this->TanggapanModel->insert($data)) {
            // Tangani kesalahan penyisipan
            log_message('error', 'Gagal menyimpan data tanggapan.');
            return redirect()->to('/admin')->with('error', 'Gagal menyimpan data tanggapan.');
        }

        // Berhasil disimpan, kembalikan ke halaman admin dengan pesan sukses
        return redirect()->to('/admin')->with('success', 'Data tanggapan berhasil disimpan.');
    }
}
