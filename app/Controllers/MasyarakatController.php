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

    public function resetPassword($id_masyarakat)
    {
        $MasyarakatModel = new MasyarakatModel();

        // Validasi form reset password
        $validation = [
            'password'      => 'required|min_length[8]',
            'salt'  => 'required|matches[new_password]',
        ];

        if ($this->validate($validation)) {
            if ($this->validate($validation)) {
            // Ambil password baru dari formulir
            $newPassword = $this->request->getPost('password');
                
            // Hash password baru
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

            // Simpan password baru ke dalam database
            $MasyarakatModel->update($id_masyarakat, ['password' => $hashedPassword]);

            // Tampilkan pesan sukses
            echo "Password reset successfully!";
        } else {
            // Jika validasi gagal, tampilkan form reset password dengan pesan kesalahan
            return view('admin/reset_password');
        }
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
