<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%transport}}`
 * - `{{%goods}}`
 * - `{{%drivers}}`
 */
class m190428_070109_create_journal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal}}', [
            'id' => $this->primaryKey(),
            'date_created' => $this->integer()->notNull(),
            'date_tara' => $this->integer()->null(),
            'date_gross' => $this->integer()->null(),
            'transport_id' => $this->integer()->notNull(),
            'good_id' => $this->integer()->notNull(),
            'driver_id' => $this->integer()->notNull(),
            'date_print' => $this->integer()->null(),
            'user' => $this->string()->notNull(),
            'finished' => $this->boolean()->defaultValue(false)->notNull(),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);

        // creates index for column `transport_id`
        $this->createIndex(
            '{{%idx-journal-transport_id}}',
            '{{%journal}}',
            'transport_id'
        );

        // add foreign key for table `{{%transport}}`
        $this->addForeignKey(
            '{{%fk-journal-transport_id}}',
            '{{%journal}}',
            'transport_id',
            '{{%transport}}',
            'id',
            'CASCADE'
        );

        // creates index for column `good_id`
        $this->createIndex(
            '{{%idx-journal-good_id}}',
            '{{%journal}}',
            'good_id'
        );

        // add foreign key for table `{{%goods}}`
        $this->addForeignKey(
            '{{%fk-journal-good_id}}',
            '{{%journal}}',
            'good_id',
            '{{%goods}}',
            'id',
            'CASCADE'
        );

        // creates index for column `driver_id`
        $this->createIndex(
            '{{%idx-journal-driver_id}}',
            '{{%journal}}',
            'driver_id'
        );

        // add foreign key for table `{{%drivers}}`
        $this->addForeignKey(
            '{{%fk-journal-driver_id}}',
            '{{%journal}}',
            'driver_id',
            '{{%drivers}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%transport}}`
        $this->dropForeignKey(
            '{{%fk-journal-transport_id}}',
            '{{%journal}}'
        );

        // drops index for column `transport_id`
        $this->dropIndex(
            '{{%idx-journal-transport_id}}',
            '{{%journal}}'
        );

        // drops foreign key for table `{{%goods}}`
        $this->dropForeignKey(
            '{{%fk-journal-good_id}}',
            '{{%journal}}'
        );

        // drops index for column `good_id`
        $this->dropIndex(
            '{{%idx-journal-good_id}}',
            '{{%journal}}'
        );

        // drops foreign key for table `{{%drivers}}`
        $this->dropForeignKey(
            '{{%fk-journal-driver_id}}',
            '{{%journal}}'
        );

        // drops index for column `driver_id`
        $this->dropIndex(
            '{{%idx-journal-driver_id}}',
            '{{%journal}}'
        );

        $this->dropTable('{{%journal}}');
    }
}
