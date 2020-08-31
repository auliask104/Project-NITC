<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class User extends Migration
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
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'   => [
				'type'			 => 'VARCHAR',
				'constraint' 	 => '100',
			],
			'nama_depan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_belakang' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'deskripsi_diri'		=> [
				'type'			 => 'Text',
				'default'		 => null,
			],
			'role'				 => [
				'type'			 => 'ENUM',
				'constraint'	 => ['penjual', 'pembeli'],
				'default'		 => null,
			],
			'no_rekening'		 => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '20',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addPrimaryKey('username');
		$this->forge->addUniqueKey(['email']);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
