<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\splr;

/**
 * splrSearch represents the model behind the search form of `app\models\splr`.
 */
class splrSearch extends splr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier', 'no_hp'], 'integer'],
            [['nama_supplier', 'alamat'], 'safe'],
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
        $query = splr::find();

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
            'id_supplier' => $this->id_supplier,
            'no_hp' => $this->no_hp,
        ]);

        $query->andFilterWhere(['like', 'nama_supplier', $this->nama_supplier])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
