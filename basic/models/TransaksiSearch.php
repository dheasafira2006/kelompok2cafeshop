<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `app\models\transaksi`.
 */
class TransaksiSearch extends transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'jumlah', 'id_pesanan'], 'integer'],
            [['total_harga', 'tanggal'], 'safe'],
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
        $query = transaksi::find();

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
            'id_transaksi' => $this->id_transaksi,
            'jumlah' => $this->jumlah,
            'tanggal' => $this->tanggal,
            'id_pesanan' => $this->id_pesanan,
        ]);

        $query->andFilterWhere(['like', 'total_harga', $this->total_harga]);

        return $dataProvider;
    }
}
