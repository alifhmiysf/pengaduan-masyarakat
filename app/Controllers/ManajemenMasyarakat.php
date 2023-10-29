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

    public function create()
    {
        // Membuat data masyarakat baru
        $data = $this->request->getPost();

        $validation = \Config\Services::validation();
        $validation->run($data, 'masyarakat');

        if ($validation->hasErrors()) {
            return $this->fail($validation->getErrors());
        } else {
            $this->MasyarakatModel->save($data);
            return $this->respondCreated($data, 'Masyarakat berhasil ditambahkan.');
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
}
