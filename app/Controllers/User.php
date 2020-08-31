<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    private $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function profile()
    {
        $id = session('id');
        $data = [
            'title' => 'Profile',
            'user' => $this->UserModel->get_user($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('profile', $data);
    }

    public function edit_profile()
    {
        $id = session('id');
        $lama = $this->UserModel->get_user($id);
        if (($lama['username'] == $this->request->getPost('username')) && $lama['email'] == $this->request->getPost('email')) {
            $rule_username = 'required';
            $rule_email = 'required|valid_email';
        } elseif ($lama['username'] == $this->request->getPost('username')) {
            $rule_username = 'required';
            $rule_email = 'required|is_unique[user.Email]|valid_email';
        } elseif ($lama['email'] == $this->request->getPost('email')) {
            $rule_username = 'required|is_unique[user.Username]';
            $rule_email = 'required';
        } else {
            $rule_username = 'required|is_unique[user.Username]';
            $rule_email = 'required|is_unique[user.Email]|valid_email';
        }
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $deskripsi_diri = $this->request->getPost('deskripsi_diri');
        $no_rekening = $this->request->getPost('no_rekening');
        if (session('role') == 'pembeli') {
            if (!$this->validate([
                'username' => [
                    'rules' => $rule_username,
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar '
                    ]
                ],
                'email' => [
                    'rules' => $rule_email,
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar',
                        'valid_email' => '{field} harus valid',
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
                return redirect()->to('/Profile')->withInput()->with('validation', $validation);
            }
            $this->UserModel->save([
                'id' => $id,
                'username' => $username,
                'email' => $email,
                'nama_depan' => $nama_depan,
                'nama_belakang' => $nama_belakang,
            ]);
            session()->setFlashData('pesan', 'Profile berhasil diubah.');
            return redirect()->to('/Profile');
        } elseif (session('role') == 'penjual') {
            if (!$this->validate([
                'username' => [
                    'rules' => $rule_username,
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar '
                    ]
                ],
                'email' => [
                    'rules' => $rule_email,
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar',
                        'valid_email' => '{field} harus valid',
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
                'no_rekening' => [
                    'rules' => 'required',
                    'errors' => ['required' => '{field} harus diisi']
                ],
            ])) {
                $validation = \Config\Services::validation();
                return redirect()->to('/Profile')->withInput()->with('validation', $validation);
            }
            $this->UserModel->save([
                'id' => $id,
                'username' => $username,
                'email' => $email,
                'nama_depan' => $nama_depan,
                'nama_belakang' => $nama_belakang,
                'deskripsi_diri' => $deskripsi_diri,
                'no_rekening' => $no_rekening,
            ]);
            session()->setFlashData('pesan', 'Profile berhasil diubah.');
            return redirect()->to('/Profile');
        }
    }
}
