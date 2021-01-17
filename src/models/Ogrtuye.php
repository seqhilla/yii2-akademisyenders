<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ogrtuye".
 *
 * @property int $id
 * @property string|null $ogrtUyesiID
 * @property string|null $ogrtUyesiFakultesi
 * @property string|null $ogrtUyesiAdi
 * @property string|null $verdigiDersKodlari
 * @property string|null $verdigiDersKodlari2
 * @property string|null $verdigiDersKodlari3
 * @property string|null $verdigiDersKodlari4
 */
class Ogrtuye extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ogrtuye';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ogrtUyesiID', 'ogrtUyesiFakultesi', 'ogrtUyesiAdi', 'verdigiDersKodlari', 'verdigiDersKodlari2', 'verdigiDersKodlari3', 'verdigiDersKodlari4'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ogrtUyesiID' => 'Akademisyen ID',
            'ogrtUyesiFakultesi' => 'Fakultesi',
            'ogrtUyesiAdi' => 'Akademisyenin Adı ve Soyadı',
            'verdigiDersKodlari' => 'Verdigi Dersler',
            'verdigiDersKodlari2' => '',
            'verdigiDersKodlari3' => '',
            'verdigiDersKodlari4' => '',
        ];
    }
}
