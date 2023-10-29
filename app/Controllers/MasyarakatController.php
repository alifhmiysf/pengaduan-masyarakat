<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MasyarakatController extends BaseController
{
    public function index()
    {
        return view('users/index');
    }
    public function tanggapan()
    {
        return view('users/tanggapan');
    }
    public function afterlogin()
    {
        return view('users/afterlogin');
    }
}

