<?php

namespace Fuel\Migrations;

class Create_foods
{
	public function up()
	{
		\DBUtil::create_table('foods', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name' => array('constraint' => 50, 'null' => false, 'type' => 'varchar'),
			'price' => array('constraint' => 10, 'null' => false, 'type' => 'int'),
			'description' => array('null' => false, 'type' => 'text'),
			'created_at' => array('constraint' => '11', 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => '11', 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('foods');
	}
}