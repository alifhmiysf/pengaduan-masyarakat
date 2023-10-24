<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class PengaduanMasyarakat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_masyarakat' => [
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
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
                'type' => 'INT',
                'constraint' => '13',
            ],
            'date_created' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id_masyarakat', true);
        $this->forge->createTable('masyarakat');
    }

    public function down()
    {
        //
    }
}
