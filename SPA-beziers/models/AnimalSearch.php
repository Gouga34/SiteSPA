<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Animal;

/**
 * AnimalSearch represents the model behind the search form about `app\models\Animal`.
 */
class AnimalSearch extends Animal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAnimal', 'sterilise', 'chienDuMois', 'coupDeCoeur'], 'integer'],
            [['type', 'zone', 'etat', 'nom', 'sexe', 'dateNaissance', 'race', 'description', 'ententeChiens', 'ententeChats', 'ententeEnfants'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Animal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idAnimal' => $this->idAnimal,
            'sterilise' => $this->sterilise,
            'dateNaissance' => $this->dateNaissance,
            'chienDuMois' => $this->chienDuMois,
            'coupDeCoeur' => $this->coupDeCoeur,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'zone', $this->zone])
            ->andFilterWhere(['like', 'etat', $this->etat])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'sexe', $this->sexe])
            ->andFilterWhere(['like', 'race', $this->race])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ententeChiens', $this->ententeChiens])
            ->andFilterWhere(['like', 'ententeChats', $this->ententeChats])
            ->andFilterWhere(['like', 'ententeEnfants', $this->ententeEnfants]);

        return $dataProvider;
    }
}
