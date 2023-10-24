<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
    }


    public function index()
    {
        return view('layout/login');
    }

    public function autentifikasi()
    {
        $data = $this->request->getPost();

        $this->validation->run($data, 'register' );
        $errors =$this->validation->getErrors();
        if($errors) {
            session()->setFlashdata('error',  $errors);
            return redirect()->to('/auth/register');
        }


        $salt = uniqid('', true);
        $password = md5($data['password']).$salt;

        $this->MasyarakatModel->save([
            'nik' => $data['nik'],
            'username' => $username,
            'password' => $password,
            'salt' => $salt,
            'telepon' => $telepon
        ]);

        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function logout()
    {

    }
    public function registrasi()
    {
        return view('layout/register');
    }
}
