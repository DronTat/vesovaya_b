<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%photo_weight}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%journal}}`
 */
class m190428_070427_create_photo_weight_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%photo_weight}}', [
            'id' => $this->primaryKey(),
            'journal_id' => $this->integer()->notNull(),
            'photo_tara' => 'MEDIUMBLOB',
            'photo_gross' => 'MEDIUMBLOB',
        ]);

        // creates index for column `journal_id`
        $this->createIndex(
            '{{%idx-photo_weight-journal_id}}',
            '{{%photo_weight}}',
            'journal_id'
        );

        // add foreign key for table `{{%journal}}`
        $this->addForeignKey(
            '{{%fk-photo_weight-journal_id}}',
            '{{%photo_weight}}',
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
            '{{%fk-photo_weight-journal_id}}',
            '{{%photo_weight}}'
        );

        // drops index for column `journal_id`
        $this->dropIndex(
            '{{%idx-photo_weight-journal_id}}',
            '{{%photo_weight}}'
        );

        $this->dropTable('{{%photo_weight}}');
    }
}
