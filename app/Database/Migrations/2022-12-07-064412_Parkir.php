<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parkir extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idParkir' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'typeKendaraan' => [
                'type' => 'INT'
            ],
            'platKendaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'waktuMasuk TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'waktuKeluar TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('idParkir',TRUE);
        $this->forge->addForeignKey('typeKendaraan', 'kendaraan', 'idKendaraan');
        $this->forge->createTable('parkir', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('parkir');
    }
}
