<?php

namespace furkandogruer\Takimlar\models;

use Yii;

/**
 * This is the model class for table "sonuclar".
 *
 * @property int $id
 * @property string|null $takimAdi
 * @property string|null $rakipTakimAdi
 * @property string|null $macSonucu
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Sonuclar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sonuclar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['takimAdi', 'rakipTakimAdi', 'macSonucu'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'takimAdi' => 'Takim Adi',
            'rakipTakimAdi' => 'Rakip Takim Adi',
            'macSonucu' => 'Mac Sonucu',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getTakimlars()
    {
        return $this->hasOne (Sonuclar::className(),
        ['id' => 'id']
    );
    }
}
