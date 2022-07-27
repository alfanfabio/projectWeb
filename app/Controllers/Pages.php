<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sistem Informasi Obat Bitung'
        ];
        return view('pages/home', $data);
    }

    public function obat()
    {
        $data = [
            'title' => 'Daftar Obat'
        ];
        return view('pages/obat', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('pages/profil', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('pages/tentang', $data);
    }

    public function expire()
    {
        $data = [
            'title' => 'Data Expire',

        ];
        return view('pages/expire', $data);
    }
}
