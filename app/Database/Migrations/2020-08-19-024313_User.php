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
			'Deskripsi_diri'		=> [
				'type'			 => 'Text',
				'default'		 => null,
			],
			'Role'				 => [
				'type'			 => 'Enum("Penjual" , "Pembeli")'
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
