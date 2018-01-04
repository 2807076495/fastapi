<?php

namespace backend\models\userapply;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserApply;

/**
 * SearchUserApply represents the model behind the search form about `common\models\UserApply`.
 */
class SearchUserApply extends UserApply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'user_type', 'apply_user_type', 'operator', 'created_at', 'updated_at'], 'integer'],
            [['contact', 'idcard', 'idcard_front_img', 'idcard_reverse_img', 'company', 'license_img', 'other_licenses'], 'safe'],
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
        $query = UserApply::find();

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
            'user_type' => $this->user_type,
            'apply_user_type' => $this->apply_user_type,
            'operator' => $this->operator,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'idcard_front_img', $this->idcard_front_img])
            ->andFilterWhere(['like', 'idcard_reverse_img', $this->idcard_reverse_img])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'license_img', $this->license_img])
            ->andFilterWhere(['like', 'other_licenses', $this->other_licenses]);

        return $dataProvider;
    }
}
