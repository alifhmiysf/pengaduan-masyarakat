<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengaduanMasyarakat4 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_petugas' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_petugas' => [
                'type' => 'VARCHAR',
                'constraint' => '35',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '64',
            ],
            'salt' => [
                'type' => 'VARCHAR',
                'constraint' => '64',
            ],
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '13',
            ],
            'level' => [
                'type' => 'ENUM',
                'constraint' => ['0','1','2','3','4'],
            ],
        ]);
        $this->forge->addKey('id_petugas', true);
        $this->forge->createTable('petugas');
    }

    public function down()
    {
        //
    }
}
