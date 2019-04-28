<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trailer_model}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%trailer_mark}}`
 */
class m190428_064548_create_trailer_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trailer_model}}', [
            'id' => $this->primaryKey(),
            'model' => $this->string()->notNull(),
            'mark_id' => $this->integer()->notNull(),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);

        // creates index for column `mark_id`
        $this->createIndex(
            '{{%idx-trailer_model-mark_id}}',
            '{{%trailer_model}}',
            'mark_id'
        );

        // add foreign key for table `{{%trailer_mark}}`
        $this->addForeignKey(
            '{{%fk-trailer_model-mark_id}}',
            '{{%trailer_model}}',
            'mark_id',
            '{{%trailer_mark}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%trailer_mark}}`
        $this->dropForeignKey(
            '{{%fk-trailer_model-mark_id}}',
            '{{%trailer_model}}'
        );

        // drops index for column `mark_id`
        $this->dropIndex(
            '{{%idx-trailer_model-mark_id}}',
            '{{%trailer_model}}'
        );

        $this->dropTable('{{%trailer_model}}');
    }
}
