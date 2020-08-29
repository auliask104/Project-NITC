<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "User";
    protected $allowedFields = ['username', 'email', 'password', 'nama_depan', 'nama_belakang', 'deskripsi_diri', 'role', 'no_rekening'];

    public function cekLogin($username, $password)
    {
        return $this->db->table('user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
