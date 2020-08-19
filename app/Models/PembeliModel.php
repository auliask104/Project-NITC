<?php

namespace App\Models;

use CodeIgniter\Model;

class PembeliModel extends Model
{
    protected $table = "Pembeli";
    protected $allowedFields = ['Username', 'Email', 'password', 'Nama_depan', 'Nama_belakang'];
}
