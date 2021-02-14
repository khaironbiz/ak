<?php

namespace App\Models;

use CodeIgniter\Model;

class Lokasi_model extends Model
{
    protected $table         = 'provinsi';
    protected $primaryKey     = 'id_prov';
    protected $allowedFields = ['nama_prov', 'count_prov'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($id_prov)
    {
        $this->select('*');
        $this->where(array('id_rov'    => $id_prov));
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
