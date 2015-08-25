<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Utilisateur;

/**
 * UtilisateurSearch represents the model behind the search form about `app\models\Utilisateur`.
 */
class UtilisateurSearch extends Utilisateur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'mdp', 'nom', 'prenom', 'mail'], 'safe'],
            [['telephone'], 'integer'],
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
        $query = Utilisateur::find();

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
            'telephone' => $this->telephone,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'mdp', $this->mdp])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'mail', $this->mail]);

        return $dataProvider;
    }
}
