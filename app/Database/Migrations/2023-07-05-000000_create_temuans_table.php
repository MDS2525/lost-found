<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTemuansTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_penemuan' => [
                'type' => 'DATE',
            ],
            'tempat_penemuan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('temuan');
    }

    public function down()
    {
        $this->forge->dropTable('temuan');
    }
}
