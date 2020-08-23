<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
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

        return view('Pembeli/Register', $data);
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
            're_password' => [
                'rules' => 'required|min_length[8]|matches[password]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Isi dengan minimal 8 karakter',
                    'matches' => 'Tidak match dengan password',
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
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Register')->withInput()->with('validation', $validation);
        }
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $role = "Pembeli";
        $create = $this->UserModel->save([
            'Username' => $username,
            'Email' => $email,
            'password' => $password,
            'Nama_depan' => $nama_depan,
            'Nama_belakang' => $nama_belakang,
            'Role' => $role,
        ]);
        $cek = $this->UserModel->cekLogin($username, $password);
        if ($create == true) {
            session()->set('id', $cek['id']);
            session()->set('username', $username);
            session()->set('role', $role);
            return redirect()->to('/');
        } else {
            return redirect()->to('/Register');
        }
    }
}
