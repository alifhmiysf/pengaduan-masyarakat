<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function verval()
    {
        return view('admin/verifikasi');
    }
}

