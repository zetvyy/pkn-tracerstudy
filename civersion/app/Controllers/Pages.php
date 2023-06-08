<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/beranda');
    }
    public function isiKuesioner()
    {
        return view('pages/kuesioner1');
    }
    public function kuesioner()
    {
        return view('pages/kuesioner2');
    }
}
