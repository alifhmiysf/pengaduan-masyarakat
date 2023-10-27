<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasyarakatModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        return view('layout/login');
    }

    public function registrasi()
    {
        return view('layout/register');
    }


    public function valid_register()
    {
        // Tangkap data dari form
        $data = $this->request->getPost();
        
        // Jalankan validasi
        $this->validation->run($data, 'register');
        
        // Cek errornya
        $errors = $this->validation->getErrors();
        
        // Jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }
        
        // Jika tidak ada error 
        
        // Buat salt
        $salt = uniqid('', true);
        
        // Hash password dengan password_hash
        $password = password_hash($data['password'].$salt, PASSWORD_BCRYPT);
    
        // Inisialisasi model MasyarakatModel
        $masyarakatModel = new MasyarakatModel();
    
        // Simpan data ke tabel masyarakat
        $masyarakatModel->save([
            'nik' => $data['nik'],
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'telepon' => $data['telepon']
        ]);
    
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }
    


    
    public function logout()
    {

    }
    
}
