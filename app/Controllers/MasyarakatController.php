<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class MasyarakatController extends BaseController
{

    public function __construct()
    {
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->session = session();
    }

    public function index()
    {
        return view('users/index');
    }


    public function history()
    {
        // Mendapatkan semua data pengaduan untuk pengguna yang saat ini login
        $id_masyarakat = $this->session->get('id_masyarakat');
        $pengaduan = $this->PengaduanModel->where("id_masyarakat", $id_masyarakat)->findAll();

        $data = [
            'pengaduan' => $pengaduan,
        ];

        return view('users/history', $data);
    }

    public function tanggapan()
    {
        // Mendapatkan id_pengaduan dari sesi
        $id_pengaduan = session()->get('id_pengaduan');

        // Membuat instance model TanggapanModel
        $tanggapann = $this->TanggapanModel->where('id_pengaduan', $id_pengaduan)->findAll();

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'tanggapann' => $tanggapann,
        ];

        var_dump($tanggapann);

        // Menampilkan view dengan data
        return view('users/tanggapan_after_login', $data);
    }










    public function afterlogin()
    {
        return view('users/afterlogin');
    }
    public function tanggapan_after_login()
    {
        return view('users/tanggapan_after_login');
    }
}
