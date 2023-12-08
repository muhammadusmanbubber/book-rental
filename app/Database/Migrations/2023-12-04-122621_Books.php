<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
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
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'Auther_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'pages' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'publish_date' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'image' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => TRUE,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL',
            ]);
            $this->forge->addPrimaryKey('id','primarykey_user_id');
            $this->forge->createTable('books',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('books', TRUE);
    }
}
