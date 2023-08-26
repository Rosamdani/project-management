<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_project'      => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'deskripsi'       => ['type' => 'TEXT'],
            'anggota_tim'     => ['type' => 'TEXT'],
            'tanggal_buat'    => ['type' => 'DATE'],
            'tanggal_deadline'=> ['type' => 'DATE'],
            'progress'        => ['type' => 'INT', 'constraint' => 3, 'unsigned' => true],
            'id_user'         => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);

        $this->forge->addPrimaryKey('id_project');
        $this->forge->addForeignKey('id_user', 'users', 'id_user'); // Menambahkan foreign key ke tabel 'users'
        $this->forge->createTable('projects');
    }

    public function down()
    {
        $this->forge->dropTable('projects');
    }
}
