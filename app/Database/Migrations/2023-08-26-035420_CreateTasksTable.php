<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_task'         => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'deskripsi'       => ['type' => 'TEXT'],
            'tanggal_input'   => ['type' => 'DATE'],
            'foto'            => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'progress'        => ['type' => 'INT', 'constraint' => 3, 'unsigned' => true],
            'id_project'      => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);

        $this->forge->addPrimaryKey('id_task');
        $this->forge->addForeignKey('id_project', 'projects', 'id_project'); // Menambahkan foreign key ke tabel 'projects'
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        $this->forge->dropTable('tasks');
    }
}
