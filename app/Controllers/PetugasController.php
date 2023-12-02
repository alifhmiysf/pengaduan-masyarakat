<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;
use App\Models\MasyarakatModel;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class PetugasController extends BaseController
{

    public function __construct()
    {
        $this->PetugasModel = new \App\Models\PetugasModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();
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
        $password = password_hash($data['password'] . $salt, PASSWORD_BCRYPT);

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
        $masyarakat = $this->MasyarakatModel->findAll();

        $data = [
            'masyarakat' => $masyarakat,
        ];

        return view('petugas/masyarakat', $data);
    }

    public function terima($id_pengaduan)
    {
        // echo $id_pengaduan; 
        $this->PengaduanModel->set(['status' => '1'])->where('id_pengaduan', $id_pengaduan)->update();

        return redirect()->to('/petugas')->with('success', 'Pengaduan diterima.');
    }

    public function tolak($id_pengaduan)
    {
        // echo $id_pengaduan; 
        $this->PengaduanModel->set(['status' => '3'])->where('id_pengaduan', $id_pengaduan)->update();

        return redirect()->to('/petugas')->with('danger', 'Pengaduan ditolak.');
    }

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
            return redirect()->to('/petugas')->with('error', 'Gagal menyimpan data tanggapan.');
        }

        //mengubah status
        $pengaduan = $this->PengaduanModel->find($id_pengaduan);
        if ($pengaduan['status'] == '1') {
            $this->PengaduanModel->set(['status' => '2'])->where('id_pengaduan', $id_pengaduan)->update();
        }

        // Berhasil disimpan, kembalikan ke halaman admin dengan pesan sukses
        return redirect()->to('/petugas')->with('success', 'Data tanggapan berhasil disimpan.');
    }


    public function tambah_tanggapan($id_pengaduan)
    {
        $pengaduan = $this->PengaduanModel->find($id_pengaduan);
        if ($pengaduan['status'] == '1') {
            $this->PengaduanModel->set(['status' => '2'])->where('id_pengaduan', $id_pengaduan)->update();

            return redirect()->to('/petugas')->with('success', 'Tanggapan berhasil dikirim. Pengaduan selesai.');
        } else {
            return redirect()->to('/petugas')->with('warning', 'Pengaduan sudah selesai.');
        }
    }


}
