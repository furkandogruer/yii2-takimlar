<?php

namespace furkandogruer\Takimlar\models;

use Yii;

/**
 * This is the model class for table "takimlar".
 *
 * @property int $id
 * @property string|null $takimAdi
 * @property int|null $puanlar
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Takimlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'takimlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['takimAdi','puanlar'], 'required'],
            [['takimAdi'], 'string'],
            [['puanlar'], 'integer'],
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
            'puanlar' => 'Puanlar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getSonuclar()
    {
        return $this->hasMany (Sonuclar::className(),
        ['id' => 'id']
    );
    }
}
