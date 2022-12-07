<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kendaraan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idKendaraan' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'namaKendaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('idKendaraan',TRUE);
        $this->forge->createTable('kendaraan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kendaraan');
    }
}
