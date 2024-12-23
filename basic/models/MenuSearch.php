<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\menu;

/**
 * MenuSearch represents the model behind the search form of `app\models\menu`.
 */
class MenuSearch extends menu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu'], 'integer'],
            [['nama_menu', 'harga_menu'], 'safe'],
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
        $query = menu::find();

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
            'id_menu' => $this->id_menu,
        ]);

        $query->andFilterWhere(['like', 'nama_menu', $this->nama_menu])
            ->andFilterWhere(['like', 'harga_menu', $this->harga_menu]);

        return $dataProvider;
    }
}
