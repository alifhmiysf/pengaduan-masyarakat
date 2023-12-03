<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasyarakatModel;
use App\Models\PetugasModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();

        $this->PetugasModel = new \App\Models\PetugasModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        if (session('id_masyarakat')) {
            return redirect()->to(site_url('/pengaduan-masyarakat/afterlogin'));
        }

        return view('layout/login');
    }

    public function registrasi()
    {
        if (session('id_masyarakat')) {
            return redirect()->to(site_url('/pengaduan-masyarakat/afterlogin'));
        }
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
        $password = password_hash($data['password'] . $salt, PASSWORD_BCRYPT);

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

    public function valid_login()
    {
        $data = $this->request->getPost();
        $masyarakat = $this->MasyarakatModel->where('username', $data['username'])->first();
        $petugas = $this->PetugasModel->where('username', $data['username'])->first();

        if ($masyarakat) {
            // Check password for masyarakat
            $cekPasswordM = password_verify($data['password'] . $masyarakat['salt'], $masyarakat['password']);
            if ($cekPasswordM) {
                // Set session for masyarakat
                $this->session->set([
                    "isLogin" => TRUE,
                    "userType" => "masyarakat", // Additional variable to identify user type
                    "id_masyarakat" => $masyarakat['id_masyarakat'],
                    "nik" => $masyarakat['nik'],
                    "username" => $masyarakat['username'],
                ]);
                return redirect()->to('/pengaduan-masyarakat/afterlogin');
            } else {
                // Incorrect password for masyarakat
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } elseif ($petugas) {
            // Check password for petugas
            if (password_verify($data['password'] . $petugas['salt'], $petugas['password'])) {
                // Set session for petugas

                // Check if the petugas is an admin
                if ($petugas['level'] == '1') {
                    // Set additional session variable for admin petugas
                    $adminSession = [
                        'adminislogin' => true,
                        'id_petugas' => $petugas['id_petugas'],
                        'username' => $petugas['username'],
                        'level' => $petugas['level']
                    ];
                    $this->session->set($adminSession);
                    return redirect()->to('/admin/manajemen_masyarakat');
                } else {
                    // Set additional session variable for regular petugas
                    $petugasSession = [
                        'isPetugasLoggedIn' => true,
                        'id_petugas' => $petugas['id_petugas'],
                        'username' => $petugas['username'],
                    ];
                    $this->session->set($petugasSession);
                    // Redirect to petugas dashboard
                    return redirect()->to('/petugas');
                }
            } else {
                // Incorrect password for petugas
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } else {
            // Username not found
            session()->setFlashdata('error', 'Username tidak terdaftar');
            return redirect()->to('/auth/login');
        }
    }



    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/')->with('success', 'Anda berhasil logout.');
    }
}
