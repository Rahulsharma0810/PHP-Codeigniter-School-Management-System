<?php

class Migration_create_classes extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'classesID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'classes' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
				"null" => FALSE
			),
			'classes_numeric' => array(
				'type' => 'INT',
				'constraint' => '11',
				"null" => FALSE
			),
			'teacherID' => array(
				'type' => 'INT',
				'constraint' => '11',
				"null" => FALSE
			),
			'note' => array(
				'type' => 'TEXT',
				'constraint' => '200',
				"null" => TRUE
			),
		));
		$this->dbforge->add_key('classesID', TRUE);
		$this->dbforge->create_table('classes');
	}

	public function down()
	{
		$this->dbforge->drop_table('classes');
	}
}