<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_150108_ogrtuyeleri
 */
class m210115_150108_ogrtuyeleri extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('ogrtuye', [
        'id' => Schema::TYPE_PK,
        // $this->primaryKey()
            'ogrtUyesiID' => Schema::TYPE_STRING,
            'ogrtUyesiFakultesi' => Schema::TYPE_STRING,
        'ogrtUyesiAdi' => Schema::TYPE_STRING,
        // $this->string(255) // String with 255 characters
        'verdigiDersKodlari' => Schema::TYPE_STRING,
            'verdigiDersKodlari2' => Schema::TYPE_STRING,
            'verdigiDersKodlari3' => Schema::TYPE_STRING,
            'verdigiDersKodlari4' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('ogrtUyeleri');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_150108_ogrtuyeleri cannot be reverted.\n";

        return false;
    }
    */
}
