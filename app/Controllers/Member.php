<?php

namespace App\Controllers;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
use App\Models\Lokasi_model;
use App\Models\User_model;

// End load model

class Member extends BaseController
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
        $data = array(
            'title'     => 'Product',
            'kategori'  => $kategori,
            'lokasi'    => $lokasi,
            'berita'    => $berita,
            'content'   => 'product/list_landing'
        );
        return view('layout-green/wrapper', $data);
    }
    public function tambah()
    {
        helper('text');
        $kategori_mod   = new Kategori_model();
        $kategori       = $kategori_mod->listing();
        $lok_mod        = new Lokasi_model();
        $lokasi         = $lok_mod->listing();

        if (!$this->validate([
            'nama'          => 'required',
            'email'         => 'required',
            'username'      => 'required',
            'password'      => 'required',
        ])) {
            // End validasi
            $data = array(
                'title'         => 'Tambah User',
                'kategori'      => $kategori,
                'lokasi'        => $lokasi,
                'content'       => 'user/add'
            );
            return view('user/add');
            // Masuk database
        } else {
            $data = array(
                'nama'            => $this->request->getVar('nama'),
                'email'            => $this->request->getVar('email'),
                'username'        => $this->request->getVar('username'),
                'password'        => sha1($this->request->getVar('password')),
                'akses_level'    => $this->request->getVar('akses_level')
            );
            $model = new User_model();
            $model->save($data);
            $session->setFlashdata('sukses', 'Data telah ditambah');
            return redirect()->to(base_url('admin/user'));
        }
    }
}
