<?php

use yii\db\Migration;

/**
 * Class m200216_174119_create_table_authors_list
 */
class m200216_174119_create_table_authors_list extends Migration
{
    public function up()
    {
        $this->createTable('authors_list', [
            'id' => $this->primarykey(),
            'book' => $this->integer()->notNull(),
            'author' => $this->integer()->notNull()
        ]);
        
        $this->addForeignKey(
            'book', 
            'authors_list', 
            'book', 
            'book', 
            'id', 
            'CASCADE'
        );

        $this->addForeignKey(
            'author', 
            'authors_list', 
            'author', 
            'author', 
            'id', 
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('authors_list');
        return "удаление выполнено";
    }
}
