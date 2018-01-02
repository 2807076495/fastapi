<?php

namespace backend\models\packages;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Packages;

/**
 * SearchPackages represents the model behind the search form about `common\models\Packages`.
 */
class SearchPackages extends Packages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'user_type', 'free_times', 'price', 'times'], 'integer'],
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
        $query = Packages::find();

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
            'product_id' => $this->product_id,
            'user_type' => $this->user_type,
            'free_times' => $this->free_times,
            'price' => $this->price,
            'times' => $this->times,
        ]);

        return $dataProvider;
    }
}
