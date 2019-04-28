<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transport}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%car_model}}`
 * - `{{%trailer_model}}`
 * - `{{%drivers}}`
 * - `{{%goods}}`
 */
class m190428_065426_create_transport_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transport}}', [
            'id' => $this->primaryKey(),
            'license_plate' => $this->string()->notNull(),
            'car_model_id' => $this->integer()->null(),
            'trailer_model_id' => $this->integer()->null(),
            'driver_id' => $this->integer()->null(),
            'good_id' => $this->integer()->null(),
            'deleted' => $this->boolean()->defaultValue(false)->notNull(),
        ]);

        // creates index for column `car_model_id`
        $this->createIndex(
            '{{%idx-transport-car_model_id}}',
            '{{%transport}}',
            'car_model_id'
        );

        // add foreign key for table `{{%car_model}}`
        $this->addForeignKey(
            '{{%fk-transport-car_model_id}}',
            '{{%transport}}',
            'car_model_id',
            '{{%car_model}}',
            'id',
            'CASCADE'
        );

        // creates index for column `trailer_model_id`
        $this->createIndex(
            '{{%idx-transport-trailer_model_id}}',
            '{{%transport}}',
            'trailer_model_id'
        );

        // add foreign key for table `{{%trailer_model}}`
        $this->addForeignKey(
            '{{%fk-transport-trailer_model_id}}',
            '{{%transport}}',
            'trailer_model_id',
            '{{%trailer_model}}',
            'id',
            'CASCADE'
        );

        // creates index for column `driver_id`
        $this->createIndex(
            '{{%idx-transport-driver_id}}',
            '{{%transport}}',
            'driver_id'
        );

        // add foreign key for table `{{%drivers}}`
        $this->addForeignKey(
            '{{%fk-transport-driver_id}}',
            '{{%transport}}',
            'driver_id',
            '{{%drivers}}',
            'id',
            'CASCADE'
        );

        // creates index for column `good_id`
        $this->createIndex(
            '{{%idx-transport-good_id}}',
            '{{%transport}}',
            'good_id'
        );

        // add foreign key for table `{{%goods}}`
        $this->addForeignKey(
            '{{%fk-transport-good_id}}',
            '{{%transport}}',
            'good_id',
            '{{%goods}}',
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
            '{{%fk-transport-car_model_id}}',
            '{{%transport}}'
        );

        // drops index for column `car_model_id`
        $this->dropIndex(
            '{{%idx-transport-car_model_id}}',
            '{{%transport}}'
        );

        // drops foreign key for table `{{%trailer_model}}`
        $this->dropForeignKey(
            '{{%fk-transport-trailer_model_id}}',
            '{{%transport}}'
        );

        // drops index for column `trailer_model_id`
        $this->dropIndex(
            '{{%idx-transport-trailer_model_id}}',
            '{{%transport}}'
        );

        // drops foreign key for table `{{%drivers}}`
        $this->dropForeignKey(
            '{{%fk-transport-driver_id}}',
            '{{%transport}}'
        );

        // drops index for column `driver_id`
        $this->dropIndex(
            '{{%idx-transport-driver_id}}',
            '{{%transport}}'
        );

        // drops foreign key for table `{{%goods}}`
        $this->dropForeignKey(
            '{{%fk-transport-good_id}}',
            '{{%transport}}'
        );

        // drops index for column `good_id`
        $this->dropIndex(
            '{{%idx-transport-good_id}}',
            '{{%transport}}'
        );

        $this->dropTable('{{%transport}}');
    }
}
