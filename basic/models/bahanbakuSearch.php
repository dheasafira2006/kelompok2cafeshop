<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\bahanbaku;

/**
 * bahanbakuSearch represents the model behind the search form of `app\models\bahanbaku`.
 */
class bahanbakuSearch extends bahanbaku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bahanbaku', 'id_supplier', 'id_karyawan'], 'integer'],
            [['nama_bahan', 'satuan', 'harga_satuan'], 'safe'],
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
        $query = bahanbaku::find();

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
            'id_bahanbaku' => $this->id_bahanbaku,
            'id_supplier' => $this->id_supplier,
            'id_karyawan' => $this->id_karyawan,
        ]);

        $query->andFilterWhere(['like', 'nama_bahan', $this->nama_bahan])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'harga_satuan', $this->harga_satuan]);

        return $dataProvider;
    }
}
