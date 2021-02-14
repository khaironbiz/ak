<?php

namespace App\Controllers;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
// End load model

class Shop extends BaseController
{
    // Main page
    public function index()
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->listing();
        $data = array(
            'title'     => 'Java Web Media - Spesialis Kursus Codeigniter',
            'berita'    => $berita,
            'content'   => 'shop/chart'
        );
        return view('layout-green/wrapper', $data);
    }
    public function detail()
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->listing();
        $data = array(
            'title'         => 'Event',
            'berita'        => $berita,
            'content'       => 'event/detail'
        );
        return view('layout-green/wrapper', $data);
    }

    // Read berita
    public function read($slug_berita)
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->read($slug_berita);
        $data = array(
            'title'        => $berita['judul_berita'],
            'berita'    => $berita,
            'content'    => 'home/read'
        );
        return view('layout/wrapper', $data);
    }
}
