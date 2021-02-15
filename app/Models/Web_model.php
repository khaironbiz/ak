<?php

namespace App\Models;

use CodeIgniter\Model;

class Web_model extends Model
{
    protected $table         = 'web';
    protected $primaryKey     = 'id';
    protected $allowedFields = [
        'nama_web', 'base_url', 'nama_perusahaan', 'alamat_perusahaan',
        'telp_perusahaan', 'map_web', 'logo', 'logitude', 'facebook',
        'instagram', 'twitter', 'duitku_code', 'key_duitku'
    ];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail()
    {
        $this->select('*');
        $this->where(array('id'    => '1'));
        $query = $this->get();
        return $query->getRowArray();
    }



    // Edit
    public function edit($data)
    {
        $this->where('id_user', $data['id_user']);
        $this->replace($data);
    }
}
