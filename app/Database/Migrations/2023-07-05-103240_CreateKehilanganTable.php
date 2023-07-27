<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKehilanganTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_kehilangan' => [
                'type' => 'DATE',
            ],
            'tempat_kehilangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'informasi_detail' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->createTable('kehilangan');
    }

    public function down()
    {
        $this->forge->dropTable('kehilangan');
    }
}
