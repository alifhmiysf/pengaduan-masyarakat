<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('layout/login');
    }

    public function registrasi()
    {
        return view('layout/register');
    }
}
