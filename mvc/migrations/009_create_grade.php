<?php

class Migration_create_grade extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'gradeID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'grade' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
				'null' => FALSE
			),
			'point' => array(
				'type' => 'VARCHAR',
				'constraint' => '11',
				'null' => FALSE
			),
			'gradefrom' => array(
				'type' => 'INT',
				'constraint' => '11',
				'null' => FALSE
			),
			'gradeupto' => array(
				'type' => 'INT',
				'constraint' => '11',
				'null' => FALSE
			),
			'note' => array(
				'type' => 'TEXT',
				'constraint' => '200',
				'null' => TRUE
			),
		));
		$this->dbforge->add_key('gradeID', TRUE);
		$this->dbforge->create_table('grade');
	}

	public function down()
	{
		$this->dbforge->drop_table('grade');
	}
}