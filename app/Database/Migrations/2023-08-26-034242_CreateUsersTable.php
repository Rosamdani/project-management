<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'       => ['type' => 'INT', 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'username'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'password'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'nama_lengkap'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'isAdmin?'      => ['type' => 'INT', 'constraint' => 2],
            // tambahkan kolom lain sesuai kebutuhan
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
