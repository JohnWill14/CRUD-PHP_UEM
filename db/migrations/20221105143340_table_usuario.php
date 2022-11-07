<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TableUsuario extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(){
        $users = $this->table('usuarios', ['id' => false, 'primary_key' => ['login'], 'unique' => ['email']]);
        $users->addColumn('login', 'string', ['limit' => 20, 'null'=>false])
              ->addColumn('password', 'string', ['limit' => 40, 'null'=>false])
              ->addColumn('name', 'string', ['limit' => 50, 'null'=>false])
              ->addColumn('email', 'string', ['limit' => 50, 'null'=>false])
              ->addColumn('dt_access', 'date', ['null'=>false])
              ->addColumn('bo_deleted', 'boolean', ['null'=>true])
              ->addIndex(['email'], ['unique' => true])
              ->create();
    }
}
