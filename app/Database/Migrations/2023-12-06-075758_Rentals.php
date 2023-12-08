<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rentals extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type'           => 'BIGINT',
            'constraint'     => 6,
            'unsigned'       => TRUE,
            'auto_increment' => TRUE,
            'null'           => FALSE,
        ],
        'user_id' => [
            'type'           => 'BIGINT',
            'constraint'     => 6,
            'unsigned'       => TRUE,
            'null'           => FALSE,
        ],
        'book_id' => [
            'type'           => 'BIGINT',
            'constraint'     => 6,
            'unsigned'       => TRUE,
            'null'           => FALSE,
        ],
        'rental_date' => [
            'type'           => 'datetime',
            'constraint'     => 6,
            'auto_increment' => TRUE,
            'null'           => FALSE,
        ],
        'return_date' => [
            'type'           => 'datetime',
            'constraint'     => 6,
            'auto_increment' => TRUE,
            'null'           => TRUE,
        ],

        'created_at DATETIME DEFAULT CURRENT_TIMESTAMP NULL',
        'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL',
    ]);
    $this->forge->addPrimaryKey('id','primarykey_book_id');
    $this->forge->createTable('rentals',TRUE);
}

public function down()
{
$this->forge->dropTable('rentals', TRUE);
}
}