<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\MasyarakatModel;

class MasyarakatController extends BaseController
{

    public function __construct()
    {
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
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
        $tanggapann = $this->TanggapanModel->findAll();

        $data = [
            'pengaduan' => $pengaduan,
            'tanggapann' => $tanggapann,
        ];

        return view('users/history', $data);
    }

    public function tanggapan()
    {
        // Mendapatkan id_pengaduan dari sesi atau sumber lainnya

        // Mengambil data tanggapan berdasarkan id_pengaduan
        $tanggapann = $this->TanggapanModel->where('id_pengaduan', $id_pengaduan)->findAll();

        // Cetak data untuk memeriksa struktur
        // print_r($pengaduan);

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'tanggapan' => $tanggapann,
        ];

        // Menampilkan view dengan data
        return view('users/history', $data);
    }

    public function resetpw()
{
    $MasyarakatModel = new MasyarakatModel();

    // Mendapatkan ID masyarakat dari formulir
    $id_masyarakat = $this->request->getPost('id_masyarakat');

    if (!$id_masyarakat) {
        return redirect()->to('/admin/manajemen_masyarakat')->with('error', 'Invalid user ID');
    }

    // Validasi form reset password
    $validationRules = [
        'new_password'      => 'required|min_length[8]',
        'confirm_password'  => 'required|matches[new_password]',
    ];

    if ($this->validate($validationRules)) {
        // Ambil password baru dari formulir
        $newPassword = $this->request->getPost('new_password');

        // Hash password baru
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

        // Simpan password baru ke dalam database bersamaan dengan salt
        $MasyarakatModel->where('id_masyarakat', $id_masyarakat)->update([
            'password' => $hashedPassword,
            'salt' => $newSalt,  // Ganti nilai salt jika diperlukan
        ]);

        return redirect()->to('/admin/manajemen_masyarakat')->with('success', 'Password reset successfully!');
    } else {
        // Jika validasi gagal, tampilkan form reset password dengan pesan kesalahan
        $data['validation'] = $this->validator;
        $data['id_masyarakat'] = $id_masyarakat;
        return view('admin/reset_password', $data);
    }
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
