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
			'Username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'isi'			=> [
				'type'			 => 'Text',
			],
			'Bintang'		=> [
				'type'			=> 'INT',
				'constraint'    => 2,
			],
			'Judul'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('Review');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Review');
	}
}
