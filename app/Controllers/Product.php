<?php

namespace App\Controllers;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
use App\Models\Lokasi_model;
// End load model

class Product extends BaseController
{

    public function index()
    {
        helper('text');
        $model          = new Berita_model();
        $berita         = $model->listing();
        $kategori_mod   = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $lok_mod        = new Lokasi_model();
        $lokasi         = $lok_mod->listing();
        $data = array(
            'title'     => 'Product',
            'kategori'  => $kategori,
            'lokasi'    => $lokasi,
            'berita'    => $berita,
            'content'   => 'product/list_landing'
        );
        return view('layout-green/wrapper', $data);
    }
    public function detail($slug_berita)
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->read($slug_berita);
        $kategori_mod  = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $lok_mod        = new Lokasi_model();
        $lokasi         = $lok_mod->listing();
        $data = array(
            'title'     => $berita['judul_berita'],
            'berita'    => $berita,
            'kategori'  => $kategori,
            'lokasi'    => $lokasi,
            'content'   => 'product/product_detail'
        );
        return view('layout-green/wrapper', $data);
    }
}
