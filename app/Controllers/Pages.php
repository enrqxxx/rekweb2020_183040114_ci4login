<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rekayasa Web'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us !',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Veteran No 4',
                    'kota' => 'Purwakarta'
                ],
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Sudirman No 5',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
