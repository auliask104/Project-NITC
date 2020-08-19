<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterPenjual extends BaseController
{
    private $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => "Registrasi Page",
            'validation' => \Config\Services::validation(),
        ];

        return view('Penjual/Register', $data);
    }

    public function register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[User.Username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar '
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[User.Email]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar',
                    'valid_email' => '{field} harus valid',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Isi dengan minimal 8 karakter',
                ]
            ],
            'nama_depan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus diisi']
            ],
            'nama_belakang' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus diisi']
            ],
            'deskripsi_diri' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus diisi']
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Penjual/Register')->withInput()->with('validation', $validation);
        }

        $this->UserModel->save([
            'Username' => $this->request->getPost('username'),
            'Email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'Nama_depan' => $this->request->getPost('nama_depan'),
            'Nama_belakang' => $this->request->getPost('nama_belakang'),
            'Deskripsi_diri' => $this->request->getPost('deskripsi_diri'),
            'Role' => "Penjual",
        ]);

        session()->setFlashdata('register', 'Silahkan Login');

        return redirect()->to('/Login');
    }
}
