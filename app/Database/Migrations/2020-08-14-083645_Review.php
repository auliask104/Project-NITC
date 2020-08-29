<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
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
			'isi'			=> [
				'type'			 => 'Text',
			],
			'bintang'		=> [
				'type'			=> 'Float',
				'constraint'    => 2,
			],
			'judul'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('review');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('review');
	}
}
