<?php

namespace App\Controllers;

class Perawat extends BaseController
{
    // Main page
    public function index()
    {

        echo view('layout-focus/header');
        echo view('layout-focus/nav');
        echo view('perawat/index');
        echo view('layout-focus/footer');
    }

    // // Read berita
    // public function read($slug_berita)
    // {
    //     helper('text');
    //     //$model = new Berita_model();
    //     $berita = $model->read($slug_berita);
    //     $data = array(
    //         'title'         => $berita['judul_berita'],
    //         'berita'        => $berita,
    //         'content'       => 'home/read'
    //     );
    //     return view('layout/wrapper', $data);
    // }
}
