<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\MasyarakatModel;

class ManajemenMasyarakat extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
    }

    public function index()
    {
        // Mendapatkan semua data masyarakat
        $masyarakat = $this->MasyarakatModel->findAll();

        $data = [
            'masyarakat' => $masyarakat,
        ];

        return view('admin/masyarakat', $data); // Ganti 'masyarakat/index' dengan nama view Anda
    }

    public function show($id = null)
    {
        // Mendapatkan data masyarakat berdasarkan ID
        $masyarakat = $this->MasyarakatModel->find($id);

        if ($masyarakat) {
            return $this->respond($masyarakat);
        } else {
            return $this->failNotFound('Masyarakat tidak ditemukan.');
        }
    }

    public function update($id = null)
    {
        // Memperbarui data masyarakat berdasarkan ID
        $data = $this->request->getRawInput();

        $validation = \Config\Services::validation();
        $validation->run($data, 'masyarakat');

        if ($validation->hasErrors()) {
            return $this->fail($validation->getErrors());
        } else {
            $data['id_masyarakat'] = $id; // Set ID

            $this->MasyarakatModel->save($data);
            return $this->respondUpdated($data, 'Masyarakat berhasil diperbarui.');
        }
    }

    public function delete($id = null)
    {
        // Menghapus data masyarakat berdasarkan ID
        $masyarakat = $this->MasyarakatModel->find($id);

        if ($masyarakat) {
            $this->MasyarakatModel->delete($id);
            return $this->respondDeleted($masyarakat, 'Masyarakat berhasil dihapus.');
        } else {
            return $this->failNotFound('Masyarakat tidak ditemukan.');
        }
    }
    



    
    // reset password
    public function resetPassword()
    {
        // Validasi form
        $validation = \Config\Services::validation();
        $validation->setRules([
            'new_password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[new_password]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->to('/admin')->with('error', $validation->listErrors());
        }

        // Ambil data dari form
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Lakukan validasi lainnya jika diperlukan

        // Update password di database (gantilah ini dengan logika sesuai kebutuhan)
        $userId = 1; // Gantilah dengan id user yang sesuai
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Simpan password baru ke database
        $userModel = new \App\Models\UserModel(); // Sesuaikan dengan model dan tabel yang sesuai
        $userModel->update($userId, ['password' => $hashedPassword]);

        // Tampilkan pesan sukses atau redirect ke halaman lain
        return redirect()->to('/admin')->with('success', 'Password berhasil direset.');
    }
}
