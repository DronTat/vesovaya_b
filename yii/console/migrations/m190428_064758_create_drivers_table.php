<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%drivers}}`.
 */
class m190428_064758_create_drivers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%drivers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%drivers}}');
    }
}
