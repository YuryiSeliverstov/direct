<?php
class m231901_185401_create_user extends CDbMigration
{
    public function up()
    {
		$this->createTable('user', array(
            'id' 		=> 'pk',
            'username' 	=> 'varchar(255) NOT NULL',
            'password' 	=> 'varchar(255) NOT NULL',
			'email' 	=> 'varchar(255) NOT NULL',
        ));
    }
 
    public function down()
    {
        echo 'm231901_185401_create_user does not support migration down.n';
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