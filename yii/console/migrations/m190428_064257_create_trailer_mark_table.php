<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trailer_mark}}`.
 */
class m190428_064257_create_trailer_mark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trailer_mark}}', [
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
        $this->dropTable('{{%trailer_mark}}');
    }
}
