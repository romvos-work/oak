<?php

use yii\db\Migration;

/**
 * Class m211229_100529_add_currency
 */
class m211229_100529_add_currency extends Migration
{
    public $tableName = '{{%currency}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'code' => $this->integer()->notNull()->unique(),
            'codeText' => $this->string()->notNull()->unique(),
            'name' => $this->string()->notNull(),
            'createdAt' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updatedAt' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
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
