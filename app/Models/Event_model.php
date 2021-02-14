<?php

namespace App\Models;

use CodeIgniter\Model;

class Event_model extends Model
{
    protected $table         = 'event';
    protected $primaryKey     = 'id_event';
    protected $allowedFields = [
        'nama_event',
        'penjelasan_event',
        'harga_event',
        'tanggal_mulai',
        'tanggal_selesai',
        'jam_mulai',
        'jam_selesai',
        'lokasi_event',
        'alamat_event',
        'kel_event',
        'kec_event',
        'kota_event',
        'prov_event',
        'fasilitas_event',
        'kuota_event',
        'id_penyedia',
        'margin',
        'banner_event',
        'peserta_utama_event'
    ];

    // Listing
    public function listing()
    {
        $this->db->table('event');
        $this->select('event.*, kategori.nama_kategori, provinsi.nama_provinsi');
        $this->join('kategori', 'kategori.id_kategori = event.peserta_utama_event');
        $this->join('provinsi', 'provinsi.id_prov = event.prov_event');
        // $this->where('status_berita','Publish');
        $this->orderBy('id_event', 'DESC');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Listing home
    public function home()
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where('status_berita', 'Publish');
        $this->orderBy('id_berita', 'DESC');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($id_berita)
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where(array(
            'status_berita'    => 'Publish',
            'id_berita'        => $id_berita
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    // Read
    public function read($slug_berita)
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where(array(
            'status_berita'    => 'Publish',
            'slug_berita'    => $slug_berita
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    // Edit
    public function edit($data)
    {
        $this->where('id_berita', $data['id_berita']);
        $this->replace($data);
    }

    // Delete
    public function hapus($id_berita)
    {
        $this->where('id_berita', $id_berita);
        $this->delete();
    }
}
