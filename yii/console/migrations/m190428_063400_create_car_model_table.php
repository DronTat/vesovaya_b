<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_model}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%car_mark}}`
 */
class m190428_063400_create_car_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_model}}', [
            'id' => $this->primaryKey(),
            'model' => $this->string()->notNull(),
            'mark_id' => $this->integer()->notNull(),
            'type' => $this->string()->notNull()->comment('Одиночная, автопоезд'),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);

        // creates index for column `mark_id`
        $this->createIndex(
            '{{%idx-car_model-mark_id}}',
            '{{%car_model}}',
            'mark_id'
        );

        // add foreign key for table `{{%car_mark}}`
        $this->addForeignKey(
            '{{%fk-car_model-mark_id}}',
            '{{%car_model}}',
            'mark_id',
            '{{%car_mark}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%car_mark}}`
        $this->dropForeignKey(
            '{{%fk-car_model-mark_id}}',
            '{{%car_model}}'
        );

        // drops index for column `mark_id`
        $this->dropIndex(
            '{{%idx-car_model-mark_id}}',
            '{{%car_model}}'
        );

        $this->dropTable('{{%car_model}}');
    }
}
