<?php

use yii\db\Migration;

/**
 * Class m200215_103356_create_table_book
 */
class m200215_103356_create_table_book extends Migration
{
    public function up()
    {
        $this->createTable('book', [
            'id' => $this->primarykey(),
            'title' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'created' => $this->timestamp(),
            'pages' => $this->integer(),
            'style' => $this->integer(),
            'image' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('book');
        return "удаление выполнено";
    }

}
