<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'media'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'deskripsi_produk'       => [
				'type'           => 'Text',
			],
			'kategori'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'harga'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'jumlah_revisi' => [
				'type'			 => 'INT',
				'constraint'	 => 11,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('Produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Produk');
	}
}
