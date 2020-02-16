<?php

use yii\db\Migration;

/**
 * Class m200216_173819_create_table_style
 */
class m200216_173819_create_table_style extends Migration
{
    public function up()
    {
        $this->createTable('style', [
            'id' => $this->primarykey(),
            'name' => $this->text()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('style');
        return "удаление выполнено";
    }
}
