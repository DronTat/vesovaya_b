<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_mark}}`.
 */
class m190428_062305_create_car_mark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_mark}}', [
            'id' => $this->primaryKey(),
            'mark' => $this->string()->notNull(),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_mark}}');
    }
}
