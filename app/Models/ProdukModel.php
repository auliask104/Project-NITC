<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $allowedFields = ['judul', 'media', 'deskripsi_produk', 'kategori', 'username', 'harga'];

    public function getProduk($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }
}