<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_210407_sonuclar
 */
class m210115_210407_sonuclar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('sonuclar', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
             'takimAdi' => Schema::TYPE_TEXT,
             'rakipTakimAdi' => Schema::TYPE_TEXT,
             'macSonucu' => Schema::TYPE_TEXT,
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
        return $this->dropTable('sonuclar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_210407_sonuclar cannot be reverted.\n";

        return false;
    }
    */
}
