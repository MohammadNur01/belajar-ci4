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
}
