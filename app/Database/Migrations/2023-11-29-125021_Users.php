<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
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
            'cpassword' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => FALSE,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL',
            ]);
            $this->forge->addPrimaryKey('id','primarykey_user_id');
            $this->forge->createTable('users',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users', TRUE);
    }
}