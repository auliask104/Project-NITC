<?php

namespace App\Controllers;


class Produk extends BaseController
{
	public function index()
	{
		$data = [
            'title' => "Produk",
			'produk' => $this->produkModel->paginate(1),
			'pager' => $this->produkModel->pager,
        ];
		return view('produk/index', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => "Tambah Produk",
			'validation' => \Config\Services::validation()
		];
		return view('produk/tambah', $data);
	}

	public function insert()
	{
		if(!$this->validate([
			'judul' => [
				'rules' => 'required|is_unique[produk.judul]',
				'errors' => [
					'required' => '{field} produk harus diisi.',
					'is_unique' => '{field} produk sudah ada.'
				]
			],
			'deskripsi_produk' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'kategori' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'harga' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'media' => [
				'rules' => 'uploaded[media]|max_size[media,5120]|is_image[media]|mime_in[media,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'uploaded' => '{field} produk harus diisi.',
					'max_size' => 'Ukuran gambar melebihi 5MB',
					'is_image' => 'Bukan Gambar',
					'mime_in' => 'Bukan Gambar'
				]
			]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/produk/tambah')->withInput()->with('validation', $validation);
		}
		// ambil gambar
		$fileMedia = $this->request->getFile('media');
		// pindahkan gambar ke folder images
		$fileMedia->move('images');
		// ambil nama Gambar
		$namaMedia = $fileMedia->getName();

		$this->produkModel->save([
			'judul' => $this->request->getVar('judul'),
			'media' => $namaMedia,
			'deskripsi_produk' => $this->request->getVar('deskripsi_produk'),
			'kategori' => $this->request->getVar('kategori'),
			'username' => $this->request->getVar('username'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashData('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/produk');
	}

	public function detail($id)
	{
		$data = [
            'title' => "Produk",
            'detail' => $this->produkModel->getProduk($id)
		];
		return view('produk/detail', $data);
	}

	public function edit($id)
	{
		$data = [
            'title' => "Produk",
			'produk' => $this->produkModel->getProduk($id),
			'validation' => \Config\Services::validation()
        ];
		return view('produk/edit', $data);
	}

	public function update()
	{
		$produkLama = $this->produkModel->getProduk($this->request->getVar('id'));
		if($produkLama['judul'] == $this->request->getVar('judul')){
			$rule_judul = 'required';
		}else{
			$rule_judul = 'required|is_unique[produk.judul]';
		}

        if(!$this->validate([
			'judul' => [
				'rules' => $rule_judul,
				'errors' => [
					'required' => '{field} produk harus diisi.',
					'is_unique' => '{field} produk sudah ada.'
				]
			],
			'deskripsi_produk' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'kategori' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'harga' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'media' => [
				'rules' => 'max_size[media,5120]|is_image[media]|mime_in[media,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar melebihi 5MB',
					'is_image' => 'Bukan Gambar',
					'mime_in' => 'Bukan Gambar'
				]
			]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/produk/edit'. $this->request->getVar('id'))->withInput()->with('validation', $validation);
		}

		// ambil gambar
		$fileMedia = $this->request->getFile('media');

		// cek gambar, apakah tetap gambar lama
		if($fileMedia->getError() == 4){
			$namaMedia = $this->request->getVar('mediaLama');
		}else{
			// pindahkan gambar ke folder images
			$fileMedia->move('images');

			// ambil nama Gambar
			$namaMedia = $fileMedia->getName();

			// hapus gambar lama
			unlink('images/'.$this->request->getVar('mediaLama'));
		}

		$this->produkModel->save([
			'id' => $this->request->getVar('id'),
			'judul' => $this->request->getVar('judul'),
			'media' => $namaMedia,
			'deskripsi_produk' => $this->request->getVar('deskripsi_produk'),
			'kategori' => $this->request->getVar('kategori'),
			'username' => $this->request->getVar('username'),
			'harga' => $this->request->getVar('harga')
		]);
		session()->setFlashData('pesan', 'Data berhasil diubah.');
		return redirect()->to('/produk');
	}

	public function delete($id)
	{
		// cari gambar berdasarkan id
		$produk = $this->produkModel->find($id);

		// hapus gambar
		unlink('images/'. $produk['media']);

		$this->produkModel->delete($id);
		session()->setFlashData('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/produk');
	}

	//--------------------------------------------------------------------

}
