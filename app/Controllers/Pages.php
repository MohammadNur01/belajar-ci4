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
    echo view('layout/header', $data);
    echo view('pages/home');
    echo view('layout/footer');
  }

  public function about()
  {
    $data =  [
      'title' => 'About Me'
    ];
    echo view('layout/header', $data);
    echo view('pages/about');
    echo view('layout/footer');
  }
}
