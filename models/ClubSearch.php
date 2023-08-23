<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Club;

/**
 * ClubSearch represents the model behind the search form of `app\models\Club`.
 */
class ClubSearch extends Club
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_club'], 'integer'],
            [['name', 'position', 'height','date_birth', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Club::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id_club' => SORT_DESC,
                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_club' => $this->id_club,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'date_birth', $this->date_birth])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
