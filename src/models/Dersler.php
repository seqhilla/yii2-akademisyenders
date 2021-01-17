<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dersler".
 *
 * @property int $id
 * @property int|null $dersID
 * @property string|null $dersSaatleri
 * @property string|null $dersGunleri
 * @property string|null $dersAdi
 * @property string|null $ogrtUyesiAdi
 */
class Dersler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dersler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['dersID'], 'integer'],
            [['dersID','dersSaatleri', 'dersGunleri', 'dersAdi', 'ogrtUyesiAdi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dersID' => 'Ders Kodu',
            'dersSaatleri' => 'Ders Saatleri',
            'dersGunleri' => 'Ders Günleri',
            'dersAdi' => 'Ders Adı',
            'ogrtUyesiAdi' => 'Akademisyen',
        ];
    }

    public function getOgrtuye() {
        return $this->hasone(Ogrtuye::class,['ogrtUyesiID'=>'ogrtUyesiAdi']);
    }



}
