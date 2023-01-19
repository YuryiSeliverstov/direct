<?php
class m231901_185402_create_popup extends CDbMigration
{
    public function up()
    {
		$this->createTable('popup', array(
            'id' 		=> 	'pk',
            'name' 		=> 	'varchar(255) NOT NULL',
            'content' 	=> 	'text NOT NULL',
			'enabled' 	=> 	'boolean',
			'views'		=>	'int'
        ));
    }
 
    public function down()
    {
        echo 'm231901_185402_create_popup does not support migration down.n';
        return false;
    }
 
    public function safeUp()
    {
    }
 
    public function safeDown()
    {
    }
    
}
?>