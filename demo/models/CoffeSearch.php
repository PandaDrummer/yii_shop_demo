<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coffe;

/**
 * CoffeSearch represents the model behind the search form of `app\models\Coffe`.
 */
class CoffeSearch extends Coffe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'l_price', 'm_price', 'h_price', 'sourness', 'bitterness', 'roasting'], 'integer'],
            [['name', 'discription', 'img'], 'safe'],
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
        $query = Coffe::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'l_price' => $this->l_price,
            'm_price' => $this->m_price,
            'h_price' => $this->h_price,
            'sourness' => $this->sourness,
            'bitterness' => $this->bitterness,
            'roasting' => $this->roasting,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'discription', $this->discription])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
