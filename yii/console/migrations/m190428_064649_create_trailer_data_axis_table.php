<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trailer_data_axis}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%trailer_model}}`
 */
class m190428_064649_create_trailer_data_axis_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trailer_data_axis}}', [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer()->notNull()->unique(),
            'type_suspension' => $this->string()->notNull()->comment('Мех, пнев'),
            'skatnost' => $this->integer()->notNull(),
            'length_axis' => $this->integer()->notNull(),
        ]);

        // creates index for column `model_id`
        $this->createIndex(
            '{{%idx-trailer_data_axis-model_id}}',
            '{{%trailer_data_axis}}',
            'model_id'
        );

        // add foreign key for table `{{%trailer_model}}`
        $this->addForeignKey(
            '{{%fk-trailer_data_axis-model_id}}',
            '{{%trailer_data_axis}}',
            'model_id',
            '{{%trailer_model}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%trailer_model}}`
        $this->dropForeignKey(
            '{{%fk-trailer_data_axis-model_id}}',
            '{{%trailer_data_axis}}'
        );

        // drops index for column `model_id`
        $this->dropIndex(
            '{{%idx-trailer_data_axis-model_id}}',
            '{{%trailer_data_axis}}'
        );

        $this->dropTable('{{%trailer_data_axis}}');
    }
}
