<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengaduanMasyarakat2 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_masyarakat' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'id_pengaduan' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tanggal_pengaduan' => [
                'type' => 'DATETIME',
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
            ],
            'isi_laporan' => [
                'type' => 'TEXT',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['0','1','2','3','4'],
            ],
        ]);
        $this->forge->addKey('id_pengaduan', true);
        $this->forge->createTable('pengaduan');
    }

    public function down()
    {
        //
    }
}
