<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualModel extends Model
{
    protected $table = "Penjual";
    protected $allowedFields = ['Username', 'Email', 'password', 'Nama_depan', 'Nama_belakang', 'Deskripsi_diri'];
    public function cekLogin($username, $password)
    {
        return $this->db->table('Penjual')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
