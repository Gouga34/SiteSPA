<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animal".
 *
 * @property integer $idanimal
 * @property string $type
 * @property string $zone
 * @property string $etat
 * @property string $nom
 * @property string $sexe
 * @property string $sterilise
 * @property string $dateNaissance
 * @property string $race
 * @property string $description
 * @property string $ententeChiens
 * @property string $ententeChats
 * @property string $ententeEnfants
 * @property integer $chienDuMois
 * @property integer $coupDeCoeur
 *
 * @property AnimalPhoto[] $animalPhotos
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idanimal', 'type', 'zone', 'etat', 'nom', 'sexe', 'sterilise', 'dateNaissance', 'race', 'description'], 'required'],
            [['idanimal', 'chienDuMois', 'coupDeCoeur'], 'integer'],
            [['type', 'zone', 'etat', 'sexe', 'sterilise', 'description'], 'string'],
            [['dateNaissance'], 'safe'],
            [['nom'], 'string', 'max' => 100],
            [['race', 'ententeChiens', 'ententeChats', 'ententeEnfants'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idanimal' => 'Idanimal',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimalPhotos()
    {
        return $this->hasMany(AnimalPhoto::className(), ['idanimal' => 'idanimal']);
    }
}
