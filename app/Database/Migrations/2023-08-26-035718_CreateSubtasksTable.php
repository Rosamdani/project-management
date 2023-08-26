<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubtasksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_subtask'      => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'deskripsi'       => ['type' => 'TEXT'],
            'tanggal_input'   => ['type' => 'DATE'],
            'foto'            => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'progress'        => ['type' => 'ENUM("not started", "in progress", "completed")', 'default' => 'not started'],
            'id_task'         => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);

        $this->forge->addPrimaryKey('id_subtask');
        $this->forge->addForeignKey('id_task', 'tasks', 'id_task'); // Menambahkan foreign key ke tabel 'tasks'
        $this->forge->createTable('subtasks');
    }

    public function down()
    {
        $this->forge->dropTable('subtasks');
    }
}
