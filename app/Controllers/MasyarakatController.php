<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MasyarakatController extends BaseController
{
    public function index()
    {
        return view('users/index');
    }
}
