<?php

use yii\db\Migration;

/**
 * Class m200216_183625_add_foreign_keys
 */
class m200216_183625_add_foreign_keys extends Migration
{
    public function up()
    {
        $this->addForeignKey(
            'style', 
            'book', 
            'style', 
            'style', 
            'id', 
            'CASCADE'
        );

        $this->addForeignKey(
            'publisher', 
            'book', 
            'publisher', 
            'publisher', 
            'id', 
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('style', 'book');
        $this->dropForeignKey('publisher', 'book');
        
        return 'Внешние ключи удалены';
    }
}
