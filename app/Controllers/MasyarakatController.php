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

    
    // reset password masyarakat sisi admin
    public function showResetForm($id_masyarakat = null)
    {
        $data['id_masyarakat'] = $id_masyarakat;
        return view('/admin/manajemen_masyarakat', $data);
    }

    public function updater($id_masyarakat = null)
    {
        // Get data from the form
        $data = $this->request->getPost();

        // Run validation
        $validationRules = [
            'new_password'      => 'required|min_length[8]',
            'confirm_password'  => 'required|matches[new_password]',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Validation successful

        // Get existing user data
        $existingData = $this->MasyarakatModel->find($id_masyarakat);

        $salt = uniqid('', true);

        // Hash the new password
        $hashedPassword = password_hash($data['new_password'] . $salt, PASSWORD_BCRYPT);
        // Update the user data in the database
        $this->MasyarakatModel->update($id_masyarakat, [
            'password' => $hashedPassword,
            'salt' => $salt,
        ]);

        // Redirect to a suitable page after updating
        return redirect()->to('/admin/manajemen_masyarakat')->with('success', 'Password reset successfully.');
    }




    // reset password masyarakat sisi petugas
    public function showResetpw($id_masyarakat = null)
    {
        $data['id_masyarakat'] = $id_masyarakat;
        return view('/petugas/masyarakat', $data);
    }

    public function updatepw($id_masyarakat = null)
    {
        // Get data from the form
        $data = $this->request->getPost();

        // Run validation
        $validationRules = [
            'new_password'      => 'required|min_length[8]',
            'confirm_password'  => 'required|matches[new_password]',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Validation successful

        // Get existing user data
        $existingData = $this->MasyarakatModel->find($id_masyarakat);

        $salt = uniqid('', true);

        // Hash the new password
        $hashedPassword = password_hash($data['new_password'] . $salt, PASSWORD_BCRYPT);
        // Update the user data in the database
        $this->MasyarakatModel->update($id_masyarakat, [
            'password' => $hashedPassword,
            'salt' => $salt,
        ]);

        // Redirect to a suitable page after updating
        return redirect()->to('/petugas/masyarakat')->with('success', 'Password reset successfully.');
    }




    public function afterlogin()
    {
        return view('users/afterlogin');
    }
}
