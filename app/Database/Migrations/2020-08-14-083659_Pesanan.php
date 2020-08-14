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
			'Judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Username_pembeli'			=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '100',
			],
			'Username_penjualan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'    => '100',
			],
			'Tanggal'			=> [
				'type'			=> 'DATE',
			],
			'Status'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '25',
			],
			'Harga'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
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
