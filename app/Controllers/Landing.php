<?php

namespace App\Controllers;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
// End load model

class Landing extends BaseController
{
    // Main page
    public function index()
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->listing();
        $kategori_mod  = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $data = array(
            'title'     => 'About',
            'berita'    => $berita,
            'content'   => 'about/about'
        );
        return view('layout-green/wrapper', $data);
    }
    public function product()
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->listing();
        $kategori_mod  = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $data = array(
            'title'     => 'Product',
            'kategori'  => $kategori,
            'berita'    => $berita,
            'content'   => 'product/list_landing'
        );
        return view('layout-green/wrapper', $data);
    }
    public function productdetail($slug_berita)
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->read($slug_berita);
        $kategori_mod  = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $data = array(
            'title'     => $berita['judul_berita'],
            'berita'    => $berita,
            'kategori'  => $kategori,
            'content'   => 'product/product_detail'
        );
        return view('layout-green/wrapper', $data);
    }
    public function contact()
    {
        helper('text');
        $model = new Berita_model();
        $berita = $model->listing();
        $data = array(
            'title'     => 'Java Web Media - Spesialis Kursus Codeigniter',
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
