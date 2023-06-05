<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Administrator extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }
    public function register()
    {
        return view('pages/register');
    }
}
