<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PengaduanModel;

class PengaduanController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();

        if (!session()->getFlashdata('isLogin')) {
            session()->setFlashdata("pesan", "Anda Belum Login harap Login terlebih dahulu untuk mengakses semua fitur");
            return redirect()->to('/login');
        }
    }

    public function index()
    {
        if (!$this->session->has('adminislogin')) {
            // Redirect to the login page
            return redirect()->to('/auth/login');
        }
        // Mendapatkan semua data masyarakat
        $pengaduan = $this->PengaduanModel->findAll();

        // Cetak data untuk memeriksa struktur
        // print_r($pengaduan);

        $data = [
            'pengaduan' => $pengaduan,
        ];

        return view('admin/index', $data);
    }

    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $judul = $this->request->getPost('judul');
        // $nik = $this->request->getPost('NIK');
        $tanggal_pengaduan = $this->request->getPost('pengaduan');
        $isi_laporan = $this->request->getPost('isi_laporan');
        $foto = $this->request->getFile('foto');

        $newName = null; // Inisialisasi $newName dengan null

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads/', $newName); // Simpan foto ke direktori 'uploads'
        }
        $nik = $this->session->get('nik');
        $username = $this->session->get('username');

        // Validasi berhasil, lanjutkan dengan penyimpanan data ke database atau operasi lainnya
        $data = [
            'id_masyarakat' => $this->session->get('id_masyarakat'),
            'username' => $username,
            'judul' => $judul,
            'nik' => $nik,
            'tanggal_pengaduan' => $tanggal_pengaduan,
            'isi_laporan' => $isi_laporan,
            'foto' => $newName, // Simpan nama file, atau NULL jika tidak ada file yang valid
        ];

        // var_dump($nik, $tanggal_pengaduan, $isi_laporan, $foto->getName()); 
        // die(); 
        $this->PengaduanModel->insert($data);

        return redirect()->to('/pengaduan-masyarakat/history')->with('success', 'Data berhasil disimpan.');
    }





    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id_pengaduan = null)
    {
        $model = new PengaduanModel();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'isi_laporan' => 'required',
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $model->update($this->request->getPost('id_pengaduan'), 
            [
                "judul" => $this->request->getPost('judul'),
                "isi_laporan" => $this->request->getPost('isi_laporan'),
            ]);
            return redirect()->to('/pengaduan-masyarakat/history')->with('success', 'Pengaduan berhasil diperbarui.');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id_pengaduan = null)
    {
        if ($id_pengaduan === null) {
        }
        $model = new PengaduanModel();
        $model->delete($id_pengaduan);
        return redirect()->to('/pengaduan-masyarakat/history')->with('success', 'Pengaduan berhasil dihapus.');

    }
}
