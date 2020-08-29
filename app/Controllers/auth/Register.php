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

    public function index_pembeli()
    {
        $data = [
            'title' => "Register Pembeli",
            'validation' => \Config\Services::validation(),
        ];

        return view('register/pembeli', $data);
    }

    public function register_pembeli()
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
            'password1' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'password harus diisi',
                    'min_length' => 'Isi dengan minimal 8 karakter',
                ]
            ],
            'password2' => [
                'rules' => 'matches[password1]',
                'errors' => [
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
            return redirect()->to('/RegisterPembeli')->withInput()->with('validation', $validation);
        }
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password1');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $role = "pembeli";
        $create = $this->UserModel->save([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'role' => $role,
        ]);
        $cek = $this->UserModel->cekLogin($username, $password);
        if ($create == true) {
            session()->set('id', $cek['id']);
            session()->set('username', $username);
            session()->set('role', $role);
            return redirect()->to('/');
        } else {
            return redirect()->to('/RegisterPembeli');
        }
    }

    public function index_penjual()
    {
        $data = [
            'title' => "Register Penjual",
            'validation' => \Config\Services::validation(),
        ];

        return view('register/penjual', $data);
    }

    public function register_penjual()
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
            'password1' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'password harus diisi',
                    'min_length' => 'Isi dengan minimal 8 karakter',
                ]
            ],
            'password2' => [
                'rules' => 'matches[password1]',
                'errors' => [
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
            return redirect()->to('/RegisterPenjual')->withInput()->with('validation', $validation);
        }
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password1');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $role = "penjual";
        $create = $this->UserModel->save([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'role' => $role,
        ]);
        $cek = $this->UserModel->cekLogin($username, $password);
        if ($create == true) {
            session()->set('id', $cek['id']);
            session()->set('username', $username);
            session()->set('role', $role);
            return redirect()->to('/');
        } else {
            return redirect()->to('/RegisterPenjual');
        }
    }
}
