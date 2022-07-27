<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgramming'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Arnold Mononutu',
                    'kota' => 'Minahasa Utara'
                ],
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'Jl. Arnold Mononutu, Universitas Klabat',
                    'kota' => 'Minahasa Utara'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
