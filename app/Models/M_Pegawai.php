<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'pegawai_id';
    protected $allowedFields = ['nip', 'nama_pegawai' , 'alamat'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [
        'nip'           => 'required|min_length[5]|max_length[15]',
        'nama_pegawai'  => 'required|max_length[30]',
        'alamat'        => 'required'
    ];

    protected $skipValidation = false;

}