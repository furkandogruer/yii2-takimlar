<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_120613_takimlar
 */
class m210115_120613_takimlar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('takimlar', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
             'takimAdi' => Schema::TYPE_TEXT,
             'puanlar' => Schema::TYPE_INTEGER,
           // 'email' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
           // 'name' => Schema::TYPE_TEXT,
            //'body' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('takimlar');

        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_120613_takimlar cannot be reverted.\n";

        return false;
    }
    */
}
