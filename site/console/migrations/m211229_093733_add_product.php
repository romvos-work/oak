<?php

use yii\db\Migration;
use yii\db\Expression;

/**
 * Class m211229_093733_add_product
 */
class m211229_093733_add_product extends Migration
{
    public $tableName = '{{%product}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string()->notNull(),
            'measureType' => $this->string()->notNull(),
            'measureValue' => $this->float()->notNull()->defaultValue(0),
            'image' => $this->string(),
            'createdAt' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updatedAt' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex(
            'idx_product_name',
            $this->tableName,
            'name',
            true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
