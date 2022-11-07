<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TableCliente extends AbstractMigration
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
    public function change()
    {
        $users = $this->table('clientes', ['id' => false, 'primary_key' => ['cd_cliente']]);
        $users->addColumn('cd_cliente', 'integer', ['limit' => 3, 'null'=>false, 'identity' => true])
              ->addColumn('nm_nome', 'string', ['limit' => 50, 'null'=>false])
              ->addColumn('ds_endereco', 'string', ['limit' => 100, 'null'=>false])
              ->addColumn('nr_numero', 'string', ['limit' => 14, 'null'=>false])
              ->addColumn('tp_cliente', 'string', ['limit' => 1, 'null'=>false])
              ->addColumn('nr_documento', 'string', ['limit' => 14, 'null'=>false])
              ->addColumn('ds_cidade', 'string', ['limit' => 50, 'null'=>false])
              ->addColumn('cd_uf', 'string', ['limit' => 02, 'null'=>false])
              ->addColumn('dt_cadastro', 'datetime', ['null'=>false, 'default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('nr_telefone', 'string', ['limit' => 15, 'null'=>true])
              ->addColumn('nr_inscricao', 'integer', ['limit' => 10, 'null'=>true])
              ->create();
    }
}
