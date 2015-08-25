<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trouve".
 *
 * @property integer $idtrouve
 * @property string $type
 * @property string $nom
 * @property integer $age
 * @property string $race
 * @property string $couleur
 * @property string $identification
 * @property string $lieu
 * @property string $date
 * @property string $photo
 * @property string $description
 * @property string $utilisateur
 */
class Trouve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trouve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'lieu', 'description', 'utilisateur'], 'required'],
            [['type', 'description'], 'string'],
            [['age'], 'integer'],
            [['date'], 'safe'],
            [['nom', 'race', 'couleur', 'identification', 'lieu', 'photo'], 'string', 'max' => 255],
            [['utilisateur'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtrouve' => 'Idtrouve',
            'type' => 'Type',
            'nom' => 'Nom',
            'age' => 'Age',
            'race' => 'Race',
            'couleur' => 'Couleur',
            'identification' => 'Identification',
            'lieu' => 'Lieu',
            'date' => 'Date',
            'photo' => 'Photo',
            'description' => 'Description',
            'utilisateur' => 'Utilisateur',
        ];
    }
}
