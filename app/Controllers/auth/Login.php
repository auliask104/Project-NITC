<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{

    private $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login Page',
            'validation' => \Config\Services::validation(),
        ];

        return view('auth/Login', $data);
    }

    public function Login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',

                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'minimal 8 karakter',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Login')->withInput()->with('validation', $validation);
        }
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->UserModel->cekLogin($username, $password);
        if ($cek != null) {
            session()->set('id', $cek['id']);
            session()->set('Username', $cek['Username']);
            session()->set('Nama_depan', $cek['Nama_depan']);
            session()->set('Nama_Belakang', $cek['Nama_belakang']);
            session()->set('Role', $cek['Role']);
            return redirect()->to('/');
        } else {
            session()->setFlashdata('error', 'Username dan Password Salah');
            return redirect()->to('/Login');
        }
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('sukses', 'Logout Berhasil');
        return redirect()->to('/Login');
    }
}
