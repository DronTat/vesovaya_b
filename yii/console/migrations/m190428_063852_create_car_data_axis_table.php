<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_data_axis}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%car_model}}`
 */
class m190428_063852_create_car_data_axis_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_data_axis}}', [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer()->notNull()->unique(),
            'type_suspension' => $this->string()->notNull()->comment('Мех, пнев'),
            'skatnost' => $this->integer()->notNull(),
            'length_axis' => $this->integer()->notNull(),
        ]);

        // creates index for column `model_id`
        $this->createIndex(
            '{{%idx-car_data_axis-model_id}}',
            '{{%car_data_axis}}',
            'model_id'
        );

        // add foreign key for table `{{%car_model}}`
        $this->addForeignKey(
            '{{%fk-car_data_axis-model_id}}',
            '{{%car_data_axis}}',
            'model_id',
            '{{%car_model}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%car_model}}`
        $this->dropForeignKey(
            '{{%fk-car_data_axis-model_id}}',
            '{{%car_data_axis}}'
        );

        // drops index for column `model_id`
        $this->dropIndex(
            '{{%idx-car_data_axis-model_id}}',
            '{{%car_data_axis}}'
        );

        $this->dropTable('{{%car_data_axis}}');
    }
}
