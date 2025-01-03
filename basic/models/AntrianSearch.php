<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\antrian;

/**
 * AntrianSearch represents the model behind the search form of `app\models\antrian`.
 */
class AntrianSearch extends antrian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_antrian', 'no_antrian', 'id_pelanggan'], 'integer'],
            [['tanggal_antrian'], 'safe'],
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
        $query = antrian::find();

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
            'id_antrian' => $this->id_antrian,
            'tanggal_antrian' => $this->tanggal_antrian,
            'no_antrian' => $this->no_antrian,
            'id_pelanggan' => $this->id_pelanggan,
        ]);

        return $dataProvider;
    }
}
