<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animal_photo".
 *
 * @property integer $idanimal
 * @property integer $idphoto
 *
 * @property Animal $idanimal0
 * @property Photo $idphoto0
 */
class AnimalPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animal_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idanimal', 'idphoto'], 'required'],
            [['idanimal', 'idphoto'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idanimal' => 'Idanimal',
            'idphoto' => 'Idphoto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdanimal0()
    {
        return $this->hasOne(Animal::className(), ['idanimal' => 'idanimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdphoto0()
    {
        return $this->hasOne(Photo::className(), ['idphoto' => 'idphoto']);
    }
}
