<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
                'null'           => FALSE,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => FALSE,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL',
            ]);
            $this->forge->addPrimaryKey('id','primarykey_user_id');
            $this->forge->createTable('admin',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('admin', TRUE);
    }
}