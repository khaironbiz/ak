<?php

namespace App\Controllers;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
use App\Models\Lokasi_model;
use App\Models\Web_model;
// End load model

class About extends BaseController
{
    // Main page
    public function index()
    {
        helper('text');
        $model          = new Berita_model();
        $berita         = $model->listing();
        $kategori_mod   = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $lok_mod        = new Lokasi_model();
        $lokasi         = $lok_mod->listing();
        $web_mod        = new Web_model();
        $web            = $web_mod->listing();
        $data = array(
            'title'     => 'About',
            'kategori'  => $kategori,
            'lokasi'    => $lokasi,
            'berita'    => $berita,
            'web'       => $web,
            'content'   => 'about/about'
        );
        return view('layout-green/wrapper', $data);
    }

    public function contact()
    {
        helper('text');
        $model          = new Berita_model();
        $berita         = $model->listing();
        $kategori_mod   = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $lok_mod        = new Lokasi_model();
        $lokasi         = $lok_mod->listing();
        $data = array(
            'title'     => 'Contact',
            'kategori'  => $kategori,
            'lokasi'    => $lokasi,
            'berita'    => $berita,
            'content'   => 'contact/contact'
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
            'title'     => $berita['judul_berita'],
            'berita'    => $berita,
            'content'   => 'about/about'
        );
        return view('layout/wrapper', $data);
    }
}
