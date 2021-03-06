<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Perdu;

/**
 * PerduSearch represents the model behind the search form about `app\models\Perdu`.
 */
class PerduSearch extends Perdu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idperdu', 'age'], 'integer'],
            [['type', 'nom', 'race', 'couleur', 'identification', 'lieu', 'date', 'photo', 'description', 'utilisateur'], 'safe'],
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
        $query = Perdu::find();

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
            'idperdu' => $this->idperdu,
            'age' => $this->age,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'race', $this->race])
            ->andFilterWhere(['like', 'couleur', $this->couleur])
            ->andFilterWhere(['like', 'identification', $this->identification])
            ->andFilterWhere(['like', 'lieu', $this->lieu])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'utilisateur', $this->utilisateur]);

        return $dataProvider;
    }
}
