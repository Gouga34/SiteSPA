<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Animal".
 *
 * @property integer $idAnimal
 * @property string $type
 * @property string $zone
 * @property string $etat
 * @property string $nom
 * @property string $sexe
 * @property integer $sterilise
 * @property string $dateNaissance
 * @property string $race
 * @property string $description
 * @property string $ententeChiens
 * @property string $ententeChats
 * @property string $ententeEnfants
 * @property integer $chienDuMois
 * @property integer $coupDeCoeur
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'zone', 'etat', 'nom', 'sexe', 'sterilise', 'dateNaissance', 'race', 'description'], 'required'],
            [['type', 'zone', 'etat', 'sexe', 'description'], 'string'],
            [['sterilise', 'chienDuMois', 'coupDeCoeur'], 'integer'],
            [['dateNaissance'], 'safe'],
            [['nom', 'race', 'ententeChiens', 'ententeChats', 'ententeEnfants'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAnimal' => 'Id Animal',
            'type' => 'Type',
            'zone' => 'Zone',
            'etat' => 'Etat',
            'nom' => 'Nom',
            'sexe' => 'Sexe',
            'sterilise' => 'Sterilise',
            'dateNaissance' => 'Date Naissance',
            'race' => 'Race',
            'description' => 'Description',
            'ententeChiens' => 'Entente Chiens',
            'ententeChats' => 'Entente Chats',
            'ententeEnfants' => 'Entente Enfants',
            'chienDuMois' => 'Chien Du Mois',
            'coupDeCoeur' => 'Coup De Coeur',
        ];
    }
}
