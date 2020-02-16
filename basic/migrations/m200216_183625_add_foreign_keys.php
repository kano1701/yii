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
            'style', 
            'book', 
            'style', 
            'style', 
            'id', 
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m200216_183625_add_foreign_keys cannot be reverted.\n";

        return false;
    }
}
