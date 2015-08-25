<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property integer $idphoto
 * @property string $photo
 * @property string $type
 * @property string $description
 *
 * @property AnimalPhoto[] $animalPhotos
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'type', 'description'], 'required'],
            [['type', 'description'], 'string'],
            [['photo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idphoto' => 'Idphoto',
            'photo' => 'Photo',
            'type' => 'Type',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimalPhotos()
    {
        return $this->hasMany(AnimalPhoto::className(), ['idphoto' => 'idphoto']);
    }
}
