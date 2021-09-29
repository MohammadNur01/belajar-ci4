<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | MH Media Corp',
      'tes' => ['satu', 'dua', 'tiga']
    ];

    return view('pages/home', $data);
  }

  public function about()
  {
    $data =  [
      'title' => 'About Me'
    ];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
      'alamat' => [
        [
          'type' => 'Rumah',
          'alamat' => 'Jl. Iskandar Muda No. 21',
          'kota' => "Surabaya"
        ],
        [
          'type' => 'Kantor',
          'alamat' => 'Jl. Slamet Riyadi No.14',
          'kota' => 'Surabaya'
        ]
      ]
    ];

    return view('pages/contact', $data);
  }
}
