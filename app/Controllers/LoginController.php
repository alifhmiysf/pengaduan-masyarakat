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


    public function valid_login_old()
    {
        $data = $this->request->getPost();

        // Cari pengguna di tabel masyarakat
        $masyarakat = $this->MasyarakatModel->where('username', $data['username'])->first();
        // $masyarakat = $this->MasyarakatModel->where('nik', $data['username'])->first();

        $petugas = $this->PetugasModel->where('username', $data['username'])->first();
        if ($petugas) {
            // Jika pengguna tidak ditemukan di tabel masyarakat, coba mencari di tabel petugas
            // $petugas = $this->PetugasModel->where('username', $data['username'])->first();

            //if ($petugas) {
            // Pengguna ditemukan di tabel petugas
            // $role = $petugas['level']; // Ambil peran (role) dari pengguna petugas
            if (password_verify($data['password'] . $petugas['salt'], $petugas['password'])) {
                echo "lari ke admin";
            } else {
                // Kata sandi salah
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
            // } else {
            //     // Jika pengguna tidak ditemukan di kedua tabel, tampilkan pesan kesalahan
            //     session()->setFlashdata('error', 'Username tidak ditemukan');
            //     return redirect()->to('/auth/login');
            // }
        } else {
            // Pengguna ditemukan di tabel masyarakat
            if (password_verify($data['password'] . $masyarakat['salt'], $masyarakat['password'])) {
                $role = 'masyarakat'; // Pengguna adalah masyarakat
            } else {
                // Kata sandi salah
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        }

        // Selanjutnya, sesuaikan pengguna sesuai peran (role)
        if ($role == 1) {
            // Pengguna adalah admin, arahkan sesuai peran
            return redirect()->to('/admin/manajemen_masyarakat');
        } elseif ($role == 2) {
            // Pengguna adalah petugas, arahkan sesuai peran
            return redirect()->to('/admin/petugas');
        } else {
            // Pengguna adalah masyarakat, arahkan sesuai peran
            return redirect()->to('/pengaduan-masyarakat/afterlogin');
        }
    }

    public function valid_login()
    {
        $data = $this->request->getPost();
        $masyarakat = $this->MasyarakatModel->where('username', $data['username'])->first();
        $petugas = $this->PetugasModel->where('username', $data['username'])->first();

        if ($masyarakat) {
            # cek password masyarakat
            $cekPasswordM = password_verify($data['password'] . $masyarakat['salt'], $masyarakat['password']);
            if ($cekPasswordM) {
                # lanjut ke dashboard masyarakat
                # Setup session 
                
                $this->session->set([
                    "isLogin" => TRUE,
                    "id_masyarakat" => $masyarakat['id_masyarakat'],
                ]);
                return redirect()->to('/pengaduan-masyarakat/afterlogin');
            } else {
                #tampilkan notifikasi password salah dan kembali ke halaman login
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } elseif ($petugas) {
            # cek password petugas
            if ($data['password'] . $petugas['salt'] == $petugas['password']) {
                # lanjut ke dashboard petugas
                if ($petugas['level'] == '1') {
                    # menuju ke admin
                    return redirect()->to('/admin/manajemen_masyarakat');
                } else {
                    # menuju ke petugas
                    return redirect()->to('/petugas');
                }
            } else {
                #tampilkan notifikasi password salah dan kembali ke halaman login
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } else {
            #tampilkan notifikasi username tidak terdaftar dan kembali ke halaman login
            session()->setFlashdata('error', 'Username tidak terdaftar');
            return redirect()->to('/auth/login');
        }
    }


    public function logout()
    {
    }
}
