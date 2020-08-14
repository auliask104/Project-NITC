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
			'Judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Media'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Deskripsi_Produk'       => [
				'type'           => 'Text',
			],
			'Kategori'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Harga'       => [
				'type'           => 'INT',
				'constraint'     => 11,
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
