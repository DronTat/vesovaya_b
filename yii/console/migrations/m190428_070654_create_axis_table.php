<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%axis}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%journal}}`
 */
class m190428_070654_create_axis_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%axis}}', [
            'id' => $this->primaryKey(),
            'journal_id' => $this->integer()->notNull(),
            'weight_tara' => $this->integer()->null(),
            'weight_gross' => $this->integer()->null(),
            'number_axis' => $this->integer()->notNull(),
        ]);

        // creates index for column `journal_id`
        $this->createIndex(
            '{{%idx-axis-journal_id}}',
            '{{%axis}}',
            'journal_id'
        );

        // add foreign key for table `{{%journal}}`
        $this->addForeignKey(
            '{{%fk-axis-journal_id}}',
            '{{%axis}}',
            'journal_id',
            '{{%journal}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%journal}}`
        $this->dropForeignKey(
            '{{%fk-axis-journal_id}}',
            '{{%axis}}'
        );

        // drops index for column `journal_id`
        $this->dropIndex(
            '{{%idx-axis-journal_id}}',
            '{{%axis}}'
        );

        $this->dropTable('{{%axis}}');
    }
}
