<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilisateur".
 *
 * @property string $type
 * @property string $mdp
 * @property string $nom
 * @property string $prenom
 * @property string $mail
 * @property integer $telephone
 */
class Utilisateur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'utilisateur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'mdp', 'nom', 'prenom', 'mail', 'telephone'], 'required'],
            [['type'], 'string'],
            [['telephone'], 'integer'],
            [['mdp', 'nom', 'prenom', 'mail'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => 'Type',
            'mdp' => 'Mot De Passe',
            'nom' => 'Nom',
            'prenom' => 'Prénom',
            'mail' => 'Mail',
            'telephone' => 'Téléphone',
        ];
    }
}
