<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_131326_dersler
 */
class m210115_131326_dersler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('dersler', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'dersID' => Schema::TYPE_STRING,
            'dersSaatleri' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'dersGunleri' => Schema::TYPE_STRING,
            'dersAdi' => Schema::TYPE_STRING,
            'ogrtUyesiAdi' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('dersler');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_131326_dersler cannot be reverted.\n";

        return false;
    }
    */
}
