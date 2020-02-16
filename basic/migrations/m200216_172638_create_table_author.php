<?php

use yii\db\Migration;

/**
 * Class m200216_172638_create_table_author
 */
class m200216_172638_create_table_author extends Migration
{
    public function up()
    {
        $this->createTable('author', [
            'id' => $this->primarykey(),
            'first_name' => $this->text()->notNull(),
            'middle_name' => $this->text()->notNull(),
            'last_name' => $this->text(),
            'gender' => $this->integer(),
            'created' => $this->timestamp(),
            'image' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('author');
        return "удаление выполнено";
    }
}
