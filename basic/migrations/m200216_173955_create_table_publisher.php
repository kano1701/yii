<?php

use yii\db\Migration;

/**
 * Class m200216_173955_create_table_publisher
 */
class m200216_173955_create_table_publisher extends Migration
{
    public function up()
    {
        $this->createTable('publisher', [
            'id' => $this->primarykey(),
            'name' => $this->text()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('publisher');
        return "удаление выполнено";
    }
}
