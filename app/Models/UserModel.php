<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "User";
    protected $allowedFields = ['Username', 'Email', 'password', 'Nama_depan', 'Nama_belakang', 'Deskripsi_diri', 'Role'];

    public function cekLogin($username, $password)
    {
        return $this->db->table('User')
            ->where(array('Username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
