<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class MasyarakatController extends BaseController
{

    public function __construct()
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->session = session();
    }

    public function index()
    {
        return view('users/index');
    }


    public function history()
    {

        // Mendapatkan semua data masyarakat
        $pengaduan = $this->PengaduanModel->findAll();
        $pengaduan_masyarakat = $this->PengaduanModel->where("id_masyarakat", $this->session->get('id_masyarakat'))->first();


        // Cetak data untuk memeriksa struktur


        $data = [
            'pengaduan' => $pengaduan,
        ];

        return view('users/teshistory', $data);
    }
    public function tanggapan()
    {
        return view('users/tanggapan');
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
