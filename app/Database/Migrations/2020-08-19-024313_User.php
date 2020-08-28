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
				'type'			 => 'Enum("Penjual" , "Pembeli")'
			],
			'no_rekenening'		 => [
				'type' 			 => 'INT',
				'constraint' 	 => '20',
				'default'		 => null,
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addPrimaryKey('Username');
		$this->forge->addUniqueKey(['Email']);
		$this->forge->createTable('User');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('User');
	}
}
