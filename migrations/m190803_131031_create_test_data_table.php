<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test_data}}`.
 */
class m190803_131031_create_test_data_table extends Migration
{
    /**
     * Table name.
     *
     * @var string
     */
    private $tableName = 'test_data';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'         => $this->primaryKey(),
            'name'       => $this->string()->notNull()->comment('Название данных'),
            'value'      => $this->integer()->notNull()->comment('Значение'),
            'created_at' => $this->integer()->notNull()->comment('Дата создания записи'),
            'updated_at' => $this->integer()->notNull()->comment('Дата обновления записи'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
