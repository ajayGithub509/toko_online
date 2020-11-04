<?php namespace App\Database\Migrations;

class user extends \CodeIgniter\Database\Migration{
    public function up(){
         $this->forge->addField([
        	'id'=>[
        		'type'=>'INT',
        		'constraint'=>11,
        		'unsigned'=>TRUE,
        		'auto_increment'=>TRUE,
        	],
        	'usernme'=>[
        		'type'=>'VARCHAR',
        		'constraint'=>'100',
        	],
        	'password'=>[
        		'type'=>'TEXT',
        	],
        	'salt'=>[
        		'type'=>'TEXT',
        	],
        	'avatar'=>[
        		'type'=>'TEXT',
        		'null'=>TRUE,
        	],
        	'role'=>[
        		'type'=>'INT',
        		'constraint'=>'1',
        		'default'=>'1',
        	],
        	'created_by'=>[
        		'type'=>'INT',
        		'constraint'=>11,
        	],
        	'created_date'=>[
        		'type'=>'DATETIME',
        	],
        	'update_by'=>[
        		'type'=>'INT',
        		'constraint'=>11,
        		'null'=>TRUE,
        	],
        	'update_date'=>[
        		'type'=>'DATETIME',
        		'null'=>TRUE,
        	]
        ]);
        $this->forge->addkey('id', TRUE);
        $this->forge->createTable('user');
    }
    public function down(){
       $this->forge->dropTable('user');
    }
}
?>