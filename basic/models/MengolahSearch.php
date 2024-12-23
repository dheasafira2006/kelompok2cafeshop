<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\mengolah;

/**
 * MengolahSearch represents the model behind the search form of `app\models\mengolah`.
 */
class MengolahSearch extends mengolah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mengolah', 'jumlah', 'id_bahanbaku', 'id_menu', 'id_karyawan'], 'integer'],
            [['satuan'], 'safe'],
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
        $query = mengolah::find();

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
            'no_mengolah' => $this->no_mengolah,
            'jumlah' => $this->jumlah,
            'id_bahanbaku' => $this->id_bahanbaku,
            'id_menu' => $this->id_menu,
            'id_karyawan' => $this->id_karyawan,
        ]);

        $query->andFilterWhere(['like', 'satuan', $this->satuan]);

        return $dataProvider;
    }
}
