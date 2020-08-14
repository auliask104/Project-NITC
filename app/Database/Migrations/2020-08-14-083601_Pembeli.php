<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembeli extends Migration
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
			'Username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'   => [
				'type'			 => 'VARCHAR',
				'constraint' 	 => '100',
			],
			'Nama_depan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Nama_belakang' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addPrimaryKey('Username');
		$this->forge->addUniqueKey(['Email']);
		$this->forge->createTable('Pembeli');
	}

	public function down()
	{
		$this->forge->dropTable('Pembeli');
	}
}
