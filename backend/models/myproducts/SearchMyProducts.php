<?php

namespace backend\models\myproducts;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\myproducts\MyProducts;

/**
 * SearchMyProducts represents the model behind the search form about `common\models\myproducts\MyProducts`.
 */
class SearchMyProducts extends MyProducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'product_id', 'status', 'free_times', 'price', 'times', 'is_deleted', 'used_times', 'created_at', 'updated_at'], 'integer'],
            [['product_title'], 'safe'],
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
        $query = MyProducts::find();

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
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
            'status' => $this->status,
            'free_times' => $this->free_times,
            'price' => $this->price,
            'times' => $this->times,
            'is_deleted' => $this->is_deleted,
            'used_times' => $this->used_times,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'product_title', $this->product_title]);

        return $dataProvider;
    }
}
