<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
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
			'username_pembeli'			=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '100',
			],
			'username_penjualan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'    => '100',
			],
			'tanggal'			=> [
				'type'			=> 'DATE',
			],
			'status'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '25',
			],
			'harga'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'gambar_asli'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('Pesanan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Pesanan');
	}
}
